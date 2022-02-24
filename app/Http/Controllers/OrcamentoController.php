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
use App\Models\MarcaIngrediente;
use DB;

class OrcamentoController extends Controller
{
    public function orcamentoID()
    {
        return view("site.orcamento.id");
    }
    public function orcamentoEVENTO(Request $request)
    {
        $verifica_lead = Lead::where("email", $request->email)->first();
        if(!$verifica_lead){
            $lead = new Lead;
            $lead->nome = $request->nome;
            $lead->email = $request->email;
            $lead->telefone = $request->telefone;

            $lead->save();

            session()->put(["cliente" => $lead->toArray()]);

            return view("site.orcamento.evento", ["lead" => $lead]);
        } else {
            toastr()->success("Faça login para continuar!");

            session()->put(["email_lead" => $verifica_lead->email]);

            return redirect()->route("site.acessar-cliente");
        }
        
    }
    public function orcamentoINFO(Request $request)
    {
        session()->put(["lead_id" => $request->id]);
        session()->put(["tipo_evento" => $request->tipo]);

        return view("site.orcamento.info");
    }

    public function orcamentoCadastroLead(Request $request) {
        $orcamento = new Orcamento();
        $orcamento->tipo = session()->get("tipo_evento");
        $orcamento->lead_id = session()->get("cliente")["id"];
        $orcamento->cep = $request->cep;
        $parteData = explode("-", $request->data);    
        $dataInvertida = $parteData[0] . "-" . $parteData[1] . "-" . $parteData[2];
        $orcamento->data = $dataInvertida;
        $orcamento->duracao = $request->horas;
        $orcamento->outras_bebidas = $request->alcool;
        $orcamento->qtd_pessoas = $request->pessoas;
        $orcamento->save();
        session()->put(["orcamento" => $orcamento->id]);

        Lead::where('id', $orcamento->lead_id)
        ->update(['orcamento' => true]);

        return redirect()->route("site.orcamento.lista");
    }

    public function orcamentoLISTA(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        if($orcamento->produtos){ 
            $produtos_escolhidos = $orcamento->produtos;
        } else {
            $produtos_escolhidos = "";
        }
        $produtos = Produto::whereNotIn("id", $orcamento->produtos->pluck("id"))->get();
        // dd($produtos);
    
        $parametro = Parametro::where('id', 5)->first();
        $valores = json_decode($parametro->valor_1, true);
        // dd($valores);
        if ($valores) {
            $ingredientes_filtro = Ingrediente::whereIn('ingredientes.id', $valores)
            ->leftJoin('marcas', 'marcas.id', '=', 'ingredientes.marca_id')
            ->get();
        } else {
            $ingredientes_filtro = Ingrediente::all();
        }
        
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
        $produtos = OrcamentoProduto::where('orcamento_id', $orcamento->id)->get();
        // dd($produtos);
        // $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();

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

        $orcamento = Orcamento::find(session()->get("orcamento"));

        // if ($orcamento->produtos->where("orcamento_id", $orcamento->id)->count() > 0) {
        //     return redirect()->route("site.orcamento.lista");
        // }

        $produto_insercao = new OrcamentoProduto;
        $produto_insercao->orcamento_id = $orcamento->id;
        $produto_insercao->produto_id = $produto->id;
        $produto_insercao->save();

        $ingredientes = ProdutosIngrediente::where("produto_id", $produto->id)->get();
        foreach($ingredientes as $ingrediente) {

            $marcas = MarcaIngrediente::where("ingrediente_id", $ingrediente->id)
            ->where("padrao", "Sim")
            ->join('marcas', 'marca_id', 'marcas.id')
            ->first();

            $produto_ingrediente_insercao = new OrcamentoProdutosIngredientes;
            $produto_ingrediente_insercao->orcamentoproduto_id = $produto_insercao->id;
            $produto_ingrediente_insercao->ingrediente_id = $ingrediente->ingrediente_id;
            $produto_ingrediente_insercao->marca_id = $marcas->id;
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
        // if ($orcamento->produtos->count() == 0) {
        //     $orcamento->delete();
        //     session()->forget("orcamento");
        //     return redirect()->route("site.orcamento.lista");
        // }
        return redirect()->route("site.orcamento.lista");
    }
}
