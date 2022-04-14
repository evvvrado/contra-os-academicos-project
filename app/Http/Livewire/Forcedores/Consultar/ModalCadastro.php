<?php

namespace App\Http\Livewire\Forcedores\Consultar;

use Livewire\Component;
use App\Models\Fornecedor;

class ModalCadastro extends Component
{

    public $fornecedor;
    public $nome;
    public $telefone;

    protected $listeners = ["carregaModalCadastroFornecedor", "carregaModalEdicaoFornecedor"];

    public function carregaModalCadastroFornecedor(){
        $this->fornecedor = null;
        $this->nome = null;
        $this->telefone = null;
        $this->dispatchBrowserEvent("abreModalCadastroFornecedor");
    }

    public function carregaModalEdicaoFornecedor(Fornecedor $fornecedor){
        $this->fornecedor = $fornecedor;
        $this->nome = $this->fornecedor->nome;
        $this->telefone = $this->fornecedor->telefone;
        $this->dispatchBrowserEvent("abreModalCadastroFornecedor"); 
    }

    public function salvar(){
        if(!$this->fornecedor){
            $this->fornecedor = new Fornecedor;
        }
        $this->fornecedor->nome = $this->nome;
        $this->fornecedor->telefone = $this->telefone;
        $this->fornecedor->save();
        $this->dispatchBrowserEvent("fechaModalCadastroFornecedor"); 
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Fornecedor salvo com sucesso.']);
        $this->emit("atualizaDatatableFornecedores");
    }

    public function render()
    {
        return view('livewire.forcedores.consultar.modal-cadastro');
    }
}
