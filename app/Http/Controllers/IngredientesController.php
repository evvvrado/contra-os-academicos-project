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
        $ingredientecats = IngredienteCat::select(DB::raw("id, nome, status"))
        ->orderBy('nome', 'Asc')
        ->where('status', 'Ativo')
        ->get();
        return view("painel.ingredientes.consultar", ["ingredientecats" => $ingredientecats]);
    }

    public function cadastro(){
        return view("painel.ingredientes.cadastro");
    }

    public function editar(Ingrediente $ingrediente){
        return view("painel.ingredientes.editar", ["ingrediente" => $ingrediente]);
    }

    public function deletar(Ingrediente $ingrediente){
        $ingrediente->delete();

        toastr()->success("Ingrediente deletado com sucesso!");

        return redirect()->back();
    }

    public function salvar(Request $request){
        Ingrediente::where('id', $request->id)
        ->update(['nome' => $request->nome, 'cat_id' => $request->cat_id, 'fornecedor' => $request->fornecedor, 'tel_fornecedor' => $request->tel_fornecedor, 'validade' => $request->validade]);

        toastr()->success("Ingrediente editado com sucesso!");

        return redirect()->route("painel.ingredientes");

    }

    public function cadastrar(Request $request){
        $ingredientes = new Ingrediente;
        $ingredientes->nome = $request->nome;
        $ingredientes->cat_id = $request->cat_id;
        $ingredientes->fornecedor = $request->fornecedor;
        $ingredientes->tel_fornecedor = $request->tel_fornecedor;
        $ingredientes->validade = $request->validade;

        $ingredientes->save();

        toastr()->success("Ingrediente salvo com sucesso!");

        return redirect()->route("painel.ingredientes");

    }
}
