<?php

namespace App\Http\Livewire\Orcamento\Carrinho;

use Livewire\Component;
use App\Models\Marca;
use App\Models\Orcamento;
use App\Models\Parametro;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutoIngrediente;

class Pagina extends Component
{

    public $orcamento;
    public $parametros;
    public $orcamento_produtos;
    public $orcamento_produto_selecionado;

    protected $listeners = ['refresh' => '$refresh'];

    public function mount(){
        $this->orcamento = Orcamento::find(session()->get("orcamento"));
        $this->orcamento_produtos = $this->orcamento->orcamento_produtos;
        $this->parametros = Parametro::first();
        $this->produto_selecionado = null;
    }

    public function upgrade(OrcamentoProduto $orcamento_produto){
        $this->orcamento_produto_selecionado = $orcamento_produto;
    }

    public function trocar_marca(OrcamentoProdutoIngrediente $orcamento_produto_ingrediente, Marca $marca){
        $orcamento_produto_ingrediente->marca_id = $marca->id;
        $orcamento_produto_ingrediente->save();
        $this->emit("refresh");
    }

    public function fecha_upgrade(){
        $this->orcamento_produto_selecionado = null;
    }

    public function render()
    {
        return view('livewire.orcamento.carrinho.pagina');
    }
}
