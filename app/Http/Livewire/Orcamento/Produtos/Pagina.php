<?php

namespace App\Http\Livewire\Orcamento\Produtos;

use Livewire\Component;
use App\Models\Parametro;
use App\Models\Orcamento;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutoIngrediente;
use App\Models\OrcamentoProdutoAcessorio;
use App\Models\Produto;
use App\Models\Ingrediente;
use App\Classes\Orcamento as FuncoesOrcamento;

class Pagina extends Component
{

    public $parametros;
    public $orcamento;
    public $produtos;
    public $ingredientes_filtro;

    protected $listeners = ["atualizaPagina", "refresh" => '$refresh'];

    public function mount(){
        $this->parametros = Parametro::first();
        $this->orcamento = Orcamento::find(session()->get("orcamento"));
        $this->produtos = Produto::whereNotIn("id", $this->orcamento->produtos->pluck("id"))->get();
        $this->ingredientes_filtro = Ingrediente::where("ingrediente_categoria_id", $this->parametros->categoria_filtro)->get();
    }

    public function atualizaPagina(){
        $this->produtos = Produto::whereNotIn("id", $this->orcamento->produtos->pluck("id"))->get();
        $this->emit("refresh");
    }

    public function selecionar(Produto $produto){
        $verifica_produto = $this->orcamento->produtos->contains($produto);

        if (!$verifica_produto) {
            $qtd_drinks = FuncoesOrcamento::qtdDrinks($this->orcamento->qtd_pessoas);
            // $qtd_drinks = Round(($orcamento->qtd_pessoas * $parametro->drinks_numero) / $parametro->drinks_convidados);

            $produto_insercao = new OrcamentoProduto;
            $produto_insercao->orcamento_id = $this->orcamento->id;
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

                    // CALCULA VALOR DO PRODUTO
                    // Multiplica a quantidade do ingrediente em uma unidade do mesmo pela quantidade de drinks. Divide o resultado pela quantidade existente em uma embalagem
                    // do ingrediente, descobrindo quantas embalagens serão usadas. Arredonda o resultado pra cima, pois mesmo que use apenas uma parte de uma embalgem,
                    // ela deve ser considerada inteira como gasta. Após isso multiplica pelo valor da embalagem pra obter o resultado.
                    // $produto_insercao->valor += ceil(($marca->quantidade_ingrediente_unidade * $produto_insercao->qtd) / $marca->quantidade_embalagem) * $marca->valor_embalagem;
                    // $produto_insercao->save();
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

                    // CALCULA VALOR DO PRODUTO
                    // Multiplica a quantidade do ingrediente em uma unidade do mesmo pela quantidade de drinks. Divide o resultado pela quantidade existente em uma embalagem
                    // do ingrediente, descobrindo quantas embalagens serão usadas. Arredonda o resultado pra cima, pois mesmo que use apenas uma parte de uma embalgem,
                    // ela deve ser considerada inteira como gasta. Após isso multiplica pelo valor da embalagem pra obter o resultado.
                    // $produto_insercao->valor += ceil(($marca->quantidade_ingrediente_unidade * $produto_insercao->qtd) / $marca->quantidade_embalagem) * $marca->valor_embalagem;
                    // $produto_insercao->save();
                }
            }
        } else {
            $orcamento_produto = $this->orcamento->orcamento_produtos->where("produto_id", $produto->id)->first();
            $orcamento_produto->delete();
        }

        $this->emit("atualizaPagina");
    }

    public function render()
    {
        return view('livewire.orcamento.produtos.pagina');
    }
}
