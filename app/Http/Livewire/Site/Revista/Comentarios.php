<?php

namespace App\Http\Livewire\Site\Revista;

use Livewire\Component;
use App\Models\RevistaComentario;
use App\Models\Revista;
use App\Models\RevistaComentarioRegistros;

class Comentarios extends Component
{
    public $comentarios;
    public Revista $revista;
    public $conteudo;

    public $porpagina = 3;   

    public function comentar() {
        if($this->conteudo != "") {
            $comentario = new RevistaComentario;
            $comentario->conteudo = $this->conteudo;
            $comentario->revista_id = $this->revista->id;
            $comentario->usuario_site_id = session()->get('usuario_site')['id'];
            $comentario->save();
    
            $this->dispatchBrowserEvent( 'toastr:success', [
                'message' =>  'Comentário publicado',
            ]);
        } else {
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Escreva algo para comentar',
            ]);
        }
        $this->conteudo = "";
    }

    public function curtir() {
        $verifica = RevistaComentarioRegistros::whereRevistaId($this->revista->id)
        ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
        ->first();
        if($verifica) {
            $verifica->delete();
            $comentario = new RevistaComentarioRegistros;
            $comentario->revista_id = $this->revista->id;
            $comentario->usuario_site_id = session()->get('usuario_site')['id'];
            $comentario->acao = 'like';
            $comentario->save();
        } else {
            $comentario = new RevistaComentarioRegistros;
            $comentario->revista_id = $this->revista->id;
            $comentario->usuario_site_id = session()->get('usuario_site')['id'];
            $comentario->acao = 'like';
            $comentario->save();
        }
    }

    public function descurtir() {
        $verifica = RevistaComentarioRegistros::whereRevistaId($this->revista->id)
        ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
        ->first();
        if($verifica) {
            $verifica->delete();
            $comentario = new RevistaComentarioRegistros;
            $comentario->revista_id = $this->revista->id;
            $comentario->usuario_site_id = session()->get('usuario_site')['id'];
            $comentario->acao = 'deslike';
            $comentario->save();
        } else {
            $comentario = new RevistaComentarioRegistros;
            $comentario->revista_id = $this->revista->id;
            $comentario->usuario_site_id = session()->get('usuario_site')['id'];
            $comentario->acao = 'deslike';
            $comentario->save();
        }
    }

    public function carregarMais()
    {
        $this->porpagina = $this->porpagina + 3;
    }

    public function render()
    {
        $this->comentarios = RevistaComentario::where('revista_id', $this->revista->id)
        ->where('status', 1)
        ->take($this->porpagina)
        ->orderBy('id', 'DESC')
        ->get();

        return view('livewire.site.revista.comentarios');
    }
}
