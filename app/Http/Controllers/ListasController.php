<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lista;
use Illuminate\Support\Facades\Storage;

class ListasController extends Controller
{
    //
    public function consultar(){
        $listas = Lista::all();
        return view("painel.listas.consultar", ["listas" => $listas]);
    }

    public function cadastro(){
        return view("painel.listas.cadastro");
    }

    public function cadastrar(Request $request){
        $lista = new Lista;
        $lista->titulo = $request->titulo;
        $lista->conteudo = $request->conteudo;
        $lista->resumo = $request->resumo;
        $lista->usuario_id = $request->usuario;
        $lista->categoria_id = $request->categoria;
        
        $lista->save();

        if($request->file("banner")){
            Lista::whereId($lista->id)
            ->update(['banner' => 'admin/imagens/listas/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/listas/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
        }


        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.lista");
    }

    public function editar(Lista $lista){
        return view("painel.listas.edicao", ["lista" => $lista]);
    }

    public function salvar(Request $request, Lista $lista){
        $lista->titulo = $request->titulo;
        $lista->conteudo = $request->conteudo;
        $lista->resumo = $request->resumo;
        $lista->usuario_id = $request->usuario;
        $lista->categoria_id = $request->categoria;

        if($request->file("banner")){
            Storage::delete($lista->banner);

            Lista::whereId($lista->id)
            ->update(['banner' => 'admin/imagens/listas/'.$lista->id.'/'.$request->file('banner')->getClientOriginalName()]);

            $request->file("banner")->move(public_path('/admin/imagens/listas/'.$lista->id."/"), $request->file('banner')->getClientOriginalName());
        }

        $lista->save();

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.lista');
    }
}
