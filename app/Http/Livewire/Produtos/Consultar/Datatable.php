<?php

namespace App\Http\Livewire\Produtos\Consultar;

use Livewire\Component;
use App\Models\Produto;

class Datatable extends Component
{
    public $produtos;
    protected $listeners = ["atualizaDatatable" => '$refresh', "marcar_lancamento"];


    public function marcar_lancamento(Produto $produto){
        $produto->lancamento = !$produto->lancamento;
        $produto->save();
        $this->emit("atualizaDatatable");
    }

    public function render()
    {
        $this->produtos = Produto::all();
        return view('livewire.produtos.consultar.datatable', ["produtos" => $this->produtos]);
    }
}
