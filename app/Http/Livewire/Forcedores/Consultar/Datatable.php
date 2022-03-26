<?php

namespace App\Http\Livewire\Forcedores\Consultar;

use Livewire\Component;
use App\Models\Fornecedor;

class Datatable extends Component
{

    protected $listeners = ["atualizaDatatableFornecedores" => '$refresh'];

    public function removerFornecedor(Fornecedor $fornecedor){
        $fornecedor->delete();
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Fornecedor removido com sucesso.']);
        $this->emit("atualizaDatatableFornecedores");
    }

    public function render()
    {
        $fornecedores = Fornecedor::all();
        return view('livewire.forcedores.consultar.datatable', ["fornecedores" => $fornecedores]);
    }
}
