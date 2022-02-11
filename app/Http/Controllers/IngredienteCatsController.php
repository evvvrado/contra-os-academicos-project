<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IngredienteCat;

class IngredienteCatsController extends Controller
{
    public function cadastro(){
        return view("painel.ingredientecats.cadastro");
    }

    public function editar(Request $request){
        IngredienteCat::where('id', $request->id)
        ->update(['nome' => $request->nome]);

        toastr()->success("Categoria editada com sucesso!");

        return redirect()->route("painel.ingredientes");
    }

    public function cadastrar(Request $request){
        $ingredientecats = new IngredienteCat;
        $ingredientecats->nome = $request->nome;

        $ingredientecats->save();

        toastr()->success("Categoria salva com sucesso!");

        return redirect()->route("painel.ingredientes");

    }

    public function status(IngredienteCat $ingredientecat) {
        if($ingredientecat->status == "Ativo") {
            IngredienteCat::where('id', $ingredientecat->id)
            ->update(['status' => 'Inativo']);
        } else {
            IngredienteCat::where('id', $ingredientecat->id)
            ->update(['status' => 'Ativo']);
        }

        return redirect()->route("painel.ingredientes");
    }
}
