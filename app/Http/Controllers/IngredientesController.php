<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\IngredienteCat;

class IngredientesController extends Controller
{
    //
    public function consultar(Request $request){
        $ingredientecats = IngredienteCat::all();
        return view("painel.ingredientes.consultar", ["ingredientecats" => $ingredientecats]);
    }

    public function cadastro(){
        return view("painel.ingredientes.cadastro");
    }

    public function cadastrar(Request $request){
        $ingredientes = new Ingrediente;
        $ingredientes->nome = $request->nome;
        $ingredientes->cat_id = $request->cat_id;

        $ingredientes->save();

        toastr()->success("Ingrediente salvo com sucesso!");

        return redirect()->route("painel.ingredientes");

    }
}
