<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Revista;

class CarregarMaisRevista extends Component
{
    public $porpagina = 12;   

    public function carregarMais()
    {
        $this->porpagina = $this->porpagina + 6;
    }

    public function render()
    {
        $revistas = Revista::paginate($this->porpagina)
        ->where('em_breve', 0)
        ->where('status', 1);

        return view('livewire.carregar-mais-revista', ['revistas' => $revistas]);
    }
}
