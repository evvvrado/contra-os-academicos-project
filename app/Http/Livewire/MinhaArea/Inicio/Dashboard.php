<?php

namespace App\Http\Livewire\MinhaArea\Inicio;

use App\Models\BlogFavorito;
use App\Models\ListaFavorito;
use App\Models\RevistaFavorito;
use App\Models\UsuarioSiteUltimosAcesso;
use Livewire\Component;

class Dashboard extends Component
{

    public $blog_favoritos;
    public $lista_favoritos;
    public $revista_favoritos;
    public $favoritos;

    public $ultimas_leituras_bloco;
    public $ultimas_leituras;

    public function favoritos() {
        $this->blog_favoritos = BlogFavorito::whereUsuarioSiteId(session()->get('usuario_site')['id'])->get();
        $this->lista_favoritos = ListaFavorito::whereUsuarioSiteId(session()->get('usuario_site')['id'])->get();
        $this->revista_favoritos = RevistaFavorito::whereUsuarioSiteId(session()->get('usuario_site')['id'])->get();

        $this->favoritos = "ok";
        $this->ultimas_leituras = "";
    }

    public function ultimas_leituras(){
        $this->ultimas_leituras_bloco = UsuarioSiteUltimosAcesso::whereUsuarioSiteId(session()->get('usuario_site')['id'])
        ->orderBy('id', 'DESC')
        ->get();

        $this->favoritos = "";
        $this->ultimas_leituras = "ok";
    }

    public function render()
    {
        return view('livewire.minha-area.inicio.dashboard');
    }
}
