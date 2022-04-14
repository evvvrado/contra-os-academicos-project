<?php

namespace App\Http\Livewire\Acessorios\Consultar;

use Livewire\Component;
use App\Models\Acessorio;
use App\Models\AcessorioCategoria;

class Datatable extends Component
{
    public $filtro_categoria;
    public $filtros;

    protected $listeners = ["filtrarCategoria", "removeFiltroCategoria", "atualizaDatatableAcessorios" => '$refresh'];

    public function filtrarCategoria(AcessorioCategoria $categoria){
        $this->filtro_categoria = $categoria->id;
        $this->filtros = [];
        $this->filtros[] = ["acessorio_categoria_id", "=", $this->filtro_categoria];
    }

    public function removeFiltroCategoria(){
        $this->filtro_categoria = null;
        $this->filtros = null;
    }

    public function removeAcessorio(Acessorio $acessorio){
        $acessorio->delete();
        $this->emit("atualizaDatatableAcessorios");
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Acessorio removido com sucesso.']);
    }

    public function render()
    {
        if($this->filtros && count($this->filtros) > 0){
            $acessorios = Acessorio::where($this->filtros)->get();
        }else{
            $acessorios = Acessorio::all();
        }
        return view('livewire.acessorios.consultar.datatable', ["acessorios" => $acessorios]);
    }
}
