<tbody>
    @foreach ($marcas as $marca)
        <tr class="odd">
            <td class="sorting_1 dtr-control">{{ $marca->nome }}</td>
            <td class="d-flex justify-content-between">
                <a href="#" onClick="editarMarca({{ $marca->id }})" class="mx-auto">
                    <i class="fas fa-pen-square"></i>
                </a>

                <a href="#" onClick="historicoMarca({{ $marca->id }})">
                    <i class="fa fa-signal"></i>
                </a>

                <a class="mx-auto" wire:click="$emit('marcar_padrao', {{ $marca->id }})">
                    <i class="fas fa-star cpointer" @if($marca->padrao) style="color: #f46a6a" @endif></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>