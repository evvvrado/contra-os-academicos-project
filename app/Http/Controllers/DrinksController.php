<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\DrinksIngrediente;

class DrinksController extends Controller
{
    //
    public function consultar(Request $request){
        $drinks = Drink::all();
        return view("painel.drinks.consultar", ["drinks" => $drinks]);
    }
    
    public function cadastro(){
        return view("painel.drinks.cadastro");
    }

    public function cadastrar(Request $request){
        $drinks = new Drink;
        $drinks->nome = $request->nome;
        $drinks->save();

        $drinks_ingrediente = new DrinksIngrediente;
        $drinks_ingrediente->drink_id = $request->ingrediente;
        foreach ($ingredientes as $ingrediente) {
            $valor = $valor * 2;
        }
        $drinks_ingrediente->drink_id = $request->nome;
        $drinks_ingrediente->ingrediente_id = $request->nome;

        toastr()->success("Drink salvo com sucesso!");

        return redirect()->route("painel.drinks");

    }
}
