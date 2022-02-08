<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servico;

class ServicosController extends Controller
{
    //
    public function consultar(){
        $servicos = Servico::all();
        return view("painel.servicos.consultar", ["servicos" => $servicos]);
    }

    //
    public function cadastro(){
        return view("painel.servicos.cadastro");
    }

    //
    public function cadastrar(Request $request){
        $servico = new Servico;
        $servico->nome = $request->nome;
        $servico->descricao = $request->descricao;
        $valor = str_replace(",", ".", $request->valor);
        $servico->valor = $valor;
        $servico->save();

        toastr()->success("Serviço inserido com sucesso!");

        return redirect()->route('painel.servicos');
    }
}
