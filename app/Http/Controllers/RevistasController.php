<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Revista;
use Illuminate\Support\Facades\Storage;

class RevistasController extends Controller
{
    //
    public function consultar(){
        $revistas = Revista::all();
        return view("painel.revistas.consultar", ["revistas" => $revistas]);
    }

    public function cadastro(){
        return view("painel.revistas.cadastro");
    }

    public function cadastrar(Request $request){
        $revista = new Revista;
        $revista->titulo = $request->titulo;
        $revista->conteudo = $request->conteudo;
        $revista->resumo = $request->resumo;
        $revista->usuario_id = $request->usuario;
        $revista->autor_id = $request->autor;
        $revista->categoria_id = $request->categoria;
        
        $revista->save();

        if($request->file("banner")){
            Revista::whereId($revista->id)
            ->update(['banner' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
        }


        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.revista");
    }

    public function editar(Revista $revista){
        return view("painel.revistas.edicao", ["revista" => $revista]);
    }

    public function salvar(Request $request, Revista $revista){
        $revista->titulo = $request->titulo;
        $revista->conteudo = $request->conteudo;
        $revista->resumo = $request->resumo;
        $revista->usuario_id = $request->usuario;
        $revista->autor_id = $request->autor;
        $revista->categoria_id = $request->categoria;

        if($request->file("banner")){
            Storage::delete($revista->banner);

            Revista::whereId($revista->id)
            ->update(['banner' => 'admin/imagens/revistas/'.$revista->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/revistas/'.$revista->id."/"), $request->file('banner')->getClientOriginalName());
        }

        $revista->save();

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.revista');
    }
}
