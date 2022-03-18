<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IngredienteCategoria;

class IngredienteCategoriasController extends Controller
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

    public function salvar(Request $request){
        if($request->ingrediente_categoria_id){
            $categoria = IngredienteCategoria::find($request->ingrediente_categoria_id);
        }else{
            $categoria = new IngredienteCategoria;
        }
        
        $categoria->nome = $request->nome;

        $categoria->save();

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
