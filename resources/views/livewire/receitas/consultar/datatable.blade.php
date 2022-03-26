<tbody>
    @foreach ($receitas as $receita)
        <tr class="odd">
            <td class="sorting_1 dtr-control">{{ $receita->nome }} @if($receita->padrao) (Padrão) @endif</td>
            <td class="sorting_1 dtr-control">R${{ number_format($receita->custos_adicionais, 2, ",", ".") }}</td>
            <td class="sorting_1 dtr-control">{{ $receita->ingredientes->count() }}</td>
            <td>
                <a class="cpointer me-3" onclick='Livewire.emit("carregaModalCadastroIngredientes", {{ $receita->id }})'>
                    <i class="fas fa-list iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Ingredientes"></i>
                </a>
                <a class="cpointer" onclick="Livewire.emit('carregaModalEdicaoReceita', {{ $receita->id }})"> 
                    <i class="fas fa-pen-square iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i>
                </a>
                <a class="cpointer ms-3" wire:click="removerReceita({{ $receita->id }})">
                    <i style="color: #f46a6a!important;" data-bs-toggle="tooltip" data-bs-placement="top" title="Excluir" class="bx bx-minus-circle iS"></i>
                </a>

            </td>
        </tr>
    @endforeach
</tbody>