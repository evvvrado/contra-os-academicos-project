<?php

namespace App\Http\Livewire\Site\Blog;

use Livewire\Component;
use App\Models\BlogComentario;
use App\Models\Blog;
use App\Models\BlogComentarioRegistro;

class Comentarios extends Component
{
    public $comentarios;
    public Blog $blog;
    public $conteudo;

    public $porpagina = 3;   

    public function comentar() {
        if($this->conteudo != "") {
            $comentario = new BlogComentario;
            $comentario->conteudo = $this->conteudo;
            $comentario->blog_id = $this->blog->id;
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
            $verifica = BlogComentarioRegistro::whereBlogId($this->blog->id)
            ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereBlogComentarioId($comentario_id)
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
                $comentario = new BlogComentarioRegistro;
                $comentario->blog_comentario_id = $comentario_id;
                $comentario->blog_id = $this->blog->id;
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
            $verifica = BlogComentarioRegistro::whereBlogId($this->blog->id)
            ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
            ->whereBlogComentarioId($comentario_id)
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
                $comentario = new BlogComentarioRegistro;
                $comentario->blog_comentario_id = $comentario_id;
                $comentario->blog_id = $this->blog->id;
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
        $verifica = BlogComentarioRegistro::whereBlogId($this->blog->id)
        ->whereUsuarioSiteId(session()->get('usuario_site')['id'])
        ->whereBlogComentarioId($comentario_id)
        ->whereAcao('denuncia')
        ->first();
        if($verifica) {
            $verifica->delete();
        } else {
            $comentario = new BlogComentarioRegistro;
            $comentario->blog_comentario_id = $comentario_id;
            $comentario->blog_id = $this->blog->id;
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
        $this->comentarios = BlogComentario::where('blog_id', $this->blog->id)
        ->where('status', 1)
        ->take($this->porpagina)
        ->orderBy('id', 'DESC')
        ->get();

        return view('livewire.site.blog.comentarios');
    }
}
