<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\OrcamentoServico;

class OrcamentosController extends Controller
{
    //

    //
    public function consultar(Request $request){
        $orcamentos = Orcamento::all();
        return view("painel.orcamentos.consultar", ["orcamentos" => $orcamentos]);
    }

    public function visualizar(Orcamento $orcamento){
        return view("painel.orcamentos.visualizar", ["orcamento" => $orcamento]);
    }
}
