<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orcamento;

class OrcamentosController extends Controller
{
    //

    //
    public function consultar(Request $request){
        $orcamentos = Orcamento::all();
        return view("painel.orcamentos.consultar", ["orcamentos" => $orcamentos]);
    }

    public function visualizar(Orcamento $orcamento){
        $servicos_sim = $orcamento->servicos->where("incluso", true);
        $servicos_nao = $orcamento->servicos->where("incluso", false);
        $orcamentoprodutos = $orcamento->orcamento_produtos;
        return view("painel.orcamentos.visualizar", ["orcamento" => $orcamento, "servicos_sim" => $servicos_sim, "servicos_nao" => $servicos_nao, "orcamentoprodutos" => $orcamentoprodutos]);
    }
}
