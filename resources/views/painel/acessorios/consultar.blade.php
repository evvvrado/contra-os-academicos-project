@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('titulo')
    Produtos / <a style="color: unset" href="{{ route('painel.acessorios') }}">Acessórios</a>
@endsection

@php
use App\Models\Acessorio;
use App\Models\Marca;
use App\Models\MarcaAcessorio;
@endphp


{{-- <a href="{{ route('painel.acessoriocats') }}" key="t-default">Categorias de Ingrediente</a> --}}

@section('conteudo')
    <div class="row">
        <div class="col-9">
            <div class="row" style="padding: 0 15px">
                <div class=" col-sm-12 col-md-6 mb-3"
                    style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                    <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;"
                        style="padding-left: 0;" href="{{ route('painel.acessorios.cadastro') }} ">
                        <i class="bx bx-plus" aria-hidden="true"></i> Adicionar
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <i id="search-icon" class="bx bx-search" aria-hidden="true"></i>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#tab-geral" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">Geral</span>
                                    </a>
                                </li>
                                @php
                                    $c = 1;
                                    // $ativo = "active";
                                    // $cor = "#555"
                                @endphp
                                @foreach ($categorias as $categoria)
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#tab-{{ $categoria->id }}"
                                            role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">{{ $categoria->nome }}</span>
                                        </a>
                                    </li>
                                    @php
                                        // $ativo = "";
                                        $c++;
                                        // $cor = "#FFF";
                                    @endphp
                                @endforeach

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content p-3 text-muted">
                                <div class="tab-pane active" id="tab-geral" role="tabpanel">
                                    <table
                                        class="tabela_export table table-bordered dt-responsive  nowrap w-100 clear_both">
                                        <thead>
                                            <tr>
                                                <th width="430">Nome</th>
                                                <th width="90"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $acessorios = Acessorio::all();
                                            @endphp
                                            @foreach ($acessorios as $acessorio)
                                                @php
                                                    $marca = Marca::where('acessorio_id', $acessorio->id)
                                                        ->where('padrao', true)
                                                        ->first();
                                                    $nome_marca = 'Não possui marca padrão';
                                                    $marca_padrao = 'Não';
                                                    if ($marca) {
                                                        $marca_padrao = 'Sim';
                                                        $nome_marca = $marca->nome;
                                                    }
                                                @endphp
                                                <tr>
                                                    <td>{{ $acessorio->nome }} - {{ $nome_marca }}</td>
                                                    <td class="d-flex justify-content-between">
                                                        <a href="{{ route('painel.acessorios.editar', ['acessorio' => $acessorio]) }} "
                                                            class="mx-auto">
                                                            <i class="fas fa-pen-square"></i>
                                                        </a>

                                                        <svg width="17" height="17"
                                                            onClick="editar_marca({{ $acessorio->id }}, '{{ $marca_padrao }}')"
                                                            style="fill: #556ee6; cursor: pointer"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path
                                                                d="M288 464H240v-125.3l168.8-168.7C424.3 154.5 413.3 128 391.4 128H24.63C2.751 128-8.249 154.5 7.251 170l168.7 168.7V464H128c-17.67 0-32 14.33-32 32c0 8.836 7.164 16 15.1 16h191.1c8.836 0 15.1-7.164 15.1-16C320 478.3 305.7 464 288 464zM432 0c-62.63 0-115.4 40.25-135.1 96h52.5c16.62-28.5 47.25-48 82.62-48c52.88 0 95.1 43 95.1 96s-43.12 96-95.1 96c-14 0-27.25-3.25-39.37-8.625l-35.25 35.25c21.88 13.25 47.25 21.38 74.62 21.38c79.5 0 143.1-64.5 143.1-144S511.5 0 432 0z" />
                                                        </svg>

                                                        <a href="{{ route('painel.marcas.acessorios', ['acessorio' => $acessorio]) }} "
                                                            class="mx-auto">
                                                            <i class="fa fa-cubes" style="color: #556ee6"></i>
                                                        </a>

                                                        <a href="{{ route('painel.acessorios.deletar', ['acessorio' => $acessorio]) }} "
                                                            class="mx-auto">
                                                            <i style="color: #f46a6a!important;"
                                                                class="bx bx-minus-circle"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                @php
                                    // $ativo = "active";
                                    $c = 1;
                                @endphp
                                @foreach ($categorias as $categoria)
                                    @php
                                        $acessorios = Acessorio::where('acessorio_categoria_id', '=', $categoria->id)->get();
                                    @endphp
                                    <div class="tab-pane" id="tab-{{ $categoria->id }}" role="tabpanel">
                                        <table
                                            class="tabela_export table table-bordered dt-responsive  nowrap w-100 clear_both">
                                            <thead>
                                                <tr>
                                                    <th width="430">Nome</th>
                                                    <th width="90"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($acessorios as $acessorio)
                                                    @php
                                                        $marca = Marca::where('acessorio_id', $acessorio->id)
                                                            ->where('padrao', true)
                                                            ->first();
                                                        $nome_marca = 'Não possui marca padrão';
                                                        if ($marca) {
                                                            $marca_padrao = 'Sim';
                                                            $nome_marca = $marca->nome;
                                                        }
                                                    @endphp
                                                    <tr>
                                                        <td>{{ $acessorio->nome }} - {{ $nome_marca }}</td>
                                                        <td class="d-flex justify-content-between">
                                                            <a href="{{ route('painel.acessorios.editar', ['acessorio' => $acessorio]) }} "
                                                                class="mx-auto">
                                                                <i class="fas fa-pen-square"></i>
                                                            </a>

                                                            <svg width="17" height="17"
                                                                onClick="editar_marca({{ $acessorio->id }}, '{{ $marca_padrao }}')"
                                                                style="fill: #556ee6; cursor: pointer"
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                                <path
                                                                    d="M288 464H240v-125.3l168.8-168.7C424.3 154.5 413.3 128 391.4 128H24.63C2.751 128-8.249 154.5 7.251 170l168.7 168.7V464H128c-17.67 0-32 14.33-32 32c0 8.836 7.164 16 15.1 16h191.1c8.836 0 15.1-7.164 15.1-16C320 478.3 305.7 464 288 464zM432 0c-62.63 0-115.4 40.25-135.1 96h52.5c16.62-28.5 47.25-48 82.62-48c52.88 0 95.1 43 95.1 96s-43.12 96-95.1 96c-14 0-27.25-3.25-39.37-8.625l-35.25 35.25c21.88 13.25 47.25 21.38 74.62 21.38c79.5 0 143.1-64.5 143.1-144S511.5 0 432 0z" />
                                                            </svg>

                                                            <a href="{{ route('painel.marcas.acessorios', ['acessorio' => $acessorio]) }} "
                                                                class="mx-auto">
                                                                <i class="fa fa-cubes" style="color: #556ee6"></i>
                                                            </a>

                                                            <a href="{{ route('painel.acessorios.deletar', ['acessorio' => $acessorio]) }} "
                                                                class="mx-auto">
                                                                <i style="color: #f46a6a!important;"
                                                                    class="bx bx-minus-circle"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @php
                                        // $ativo = "";
                                        $c++;
                                    @endphp
                                @endforeach
                            </div>

                        </div>
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
                            <div class="buttons-row">
                                <div class="col-6">
                                    <button class="btn btn-primary" style="width: 100%;">Todas</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-secondary" style="width: 100%;">Inativos</button>
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
                                        <i class="fas fa-pen-square"></i>
                                    </a>

                                    @if ($categoria->status == 'Ativo')
                                        <a href="{{ route('cat.acessorio.status', ['acessoriocat' => $categoria]) }}"
                                            class="mx-auto">
                                            <i class="fas fa-star"></i>
                                        </a>
                                    @else
                                        <a href="{{ route('cat.acessorio.status', ['acessoriocat' => $categoria]) }}"
                                            class="mx-auto">
                                            <i class="fas fa-eye" style="color: #f46a6a"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--  Large modal example -->
    <div class="modal fade editar_cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Editar Categoria</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="form_editar" method="post" action="{{ route('painel.acessoriocats.salvar') }} ">
                        @csrf
                        <label>Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome_editar">

                        <input type="hidden" class="form-control" name="acessorio_categoria_id" id="id_editar">

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
                    <form method="post" action="{{ route('painel.acessoriocats.salvar') }} ">
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
                                    <input required name="nome" type="text" class="form-control">
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Padrão</label>
                                    <select class="form-control" required name="padrao" id="padrao_cadastro" required>
                                        <option value="">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 col-lg-3 mt-3">
                                    <label>Nome da unidade</label>
                                    <input required name="nome_unidade" type="text" class="form-control">
                                    <small>Ex: Dose</small>
                                </div>

                                <div class="form-group col-6 col-lg-3 mt-3">
                                    <label>Unidade de Medida</label>
                                    <select required name="unidade_medida" type="text" class="form-control">
                                        <option value="">Selecione</option>
                                        @foreach (config('marcas.unidades_medida') as $key => $unidade)
                                            <option value="{{ $key }}">{{ $unidade }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Quantidade do ingrediente por unidade</label>
                                    <input required name="quantidade_ingrediente_unidade" type="number" step="0.01" min="0"
                                        class="form-control">
                                    <small>Ex: O valor 50 significaria que 1 dose possui 50ml </small>
                                </div>

                                <div class="form-group col-6 col-lg-4 mt-3">
                                    <label>Nome da Embalagem</label>
                                    <input required name="embalagem" type="text" class="form-control">
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

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label class="form-label">Imagem</label>
                                    <input required name="imagem" type="file" class="form-control"
                                        style="height: 36px !important">
                                </div>
                            </div>

                            <input type="hidden" name="id_acessorio" id="id_acessorio">
                            <input type="hidden" name="tabela" value="acessorios">

                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <button id="btn-submit" type="submit"
                                class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection


@section('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        function editar_marca_existente(id, id_marca, padrao, nome, imagem, valor, unidade_medida, qtd, qtd_pacote) {
            $('#id_marca').val(id_marca);
            $('#id_ingrediente_existente').val(id);

            $('#padrao_existente').val(padrao);
            $('#nome_existente').val(nome);
            $('#preco_existente').val(valor);
            $('#unidade_medida_existente').val(unidade_medida);
            $('#qtd_existente').val(qtd);
            $('#qtd_pacote_existente').val(qtd_pacote);

            $.ajax({
                type: 'GET',
                url: '{{ route('painel.marcas.historicos') }}',
                data: {
                    id_marca
                },
                success: function(data) {
                    for (n in data) {
                        $('#corpo_precos').append('<tr></tr>');
                        console.log("oi")
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });

            $('.add_marca_existente').modal("show");
        }

        function editar_marca(id, padrao) {
            $('#id_acessorio').val(id);

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

        $(document).ready(function() {
            $('.tabela_export').DataTable({
                language: {
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "",
                    "paginate": {
                        "next": "Próximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "Último"
                    },
                    "aria": {
                        "sortAscending": ": Ordenar colunas de forma ascendente",
                        "sortDescending": ": Ordenar colunas de forma descendente"
                    },
                    "select": {
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "Nenhuma linha selecionada",
                            "1": "Selecionado 1 linha"
                        },
                        "1": "%d linha selecionada",
                        "_": "%d linhas selecionadas",
                        "cells": {
                            "1": "1 célula selecionada",
                            "_": "%d células selecionadas"
                        },
                        "columns": {
                            "1": "1 coluna selecionada",
                            "_": "%d colunas selecionadas"
                        }
                    },
                    "buttons": {
                        "copySuccess": {
                            "1": "Uma linha copiada com sucesso",
                            "_": "%d linhas copiadas com sucesso"
                        },
                        "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copyTitle": "Copiar para a Área de Transferência",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "-1": "Mostrar todos os registros",
                            "1": "Mostrar 1 registro",
                            "_": "Mostrar %d registros"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir"
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Preencher todas as células com",
                        "fillHorizontal": "Preencher células horizontalmente",
                        "fillVertical": "Preencher células verticalmente"
                    },
                    "lengthMenu": "Exibir _MENU_ resultados por página",
                    "searchBuilder": {
                        "add": "Adicionar Condição",
                        "button": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condição",
                        "conditions": {
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "string": {
                                "contains": "Contém",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "Não",
                                "notEmpty": "Não Vazio",
                                "startsWith": "Começa Com"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Excluir regra de filtragem",
                        "logicAnd": "E",
                        "logicOr": "Ou",
                        "title": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Limpar Tudo",
                        "collapse": {
                            "0": "Painéis de Pesquisa",
                            "_": "Painéis de Pesquisa (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Painéis de Pesquisa...",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "Filtrar",
                    "thousands": "."
                }
            });

            $("#btn-filtrar").click(function() {
                $("#form-filtro").submit();
            });

            $("#btn-limpar").click(function() {
                $("input[type!='hidden']").val("");
                $("select").val("-1");
            });
        });

        $(document).ready(() => {

            $(".altera_status").click(function() {
                var pid = $(this).attr("pid");
                var elem = $(this);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "GET",
                    url: "/sistema/expositores/destaque/" + pid,
                    // beforeSend: function() {
                    //     $("#botoes-prosseguir").hide();
                    //     $("#gif-ajax-direto").show();
                    // },
                    success: function(ret) {
                        if (ret == "retirado") {
                            elem.removeClass("fas");
                            elem.addClass("far");
                            elem.removeClass("active");
                        } else if (ret == "destacado") {
                            elem.removeClass("far");
                            elem.addClass("fas");
                            elem.addClass("active");
                        }

                    },
                    error: function(ret) {
                        console.log("Deu muito ruim");
                        console.log(ret);
                    }
                });
            });

            $('div.dataTables_wrapper div.dataTables_filter label').prepend($('#search-icon'));
        })
    </script>
@endsection
