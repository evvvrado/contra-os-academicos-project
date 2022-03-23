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
use App\Classes\Orcamento as UtilOrcamento;
use DB;

class OrcamentoController extends Controller
{
    public function orcamentoID()
    {
        return view("site.orcamento.id");
    }
    public function evento()
    {
        if (!session()->get("lead")) {
            return redirect()->route("site.index");
        }
        return view("site.orcamento.evento");
    }
    public function informacoes($evento)
    {
        if (!session()->get("lead")) {
            return redirect()->route("site.index");
        }

        switch ($evento) {
            case ('casamento'):
                $tipo = 0;
                break;
            case ('corporativo'):
                $tipo = 1;
                break;
            case ('aniversario'):
                $tipo = 2;
                break;
        }

        $orcamento = new Orcamento;
        $orcamento->cliente_id = session()->get("lead")["id"];
        $orcamento->tipo = $tipo;
        $orcamento->save();

        session()->put(["orcamento" => $orcamento->id]);

        return view("site.orcamento.info");
    }

    public function cadastrar_etapa1(Request $request)
    {
        if (!session()->get("lead")) {
            return redirect()->route("site.index");
        }
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $orcamento->cep = $request->cep;
        $orcamento->data = $request->data;
        $orcamento->duracao = $request->horas;
        $orcamento->outras_bebidas = $request->alcool;
        $orcamento->qtd_pessoas = $request->pessoas;
        $orcamento->save();

        $parametro = Parametro::first();
        // $qtd_drinks = round(($orcamento->pessoas / $parametro->tipos_drinks_numero) * $parametro->tipos_drinks_convidados);
        // session()->put(["qtd_tipos_drinks" => $qtd_drinks]);

        return redirect()->route("site.orcamento.lista");
    }

    public function lista(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $produtos = Produto::whereNotIn("id", $orcamento->produtos->pluck("id"))->get();
        // $valores = json_decode($parametro->valor_km_rodado, true);
        // dd($valores);
        // if ($valores) {
        $ingredientes_filtro = Ingrediente::whereIn('id', [1, 2])
            ->get();
        // } else {
        // $ingredientes_filtro = Ingrediente::all();
        // }

        // dd($ingredientes_filtro);

        return view("site.orcamento.lista", ["orcamento" => $orcamento, "produtos" => $produtos, "ingredientes_filtro" => $ingredientes_filtro]);
    }

    public function confirmacao()
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $produtos = $orcamento->produtos;

        if ($produtos->count() > 0) {
            return view("site.orcamento.confirmar", ["produtos" => $produtos]);
        } else {
            return redirect()->route("site.orcamento.lista")->with("erro", "Você deve escolher pelo menos um drink");
        }
    }
    public function carrinho()
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $orcamento_produtos = $orcamento->orcamento_produtos;

        return view("site.orcamento.carrinho", ["orcamento_produtos" => $orcamento_produtos, "orcamento" => $orcamento]);
    }

    public function orcamentoENCERRAR()
    {
        $servicos = Servico::where('incluso', 1)->get();
        $orcamento = Orcamento::find(session()->get("orcamento"));

        return view("site.orcamento.encerrar", ["servicos" => $servicos, "orcamento" => $orcamento]);
    }

    public function salvar_servicos_inclusos(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $dados = $request->all();
        foreach ($dados["servicos"] as $servico_id => $infos) {
            $servico = Servico::find($servico_id);
            if (!$orcamento->servicos->contains($servico)) {
                $orcamento_servico = new OrcamentoServico;
                $orcamento_servico->orcamento_id = $orcamento->id;
                $orcamento_servico->servico_id = $servico_id;
                if (isset($infos["check_minimo"])) {
                    $orcamento_servico->qtd = $infos["minimo"];
                } else {
                    $orcamento_servico->qtd = $infos["ideal"];
                }
                $orcamento_servico->valor = $orcamento_servico->qtd * $servico->valor;
                $orcamento_servico->save();
            }
        }

        return redirect()->route("site.orcamento.encerrar_2");
    }

    public function orcamentoENCERRAR2(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $servicos = Servico::where('incluso', 0)->get();
        return view("site.orcamento.encerrar_2", ["servicos" => $servicos, "orcamento" => $orcamento]);
    }

    public function salvarorcamento(Request $request)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));

        $dados = $request->all();
        foreach ($dados["servicos"] as $servico_id => $infos) {
            if ($infos["quantidade"] > 0) {
                $servico = Servico::find($servico_id);
                if (!$orcamento->servicos->contains($servico)) {
                    $orcamento_servico = new OrcamentoServico;
                    $orcamento_servico->orcamento_id = $orcamento->id;
                    $orcamento_servico->servico_id = $servico_id;
                    $orcamento_servico->qtd = $infos["quantidade"];
                    $orcamento_servico->valor = $orcamento_servico->qtd * $servico->valor;
                    $orcamento_servico->save();
                }
            }
        }

        $orcamento->finalizado = true;
        $orcamento->save();

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

        return redirect()->route("site.orcamento.finalizar");

        // $noticias = Noticia::select(DB::raw("id, preview, titulo, publicacao"))
        // ->orderBy('id', 'Desc')
        // ->limit('3')
        // ->get();

        // $produtos = Produto::all();

        // $publicidade = Anuncio::first();

        // return view("site.index", ["produtos" => $produtos, "noticias" => $noticias, "publicidade" => $publicidade]);
    }

    public function finalizar()
    {
        return view("site.orcamento.finalizado");
    }

    public function primeiro_acesso()
    {
        $cliente = Cliente::find(session()->get("lead")["id"]);
        if ($cliente->senha) {
            return redirect()->route("minha-area.cliente-pedidos");
        } else {
            return view("site.area-do-cliente.nova_senha");
        }
    }

    public function escolher_produto(Produto $produto)
    {
        $orcamento = Orcamento::find(session()->get("orcamento"));
        $verifica_produto = $orcamento->produtos->contains($produto);

        $parametro = Parametro::first();

        if (!$verifica_produto) {
            $qtd_drinks = Round(($orcamento->qtd_pessoas * $parametro->drinks_numero) / $parametro->drinks_convidados);

            $produto_insercao = new OrcamentoProduto;
            $produto_insercao->orcamento_id = $orcamento->id;
            $produto_insercao->produto_id = $produto->id;
            $produto_insercao->qtd = $qtd_drinks;
            $produto_insercao->save();

            $ingredientes = $produto->ingredientes;
            foreach ($ingredientes as $ingrediente) {
                $marca = $ingrediente->marcas->where("padrao", true)->first();
                if ($marca) {
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
                if ($marca) {
                    $produto_acessorio_insercao = new OrcamentoProdutoAcessorio;
                    $produto_acessorio_insercao->orcamento_produto_id = $produto_insercao->id;
                    $produto_acessorio_insercao->acessorio_id = $acessorio->id;
                    $produto_acessorio_insercao->marca_id = $marca->id;
                    $produto_acessorio_insercao->save();
                }
            }
        } else {
            $produto = $orcamento->orcamento_produtos->where("produto_id", $produto->id)->first();;
            $produto->delete();
        }
    }

    public function remover_produtos()
    {

        $orcamentoprodutos = OrcamentoProduto::where('orcamento_id', session()->get("orcamento"))->get();

        foreach ($orcamentoprodutos as $orcamentoproduto) {
            $orcamentoproduto->delete();
        }
    }
}
