<div class="col-12">
    <div class="row">
        <div class="col-12">
            <small>O custo total leva em conta o custo da receita pra uma unidade deste produto utilizando as marcas padrões.</small>
        </div>
    </div>
    <table id="datatable"
        class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
        role="grid" aria-describedby="datatable_info" style="width: 1185px;">
        <thead>
            <tr role="row">
                <th style="width: 70%">Nome</th>
                <th style="width: 10%;">Custo Adicional</th>
                <th style="width: 10%;">Qtd. Ingredientes</th>
                <th style="width: 10%;">Qtd. Acessorios</th>
                <th style="width: 10%" class="text-center"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($receitas as $receita)
                <tr class="odd">
                    <td class="sorting_1 dtr-control">{{ $receita->nome }} @if($receita->padrao) (Padrão) @endif</td>
                    <td class="sorting_1 dtr-control">R${{ number_format($receita->custos_adicionais, 2, ",", ".") }}</td>
                    <td class="sorting_1 dtr-control">{{ $receita->ingredientes->count() }}</td>
                    <td class="sorting_1 dtr-control">{{ $receita->acessorios->count() }}</td>
                    <td>
                        <a class="cpointer me-3" onclick='Livewire.emit("carregaModalCadastroIngredientes", {{ $receita->id }})'>
                            <i class="fas fa-wine-bottle iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingredientes"></i>
                        </a>
        
                        <a class="cpointer me-3" onclick='Livewire.emit("carregaModalCadastroAcessorios", {{ $receita->id }})'>
                            <i class="fas fa-glass-martini iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Acessórios"></i>
                        </a>
        
                        <a class="cpointer me-3" onclick="Livewire.emit('carregaModalEdicaoReceita', {{ $receita->id }})"> 
                            <i class="fas fa-pen-square iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i>
                        </a>
                        <a class="cpointer" wire:click="removerReceita({{ $receita->id }})">
                            <i style="color: #f46a6a!important;" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir" class="bx bx-minus-circle iS"></i>
                        </a>
        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

