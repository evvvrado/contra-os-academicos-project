<?php

namespace App\Http\Livewire\Site\Revista;

use Livewire\Component;
use App\Models\RevistaComentario;
use App\Models\Revista;
use App\Models\RevistaComentarioRegistro;

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

    public function curtir($comentario_id) {
        if(isset(session()->get('usuario_site')['id'])) {
            $verifica = RevistaComentarioRegistro::whereRevistaId($this->revista->id)
            ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereRevistaComentarioId($comentario_id)
            ->whereAcao('like')
            ->orWhere('acao', 'deslike')
            ->first();
            if($verifica) {
                if($verifica->acao == 'like'){
                    $verifica->delete();
                }
                else {
                    $verifica->acao = 'like';
                    $verifica->save();
                }
            } else {
                $comentario = new RevistaComentarioRegistro;
                $comentario->revista_comentario_id = $comentario_id;
                $comentario->revista_id = $this->revista->id;
                $comentario->usuario_site_id = session()->get('usuario_site')['id'];
                $comentario->acao = 'like';
                $comentario->save();
            }
        } else {
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Você precisa estar logado',
            ]);
        }
    }

    public function descurtir($comentario_id) {
        if(isset(session()->get('usuario_site')['id'])) {
            $verifica = RevistaComentarioRegistro::whereRevistaId($this->revista->id)
            ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereRevistaComentarioId($comentario_id)
            ->whereAcao('like')
            ->orWhere('acao', 'deslike')
            ->first();
            if($verifica) {
                if($verifica->acao == 'deslike'){
                    $verifica->delete();
                }
                else {
                    $verifica->acao = 'deslike';
                    $verifica->save();
                }
            } else {
                $comentario = new RevistaComentarioRegistro;
                $comentario->revista_comentario_id = $comentario_id;
                $comentario->revista_id = $this->revista->id;
                $comentario->usuario_site_id = session()->get('usuario_site')['id'];
                $comentario->acao = 'deslike';
                $comentario->save();
            }
        } else {
            $this->dispatchBrowserEvent( 'toastr:error', [
                'message' =>  'Você precisa estar logado',
            ]);
        }
    }

    public function denunciar($comentario_id) {
        $verifica = RevistaComentarioRegistro::whereRevistaId($this->revista->id)
        ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
        ->whereRevistaComentarioId($comentario_id)
        ->whereAcao('denuncia')
        ->first();
        if($verifica) {
            $verifica->delete();
        } else {
            $comentario = new RevistaComentarioRegistro;
            $comentario->revista_comentario_id = $comentario_id;
            $comentario->revista_id = $this->revista->id;
            $comentario->usuario_site_id = session()->get('usuario_site')['id'];
            $comentario->acao = 'denuncia';
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
