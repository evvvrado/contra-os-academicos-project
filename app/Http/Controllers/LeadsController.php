<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

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

}
