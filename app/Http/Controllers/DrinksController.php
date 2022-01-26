<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Drink;
use App\Models\DrinksIngrediente;
use DB;

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

<<<<<<< HEAD
        $drink_id = Drink::select(DB::raw("id"))
        ->orderBy('id', 'Desc')
        ->limit('1')
        ->first();

        $drinks = new Drink;

        if($request->hasFile('imagem_1')){
            // unlink(public_path('/admin/images/usuarios/'.$usuario->imagem_1));
            $image = $request->file('imagem_1');
            $nome_1 = 'imagem_1.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/drinks/'.$drink_id->id."/");
            $image->move($destinationPath, $nome_1);
            $drinks->imagem_1 = $nome_1;
        }

        if($request->hasFile('imagem_2')){
            // unlink(public_path('/admin/images/drinks//'.$usuario->imagem_2));
            $image = $request->file('imagem_2');
            $nome_2 = 'imagem_2.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/drinks/'.$drink_id->id."/");
            $image->move($destinationPath, $nome_2);
            $drinks->imagem_2 = $nome_2;
        }

        Drink::where('id', $drink_id->id)
        ->update(['imagem_1' => $nome_1, 'imagem_2' => $nome_2]);

        $ingredientes = $request->ingredientes;

=======
        $drinks_ingrediente = new DrinksIngrediente;
        $drinks_ingrediente->drink_id = $request->ingrediente;
>>>>>>> fbbac25840928fed67affeb52c220d280884cb85
        foreach ($ingredientes as $ingrediente) {
            $drinksingrediente = new DrinksIngrediente;
            $drinksingrediente->drink_id = $drink_id->id;
            $drinksingrediente->ingrediente_id = $ingrediente;
            $drinksingrediente->save();
        }

        toastr()->success("Drink salvo com sucesso!");

        return redirect()->route("painel.drinks");

    }
}
