@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@php
    use App\Models\MarcaHistorico;
@endphp

@section('titulo')
Produtos / <a style="color: unset" href="#">Marcas</a>
@endsection


@section('conteudo')

<div class="row">
    <div class="col-9">
        <div class="row">
            <div class="card">
                <div class="card-body">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info"
                            style="width: 1185px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 80%;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Nome
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($marcas as $marca)
                                    <tr class="odd">
                                        <td class="sorting_1 dtr-control">{{ $marca->nome }}</td>
                                        <td class="d-flex justify-content-between">
                                            <a href="#" onClick="editar_marca_existente({{ $ingrediente->id }}, {{ $marca->id }}, '{{ $marca->padrao }}', '{{ $marca->nome }}', '{{ $marca->imagem }}', '{{ $marca->valor }}', '{{ $marca->unidade_medida }}', '{{ $marca->qtd }}', '{{ $marca->qtd_pacote }}', '{{ $marca->nome_pacote }}')" class="mx-auto">
                                                <i class="fas fa-pen-square"></i>
                                            </a>

                                            <a href="#" onClick="modal_historico({{ $marca->id }})">
                                                <i class="fa fa-signal"></i>
                                            </a>

                                            <a href="{{ route('painel.marcas.padrao_ingr', ['marca' => $marca, 'ingrediente' => $ingrediente->id]) }}" class="mx-auto">
                                                <i class="fas fa-star" @if($marca->padrao != "Sim") style="color: #f46a6a" @endif></i>
                                            </a>
                                        </td>
                                    </tr>

                                    {{-- <!--  Large modal example -->
                                    <div class="modal fade modal_historico{{ $marca->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myLargeModalLabel">Editar Marca</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="table-responsive">
                                                        <table class="table table-bordered mb-0">

                                                            <thead>
                                                                <tr>
                                                                    <th>Valor</th>
                                                                    <th>Data</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="corpo_precos">
                                                                <tr>
                                                                    <td>2,40</td>
                                                                    <td>24/11/2022</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>

                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal --> --}}

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

    <!--  Large modal example -->
<div class="modal fade add_marca_existente" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Editar Marca</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="marca_existente" action="{{route('painel.marcas.salvar')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="col-lx-12">
                        <div class="row">
                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Nome</label>
                                <input id="nome_existente" required name="nome" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Quantidade por produto</label>
                                <input required name="qtd" id="qtd_existente" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Nome do pacote</label>
                                <input required name="nome_pacote" id="nome_pacote_existente" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Preço do pacote</label></label>
                                <input required class="form-control dinheiro" id="preco_existente" name="preco">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Quantidade por pacote</label>
                                <input required name="qtd_pacote" id="qtd_pacote_existente" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Unidade de Medida</label>
                                <select required name="unidade_medida" id="unidade_medida_existente" type="text" class="form-control">
                                    <option value="">Selecione</option>
                                    <option value="litros">Litros</option>
                                    <option value="mililitros">Mililítros</option>
                                    <option value="gramas">Gramas</option>
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label class="form-label">Imagem</label>
                                <input id="imagem_existente" name="imagem" type="file" class="form-control" style="height: 36px !important">
                            </div>
                        </div>

                        <input type="hidden" name="id_marca" id="id_marca">
                        <input type="hidden" name="id_ingrediente" id="id_ingrediente_existente">
                        <input type="hidden" name="tabela" value="ingredientes">

                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
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
    function modal_historico(id) {
        $('.modal_historico'.id).modal("show");
    }

    function editar_marca_existente(id, id_marca, padrao, nome, imagem, valor, unidade_medida, qtd, qtd_pacote, nom_pacote) {
        $('#id_marca').val(id_marca);

        $('#id_ingrediente_existente').val(id);

        $('#padrao_existente').val(padrao);
        $('#nome_existente').val(nome);
        $('#preco_existente').val(valor);
        $('#unidade_medida_existente').val(unidade_medida);
        $('#qtd_existente').val(qtd);
        $('#qtd_pacote_existente').val(qtd_pacote);
        $('#nome_pacote_existente').val(nom_pacote);

        $('.add_marca_existente').modal("show");
    }

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

            $("#btn-filtrar").click(function(){
                $("#form-filtro").submit();
            });

            $("#btn-limpar").click(function(){
                $("input[type!='hidden']").val("");
                $("select").val("-1");
            });
        });
</script>
@endsection