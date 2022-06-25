<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lista;
use App\Models\ListaCurtir;

class ListaCurtirAcao extends Component
{
    public Lista $lista;
    public int $likes;

    public function mount(Lista $lista)
    {
        $this->lista = $lista;
        $likes_qtd = ListaCurtir::whereListaId($lista->id)
        ->get();
        $this->likes = $likes_qtd->count();
    }

    public function dar_like_lista($lista_id)
    {
        if(session()->get("usuario_site")){
            $verificar = ListaCurtir::whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereListaId($lista_id)
            ->first();
            if($verificar){
                $verificar->delete();

                $this->likes--;

                $this->dispatchBrowserEvent( 'toastr:success', [
                    'message' =>  'Você descurtiu essa publicação',
                ]);
            } else {
                $lista = new ListaCurtir;
                $lista->usuario_site_id = session()->get('usuario_site')['id'];
                $lista->lista_id = $lista_id;
                $lista->save();

                $this->likes++;

                $this->dispatchBrowserEvent( 'toastr:success', [
                    'message' =>  'Você curtiu essa publicação',
                ]);
            }
        }else{
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Você precisa estar logado',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.lista-curtir-acao');
    }
}
