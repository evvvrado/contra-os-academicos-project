<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Produto;
use App\Models\Lead;
use DB;

class OrcamentoController extends Controller
{
    public function orcamentoID()
    {
        return view("site.orcamento.id");
    }
    public function orcamentoEVENTO(Request $request)
    {
        $lead = new Lead;
        $lead->nome = $request->nome;
        $lead->email = $request->email;
        $lead->telefone = $request->telefone;

        $lead->save();

        $lead = Lead::select(DB::raw("id"))
        ->orderBy('id', 'Desc')
        ->limit('1')
        ->first();

        return view("site.orcamento.evento", ["lead" => $lead]);
    }
    public function orcamentoINFO(Request $request)
    {
        Lead::where('id', $request->lead)
        ->update(['tipo' => $request->tipo]);

        return view("site.orcamento.info");
    }
    public function orcamentoLISTA(Request $request)
    {
        $parteData = explode("-", $request->data);    
        $dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];

        Lead::where('id', $request->lead)
        ->update(['cep' => $request->cep, 'data' => $request->dataInvertida, 'duracao' => $request->horas, 'outras_bebidas' => $request->alcool, 'qtd_pessoas' => $request->pessoas]);

        $produtos = Produto::all();

        return view("site.orcamento.lista", ["produtos" => $produtos]);
    }
    public function orcamentoCONFIRM()
    {
        return view("site.orcamento.confirmar");
    }
    public function orcamentoCAR()
    {
        return view("site.orcamento.carrinho");
    }
    public function orcamentoENCERRAR()
    {
        return view("site.orcamento.encerrar");
    }
}
