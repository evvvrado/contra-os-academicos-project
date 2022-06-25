<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Revista;
use App\Models\RevistaCurtir;

class RevistaCurtirAcao extends Component
{
    public Revista $revista;
    public int $likes;

    public function mount(Revista $revista)
    {
        $this->revista = $revista;
        $likes_qtd = RevistaCurtir::whereRevistaId($revista->id)
        ->get();
        $this->likes = $likes_qtd->count();
    }

    public function dar_like_revista($revista_id)
    {
        if(session()->get("usuario_site")){
            $verificar = RevistaCurtir::whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereRevistaId($revista_id)
            ->first();
            if($verificar){
                $verificar->delete();

                $this->likes--;

                $this->dispatchBrowserEvent( 'toastr:success', [
                    'message' =>  'Você descurtiu essa publicação',
                ]);
            } else {
                $revista = new RevistaCurtir;
                $revista->usuario_site_id = session()->get('usuario_site')['id'];
                $revista->revista_id = $revista_id;
                $revista->save();

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
        return view('livewire.revista-curtir-acao');
    }
}
