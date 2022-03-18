<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Orcamento;
use App\Models\OrcamentoServico;
use App\Models\OrcamentoProduto;

class LeadsController extends Controller
{
    //
    public function consultar(Request $request){
        $clientes = Cliente::all();
        return view("painel.leads.consultar", ["clientes" => $clientes]);
    }

    //
    public function consultar_orcamentos(Request $request){

        $leads= Orcamento::all();

        // $leads = Lead::where('orcamento', true)->get();
        return view("painel.leads.consultar", ["leads" => $leads]);
    }

    //
    public function orcamentoDetalhe(Orcamento $orcamento){
        $lead = Lead::where('id', $orcamento->lead_id)->first();

        $servicos_sim = OrcamentoServico::where('orcamento_id', $orcamento->id)
        ->join('servicos', 'servico_id', 'servicos.id')
        ->where('incluso', true)
        ->get();

        $servicos_nao = OrcamentoServico::where('orcamento_id', $orcamento->id)
        ->join('servicos', 'servico_id', 'servicos.id')
        ->where('incluso', false)
        ->get();

        $orcamentoprodutos = $orcamento->orcamento_produtos;

        return view("painel.leads.consultar_orcamentos", ["orcamento" => $orcamento, "lead" => $lead, "servicos_sim" => $servicos_sim, "servicos_nao" => $servicos_nao, "orcamentoprodutos" => $orcamentoprodutos]);
    }

    public function cadastrar(Request $request){
        $cliente = Cliente::where("email", $request->email)->first();
        if($cliente){
            $cliente->nome = $request->nome;
            $cliente->telefone = $request->telefone;
            $cliente->save();
        }else{
            $cliente = new Cliente;
            $cliente->nome = $request->nome;
            $cliente->telefone = $request->telefone;
            $cliente->email = $request->email;
            $cliente->save();
        }
        session()->put(["lead" => $cliente->toArray()]);
        return redirect()->route("site.orcamento.evento");
    }
}
