<?php

namespace App\Http\Livewire\Orcamentos\Visualizar;

use Livewire\Component;
use App\Models\OrcamentoProduto;

class ModalEditaProduto extends Component
{

    public $orcamento_produto;
    public $nome_produto;
    public $quantidade;
    public $marcas = [];

    protected $listeners = ["carregaModalEditaProduto"];

    public function carregaModalEditaProduto(OrcamentoProduto $orcamento_produto){
        $this->marcas = [];
        $this->orcamento_produto = $orcamento_produto;
        $this->nome_produto = $this->orcamento_produto->produto->nome;
        $this->quantidade = $this->orcamento_produto->qtd;
        foreach($orcamento_produto->orcamento_produto_ingredientes as $orcamento_produto_ingrediente){
            $this->marcas[$orcamento_produto_ingrediente->id] = $orcamento_produto_ingrediente->marca_id;
        }
        $this->dispatchBrowserEvent("abreModalEditaProduto");
    }

    public function salvar(){
        $this->orcamento_produto->qtd = $this->quantidade;
        $this->orcamento_produto->valor = 0;

        foreach($this->marcas as $orcamento_produto_ingrediente_id => $marca_id){
            $orcamento_produto_ingrediente = $this->orcamento_produto->orcamento_produto_ingredientes->where("id", $orcamento_produto_ingrediente_id)->first();
            $orcamento_produto_ingrediente->marca_id = $marca_id;
            $orcamento_produto_ingrediente->save();
        }

        $orcamento_produto_ingredientes = $this->orcamento_produto->orcamento_produto_ingredientes;
        foreach($orcamento_produto_ingredientes as $orcamento_produto_ingrediente){
            $marca = $orcamento_produto_ingrediente->marca;
            $this->orcamento_produto->valor += ceil(($marca->quantidade_ingrediente_unidade * $this->orcamento_produto->qtd) / $marca->quantidade_embalagem) * $marca->valor_embalagem;
        }

        $orcamento_produto_acessorios = $this->orcamento_produto->orcamento_produto_acessorios;
        foreach($orcamento_produto_acessorios as $orcamento_produto_acessorio){
            $marca = $orcamento_produto_acessorio->marca;
            $this->orcamento_produto->valor += ceil(($marca->quantidade_ingrediente_unidade * $this->orcamento_produto->qtd) / $marca->quantidade_embalagem) * $marca->valor_embalagem;
        }
        $this->orcamento_produto->save();
        $this->dispatchBrowserEvent("fechaModalEditaProduto");
        $this->emit("refreshPagina");
    }

    public function render()
    {
        return view('livewire.orcamentos.visualizar.modal-edita-produto');
    }
}
