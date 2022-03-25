<?php

namespace App\Http\Livewire\Orcamentos\Visualizar;

use Livewire\Component;
use App\Models\Orcamento;
use App\Models\OrcamentoServico;

class Pagina extends Component
{

    public $orcamento;
    public $servicos_sim;
    public $servicos_nao;

    protected $listeners = ["refreshPagina" => '$refresh'];

    public function mount(Orcamento $orcamento){
        $this->orcamento = $orcamento;
        $this->servicos_sim = OrcamentoServico::where("orcamento_id", $this->orcamento->id)->whereHas("servico", function($q){
            $q->where("incluso", true);
        })->get();
        $this->servicos_nao = OrcamentoServico::where("orcamento_id", $this->orcamento->id)->whereHas("servico", function($q){
            $q->where("incluso", false);
        })->get();
    }

    public function render()
    {
        return view('livewire.orcamentos.visualizar.pagina');
    }
}
