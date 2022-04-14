<?php

namespace App\Http\Livewire\Receitas\Consultar;

use Livewire\Component;
use App\Models\Produto;
use App\Models\Receita;

class Datatable extends Component
{
    public $produto;
    protected $listeners = ["atualizaDatatableReceitas" => '$refresh'];

    public function removerReceita(Receita $receita){
        $receita->delete();
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Receita removido com sucesso.']);
        $this->emit("atualizaDatatableReceitas");
    }

    public function mount(Produto $produto){
        $this->produto = $produto;
    }

    public function render()
    {
        $this->produto = $this->produto->fresh();
        return view('livewire.receitas.consultar.datatable', ["receitas" => $this->produto->receitas]);
    }
}
