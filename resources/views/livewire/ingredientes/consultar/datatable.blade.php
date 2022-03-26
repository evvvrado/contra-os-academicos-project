<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-12">
                <div class="btn-group mt-2 mt-xl-0" role="group" aria-label="Basic radio toggle button group">
                    <input type="radio" class="btn-check" name="btnradio" id="categoria_0" autocomplete="off" @if(!$filtro_categoria) checked="" @endif>
                    <label class="btn btn-primary" for="categoria_0" onclick='Livewire.emit("removeFiltroCategoria")'>Todos</label>
                    @foreach(\App\Models\IngredienteCategoria::where("ativo", true)->get() as $categoria)
                        <input type="radio" class="btn-check" name="btnradio" id="categoria_{{ $categoria->id }}" autocomplete="off" @if($filtro_categoria == $categoria->id) checked="" @endif>
                        <label class="btn btn-primary" for="categoria_{{ $categoria->id }}" onclick='Livewire.emit("filtrarCategoria", {{ $categoria->id }})'>{{ $categoria->nome }}</label>
                    @endforeach
                </div>
            </div>
        </div>
        <table
            class="tabela_export table table-bordered dt-responsive  nowrap w-100 clear_both">
            <thead>
                <tr>
                    <th width="430">Nome</th>
                    <th width="90" class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredientes as $ingrediente)
                    @php
                        $marca = $ingrediente->marcas->where("padrao", true)->first();
                    @endphp
                    <tr>
                        <td>{{ $ingrediente->nome }} - (@if($marca) {{ $marca->nome }} @else Sem marca padrão @endif)</td>
            
                        <td class="d-flex justify-content-between">
                            <a onclick="Livewire.emit('carregaModalEdicaoIngrediente', {{ $ingrediente->id }})"
                                class="mx-auto cpointer">
                                <i class="fas fa-pen-square iS" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Editar"></i>
                            </a>
            
                            <svg width="18" height="18"
                                onClick="editar_marca({{ $ingrediente->id }}, @if($marca) '{{ $marca->id }}' @else null @endif)"
                                style="fill: #556ee6; cursor: pointer"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Cadastrar marca">
                                <path
                                    d="M288 464H240v-125.3l168.8-168.7C424.3 154.5 413.3 128 391.4 128H24.63C2.751 128-8.249 154.5 7.251 170l168.7 168.7V464H128c-17.67 0-32 14.33-32 32c0 8.836 7.164 16 15.1 16h191.1c8.836 0 15.1-7.164 15.1-16C320 478.3 305.7 464 288 464zM432 0c-62.63 0-115.4 40.25-135.1 96h52.5c16.62-28.5 47.25-48 82.62-48c52.88 0 95.1 43 95.1 96s-43.12 96-95.1 96c-14 0-27.25-3.25-39.37-8.625l-35.25 35.25c21.88 13.25 47.25 21.38 74.62 21.38c79.5 0 143.1-64.5 143.1-144S511.5 0 432 0z" />
                            </svg>
            
                            <a href="{{ route('painel.marcas.ingredientes', ['ingrediente' => $ingrediente]) }} "
                                class="mx-auto">
                                <i class="fa fa-cubes iS" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Marcas"
                                    style="color: #556ee6"></i>
                            </a>
            
                            <a href="{{ route('painel.ingredientes.deletar', ['ingrediente' => $ingrediente]) }} "
                                class="mx-auto">
                                <i style="color: #f46a6a!important;"
                                    class="fas fa-minus-circle iS" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Excluir"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
