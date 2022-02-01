<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcessorioCat;

class AcessorioCatsController extends Controller
{
    public function cadastrar(Request $request){
        $acessoriocat = new AcessorioCat;
        $acessoriocat->nome = $request->nome;

        $acessoriocat->save();

        toastr()->success("produto salvo com sucesso!");

        return redirect()->route("painel.acessorios");

    }

    public function editar(Request $request){
        AcessorioCat::where('id', $request->id)
        ->update(['nome' => $request->nome]);

        toastr()->success("Categoria editada com sucesso!");

        return redirect()->route("painel.acessorios");
    }
}
