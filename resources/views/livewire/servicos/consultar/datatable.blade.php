<tbody>
    @foreach ($servicos as $servico)
        <tr>
            <td>{{ $servico->nome }}</td>
            <td>{{ $servico->descricao }}</td>
            <td>R$ {{ str_replace('.', ',', $servico->valor) }}</td>
            <td>
                @if ($servico->incluso)
                    Sim
                @else
                    Não
                @endif
            </td>
            <td class="d-flex justify-content-between">
                <a href="{{ route('painel.servicos.editar', ['servico' => $servico]) }} " class="mx-auto">
                    <i class="fas fa-pen-square iS"></i>
                </a>
                @if ($servico->incluso)
                    <a class="cpointer" onclick="Livewire.emit('carregaModalParametros', {{ $servico->id }})"
                        class="mx-auto">
                        <i class="fas fa-cog iS"></i>
                    </a>
                @endif
                <a href="{{ route('painel.servicos.deletar', ['servico' => $servico]) }} " class="mx-auto">
                    <i style="color: #f46a6a!important;" class="bx bx-minus-circle iS"></i>
                </a>
            </td>
        </tr>
    @endforeach
</tbody>
