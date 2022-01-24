<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IngredienteCat;

class IngredienteCatsController extends Controller
{
    //
    public function consultar(Request $request){
        $ingredientecats = IngredienteCat::all();
        return view("painel.ingredientecats.consultar", ["ingredientecats" => $ingredientecats]);
    }

    public function cadastro(){
        return view("painel.ingredientecats.cadastro");
    }

    public function cadastrar(Request $request){
        $ingredientecats = new IngredienteCat;
        $ingredientecats->nome = $request->nome;

        $ingredientecats->save();

        toastr()->success("Ingrediente salvo com sucesso!");

        return redirect()->route("painel.ingredientecats");

    }
}
