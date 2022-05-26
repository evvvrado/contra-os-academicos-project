<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
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
        $blog = new Blog;
        $blog->titulo = $request->titulo;
        $blog->conteudo = $request->conteudo;
        $blog->referencias = $request->referencias;
        $blog->usuario_id = $request->usuario;
        $blog->exclusivo = $request->exclusivo;
        $blog->categoria_id = $request->categoria;
        $blog->autor_id = $request->autor;
        $blog->tradutor_id = $request->tradutor;
        
        $blog->save();

        if($request->file("banner")){
            Blog::whereId($blog->id)
            ->update(['banner' => 'admin/imagens/blogs/'.$blog->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/blogs/'.$blog->id."/"), $request->file('banner')->getClientOriginalName());
        }


        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.blog");
    }

    public function editar(Blog $blog){
        return view("painel.blogs.edicao", ["blog" => $blog]);
    }

    public function salvar(Request $request, Blog $blog){
        $blog->titulo = $request->titulo;
        $blog->conteudo = $request->conteudo;
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
