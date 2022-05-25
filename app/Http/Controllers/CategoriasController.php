<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriasController extends Controller
{
    public function consultar(){
        $categorias = Categoria::all();
        return view("painel.categorias.consultar", ["categorias" => $categorias]);
    }

    public function cadastro(){
        return view("painel.categorias.cadastro");
    }

    public function cadastrar(Request $request){
        $categoria = new Categoria;
        $categoria->nome = $request->nome;
        
        $categoria->save();

        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.categorias");
    }

    public function editar(Categoria $categoria){
        return view("painel.categorias.edicao", ["categoria" => $categoria]);
    }

    public function salvar(Request $request, Categoria $categoria){
        $categoria->nome = $request->nome;

        $categoria->save();

        toastr()->success("Cadastro atualizado com sucesso!");
        return redirect()->route('painel.categorias');
    }
}
