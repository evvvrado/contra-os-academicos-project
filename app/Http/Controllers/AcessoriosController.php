<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acessorio;
use App\Models\AcessorioCategoria;

class AcessoriosController extends Controller
{
    //
    public function consultar(Request $request){
        $categorias = AcessorioCategoria::where('ativo', true)->get();
        return view("painel.acessorios.consultar", ["categorias" => $categorias]);
    }

    public function cadastro(){
        $categorias = AcessorioCategoria::where("ativo", true)->get();
        if($categorias->count() == 0){
            toastr()->error("Cadastre uma categoria antes de cadastrar um acessório.");
            return redirect()->back();
        }
        return view("painel.acessorios.cadastro", ["categorias" => $categorias]);
    }

    public function editar(Acessorio $acessorio){
        return view("painel.acessorios.editar", ["acessorio" => $acessorio]);
    }

    public function deletar(Acessorio $acessorio){
        $acessorio->delete();

        toastr()->success("Acessório deletado com sucesso!");

        return redirect()->back();
    }

    public function salvar(Request $request){
        if($request->acessorio_id){
            $acessorio = Acessorio::find($request->acessorio_id);
        }else{
            $acessorio = new Acessorio;
        }
        $acessorio->nome = $request->nome;
        $acessorio->acessorio_categoria_id = $request->acessorio_categoria_id;
        $acessorio->fornecedor = $request->fornecedor;
        $acessorio->tel_fornecedor = $request->tel_fornecedor;
        $acessorio->validade = $request->validade;

        $acessorio->save();

        toastr()->success("Acessório salvo com sucesso!");

        return redirect()->route("painel.acessorios");

    }
}
