<?php

namespace App\Http\Livewire\Ingredientes\Consultar;

use Livewire\Component;
use App\Models\Ingrediente;
use App\Models\Fornecedor;

class ModalCadastro extends Component
{

    public $ingrediente;
    public $nome;
    public $ingrediente_categoria_id = 1;
    public $fornecedores;
    public $unidade_medida = 0;
    public $validade = 1;
    public $vitalicio = null;

    protected $listeners = ["carregaModalCadastroIngrediente", "carregaModalEdicaoIngrediente"];

    public function carregaModalCadastroIngrediente(){
        $this->ingrediente = null;
        $this->nome = null;
        $this->ingrediente_categoria_id = 1;
        $this->fornecedores = null;
        $this->unidade_medida = 0;
        $this->validade = 1;
        $this->vitalicio = null;
        $this->dispatchBrowserEvent("abreModalCadastroIngrediente");
    }

    public function carregaModalEdicaoIngrediente(Ingrediente $ingrediente){
        $this->ingrediente = $ingrediente;
        $this->nome = $this->ingrediente->nome;
        $this->ingrediente_categoria_id = $this->ingrediente->ingrediente_categoria_id;
        $this->fornecedores = $this->ingrediente->fornecedores->pluck("id");
        $this->unidade_medida = $this->ingrediente->unidade_medida;
        $this->validade = $this->ingrediente->validade;
        $this->vitalicio = $this->ingrediente->vitalicio;
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

        if($this->vitalicio){
            $this->ingrediente->vitalicio = true;
        }

        $this->ingrediente->save();

        for($i = 0; $i < count($this->fornecedores); $i++){
            if(!is_numeric($this->fornecedores[$i])){
                $fornecedor = new Fornecedor;
                $fornecedor->nome = $this->fornecedores[$i];
                $fornecedor->save();
                $this->fornecedores[$i] = $fornecedor->id;
                $this->dispatchBrowserEvent("addSelect2Option", ["id" => $fornecedor->id, "nome" => $fornecedor->nome]);
            }
        }

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
