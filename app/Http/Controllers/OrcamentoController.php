<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Produto;
use App\Models\Cliente;
use App\Models\ProdutoIngrediente;
use App\Models\ProdutoAcessorio;
use App\Models\Orcamento;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutoIngrediente;
use App\Models\OrcamentoProdutoAcessorio;
use App\Models\Parametro;
use App\Models\Ingrediente;
use App\Models\Servico;
use App\Models\MarcaIngrediente;
use App\Models\MarcaAcessorio;
use App\Models\OrcamentoServico;
use App\Models\Noticia;
use App\Models\Anuncio;
use DB;

class OrcamentoController extends Controller
{
    public function orcamentoID()
    {
        return view("site.orcamento.id");
    }
    public function evento()
    {
        if(session()->get("lead")){
            $cliente = Cliente::where("email", session()->get("lead")["email"])->first();
        }else if(session()->get("cliente")){
            $cliente = Cliente::where("email", session()->get("cliente")["email"])->first();
        }
        return view("site.orcamento.evento", ["lead" => $cliente]);
    }
    public function informacoes($evento)
    {
        if(!session()->get("lead")){
            return redirect()->route("site.index");
        }

        switch($evento){
            case('casamento'):
                $tipo = 0;
                break;
            case('corporativo'):
                $tipo = 1;
                break;
            case('aniversario'):
                $tipo = 2;
                break;
        }

        return view("site.orcamento.info", ["tipo" => $tipo]);
    }

    public function cadastrar_etapa1(Request $request)
    {
        if(!session()->get("lead")){
            return redirect()->route("site.index");
        }
        $orcamento = new Orcamento();
        $orcamento->tipo = $request->tipo;
        $orcamento->cliente_id = session()->get("lead")["id"];
        $orcamento->cep = $request->cep;
        $orcamento->data = $request->data;
        $orcamento->duracao = $request->horas;
        $orcamento->outras_bebidas = $request->alcool;
        $orcamento->qtd_pessoas = $request->pessoas;
        $orcamento->save();
        session()->put(["orcamento" => $orcamento->toArray()]);

        $parametro = Parametro::first(); 
        $qtd_drinks = round(($orcamento->pessoas / $parametro->tipos_drinks_numero) * $parametro->tipos_drinks_convidados);
        session()->put(["qtd_tipos_drinks" => $qtd_drinks]);

        return redirect()->route("site.orcamento.lista");
    }

    public function lista(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento")["id"]);
        if ($orcamento->produtos) {
            $produtos_escolhidos = $orcamento->produtos;
        } else {
            $produtos_escolhidos = "";
        }
        $produtos = Produto::whereNotIn("id", $orcamento->produtos->pluck("id"))->get();
        // dd($produtos);

        $parametro = Parametro::first();
        // $valores = json_decode($parametro->valor_km_rodado, true);
        // dd($valores);
        // if ($valores) {
            $ingredientes_filtro = Ingrediente::whereIn('id', [1, 2])
                ->get();
        // } else {
            // $ingredientes_filtro = Ingrediente::all();
        // }

        // dd($ingredientes_filtro);

        return view("site.orcamento.lista", ["produtos" => $produtos, "produtos_escolhidos" => $produtos_escolhidos, "ingredientes_filtro" => $ingredientes_filtro]);
    }
    public function confirmacao()
    {
        $orcamento = Orcamento::find(session()->get("orcamento")["id"]);
        $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();

        if($produtos->count() > 0) {
            return view("site.orcamento.confirmar", ["produtos" => $produtos]);
        }
        else 
        {
            return redirect()->route("site.orcamento.lista")->with("erro", "Você deve escolher pelo menos um drink");
        }
    }
    public function carrinho()
    {
        $orcamento = Orcamento::find(session()->get("orcamento")["id"]);
        $orcamento_produtos = $orcamento->orcamento_produtos;
        // dd($produtos);
        // $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();

        return view("site.orcamento.carrinho", ["orcamento_produtos" => $orcamento_produtos, "orcamento" => $orcamento]);
    }
    public function orcamentoENCERRAR()
    {
        $servicos = Servico::where('incluso', 1)->get();

        return view("site.orcamento.encerrar", ["servicos" => $servicos]);
    }

    public function orcamentoENCERRAR2(Request $request)
    {
        $servicos = Servico::where('incluso', 1)->get();
        $orcamento = Orcamento::find(session()->get("orcamento"));

        foreach($servicos as $servico) {
            $orcamento_servicos = new OrcamentoServico;
            $orcamento_servicos->orcamento_id = $orcamento->id;
            $orcamento_servicos->servico_id = $servico->id;
            $orcamento_servicos->qtd = 1;
            $orcamento_servicos->valor = $servico->valor;

            $orcamento_servicos->save();
        }

        $servicos = Servico::where('incluso', 0)->get();

        return view("site.orcamento.encerrar_2", ["servicos" => $servicos]);
    }

