<?php

namespace App\Http\Livewire\Ingredientes\Consultar;

use Livewire\Component;
use App\Models\Ingrediente;

class ModalCadastro extends Component
{

    public $ingrediente;
    public $nome;
    public $ingrediente_categoria_id = 1;
    public $fornecedores;
    public $unidade_medida = 0;
    public $validade = 0;

    protected $listeners = ["carregaModalCadastroIngrediente", "carregaModalEdicaoIngrediente"];

    public function carregaModalCadastroIngrediente(){
        $this->ingrediente = null;
        $this->nome = null;
        $this->ingrediente_categoria_id = 1;
        $this->fornecedores = null;
        $this->unidade_medida = 0;
        $this->validade = 0;
        $this->dispatchBrowserEvent("abreModalCadastroIngrediente");
    }

    public function carregaModalEdicaoIngrediente(Ingrediente $ingrediente){
        $this->ingrediente = $ingrediente;
        $this->nome = $this->ingrediente->nome;
        $this->ingrediente_categoria_id = $this->ingrediente->ingrediente_categoria_id;
        $this->fornecedores = $this->ingrediente->fornecedores->pluck("id");
        $this->unidade_medida = $this->ingrediente->unidade_medida;
        $this->validade = $this->ingrediente->validade;
        $this->dispatchBrowserEvent("abreModalCadastroIngrediente"); 
    }

    public function salvar(){
        if(!$this->ingrediente){
            $this->ingrediente = new Ingrediente;
        }

        $this->ingrediente->nome = $this->nome;
        $this->ingrediente->ingrediente_categoria_id = $this->ingrediente_categoria_id;
        $this->ingrediente->unidade_medida = $this->unidade_medida;
        $this->ingrediente->validade = $this->validade;
        $this->ingrediente->save();

        $this->ingrediente->fornecedores()->sync($this->fornecedores);

        $this->dispatchBrowserEvent("fechaModalCadastroIngrediente"); 
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Ingrediente salvo com sucesso.']);
        $this->emit("atualizaDatatableIngredientes");
    }

    public function render()
    {
        return view('livewire.ingredientes.consultar.modal-cadastro');
    }
}
