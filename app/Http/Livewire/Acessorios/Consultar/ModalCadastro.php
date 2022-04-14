<?php

namespace App\Http\Livewire\Acessorios\Consultar;

use Livewire\Component;
use App\Models\Acessorio;

class ModalCadastro extends Component
{
    public $acessorio;
    public $nome;
    public $acessorio_categoria_id = 1;
    public $fornecedores;
    public $unidade_medida = 0;
    public $validade = 0;

    protected $listeners = ["carregaModalCadastroAcessorio", "carregaModalEdicaoAcessorio"];

    public function carregaModalCadastroAcessorio(){
        $this->acessorio = null;
        $this->nome = null;
        $this->acessorio_categoria_id = 1;
        $this->fornecedores = null;
        $this->unidade_medida = 0;
        $this->validade = 0;
        $this->dispatchBrowserEvent("abreModalCadastroAcessorio");
    }

    public function carregaModalEdicaoAcessorio(Acessorio $acessorio){
        $this->acessorio = $acessorio;
        $this->nome = $this->acessorio->nome;
        $this->acessorio_categoria_id = $this->acessorio->acessorio_categoria_id;
        $this->fornecedores = $this->acessorio->fornecedores->pluck("id");
        $this->unidade_medida = $this->acessorio->unidade_medida;
        $this->validade = $this->acessorio->validade;
        $this->dispatchBrowserEvent("abreModalCadastroAcessorio"); 
    }

    public function salvar(){
        if(!$this->acessorio){
            $this->acessorio = new Acessorio;
        }

        $this->acessorio->nome = $this->nome;
        $this->acessorio->acessorio_categoria_id = $this->acessorio_categoria_id;
        $this->acessorio->unidade_medida = $this->unidade_medida;
        $this->acessorio->validade = $this->validade;
        $this->acessorio->save();

        $this->acessorio->fornecedores()->sync($this->fornecedores);

        $this->dispatchBrowserEvent("fechaModalCadastroAcessorio"); 
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Acessorio salvo com sucesso.']);
        $this->emit("atualizaDatatableAcessorios");
    }

    public function render()
    {
        return view('livewire.acessorios.consultar.modal-cadastro');
    }
}
