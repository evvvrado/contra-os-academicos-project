@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('titulo')
    Orçamentos
@endsection


@section('conteudo')
    <div class="row">
<<<<<<< HEAD
        <div class="col-12">
            <div class="row">
                <div class=" col-12 mb-3" style="border-radius: 5px; background-color:var(--principal);">
                    <a name="" style="opacity: 0; pointer-events: none; id=" button-add" class="btn"
=======
        <div class="col-9">
            <div class="row" style="padding: 0 15px">
                <div class=" col-12 mb-3" style="border-radius: 5px; background-color:var(--principal);">
                    <a name="" style="opacity: 0; pointer-events: none; id=" class="btn"
>>>>>>> 81b70ac21abcf7e4ba386b3daa5984a060a0e950
                        style="height: 100%; padding-left: 0;" style="padding-left: 0;" href="#">
                        <i class="bx bx-plus" aria-hidden="true"></i> Adicionar
                    </a>
                </div>
<<<<<<< HEAD
            </div>

            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <i id="search-icon" class="bx bx-search" aria-hidden="true"></i>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table
                                class="tabela_export table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                role="grid" aria-describedby="datatable_info">
                                <thead>
                                    <tr role="row">
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>E-mail</th>
                                        <th>Data</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orcamentos as $orcamento)
                                        <tr class="odd">
                                            <td class="sorting_1 dtr-control">{{ $orcamento->nome }}</td>
                                            <td class="sorting_1 dtr-control">{{ $orcamento->telefone }}</td>
                                            <td class="sorting_1 dtr-control">{{ $orcamento->email }}</td>
                                            <td class="sorting_1 dtr-control">{{ $orcamento->created_at }}</td>
                                            <td>
                                                <a class="btn btn-success"
                                                    href="{{ route('painel.leads.orcamento', ['orcamento' => $orcamento]) }}"
                                                    role="button">Orçamentos</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
=======

                <div class="card">
                    <div class="card-body">
                        <i id="search-icon" class="bx bx-search" aria-hidden="true"></i>
                        <div class="row">
                            <div class="col-sm-12">
                                <table
                                    class="tabela_export table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                    role="grid" aria-describedby="datatable_info">
                                    <thead>
                                        <tr role="row">
                                            <th>Data</th>
                                            <th>Cliente</th>
                                            <th>Tipo</th>
                                            <th>Valor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($orcamentos as $orcamento)
                                            <tr class="odd">
                                                <td class="sorting_1 dtr-control">{{ date("d/m/Y H:i:s", strtotime($orcamento->created_at))}}</td>
                                                <td class="sorting_1 dtr-control">{{ $orcamento->cliente->nome }}</td>
                                                <td class="sorting_1 dtr-control">{{ config("orcamentos.tipos")[$orcamento->tipo] }}</td>
                                                <td class="sorting_1 dtr-control">R${{ number_format($orcamento->valor, 2, ",", ".") }}</td>
                                                <td class="text-center"><a href="{{ route('painel.orcamento.visualizar', ['orcamento' => $orcamento]) }}"><i class="fa fa-search" aria-hidden="true"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-3">


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
                            <label for="titulo">Nome</label>
                            <input id="titulo" name="titulo" type="text" class="form-control"
                                @if (isset($filtros) && isset($filtros['titulo'])) value="{{ $filtros['titulo'] }}" @endif>
                        </div>
                        <div class="mb-3">
                            <label for="titulo">Telefone</label>
                            <input id="titulo" name="titulo" type="text" class="form-control"
                                @if (isset($filtros) && isset($filtros['titulo'])) value="{{ $filtros['titulo'] }}" @endif>
                        </div>
                        <div class="mb-3">
                            <label for="publicacao">Data de Publicação</label>
                            <div class="row">
                                <div class="col-6">
                                    <input id="publicacao" name="publicacao" type="date" class="form-control"
                                        @if (isset($filtros) && isset($filtros['publicacao'])) value="{{ $filtros['publicacao'] }}" @endif>
                                </div>
                                <div class="col-6">
                                    <input id="publicacao" name="publicacao" type="date" class="form-control"
                                        @if (isset($filtros) && isset($filtros['publicacao'])) value="{{ $filtros['publicacao'] }}" @endif>
                                </div>
                            </div>
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
>>>>>>> 81b70ac21abcf7e4ba386b3daa5984a060a0e950
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <!-- Required datatable js -->
<<<<<<< HEAD
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
=======
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
    <script>
        $(document).ready(function() {
            $.fn.dataTable.moment( 'DD/MM/YYYY HH:mm:ss' );    //Formatação com Hora
>>>>>>> 81b70ac21abcf7e4ba386b3daa5984a060a0e950
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
                },
                order: [
<<<<<<< HEAD
                    [3, "desc"]
=======
                    [0, "desc"]
>>>>>>> 81b70ac21abcf7e4ba386b3daa5984a060a0e950
                ]

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
