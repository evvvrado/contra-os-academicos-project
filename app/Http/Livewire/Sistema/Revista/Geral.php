<?php

namespace App\Http\Livewire\Sistema\Revista;

use Livewire\Component;
use App\Models\Revista;
use DB;

class Geral extends Component
{
    public function deletar_revista(Revista $revista)
    {
        $revista->delete();
    }
    
    public function render()
    {
        $revistas = Revista::select(DB::raw("*"))
        ->orderBy('id', 'Desc')
        ->get();

        return view('livewire.sistema.revista.geral', ['revistas' => $revistas]);
    }
}
