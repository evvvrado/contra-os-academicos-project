<?php

namespace App\Http\Livewire\Orcamentos\Visualizar;

use Livewire\Component;
use App\Models\Orcamento;
use App\Models\OrcamentoDesconto;

class ModalDesconto extends Component
{

    public $orcamento;
    public $desconto_id;
    public $tipo = 0;
    public $alvo;
    public $valor;

    protected $listeners = ["carregaModalDesconto"];

    public function carregaModalDesconto($alvo){
        $desconto = $this->orcamento->descontos->where("alvo", $alvo)->first();
        if($desconto){
            $this->desconto_id = $desconto->id;
            $this->tipo = $desconto->tipo;
            $this->valor = $desconto->valor;
            $this->alvo = $alvo;
        }else{
            $this->tipo = 0;
            $this->valor = null;
            $this->alvo = $alvo;
            $this->desconto_id = null;
        }
        $this->dispatchBrowserEvent("abreModalDesconto");
    }

    public function salvar(){
        if($this->desconto_id){
            $desconto = OrcamentoDesconto::find($this->desconto_id);
        }else{
            $desconto = new OrcamentoDesconto;
        }
        $desconto->orcamento_id = $this->orcamento->id;
        $desconto->tipo = $this->tipo;
        $desconto->alvo = $this->alvo;
        $desconto->valor = $this->valor;
        $desconto->save();
        $this->zerar();
        $this->emit("refreshPagina");
        $this->dispatchBrowserEvent("fechaModalDesconto");  
    }

    public function remover(){
        if($this->desconto_id){
            $desconto = OrcamentoDesconto::find($this->desconto_id);
            $desconto->delete();
        }
        $this->emit("refreshPagina");
        $this->dispatchBrowserEvent("fechaModalDesconto");
    }

    public function mount(Orcamento $orcamento){
        $this->orcamento = $orcamento;
    }

    public function zerar(){
        $this->tipo = 0;
        $this->valor = null;
        $this->desconto_id = null;
    }

    public function render()
    {
        return view('livewire.orcamentos.visualizar.modal-desconto');
    }
}
