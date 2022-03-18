<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcessorioCategoria;

class AcessorioCategoriasController extends Controller
{
    public function salvar(Request $request){
        if($request->acessorio_categoria_id){
            $categoria = AcessorioCategoria::find($request->acessorio_categoria_id);
        }else{
            $categoria = new AcessorioCategoria;
        }
        
        $categoria->nome = $request->nome;

        $categoria->save();

        toastr()->success("Categoria salva com sucesso!");

        return redirect()->route("painel.acessorios");

    }

    public function editar(Request $request){
        AcessorioCat::where('id', $request->id)
        ->update(['nome' => $request->nome]);

        toastr()->success("Categoria editada com sucesso!");

        return redirect()->route("painel.acessorios");
    }

    public function status(AcessorioCat $acessoriocat) {
        if($acessoriocat->status == "Ativo") {
            AcessorioCat::where('id', $acessoriocat->id)
            ->update(['status' => 'Inativo']);
        } else {
            AcessorioCat::where('id', $acessoriocat->id)
            ->update(['status' => 'Ativo']);
        }

        return redirect()->route("painel.acessorios");
    }
}