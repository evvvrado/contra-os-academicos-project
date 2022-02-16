<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Produto;
use App\Models\Lead;
use App\Models\Orcamento;
use App\Models\OrcamentoProduto;
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

    public function adicionar(Produto $produto)
    {
        if (!session()->get("cliente")) {
            session()->put(["produto_adicionar" => url()->current()]);
            return redirect()->route("site.orcamento.lista");
        } else {
            if (session()->get("produto_adicionar")) {
                session()->forget("produto_adicionar");
            }
            if (!session()->get("orcamento")) {
                $orcamento = new Orcamento();
                $orcamento->lead_id = session()->get("cliente")["id"];
                $orcamento->save();
                session()->put(["orcamento" => $orcamento->id]);
            } else {
                $orcamento = Orcamento::find(session()->get("orcamento"));
            }

            $orcamento = new Orcamento();
            if ($orcamento->produtos->where("orcamento_id", $orcamento->id)->count() > 0) {
                return redirect()->route("site.orcamento.lista");
            }

            $produto = new OrcamentoProduto;
            $produto->orcamento_id = $orcamento->id;
            $produto->save();

            return redirect()->route("site.orcamento.lista");
        }
    }

    public function remover(Orcamento $orcamento)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $produto = OrcamentoProduto::where(["orcamento_id", $orcamento->id]);
        $produto->delete();
        if ($orcamento->produtos->count() == 0) {
            $orcamento->delete();
            session()->forget("orcamento");
            return redirect()->route('site.index');
        }
        return redirect()->back();
    }
}
