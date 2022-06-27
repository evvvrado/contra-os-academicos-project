<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Lista;

class CarregarMaisLista extends Component
{
    public $porpagina = 12;   

    public function carregarMais()
    {
        $this->porpagina = $this->porpagina + 6;
    }

    public function render()
    {
        $listas = Lista::paginate($this->porpagina)
        ->where('status', 1);

        return view('livewire.carregar-mais-lista', ['listas' => $listas]);
    }
}