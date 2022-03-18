<?php

namespace App\Http\Livewire\Marcas\Consultar\Historico;

use Livewire\Component;
use App\Models\Marca;

class Datatable extends Component
{
    public $marca;

    protected $listeners = ["carregaTabela"];

    public function carregaTabela(Marca $marca){
        $this->marca = $marca;
    }

    public function mount(){
        $marca = null;
    }

    public function render()
    {
        return view('livewire.marcas.consultar.historico.datatable');
    }
}
