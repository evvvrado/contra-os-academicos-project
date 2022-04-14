@extends('painel.template.main')

@section('styles')

@endsection

@section('titulo')
    Produtos / <a style="color: unset" href="{{ route('painel.ingredientes') }}">Ingredientes</a>
@endsection

@php
use App\Models\Ingrediente;
use App\Models\Marca;
@endphp


{{-- <a href="{{ route('painel.ingredientecats') }}" key="t-default">Categorias de Ingrediente</a> --}}

@section('conteudo')
    <div class="row">
        <div class="col-9">
            <div class="row" style="padding: 0 15px">
                <div class=" col-sm-12 col-md-6 mb-3"
                    style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                    <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;"
                        style="padding-left: 0;" onclick="Livewire.emit('carregaModalCadastroIngrediente')">
                        <i class="bx bx-plus" aria-hidden="true"></i> Adicionar
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        {{-- <i id="search-icon" class="bx bx-search" aria-hidden="true"></i> --}}
                        
                        @livewire('ingredientes.consultar.datatable')

                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="row">
                <div class=" col-sm-12 col-md-6 mb-3"
                    style=" border-radius: 5px; background-color:var(--principal); width: 100%;"> <a name="" id="button-add"
                        class="btn" style="height: 100%; padding-left: 0; pointer-events: none;"
                        style="padding-left: 0;" href="#" data-bs-toggle="modal" data-bs-target=".adicionar_cat">
                        Categorias
                    </a>
                    <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0; float: right;"
                        style="padding-left: 0;" href="#" data-bs-toggle="modal" data-bs-target=".adicionar_cat">
                        <i class="bx bx-plus" aria-hidden="true"></i>
                    </a>
                </div>
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 clear_both"
                    style="background-color: #FFF !important;">
                    <thead>
                        <th colspan="2">
                            <div class="button-row">
                                <div class="row">

                                    <div class="col-6">
                                        <button class="btn btn-primary" style="width: 100%;">Todas</button>
                                    </div>
                                    <div class="col-6">
                                        <button class="btn btn-secondary" style="width: 100%;">Inativos</button>
                                    </div>
                                </div>
                            </div>
                        </th>
                    </thead>
                    <tbody>
                        @foreach ($categorias as $categoria)
                            <tr>
                                <td>{{ $categoria->nome }}</td>
                                <td class="d-flex justify-content-between">
                                    <a href="#"
                                        onClick="editar_categoria({{ $categoria->id }}, '{{ $categoria->nome }}')"
                                        class="mx-auto">
                                        <i class="fas fa-pen-square iS"></i>
                                    </a>

                                    {{-- <a href="{{ route('cat.ingrediente.status', ['categoria' => $categoria]) }}"
                                        class="mx-auto">
                                        <i class="fas fa-eye iS"
                                            @if ($categoria->status != 'Ativo') style="color: #f46a6a" @endif></i> --}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" wire:ignore.self id="modalCadastroIngrediente" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ingrediente</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('ingredientes.consultar.modal-cadastro')
                </div>
            </div>
        </div>
    </div>
    <!--  Large modal example -->
    <div class="modal fade add_marca" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Cadastrar Marca</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('painel.marcas.cadastrar') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="col-lx-12">
                            <div class="row">
                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Nome</label>
                                    <input required name="nome" type="text" class="form-control" maxlength="100">
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Padrão</label>
                                    <select class="form-control" required name="padrao" id="padrao_cadastro" required>
                                        <option value="">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 col-lg-4 mt-3">
                                    <label>Nome da Embalagem</label>
                                    <input required name="embalagem" type="text" class="form-control" maxlength="50">
                                    <small>Ex: Garrafa</small>
                                </div>

                                <div class="form-group col-6 col-lg-4 mt-3">
                                    <label>Quantidade por Embalagem</label>
                                    <input required name="quantidade_embalagem" type="number" step="1" min="0"
                                        class="form-control">
                                    <small>Ex: 1000 (unidade de medida selecionada)</small>
                                </div>

                                <div class="form-group col-6 col-lg-4 mt-3">
                                    <label>Preço da Embalagem</label></label>
                                    <input required class="form-control" name="valor_embalagem" type="number" step="0.01"
                                        min="0">
                                </div>

                                <div class="form-group col-12 col-lg-12 mt-3">
                                    <label class="form-label">Imagem</label>
                                    <input required name="imagem" type="file" class="form-control"
                                        style="height: 36px !important">
                                </div>
                            </div>

                            <input type="hidden" name="id_ingrediente" id="id_ingrediente">
                            <input type="hidden" name="tabela" value="ingredientes">

                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <button id="btn-submit" type="submit"
                                class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light" data-bs-dismiss="modal"
                                aria-label="Close">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Large modal example -->
    <div class="modal fade editar_cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Editar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_editar" method="post" action="{{ route('painel.ingredientecats.salvar') }} ">
                        @csrf
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome_editar">

                        <input type="hidden" class="form-control" name="ingrediente_categoria_id" id="id_editar">

                        <br>

                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--  Large modal example -->
    <div class="modal fade adicionar_cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Adicionar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('painel.ingredientecats.salvar') }} ">
                        @csrf
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome">

                        <br>

                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('scripts')
    <script>
        function editar_marca(id, padrao) {
            $('#id_ingrediente').val(id);

            if (padrao == "Sim") {
                $("#padrao_cadastro").prop("disabled", true);
            }

            $('.add_marca').modal("show");
        }

        function editar_categoria(id, categoria) {
            $('#nome_editar').val(categoria);
            $('#id_editar').val(id);

            $('.editar_cat').modal("show");

        }
    </script>
@endsection
