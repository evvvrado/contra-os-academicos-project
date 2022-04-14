<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
                <label  class="form-label">Drink</label>
                <select class="form-control" wire:model="produto_id">
                    <option value="-1">Selecione um produto</option>
                    @foreach($produtos as $produto)
                        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-3">
            <div class="mb-3">
              <label  class="form-label">Quantidade</label>
              <input type="number" class="form-control" wire:model="quantidade" step="1" min="1">
            </div>
        </div>
    </div>
    <hr>
    @if($this->produto)
        <h4 class="card-title">Ingredientes</h4>
        @foreach($this->produto->ingredientes as $ingrediente)
            <div class="row mt-3">
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Ingrediente</label>
                        <input type="text" class="form-control" value="{{ $ingrediente->nome }}" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Marca</label>
                        <select class="form-control" wire:model="marcas_ingredientes.{{ $ingrediente->id }}">
                            @foreach($ingrediente->marcas as $marca)
                                <option value="{{ $marca->id }}"  @if($marca->padrao) selected @endif>{{ $marca->nome }} @if($marca->padrao) (Padrão) @endif</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>          
        @endforeach
        <hr>
        <h4 class="card-title">Acessórios</h4>
        @foreach($this->produto->acessorios as $acessorio)
            <div class="row mt-3">
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Acessório</label>
                        <input type="text" class="form-control" value="{{ $acessorio->nome }}" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Marca</label>
                        <select class="form-control" wire:model="marcas_acessorios.{{ $acessorio->id }}">
                            @foreach($acessorio->marcas as $marca)
                                <option value="{{ $marca->id }}"  @if($marca->padrao) selected @endif>{{ $marca->nome }} @if($marca->padrao) (Padrão) @endif</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>          
        @endforeach
    @endif
    <div class="row">
        <div class="col-12 mt-3 d-flex">
            <button type="submit" class="btn btn-primary flex-fill" wire:click="salvar">Salvar</button>
        </div>
    </div>
</div>

@push("scripts")
    <script>
        window.addEventListener('abreModalAdicionaProduto', event => {
            $("#modalAdicionaProduto").modal("show");
        });
        window.addEventListener('fechaModalAdicionaProduto', event => {
            $("#modalAdicionaProduto").modal("hide");
        });
    </script>
@endpush