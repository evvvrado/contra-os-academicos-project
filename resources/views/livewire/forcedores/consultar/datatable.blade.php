<tbody>
    @foreach ($fornecedores as $fornecedor)
        <tr class="odd">
            <td class="sorting_1 dtr-control">{{ $fornecedor->nome }}</td>
            <td class="sorting_1 dtr-control">{{ $fornecedor->telefone }}</td>
            <td>
                <a class="cpointer mx-auto" onclick="Livewire.emit('carregaModalEdicaoFornecedor', {{ $fornecedor->id }})"> 
                    <i class="fas fa-pen-square iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i>
                </a>
                <a class="cpointer ms-3" wire:click="removerFornecedor({{ $fornecedor->id }})">
                    <i style="color: #f46a6a!important;" class="bx bx-minus-circle iS"></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>