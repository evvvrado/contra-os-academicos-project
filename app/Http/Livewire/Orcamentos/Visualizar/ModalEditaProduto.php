<?php

namespace App\Http\Livewire\Orcamentos\Visualizar;

use Livewire\Component;
use App\Models\OrcamentoProduto;

class ModalEditaProduto extends Component
{

    public $orcamento_produto;
    public $nome_produto;
    public $quantidade;
    public $marcas_ingredientes = [];
    public $marcas_acessorios = [];

    protected $listeners = ["carregaModalEditaProduto"];

    public function carregaModalEditaProduto(OrcamentoProduto $orcamento_produto){
        $this->marcas_ingredientes = [];
        $this->marcas_acessorios = [];
        $this->orcamento_produto = $orcamento_produto;
        $this->nome_produto = $this->orcamento_produto->produto->nome;
        $this->quantidade = $this->orcamento_produto->qtd;
        foreach($orcamento_produto->orcamento_produto_ingredientes as $orcamento_produto_ingrediente){
            $this->marcas_ingredientes[$orcamento_produto_ingrediente->id] = $orcamento_produto_ingrediente->marca_id;
        }
        foreach($orcamento_produto->orcamento_produto_acessorios as $orcamento_produto_acessorio){
            $this->marcas_acessorios[$orcamento_produto_acessorio->id] = $orcamento_produto_acessorio->marca_id;
        }
        $this->dispatchBrowserEvent("abreModalEditaProduto");
    }

    public function salvar(){
        $this->orcamento_produto->qtd = $this->quantidade;
        $this->orcamento_produto->valor = 0;

        foreach($this->marcas_ingredientes as $orcamento_produto_ingrediente_id => $marca_id){
            $orcamento_produto_ingrediente = $this->orcamento_produto->orcamento_produto_ingredientes->where("id", $orcamento_produto_ingrediente_id)->first();
            $orcamento_produto_ingrediente->marca_id = $marca_id;
            $orcamento_produto_ingrediente->save();
        }

        foreach($this->marcas_acessorios as $orcamento_produto_acessorio_id => $marca_id){
            $orcamento_produto_acessorio = $this->orcamento_produto->orcamento_produto_acessorios->where("id", $orcamento_produto_acessorio_id)->first();
            $orcamento_produto_acessorio->marca_id = $marca_id;
            $orcamento_produto_acessorio->save();
        }

        \App\Classes\Orcamento::atualizaOrcamentoProduto($this->orcamento_produto);

        $this->orcamento_produto->save();
        $this->dispatchBrowserEvent("fechaModalEditaProduto");
        $this->emit("refreshPagina");
    }

    public function render()
    {
        return view('livewire.orcamentos.visualizar.modal-edita-produto');
    }
}
