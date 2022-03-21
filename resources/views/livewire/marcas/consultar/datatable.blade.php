<tbody>
    @foreach ($marcas as $marca)
        <tr class="odd">
            <td class="sorting_1 dtr-control">{{ $marca->nome }}</td>
            <td class="d-flex justify-content-between">
                <a href="#" onClick="editarMarca({{ $marca->id }})" class="mx-auto">
                    <i class="fas fa-pen-square iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i>
                </a>

                <a href="#" onClick="historicoMarca({{ $marca->id }})">
                    <i class="fa fa-signal iS " data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Histórico de Preço"></i>
                </a>

                <a class="mx-auto" wire:click="$emit('marcar_padrao', {{ $marca->id }})">
                    <i class="fas fa-cocktail cpointer iS" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Definir como padrão" @if ($marca->padrao) style="color: #f46a6a" @endif></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
