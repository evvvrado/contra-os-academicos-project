@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
Produtos / <a style="color: unset" href="{{ route('painel.ingredientes') }}">Ingredientes</a>
@endsection

@php
    use App\Models\Ingrediente;
@endphp


{{-- <a href="{{ route('painel.ingredientecats') }}" key="t-default">Categorias de Ingrediente</a> --}}

@section('conteudo')

<div class="row">
    <div class="col-9">
        <div class="row" style="padding: 0 15px">
            <div class=" col-sm-12 col-md-6 mb-3" style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;"
                    style="padding-left: 0;" href="{{ route('painel.ingredientes.cadastro') }} ">
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
                            @php
                                $c = 1;
                                $ativo = "active";
                                // $cor = "#555"
                            @endphp
                            @foreach($ingredientecats as $ingredientecat)
                                <li class="nav-item">
                                    <a class="nav-link {{$ativo}}" data-bs-toggle="tab" href="#tab-{{$ingredientecat->id}}" role="tab">
                                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                        <span class="d-none d-sm-block">{{$ingredientecat->nome}}</span>    
                                    </a>
                                </li>
                                @php
                                    $ativo = "";
                                    $c++;
                                    // $cor = "#FFF";
                                @endphp
                            @endforeach
                            
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-3 text-muted">
                            @php
                                $ativo = "active";
                                $c = 1;
                            @endphp
                            @foreach($ingredientecats as $ingredientecat)
                                @php
                                    $ingredientes = Ingrediente::where("cat_id", "=", $ingredientecat->id)->get();
                                @endphp
                                        <div class="tab-pane {{$ativo}}" id="tab-{{$ingredientecat->id}}" role="tabpanel">
                                            <table class="datatable table table-bordered dt-responsive  nowrap w-100 clear_both">
                                                <thead>
                                                    <tr>
                                                        <th>Nome</th>
                                                        <th style="width: 10%" class="text-center"></th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                                        
                                                    @foreach ($ingredientes as $ingrediente)
                                                        <tr>
                                                            <td>{{$ingrediente->nome}}</td>
                                                            <td class="d-flex justify-content-between">
                                                                <a href="{{ route('painel.ingredientes.editar', ['ingrediente' => $ingrediente]) }} " class="mx-auto">
                                                                    <i class="fas fa-pen-square"></i>
                                                                </a>

                                                                @php
                                                                    $marca_id = $ingrediente->marca_id;
                                                                    if(empty($marca_id)) {
                                                                @endphp 
                                                                        <a href="#" onClick="editar_marca({{ $ingrediente->id }})" class="mx-auto">
                                                                            <i class="fa fa-circle" style="color: orange"></i>
                                                                        </a>
                                                                @php
                                                                    }
                                                                    else {
                                                                @endphp 
                                                                        <a href="#" onClick="editar_marca({{ $ingrediente->id }})" class="mx-auto">
                                                                            <i class="fa fa-check-circle"></i>
                                                                        </a>
                                                                @php
                                                                    }
                                                                @endphp

                                                                
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                @php
                                    $ativo = "";
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
            <div class=" col-sm-12 col-md-6 mb-3" style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;"
                    style="padding-left: 0;" href="#" data-bs-toggle="modal" data-bs-target=".adicionar_cat">
                    <i class="bx bx-plus" aria-hidden="true"></i> Adicionar
                </a>
            </div>

            <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 clear_both" style="background-color: #FFF !important;">
                <thead>
                    <tr>
                        <td style="border: none"><h5>Categorias</h5></td>
                        <td style="border: none"></td>
                    </tr>
                </thead>
                <tbody>                                                        
                    @foreach ($ingredientecats as $ingredientecat)
                        <tr>
                            <td>{{$ingredientecat->nome}}</td>
                            <td class="d-flex justify-content-between">
                                <a href="#" onClick="editar_categoria({{$ingredientecat->id}}, '{{$ingredientecat->nome}}')" class="mx-auto">
                                    <i class="fas fa-pen-square"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 

<!--  Large modal example -->
<div class="modal fade add_marca" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Editar Marca</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('painel.marcas.cadastrar')}}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="col-lx-12">
                        <div class="row">
                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Nome</label>
                                <input required name="nome" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Padrão</label>
                                <select class="form-control" required name="padrao" required>
                                    <option value="">Selecione</option>
                                    <option value="Sim">Sim</option>
                                    <option value="Não">Não</option>
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Preço</label></label>
                                <input required class="form-control dinheiro" name="preco">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Quantidade</label>
                                <input required name="qtd" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-4 mt-3">
                                <label>Unidade de Medida</label>
                                <select required name="unidade_medida" type="text" class="form-control">
                                    <option value="">Selecione</option>
                                    <option value="litros">Litros</option>
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label class="form-label">Imagem</label>
                                <input required name="imagem" type="file" class="form-control" style="height: 36px !important">
                            </div>
                        </div>

                        <input type="hidden" name="id_ingrediente" id="id_ingrediente">
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

<!--  Large modal example -->
<div class="modal fade editar_cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Editar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form_editar" method="post" action="{{ route('painel.ingredientecats.editar') }} ">
                    @csrf
                    <label>Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome_editar">

                    <input type="hidden" class="form-control" name="id" id="id_editar">

                    <br>

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!--  Large modal example -->
<div class="modal fade adicionar_cat" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Adicionar Categoria</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('painel.ingredientecats.cadastrar') }} ">
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
<!-- Required datatable js -->
<script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script>

    function editar_marca(id) {
        $('#id_ingrediente').val(id);

        $('.add_marca').modal("show");
    }

    function editar_categoria(id, categoria) {
        $('#nome_editar').val(categoria);
        $('#id_editar').val(id);

        $('.editar_cat').modal("show");
        
    }

    $(document).ready(function() {
        $('.datatable').DataTable({
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

    $(document).ready(() => {

        $('div.dataTables_wrapper div.dataTables_filter label').prepend($('#search-icon'));
    })
</script>
@endsection