<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
use App\Models\Orcamento;

class LeadsController extends Controller
{
    //
    public function consultar_leads(Request $request){
        $leads = Lead::where('orcamento', false)->get();
        return view("painel.leads.consultar", ["leads" => $leads]);
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
        return view("painel.leads.consultar_orcamentos", ["orcamento" => $orcamento, "lead" => $lead]);
    }
}
