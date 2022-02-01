<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\IngredienteCat;
use DB;

class IngredientesController extends Controller
{
    //
    public function consultar(Request $request){
        $ingredientecats = IngredienteCat::select(DB::raw("id, nome"))
        ->orderBy('nome', 'Asc')
        ->get();
        return view("painel.ingredientes.consultar", ["ingredientecats" => $ingredientecats]);
    }

    public function cadastro(){
        return view("painel.ingredientes.cadastro");
    }

    public function cadastrar(Request $request){
        $ingredientes = new Ingrediente;
        $ingredientes->nome = $request->nome;
        $ingredientes->cat_id = $request->cat_id;
        $ingredientes->marca_id = $request->marca_id;

        $ingredientes->save();

        toastr()->success("Ingrediente salvo com sucesso!");

        return redirect()->route("painel.ingredientes");

    }
}
