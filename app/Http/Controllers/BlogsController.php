<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogVisu;
use Illuminate\Support\Facades\Storage;

class BlogsController extends Controller
{
    //
    public function consultar(){
        $blogs = Blog::all();
        return view("painel.blogs.consultar", ["blogs" => $blogs]);
    }

    public function cadastro(){
        return view("painel.blogs.cadastro");
    }

    public function cadastrar(Request $request){
        if($request->tipo_pub == "publicar") {
            $blog = new Blog;
            $blog->titulo = $request->titulo;
            $blog->conteudo = $request->conteudo;
            $blog->resumo = $request->resumo;
            $blog->referencias = $request->referencias;
            $blog->usuario_id = $request->usuario;
            $blog->exclusivo = $request->exclusivo;
            $blog->categoria_id = $request->categoria;
            $blog->autor_id = $request->autor;
            $blog->tradutor_id = $request->tradutor;
            $blog->status = 1;
            $blog->save();
            if($request->file("banner")){
                Blog::whereId($blog->id)
                ->update(['banner' => 'admin/imagens/blogs/'.$blog->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/blogs/'.$blog->id."/"), $request->file('banner')->getClientOriginalName());
            }

            toastr()->success("Cadastro realizado com sucesso!");
            return redirect()->route("painel.blog");
        } elseif($request->tipo_pub == "rascunho") {
            $blog = new Blog;
            $blog->titulo = $request->titulo;
            $blog->conteudo = $request->conteudo;
            $blog->resumo = $request->resumo;
            $blog->referencias = $request->referencias;
            $blog->usuario_id = $request->usuario;
            $blog->exclusivo = $request->exclusivo;
            $blog->categoria_id = $request->categoria;
            $blog->autor_id = $request->autor;
            $blog->tradutor_id = $request->tradutor;
            $blog->status = 2;
            $blog->save();
            if($request->file("banner")){
                Blog::whereId($blog->id)
                ->update(['banner' => 'admin/imagens/blogs/'.$blog->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/blogs/'.$blog->id."/"), $request->file('banner')->getClientOriginalName());
            }

            toastr()->success("Cadastro realizado com sucesso!");
            return redirect()->route("painel.blog");
        } elseif($request->tipo_pub == "visualizar") {
            $blog = new BlogVisu;
            $blog->titulo = $request->titulo;
            $blog->conteudo = $request->conteudo;
            $blog->resumo = $request->resumo;
            $blog->referencias = $request->referencias;
            $blog->usuario_id = $request->usuario;
            $blog->exclusivo = $request->exclusivo;
            $blog->categoria_id = $request->categoria;
            $blog->autor_id = $request->autor;
            $blog->tradutor_id = $request->tradutor;
            $blog->status = 1;
            $blog->save();
            if($request->file("banner")){
                BlogVisu::whereId($blog->id)
                ->update(['banner' => 'admin/imagens/blogs_visu/'.$blog->id.'/'.$request->file('banner')->getClientOriginalName()]);

                $request->file("banner")->move(public_path('/admin/imagens/blogs_visu/'.$blog->id."/"), $request->file('banner')->getClientOriginalName());
            }

            return redirect()->route("painel.blog.visualizar", ['blog' => $blog]);
        }
    }

    public function editar(Blog $blog){
        return view("painel.blogs.edicao", ["blog" => $blog]);
    }

    public function salvar(Request $request, Blog $blog){
        $blog->titulo = $request->titulo;
        $blog->conteudo = $request->conteudo;
        $blog->resumo = $request->resumo;
        $blog->referencias = $request->referencias;
        $blog->usuario_id = $request->usuario;
        $blog->categoria_id = $request->categoria;
        $blog->exclusivo = $request->exclusivo;
        $blog->autor_id = $request->autor;
        $blog->tradutor_id = $request->tradutor;

        if($request->file("banner")){
            Storage::delete($blog->banner);

            Blog::whereId($blog->id)
            ->update(['banner' => 'admin/imagens/blogs/'.$blog->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/blogs/'.$blog->id."/"), $request->file('banner')->getClientOriginalName());
        }

        $blog->save();

        toastr()->success("Cadastro atualizdo com sucesso!");
        return redirect()->route('painel.blog');
    }
}
