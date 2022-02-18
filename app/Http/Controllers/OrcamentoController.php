<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Produto;
use App\Models\Lead;
use App\Models\ProdutosIngrediente;
use App\Models\Orcamento;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutosIngredientes;
use App\Models\Parametro;
use App\Models\Ingrediente;
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
        if($request->data){
            $parteData = explode("-", $request->data);    
            $dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];

            Lead::where('id', $request->lead)
            ->update(['cep' => $request->cep, 'data' => $request->dataInvertida, 'duracao' => $request->horas, 'outras_bebidas' => $request->alcool, 'qtd_pessoas' => $request->pessoas]);
        }

        if (session()->get("orcamento")) {
            $orcamento = Orcamento::find(session()->get("orcamento"));
            if($orcamento) {
                if($orcamento->produtos){ 
                    $produtos_escolhidos = $orcamento->produtos;
                }
                $produtos = Produto::whereNotIn("id", $orcamento->produtos->pluck("id"))->get();
                // dd($produtos);
            } else {
                $produtos_escolhidos = "";
                $produtos = Produto::all();
            }
        }else {
            $produtos_escolhidos = "";
            $produtos = Produto::all();
        }

        $parametro = Parametro::where('id', 5)->first();
        $valores = json_decode($parametro->valor_1, true);
        dd($valores);
        
        $ingredientes_filtro = Ingrediente::whereIn('ingredientes.id', $valores)
        ->leftJoin('marcas', 'marcas.id', '=', 'ingredientes.marca_id')
        ->get();
        // dd($ingredientes_filtro);

        return view("site.orcamento.lista", ["produtos" => $produtos, "produtos_escolhidos" => $produtos_escolhidos, "ingredientes_filtro" => $ingredientes_filtro]);
    }
    public function orcamentoCONFIRM()
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();

        return view("site.orcamento.confirmar", ["produtos" => $produtos]);
    }
    public function orcamentoCAR()
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();

        return view("site.orcamento.carrinho", ["produtos" => $produtos]);
    }
    public function orcamentoENCERRAR()
    {
        return view("site.orcamento.encerrar");
    }

    public function adicionar(Produto $produto)
    {
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

        // if ($orcamento->produtos->where("orcamento_id", $orcamento->id)->count() > 0) {
        //     return redirect()->route("site.orcamento.lista");
        // }

        $produto_insercao = new OrcamentoProduto;
        $produto_insercao->orcamento_id = $orcamento->id;
        $produto_insercao->produto_id = $produto->id;
        $produto_insercao->save();

        $ingredientes = ProdutosIngrediente::where("produto_id", $produto->id)->get();
        foreach($ingredientes as $ingrediente) {
            $produto_ingrediente_insercao = new OrcamentoProdutosIngredientes;
            $produto_ingrediente_insercao->orcamentoproduto_id = $produto_insercao->id;
            $produto_ingrediente_insercao->ingrediente_id = $ingrediente->id;
            $produto_ingrediente_insercao->save();
        }

        return redirect()->route("site.orcamento.lista");

        // if (!session()->get("cliente")) {
        //     session()->put(["produto_adicionar" => url()->current()]);
        //     return redirect()->route("site.orcamento.lista");
        // } else {
        //     if (session()->get("produto_adicionar")) {
        //         session()->forget("produto_adicionar");
        //     }

        //     if (!session()->get("orcamento")) {
        //         $orcamento = new Orcamento();
        //         $orcamento->lead_id = session()->get("cliente")["id"];
        //         $orcamento->save();
        //         session()->put(["orcamento" => $orcamento->id]);
        //     } else {
        //         $orcamento = Orcamento::find(session()->get("orcamento"));
        //     }

        //     if ($orcamento->produtos->where("orcamento_id", $orcamento->id)->count() > 0) {
        //         return redirect()->route("site.orcamento.lista");
        //     }

        //     $produto_insercao = new OrcamentoProduto;
        //     $produto_insercao->orcamento_id = $orcamento->id;
        //     $produto_insercao->produto_id = $produto->id;
        //     $produto_insercao->save();

        //     return redirect()->route("site.orcamento.lista");
        // }
    }

    public function remover(Produto $produto)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $produto = OrcamentoProduto::where("orcamento_id",$orcamento->id)
                                    ->where("produto_id", $produto->id);
        $produto->delete();
        if ($orcamento->produtos->count() == 0) {
            $orcamento->delete();
            session()->forget("orcamento");
            return redirect()->route("site.orcamento.lista");
        }
        return redirect()->route("site.orcamento.lista");
    }
}
