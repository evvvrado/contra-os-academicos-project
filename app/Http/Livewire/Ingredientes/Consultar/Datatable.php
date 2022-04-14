<?php

namespace App\Http\Livewire\Ingredientes\Consultar;

use Livewire\Component;
use App\Models\Ingrediente;
use App\Models\IngredienteCategoria;

class Datatable extends Component
{
    public $filtro_categoria;
    public $filtros;

    protected $listeners = ["filtrarCategoria", "removeFiltroCategoria", "atualizaDatatableIngredientes" => '$refresh'];

    public function filtrarCategoria(IngredienteCategoria $categoria){
        $this->filtro_categoria = $categoria->id;
        $this->filtros = [];
        $this->filtros[] = ["ingrediente_categoria_id", "=", $this->filtro_categoria];
    }

    public function removeFiltroCategoria(){
        $this->filtro_categoria = null;
        $this->filtros = null;
    }

    public function removeIngrediente(Ingrediente $ingrediente){
        $ingrediente->delete();
        $this->emit("atualizaDatatableIngredientes");
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Ingrediente removido com sucesso.']);
    }

    public function render()
    {
        if($this->filtros && count($this->filtros) > 0){
            $ingredientes = Ingrediente::where($this->filtros)->get();
        }else{
            $ingredientes = Ingrediente::all();
        }
        return view('livewire.ingredientes.consultar.datatable', ["ingredientes" => $ingredientes]);
    }
}
