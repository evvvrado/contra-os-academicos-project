<?php

namespace App\Http\Livewire\Marcas\Consultar;

use Livewire\Component;
use App\Models\Marca;

class Datatable extends Component
{

    public $marcas;
    public $ingrediente_id;
    public $acessorio_id;

    protected $listeners = ["atualizaDatatable" => '$refresh', "marcar_padrao"];

    public function marcar_padrao(Marca $marca){
        if($this->ingrediente_id){
            $marca_padrao = Marca::where([["ingrediente_id", $this->ingrediente_id],["padrao", true]])->first();
        }else{
            $marca_padrao = Marca::where([["acessorio_id", $this->acessorio_id],["padrao", true]])->first();
        }
        if($marca_padrao){
            $marca_padrao->padrao = false;
            $marca_padrao->save();
        }
        $marca->padrao = true;
        $marca->save();
        $this->emit("atualizaDatatable");
    }

    public function mount($ingrediente_id = null, $acessorio_id = null){
        $this->ingrediente_id = $ingrediente_id;
        $this->acessorio_id = $acessorio_id;
    }

    public function render()
    {
        if($this->ingrediente_id){
            $this->marcas = Marca::where("ingrediente_id", $this->ingrediente_id)->orderBy("nome", "ASC")->get();
        }else{
            $this->marcas = Marca::where("acessorio_id", $this->acessorio_id)->orderBy("nome", "ASC")->get();
        }
        return view('livewire.marcas.consultar.datatable', ["marcas" => $this->marcas]);
    }
}
