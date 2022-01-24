<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;

class CategoriasController extends Controller
{
    //
    public function consultar(){
        $categorias = Categoria::all();
        return view("painel.categorias.consultar", ["categorias" => $categorias]);
    }

    // public function cadastrar(Request $request){
    //     $request->validate([
    //         'nome' => 'unique:categorias,nome',
    //     ]);

    //     $categoria = new Categoria;
    //     $categoria->nome = $request->nome;
    //     $categoria->slug = Str::slug($request->nome);
    //     $categoria->save();

    //     Log::channel('categorias')->info('<b>CADASTRANDO CATEGORIA</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> cadastrou a categoria <b>' . $categoria->nome . '</b>');

    //     toastr()->success("Categoria salva com sucesso!");
    //     return redirect()->back();
    // }

    
    public function cadastrar(){
        return view("painel.categorias.cadastro");
    }
    
    public function editar(){
        return view("painel.categorias.editar");
    }


    public function salvar(Request $request, Categoria $categoria){
        $request->validate([
            'nome' => 'unique:categorias,nome,'.$categoria->id,
        ]);

        $old = $categoria->getOriginal();
        
        $categoria->nome = $request->nome;
        $categoria->slug = Str::slug($request->nome);
        $categoria->save();

        foreach($categoria->getChanges() as $campo => $valor){
            if(!in_array($campo, ["updated_at", "slug"])){
                Log::channel('categorias')->info('<b>EDITANDO CATEGORIA #'.$categoria->id.'</b>: O usuario <b>' . session()->get("usuario")["usuario"] . '</b> alterou o valor do campo <b>' . $campo . '</b> de <b>' . $old[$campo] . '</b> para <b>' . $valor . '</b>');
            }
        }

        toastr()->success("Categoria salva com sucesso!");
        return redirect()->back();
    }

    public function deletar(Categoria $categoria){
        $categoria->delete();
        toastr()->success("Categoria removida com sucesso!");
        return redirect()->back();
    }
}
