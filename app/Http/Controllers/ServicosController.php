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
    
    public function editar(Servico $servico){
        return view("painel.servicos.editar", ["servico" => $servico]);
    }

    public function deletar(Servico $servico){
        $servico->delete();

        toastr()->success("Serviço deletado com sucesso!");

        return redirect()->back();
    }

    //
    public function salvar(Request $request){
        if($request->servico_id){
            $servico = Servico::find($request->servico_id);
        }else{
            $servico = new Servico;
        }
        $servico->nome = $request->nome;
        $servico->descricao = $request->descricao;
        $servico->valor = $request->valor;
        $servico->incluso = $request->incluso;
        $servico->save();

        toastr()->success("Serviço salvo com sucesso!");

        return redirect()->route('painel.servicos');
    }
}
