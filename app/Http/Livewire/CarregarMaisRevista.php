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
        $revistas = Revista::where('em_breve', 0)
        ->orderBy('id', 'Desc')
        ->where('status', 1)
        ->paginate($this->porpagina);

        return view('livewire.carregar-mais-revista', ['revistas' => $revistas]);
    }
}