    public function salvarorcamento(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));

        $servicos = Servico::where('incluso', true)->get();
        foreach($servicos as $servico) {
            $orcamento_servicos = new OrcamentoServico;
            $orcamento_servicos->orcamento_id = $orcamento->id;
            $orcamento_servicos->servico_id = $servico->id;
            $orcamento_servicos->qtd = 1;
            $orcamento_servicos->valor = $servico->valor;

            $orcamento_servicos->save();
        }

        $dados = $request->all();
        foreach($dados as $id => $valor){
            if($valor > 0 && $id != "_token") {
                $orcamento_servicos = new OrcamentoServico;
                $orcamento_servicos->orcamento_id = $orcamento->id;
                $orcamento_servicos->servico_id = $id;
                $orcamento_servicos->qtd = $valor;
                $valor_servico = Servico::where('id', $id)->first();
                $orcamento_servicos->valor = $valor_servico->valor * $valor;

                $orcamento_servicos->save();
            }
        }

        $total_orcamentos = Orcamento::where('lead_id', $orcamento->lead_id)->get();
        if($total_orcamentos->count() == 1) {
            session()->put(["primeiro_login" => 'Sim']);
        }

        // $produto_info = Produto::where('id', $produto->produto_id)->first();

        // $ingredientes = OrcamentoProdutosIngredientes::where('orcamentoproduto_id', $produto->id)
        // ->join('ingredientes', 'ingrediente_id', 'ingredientes.id')
        // ->get();

        // @foreach ($ingredientes as $ingrediente)
        //     $marcas = MarcaIngrediente::where('ingrediente_id', $ingrediente->id)
        //     ->join('marcas', 'marca_id', 'marcas.id')
        //     ->get();

        //     @foreach ($marcas as $marca)
        //         $parametro = Parametro::where('id', 4)->first();
        //         $qtd_total_drinks = Round(($orcamento->qtd_pessoas * $parametro->valor_2) / $parametro->valor_1);
        //         $qtd_unica = $qtd_total_drinks / $produtos->count();

        //         $total = $total + $marca->valor * $qtd_unica;
        //     @endforeach
        // @endforeach        

        return redirect()->route("minha-area.cliente");

        // $noticias = Noticia::select(DB::raw("id, preview, titulo, publicacao"))
        // ->orderBy('id', 'Desc')
        // ->limit('3')
        // ->get();

        // $produtos = Produto::all();

        // $publicidade = Anuncio::first();

        // return view("site.index", ["produtos" => $produtos, "noticias" => $noticias, "publicidade" => $publicidade]);
    }

    public function escolher_produto(Produto $produto) 
    {
        $verifica_produto = OrcamentoProduto::where('orcamento_id', session()->get("orcamento")["id"])
        ->where('produto_id', $produto->id)->get();

        $parametro = Parametro::first();

        if($verifica_produto->count() < 1) {
            $orcamento = Orcamento::find(session()->get("orcamento")["id"]);

            $qtd_drinks = Round(($orcamento->qtd_pessoas * $parametro->drinks_numero) / $parametro->drinks_convidados);

            $produto_insercao = new OrcamentoProduto;
            $produto_insercao->orcamento_id = $orcamento->id;
            $produto_insercao->produto_id = $produto->id;
            $produto_insercao->qtd = $qtd_drinks;
            $produto_insercao->save();

            $ingredientes = $produto->ingredientes;
            \Log::debug($ingredientes);
            foreach ($ingredientes as $ingrediente) {
                $marca = $ingrediente->marcas->where("padrao", true)->first();
                if($marca){
                    $produto_ingrediente_insercao = new OrcamentoProdutoIngrediente;
                    $produto_ingrediente_insercao->orcamento_produto_id = $produto_insercao->id;
                    $produto_ingrediente_insercao->ingrediente_id = $ingrediente->id;
                    $produto_ingrediente_insercao->marca_id = $marca->id;
                    $produto_ingrediente_insercao->save();
                }
            }

            $acessorios = $produto->acessorios;
            foreach ($acessorios as $acessorio) {
                $marca = $acessorio->marcas->where("padrao", true)->first();
                if($marca){
                    $produto_acessorio_insercao = new OrcamentoProdutoAcessorio;
                    $produto_acessorio_insercao->orcamento_produto_id = $produto_insercao->id;
                    $produto_acessorio_insercao->acessorio_id = $acessorio->id;
                    $produto_acessorio_insercao->marca_id = $marca->id;
                    $produto_acessorio_insercao->save();
                }
            }
        } else {
            $orcamento = Orcamento::find(session()->get("orcamento")["id"]);
            $produto = OrcamentoProduto::where("orcamento_id", $orcamento->id)
                ->where("produto_id", $produto->id);
            $produto->delete();
        }
    }

    public function remover_produtos() {

        $orcamentoprodutos = OrcamentoProduto::where('orcamento_id', session()->get("orcamento"))->get();

        foreach($orcamentoprodutos as $orcamentoproduto) {
            $orcamentoproduto->delete();
        }
    } 
}
