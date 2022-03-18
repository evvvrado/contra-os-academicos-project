<table class="table">
    <thead>
        <tr>
            <th>Data</th>
            <th>Valor</th>
            <th></th>
        </tr>
    </thead>
    @if($marca)
        <tbody>
            @php
                $antigo = null;
            @endphp
            @foreach($marca->historico->take(10) as $dado)
                <tr>
                    <td scope="row">{{ date("d/m/Y H:i:s", strtotime($dado->created_at)) }}</td>
                    <td>R${{ number_format($dado->valor, 2, ",", ".") }}</td>
                    <td>
                        @if($antigo && $antigo < $dado->valor)
                            <i class="fas fa-arrow-up" style="color: #45f248;"></i>
                        @elseif($antigo && $antigo > $dado->valor)
                            <i class="fas fa-arrow-down" style="color: red;"></i>
                        @endif
                    </td>
                </tr>
                @php
                    $antigo = $dado->valor;
                @endphp
            @endforeach
        </tbody>
    @endif
</table>
