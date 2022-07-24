<?php

namespace App\Http\Livewire\Site\Lista;

use Livewire\Component;
use App\Models\Lista;
use App\Models\ListaFavorito;

class Favoritar extends Component
{
    public Lista $lista;
    public $cor_fav;

    public function mount() {
        if(isset(session()->get('usuario_site')['id'])) {
            $verifica = ListaFavorito::whereListaId($this->lista->id)
            ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->first();

            if($verifica) {
                $this->cor_fav = "filter: invert(99%) sepia(20%) saturate(7000%) hue-rotate(5deg);";
            } else {
                $this->cor_fav = "filter: invert(89%) sepia(0%) saturate(500%) hue-rotate(0deg);";
            }
        }
    }

    public function favoritar(){
        if(isset(session()->get('usuario_site')['id'])) {
            $verifica = ListaFavorito::whereListaId($this->lista->id)
            ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->first();
            if($verifica) {
                $verifica->delete();
                $this->cor_fav = "filter: invert(89%) sepia(0%) saturate(500%) hue-rotate(0deg);";
            } else {
                $comentario = new ListaFavorito;
                $comentario->lista_id = $this->lista->id;
                $comentario->usuario_site_id = session()->get('usuario_site')['id'];
                $comentario->save();
                $this->cor_fav = "filter: invert(99%) sepia(20%) saturate(7000%) hue-rotate(5deg);";
            }
        } else {
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Você precisa estar logado',
            ]);
        }
    }

    public function render()
    {
        return view('livewire.site.lista.favoritar');
    }
}
