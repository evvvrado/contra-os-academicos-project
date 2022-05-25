<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setor;

class SetorsController extends Controller
{
    //
    public function consultar(Request $request){
        $setores = Setor::all();
        return view("painel.setores.consultar", ["setores" => $setores]);
    }

    public function cadastro(){
        return view("painel.setores.cadastro");
    }

    //
    public function cadastrar(Request $request){
        $tarefa_atv = new Setor;
        $tarefa_atv->setor = $request->setor;
        $tarefa_atv->save();

        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route('painel.setores');
    }
}