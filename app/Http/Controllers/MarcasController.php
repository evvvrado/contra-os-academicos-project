<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use DB;

class MarcasController extends Controller
{
    //
    public function consultar(Request $request){
        $marcas = Marca::all();
        return view("painel.marcas.consultar", ["marcas" => $marcas]);
    }

    //
    public function cadastro(Request $request){
        return view("painel.marcas.cadastro");
    }

    public function cadastrar(Request $request){
        $marca = new Marca;
        $marca->nome = $request->nome;
        $marca->padrao = $request->padrao;
        $marca->preco = $request->preco;
        $marca->unidade_medida = $request->unidade_medida;
        $marca->qtd = $request->qtd;
        $marca->save();

        $marca_id = Marca::select(DB::raw("id"))
        ->orderBy('id', 'Desc')
        ->limit('1')
        ->first();

        $marca = new Marca;

        if($request->hasFile('imagem')){
            // unlink(public_path('/admin/images/usuarios/'.$usuario->imagem));
            $image = $request->file('imagem');
            $nome_1 = 'imagem.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/marcas/'.$marca_id->id."/");
            $image->move($destinationPath, $nome_1);
            $marca->imagem = $nome_1;
        }

        Marca::where('id', $marca_id->id)
        ->update(['imagem' => '/admin/images/marcas/'.$marca_id->id."/".$nome_1]);

        toastr()->success("Marca salva com sucesso!");

        return redirect()->route("painel.marcas");

    }
}
