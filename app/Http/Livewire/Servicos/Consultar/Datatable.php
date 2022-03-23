<?php

namespace App\Http\Livewire\Servicos\Consultar;

use Livewire\Component;
use App\Models\Servico;

class Datatable extends Component
{

    protected $listeners = ["atualizaDatatable" => '$refresh'];

    public function render()
    {
        $servicos = Servico::all();
        return view('livewire.servicos.consultar.datatable', ["servicos" => $servicos]);
    }
}
