<tbody>
    @foreach ($produtos as $produto)
        <tr class="odd">
            <td class="text-center">
                <img src="{{ asset($produto->imagem_preview) }}" width="80" height="80" alt="">
            </td>
            <td class="sorting_1 dtr-control">{{ $produto->nome }}</td>
            <td class="text-center">
                <i class="fas fa-arrow-up fa-lg cpointer"
                    @if ($produto->lancamento) style="color: #45f248;" @endif data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    @if ($produto->lancamento) title="Retirar dos lancamentos" @else title="Marcar como lançamento" @endif
                    wire:click="$emit('marcar_lancamento', {{ $produto->id }})"></i>
            </td>
            <td class="text-center">
                <a href="{{ route('painel.produtos.editar', ['produto' => $produto]) }}" class="mx-auto">
                    <i class="fas fa-pen-square fa-2x"></i>
                </a>

                <a href="{{ route('painel.produtos.deletar', ['produto' => $produto]) }} " class="ms-3">
                    <i style="color: #f46a6a!important;" class="fas fa-minus-circle fa-2x"></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
