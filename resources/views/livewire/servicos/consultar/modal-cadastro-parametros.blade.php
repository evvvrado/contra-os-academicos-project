<div class="contaienr-fluid">
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="row">
                <label for="" class="form-label">Quantidade de Pessoas</label>            
            </div>
            <div class="d-flex flex-row mt-2">
                <div class="mb-3 flex-fill">
                    <input type="number" class="form-control" name="" id="" step="1" min="1" wire:model='quantidade_minima_pessoas' readonly>
                </div>
                <div class="mx-1 mt-2">
                    até
                </div>
                <div class="mb-3 flex-fill">
                    <input type="number" class="form-control" name="" id="" step="1" min="1" wire:model='quantidade_maxima_pessoas'>
                </div>
            </div>
        </div>
        
        <div class="col-12 col-lg-6">
            <div class="mb-3">
                <label for="" class="form-label">Quantidade Mínima do Serviço</label>            
                <input type="number" class="form-control" name="" id="" step="1" min="1" wire:model='quantidade_minima_servico'>
            </div>
        </div>

        <div class="col-12 col-lg-6">
            <div class="mb-3">
                <label for="" class="form-label">Quantidade Ideal do Serviço</label>            
                <input type="number" class="form-control" name="" id="" step="1" min="1" wire:model='quantidade_maxima_servico'>
            </div>
        </div>
        <div class="col-12 text-end">
            <button type="submit" class="btn btn-primary" wire:click="salvar">Salvar</button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            @if($this->servico)
                <table class="table">
                    <tbody>
                        <thead>
                            <tr>
                                <th>Convidados</th>
                                <th>Mínimo</th>
                                <th>Ideal</th>
                                <th></th>
                            </tr>
                        </thead>
                        @foreach($servico->parametros->sortBy("quantidade_minima_pessoas") as $parametro)
                            <tr>
                                <td>
                                    {{ $parametro->quantidade_minima_pessoas }} até {{ $parametro->quantidade_maxima_pessoas }}
                                </td>
                                <td>
                                    {{ $parametro->quantidade_minima_servico }}
                                </td>
                                <td>
                                    {{ $parametro->quantidade_maxima_servico }}
                                </td>
                                <td>
                                    <i class="fas fa-times-circle fa-lg cpointer" style="color: red;" wire:click="excluirParametro({{ $parametro->id }})"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
</div>