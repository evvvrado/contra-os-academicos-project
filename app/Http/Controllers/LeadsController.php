<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

class LeadsController extends Controller
{
    //
    public function consultar(Request $request){
        $leads = Lead::all();
        return view("painel.leads.consultar", ["leads" => $leads]);
    }

}
