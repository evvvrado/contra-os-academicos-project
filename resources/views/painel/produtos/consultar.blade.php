@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('titulo')
    Produtos / <a style="color: unset" href="{{ route('painel.produtos') }}">Produtos</a>
@endsection


@php
use App\Models\ProdutoIngrediente;
use App\Models\MarcaIngrediente;
use App\Models\MarcaAcessorio;
use App\Models\ProdutoAcessorio;
use App\Models\Produto;
use App\Models\Parametro;
@endphp

@section('conteudo')
    <div class="row">
        <div class="col-9">
            <div class="row" style="padding: 0 15px">
                <div class=" col-sm-12 col-md-6 mb-3"
                    style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                    <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;"
                        style="padding-left: 0;" href="{{ route('painel.produtos.cadastro') }} ">
                        <i class="bx bx-plus" aria-hidden="true"></i> Adicionar
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <i id="search-icon" class="bx bx-search" aria-hidden="true"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable"
                                    class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                    role="grid" aria-describedby="datatable_info" style="width: 1185px;">
                                    <thead>
                                        <tr role="row">
                                            <th width="90"></th>
                                            <th style="width: 60%" class="sorting_asc" tabindex="0"
                                                aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;"
                                                aria-sort="ascending" aria-label="Name: activate to sort column descending">
                                                Nome
                                            </th>
                                            <th>Receitas</th>
                                            <th style="width: 5%;"></th>
                                            <th style="width: 10%" class="text-center"></th>
                                        </tr>
                                    </thead>
                                    @livewire('produtos.consultar.datatable')
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-3">


            <div class="col-sm-12 col-md-6 mb-3"
                style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                <a class="btn" style="padding-left: 21px; color: white; height: 100%; cursor: default;"
                    href="">Filtros</a>
            </div>
            <div class="card filter-body">
                <div class="card-body">

                    <form id="form-filtro" action="{{ route('painel.noticias') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="titulo">Título</label>
                            <input id="titulo" name="titulo" type="text" class="form-control"
                                @if (isset($filtros) && isset($filtros['titulo'])) value="{{ $filtros['titulo'] }}" @endif>
                        </div>
                        <div class="mb-3">
                            <label class="control-label">Categoria</label>
                            <select class="form-control" name="categoria_id">
                                <option value="-1">Todas</option>
                                @foreach (\App\Models\Categoria::all() as $categoria)
                                    <option value="{{ $categoria->id }}"
                                        @if (isset($filtros) && isset($filtros['categoria_id']) && $filtros['categoria_id'] == $categoria->id) selected @endif>
                                        {{ $categoria->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="autor">Autor</label>
                            <input id="autor" name="autor" type="text" class="form-control"
                                @if (isset($filtros) && isset($filtros['autor'])) value="{{ $filtros['autor'] }}" @endif>
                        </div>
                        <div class="mb-3">
                            <label for="publicacao">Data de Publicação</label>
                            <input id="publicacao" name="publicacao" type="date" class="form-control"
                                @if (isset($filtros) && isset($filtros['publicacao'])) value="{{ $filtros['publicacao'] }}" @endif>
                        </div>
                    </form>



                    <div class="button-row">
                        <div class="row">
                            <div class="col-6">
                                <button id="btn-filtrar" type="button" style="width:100%;"
                                    class="btn btn-success waves-effect waves-light">
                                    <i class="bx bx-check-double font-size-16 align-middle me-2"></i> Filtrar
                                </button>
                            </div>
                            <div class="col-6">
                                <button id="btn-limpar" type="button" style="width:100%;"
                                    class="btn btn-danger waves-effect waves-light">
                                    <i class="bx bx-block font-size-16 align-middle me-2"></i> Limpar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection


@section('scripts')
    <!-- Required datatable js -->
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
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

            $('div.dataTables_wrapper div.dataTables_filter label').prepend($('#search-icon'));
        })
    </script>
@endsection
