<?php

namespace App\Http\Livewire\Servicos\Consultar;

use Livewire\Component;
use App\Models\Servico;
use App\Models\ServicoParametro;

class ModalCadastroParametros extends Component
{

    public $quantidade_minima_pessoas;
    public $quantidade_maxima_pessoas;
    public $quantidade_minima_servico;
    public $quantidade_maxima_servico; 
    public $servico;

    protected $listeners = ["carregaModalParametros", "atualizaDatatableParametros" => '$refresh'];

    public function carregaModalParametros(Servico $servico){
        $this->quantidade_minima_pessoas = $servico->quantidade_minima_pessoas;
        $this->quantidade_maxima_pessoas = $servico->quantidade_maxima_pessoas;
        $this->quantidade_minima_servico = $servico->quantidade_minima_servico;
        $this->quantidade_maxima_servico = $servico->quantidade_maxima_servico;
        $this->servico = $servico;
        $this->dispatchBrowserEvent("abreModalParametros");
    }

    public function salvar(){
        $teste = ServicoParametro::where([["id", "=", $this->servico->id], ["quantidade_minima_pessoas", "<=", $this->quantidade_minima_pessoas], ["quantidade_maxima_pessoas", ">=", $this->quantidade_minima_pessoas]])
                                    ->orWhere([["id", "=", $this->servico->id], ["quantidade_minima_pessoas", "<=", $this->quantidade_maxima_pessoas], ["quantidade_maxima_pessoas", ">=", $this->quantidade_maxima_pessoas]])->first();
        if(!$teste){
            $parametros = new ServicoParametro;
            $parametros->servico_id = $this->servico->id;
            $parametros->quantidade_minima_pessoas = $this->quantidade_minima_pessoas;
            $parametros->quantidade_maxima_pessoas = $this->quantidade_maxima_pessoas;
            $parametros->quantidade_minima_servico = $this->quantidade_minima_servico;
            $parametros->quantidade_maxima_servico = $this->quantidade_maxima_servico;
            $parametros->save();
            $this->resetar();
            $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Parâmetro salvo com sucesso!']);
            $this->emit("atualizaDatatableParametros");
        }else{
            $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'error', 'mensagem' => 'A quantidade de convidados é conflitante com outro parâmetro']);
        }                         
    }

    public function excluirParametro(ServicoParametro $parametro){
        $parametro->delete();
        $this->emit("atualizaDatatableParametros");
    }

    public function resetar(){
        $this->quantidade_minima_pessoas = null;
        $this->quantidade_maxima_pessoas = null;
        $this->quantidade_minima_servico = null;
        $this->quantidade_maxima_servico = null;
    }

    public function render()
    {
        return view('livewire.servicos.consultar.modal-cadastro-parametros');
    }
}
