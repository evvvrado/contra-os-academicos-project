<?php

namespace App\Http\Livewire\Marcas\Consultar;

use Livewire\Component;
use App\Models\Marca;
use App\Models\MarcaHistorico;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;
use App\Classes\Util;

class ModalEditar extends Component
{
    use WithFileUploads;

    public $marca_id;
    public $nome;
    public $padrao;
    public $nome_unidade;
    public $unidade_medida;
    public $quantidade_ingrediente_unidade;
    public $embalagem;
    public $quantidade_embalagem;
    public $valor_embalagem;
    public $imagem;

    protected $listeners = ["iniciaModalEdicao"];

    public function iniciaModalEdicao(Marca $marca){
        $this->marca_id = $marca->id;
        $this->nome = $marca->nome;
        $this->padrao = $marca->padrao;
        $this->nome_unidade = $marca->nome_unidade;
        $this->unidade_medida = $marca->unidade_medida;
        $this->quantidade_ingrediente_unidade = $marca->quantidade_ingrediente_unidade;
        $this->embalagem = $marca->embalagem;
        $this->quantidade_embalagem = $marca->quantidade_embalagem;
        $this->valor_embalagem = $marca->valor_embalagem;
        $this->dispatchBrowserEvent("abreModalEdicao");
    }

    public function salvar(){
        $marca = Marca::find($this->marca_id);
        $marca->nome  = $this->nome;
        $marca->padrao  = $this->padrao;
        $marca->nome_unidade  = $this->nome_unidade;
        $marca->unidade_medida  = $this->unidade_medida;
        $marca->quantidade_ingrediente_unidade  = $this->quantidade_ingrediente_unidade;
        $marca->embalagem  = $this->embalagem;
        $marca->quantidade_embalagem  = $this->quantidade_embalagem;
        if($marca->valor_embalagem != $this->valor_embalagem){
            $marca_historico = new MarcaHistorico;
            $marca_historico->marca_id = $marca->id;
            $marca_historico->valor = $this->valor_embalagem;
            $marca_historico->save();
        }
        $marca->valor_embalagem  = $this->valor_embalagem;
        if($this->imagem){
            Storage::delete($marca->imagem);
            $marca->imagem = $this->imagem->store("site/imagens/marcas", 'local');
            Util::limparLivewireTemp();
        }
        $marca->save();
        $this->dispatchBrowserEvent('notificaToastr', ['tipo' => 'success', 'mensagem' => 'Dados salvos com sucesso!']);
        $this->emit("atualizaDatatable");
        $this->limpaModal();
    }

    public function limpaModal(){
        $this->dispatchBrowserEvent("fechaModalEdicao");
        $this->marca_id = null;
        $this->nome = null;
        $this->padrao = null;
        $this->nome_unidade = null;
        $this->unidade_medida = null;
        $this->quantidade_ingrediente_unidade = null;
        $this->embalagem = null;
        $this->quantidade_embalagem = null;
        $this->valor_embalagem = null;
    }

    public function render()
    {
        return view('livewire.marcas.consultar.modal-editar');
    }
}
