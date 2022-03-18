<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\IngredienteCategoria;
use DB;

class IngredientesController extends Controller
{
    //
    public function consultar(Request $request){
        $categorias = IngredienteCategoria::orderBy('nome', 'Asc')
        ->where('ativo', true)
        ->get();
        return view("painel.ingredientes.consultar", ["categorias" => $categorias]);
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
        if($request->ingrediente_id){
            $ingrediente = Ingrediente::find($request->ingrediente_id);
        }else{
            $ingrediente = new Ingrediente;
        }
        $ingrediente->nome = $request->nome;
        $ingrediente->ingrediente_categoria_id = $request->ingrediente_categoria_id;
        $ingrediente->fornecedor = $request->fornecedor;
        $ingrediente->tel_fornecedor = $request->tel_fornecedor;
        $ingrediente->validade = $request->validade;

        $ingrediente->save();

        toastr()->success("Ingrediente salvo com sucesso!");

        return redirect()->route("painel.ingredientes");

    }
}
