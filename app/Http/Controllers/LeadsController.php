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
        $leads = Lead::where('orcamento', true)->get();
        return view("painel.leads.consultar", ["leads" => $leads]);
    }

    //
    public function listar_orcamentos(Lead $lead){
        $orcamentos = Orcamento::where('lead_id', $lead->id)->get();
        $lead = Lead::where('id', $lead->id)->first();
        return view("painel.leads.consultar_orcamentos", ["orcamentos" => $orcamentos, "lead" => $lead]);
    }
}
