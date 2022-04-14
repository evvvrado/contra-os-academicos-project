<?php

namespace App\Http\Livewire\Receitas\Consultar\Ingredientes;

use Livewire\Component;
use App\Models\Receita;
use App\Models\Ingrediente;
use App\Models\ReceitaIngrediente;

class ModalCadastro extends Component
{
    public $receita;
    public $ingrediente_id;
    public $quantidade;
    public $receita_ingredientes = [];

    protected $listeners = ["carregaModalCadastroIngredientes", "atualizaModalCadastroIngredientes" => '$refresh'];

    public function carregaModalCadastroIngredientes(Receita $receita){
        $this->ingrediente_id = Ingrediente::first()->id;
        $this->quantidade = 1;
        $this->receita = $receita;
        $this->receita_ingredientes = $this->receita->receita_ingredientes;
        $this->dispatchBrowserEvent("abreModalCadastroIngredientes");
    }

    public function adicionar(){
        $receita_ingrediente = new ReceitaIngrediente;
        $receita_ingrediente->receita_id = $this->receita->id;
        $receita_ingrediente->ingrediente_id = $this->ingrediente_id;
        $receita_ingrediente->quantidade = $this->quantidade;
        $receita_ingrediente->save();

        $this->ingrediente_id = Ingrediente::first()->id;
        $this->quantidade = 1;

        $this->receita = $this->receita->fresh();
        $this->receita_ingredientes = $this->receita->receita_ingredientes;
        $this->emit("atualizaDatatableReceitas");
    }

    public function removeIngredienteReceita(ReceitaIngrediente $receita_ingrediente){
        $receita_ingrediente->delete();
        $this->receita = $this->receita->fresh();
        $this->receita_ingredientes = $this->receita->receita_ingredientes;
        $this->emit("atualizaDatatableReceitas");
    }

    public function render()
    {
        return view('livewire.receitas.consultar.ingredientes.modal-cadastro', ["receita_ingredientes" => $this->receita_ingredientes]);
    }
}
