<div class="container-fluid">
    <div class="row">
        <div class="col-9">
            <div class="mb-3">
              <label  class="form-label">Drink</label>
              <input type="text" class="form-control" wire:model="nome_produto" readonly>
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
    @if($orcamento_produto)
        <h4 class="card-title">Ingredientes</h4>
        @foreach($orcamento_produto->orcamento_produto_ingredientes as $orcamento_produto_ingrediente)
            <div class="row mt-3">
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Ingrediente</label>
                        <input type="text" class="form-control" value="{{ $orcamento_produto_ingrediente->ingrediente->nome }}" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Marca</label>
                        <select class="form-control" wire:model="marcas_ingredientes.{{ $orcamento_produto_ingrediente->id }}">
                            @foreach($orcamento_produto_ingrediente->ingrediente->marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nome }} @if($marca->padrao) (Padrão) @endif</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>          
        @endforeach
        <hr>
        <h4 class="card-title">Acessórios</h4>
        @foreach($orcamento_produto->orcamento_produto_acessorios as $orcamento_produto_acessorio)
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Acessório</label>
                        <input type="text" class="form-control" value="{{ $orcamento_produto_acessorio->acessorio->nome }}" readonly>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label  class="form-label">Marca</label>
                        <select class="form-control" wire:model="marcas_acessorios.{{ $orcamento_produto_acessorio->id }}">
                            @foreach($orcamento_produto_acessorio->acessorio->marcas as $marca)
                                <option value="{{ $marca->id }}">{{ $marca->nome }} @if($marca->padrao) (Padrão) @endif</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>          
        @endforeach
        <div class="row">
            <div class="col-12 mt-3 d-flex">
                <button type="submit" class="btn btn-primary flex-fill" wire:click="salvar">Salvar</button>
            </div>
        </div>
    @endif
</div>

@push("scripts")
    <script>
        window.addEventListener('abreModalEditaProduto', event => {
            $("#modalEditaProduto").modal("show");
        });
        window.addEventListener('fechaModalEditaProduto', event => {
            $("#modalEditaProduto").modal("hide");
        });
    </script>
@endpush