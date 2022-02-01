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
