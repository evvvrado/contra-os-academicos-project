<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogComentario;

class BlogComentariosController extends Controller
{
    public function comentar(Blog $blog, Request $request)
    {
        $comentario = new BlogComentario;
        $comentario->conteudo = $request->conteudo;
        $comentario->blog_id = $blog->id;
        $comentario->usuario_site_id = session()->get('usuario_site')['id'];
        $comentario->save();

        return redirect()->route("site.blog_detalhe", ["blog" => $blog]);
    }
}
