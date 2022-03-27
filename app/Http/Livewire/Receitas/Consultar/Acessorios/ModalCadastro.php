<?php

namespace App\Http\Livewire\Receitas\Consultar\Acessorios;

use Livewire\Component;
use App\Models\Receita;
use App\Models\Acessorio;
use App\Models\ReceitaAcessorio;

class ModalCadastro extends Component
{
    public $receita;
    public $acessorio_id;
    public $quantidade;
    public $receita_acessorios = [];

    protected $listeners = ["carregaModalCadastroAcessorios", "atualizaModalCadastroAcessorios" => '$refresh'];

    public function carregaModalCadastroAcessorios(Receita $receita){
        $this->acessorio_id = Acessorio::first()->id;
        $this->quantidade = 1;
        $this->receita = $receita;
        $this->receita_acessorios = $this->receita->receita_acessorios;
        $this->dispatchBrowserEvent("abreModalCadastroAcessorios");
    }

    public function adicionar(){
        $receita_acessorio = new ReceitaAcessorio;
        $receita_acessorio->receita_id = $this->receita->id;
        $receita_acessorio->acessorio_id = $this->acessorio_id;
        $receita_acessorio->quantidade = $this->quantidade;
        $receita_acessorio->save();

        $this->acessorio_id = Acessorio::first()->id;
        $this->quantidade = 1;

        $this->receita = $this->receita->fresh();
        $this->receita_acessorios = $this->receita->receita_acessorios;
        $this->emit("atualizaDatatableReceitas");
    }

    public function removeAcessorioReceita(ReceitaAcessorio $receita_acessorio){
        $receita_acessorio->delete();
        $this->receita = $this->receita->fresh();
        $this->receita_acessorios = $this->receita->receita_acessorios;
        $this->emit("atualizaDatatableReceitas");
    }

    public function render()
    {
        return view('livewire.receitas.consultar.acessorios.modal-cadastro', ["receita_acessorios" => $this->receita_acessorios]);
    }
}
