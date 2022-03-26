<tbody>
    @foreach ($produtos as $produto)
        <tr class="odd">
            <td class="text-center">
                <img src="{{ asset($produto->imagem_preview) }}" width="80" height="80" alt="">
            </td>
            <td class="sorting_1 dtr-control">{{ $produto->nome }}</td>
            <td>{{ $produto->receitas->count() }}</td>
            <td class="text-center">
                <i class="fas fa-calendar iS c-pointer"
                    @if ($produto->lancamento) style="color: var(--principal);" @endif data-bs-toggle="tooltip"
                    data-bs-placement="top"
                    @if ($produto->lancamento) title="Retirar dos lancamentos" @else title="Marcar como lançamento" @endif
                    wire:click="$emit('marcar_lancamento', {{ $produto->id }})"></i>
            </td>
            <td class="text-center">
                <a href="{{ route('painel.produtos.editar', ['produto' => $produto]) }}" class="me-3">
                    <i class="fas fa-pen-square iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"></i>
                </a>
                <a href="{{ route('painel.receitas', ['produto' => $produto]) }}" class="">
                    <i class="fas fa-list iS" data-bs-toggle="tooltip" data-bs-placement="top" title="Receitas"></i>
                </a>
                <a href="{{ route('painel.produtos.deletar', ['produto' => $produto]) }} " class="ms-3">
                    <i style="color: #f46a6a!important;" class="fas fa-minus-circle iS" data-bs-toggle="tooltip"
                        data-bs-placement="top" title="Excluir"></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
