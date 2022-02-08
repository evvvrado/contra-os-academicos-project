<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acessorio;
use App\Models\AcessorioCat;

class AcessoriosController extends Controller
{
    //
    public function consultar(Request $request){
        $acessoriocats = AcessorioCat::all();
        return view("painel.acessorios.consultar", ["acessoriocats" => $acessoriocats]);
    }

    public function cadastro(){
        return view("painel.acessorios.cadastro");
    }

    public function editar(Acessorio $acessorio){
        return view("painel.acessorios.editar", ["acessorio" => $acessorio]);
    }

    public function salvar(Request $request){
        Acessorio::where('id', $request->id)
        ->update(['nome' => $request->nome, 'cat_id' => $request->cat_id]);

        toastr()->success("Acessório editado com sucesso!");

        return redirect()->route("painel.acessorios");

    }

    public function cadastrar(Request $request){
        $acessorios = new Acessorio;
        $acessorios->nome = $request->nome;
        $acessorios->cat_id = $request->cat_id;
        $acessorios->marca_id = $request->marca_id;

        $acessorios->save();

        toastr()->success("Acessório salvo com sucesso!");

        return redirect()->route("painel.acessorios");

    }
}