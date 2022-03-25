<?php

namespace App\Http\Livewire\Orcamentos\Visualizar;

use Livewire\Component;
use App\Models\Produto;
use App\Models\Orcamento;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutoIngrediente;
use App\Models\OrcamentoProdutoAcessorio;

class ModalAdicionaProduto extends Component
{

    public $produtos;
    public $produto_id;
    public $produto;
    public $orcamento;
    public $quantidade;
    public $marcas_ingredientes = [];
    public $marcas_acessorios = [];

    protected $listeners = ["carregaModalAdicionaProduto", 'atualizaModalAdicionaProduto' => '$refresh'];

    protected $rules = [
        "quantidade" => 'required|min:1',
        "produto_id" => 'required|not_in:-1',
    ];

    public function updatedProdutoId(){
        if($this->produto_id != -1){
            $this->produto = Produto::find($this->produto_id);
            foreach($this->produto->ingredientes as $ingrediente){
                $this->marcas_ingredientes[$ingrediente->id] = $ingrediente->marcas->where("padrao", true)->first()->id;
            }
            foreach($this->produto->acessorios as $acessorio){
                $this->marcas_acessorios[$acessorio->id] = $acessorio->marcas->where("padrao", true)->first()->id;
            }
        }
        $this->emit('atualizaModalAdicionaProduto');
    }

    public function salvar(){
        $this->validate();
        $orcamento_produto = new OrcamentoProduto;
        $orcamento_produto->orcamento_id = $this->orcamento->id;
        $orcamento_produto->produto_id = $this->produto->id;
        $orcamento_produto->qtd = $this->quantidade;
        $orcamento_produto->save();

        $ingredientes = $this->produto->ingredientes;
        foreach ($ingredientes as $ingrediente) {
            $produto_ingrediente_insercao = new OrcamentoProdutoIngrediente;
            $produto_ingrediente_insercao->orcamento_produto_id = $orcamento_produto->id;
            $produto_ingrediente_insercao->ingrediente_id = $ingrediente->id;
            $produto_ingrediente_insercao->marca_id = $this->marcas_ingredientes[$ingrediente->id];
            $produto_ingrediente_insercao->save();
        }

        $acessorios = $this->produto->acessorios;
        foreach ($acessorios as $acessorio) {
            $produto_acessorio_insercao = new OrcamentoProdutoAcessorio;
            $produto_acessorio_insercao->orcamento_produto_id = $orcamento_produto->id;
            $produto_acessorio_insercao->acessorio_id = $acessorio->id;
            $produto_acessorio_insercao->marca_id = $this->marcas_acessorios[$acessorio->id];
            $produto_acessorio_insercao->save();
        }

        \App\Classes\Orcamento::atualizaOrcamentoProduto($orcamento_produto);

        $this->dispatchBrowserEvent("fechaModalAdicionaProduto");
        $this->emit("refreshPagina");
    }

    public function carregaModalAdicionaProduto(){
        $this->produtos = Produto::whereNotIn("id", $this->orcamento->produtos->pluck("id"))->get();
        $this->marcas_ingredientes = [];
        $this->produto = null;
        $this->produto_id = null;
        $this->quantidade = null;
        $this->dispatchBrowserEvent("abreModalAdicionaProduto");
    }

    public function mount(Orcamento $orcamento){
        $this->orcamento = $orcamento;
        $this->produtos = Produto::whereNotIn("id", $this->orcamento->produtos->pluck("id"))->get();
    }

    public function render()
    {
        return view('livewire.orcamentos.visualizar.modal-adiciona-produto');
    }
}
