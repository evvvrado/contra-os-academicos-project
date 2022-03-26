<?php

namespace App\Http\Livewire\Receitas\Consultar;

use Livewire\Component;
use App\Models\Receita;

class ModalCadastro extends Component
{
    public $receita;
    public $produto_id;
    public $nome;
    public $custos_adicionais = 0;

    protected $listeners = ["carregaModalCadastroReceita", "carregaModalEdicaoReceita"];

    public function carregaModalCadastroReceita(){
        $this->nome = null;
        $this->custos_adicionais = 0;
        $this->dispatchBrowserEvent("abreModalCadastroReceita");
    }

    public function carregaModalEdicaoReceita(Receita $receita){
        $this->receita = $receita;
        $this->nome = $this->receita->nome;
        $this->custos_adicionais = $this->receita->custos_adicionais;
        $this->dispatchBrowserEvent("abreModalCadastroReceita"); 
    }

    public function salvar(){
        if(!$this->receita){
            $this->receita = new Receita;
        }
        $this->receita->nome = $this->nome;
        $this->receita->custos_adicionais = $this->custos_adicionais;
        $this->receita->produto_id = $this->produto_id;
        $this->receita->save();
        $this->dispatchBrowserEvent("fechaModalCadastroReceita"); 
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Receita salva com sucesso.']);
        $this->emit("atualizaDatatableReceitas");
    }

    public function mount($produto_id){
        $this->produto_id = $produto_id;
    }

    public function render()
    {
        return view('livewire.receitas.consultar.modal-cadastro');
    }
}
