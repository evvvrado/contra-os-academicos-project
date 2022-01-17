@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Destaques
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNovoDestaque" role="button">Novo Destaque</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Título</th>
                            <th>Descrição</th>
                            <th>Início</th>
                            <th>Fim</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach($destaques as $destaque)
                            <tr>
                                <td>
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <a href="#" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-bars" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu" style="margin: 0px;">
                                            <a id="" class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#modalEditaDestaque{{$destaque->id}}"><i class="bx bx-edit-alt pr-3"></i> Editar</a>
                                            <a id="" class="dropdown-item" role="button" data-bs-toggle="modal" data-bs-target="#modalExcluiDestaque{{$destaque->id}}"><i class="fas fa-trash-alt pr-3"></i> Excluir</a>
                                        </div>
                                    </div>
                                </td>
                                <td>{{$destaque->titulo}}</td>
                                <td>{{$destaque->descricao}}</td>
                                <td>{{date("d/m/Y H:i:s", strtotime($destaque->inicio))}}</td>
                                <td>{{date("d/m/Y H:i:s", strtotime($destaque->fim))}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->


<div class="modal fade" id="modalNovoDestaque" tabindex="-1" role="dialog" aria-labelledby="modalNovoDestaqueLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('painel.destaque.cadastrar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="card-title mb-4 mt-4">Imagem</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img id="foto-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="width: 100%; max-width:300px;" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                    <input name="imagem" id="foto-upload" style="display: none;" type="file">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-12 mt-3">
                                    <label for="titulo">Título</label>
                                    <input type="text" class="form-control" name="titulo"
                                        id="titulo">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="descricao">Descrição</label>
                                    <textarea class="form-control" name="descricao"
                                        id="descricao"></textarea>
                                </div>
                            </div>
                            <hr class="mt-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="inicio">Início</label>
                                    <input type="datetime-local" class="form-control" name="inicio"
                                        id="inicio">
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="fim">Fim</label>
                                    <input type="datetime-local" class="form-control" name="fim"
                                        id="fim">
                                </div>
                            </div>
                            <hr class="mt-4">
                        </div>
                    </div>     
                    <div class="row mt-3">
                        <div class="col-12 text-end">
                            <button type="submit"
                                class="btn btn-primary">Salvar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@foreach($destaques as $destaque)
    <div class="modal fade" id="modalEditaDestaque{{$destaque->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditaDestaque{{$destaque->id}}Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="{{route('painel.destaque.salvar', ['destaque' => $destaque])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 text-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="card-title mb-4 mt-4">Imagem</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        @if(!$destaque->imagem)
                                            <img id="foto-preview{{$destaque->id}}" src="{{asset('admin/images/thumb-padrao.png')}}" style="width: 100%; max-width:300px;" alt="">
                                        @else
                                            <img id="foto-preview{{$destaque->id}}" src="{{asset($destaque->imagem)}}" style="width: 100%; max-width:300px;" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="foto-upload{{$destaque->id}}">Escolher</label>
                                        <input name="imagem" id="foto-upload{{$destaque->id}}" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="form-group col-12 mt-3">
                                        <label for="titulo">Título</label>
                                        <input type="text" class="form-control" name="titulo"
                                            id="titulo" value="{{$destaque->titulo}}">
                                    </div>
                                    <div class="form-group col-12 mt-3">
                                        <label for="descricao">Descrição</label>
                                        <textarea class="form-control" name="descricao"
                                            id="descricao">{{$destaque->descricao}}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="form-group col-12 col-lg-6 mt-3">
                                        <label for="inicio">Início</label>
                                        <input type="datetime-local" class="form-control" name="inicio"
                                            id="inicio" value="{{date('Y-m-d', strtotime($destaque->inicio)) . 'T' . date('H:i:s', strtotime($destaque->inicio))}}">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mt-3">
                                        <label for="fim">Fim</label>
                                        <input type="datetime-local" class="form-control" name="fim"
                                            id="fim" value="{{date('Y-m-d', strtotime($destaque->fim)) . 'T' . date('H:i:s', strtotime($destaque->fim))}}">
                                    </div>
                                </div>
                                <hr class="mt-4">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-end">
                                <button type="submit"
                                    class="btn btn-primary">Salvar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalExcluiDestaque{{$destaque->id}}" tabindex="-1" role="dialog" aria-labelledby="modalExcluiDestaque{{$destaque->id}}Label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h5>Ao excluir a destaque "{{$destaque->nome}}" a mesma será removida de todas as notícias onde é utilizada. Deseja continuar ?</h5>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <a name="" id="" class="btn btn-danger" href="{{route('painel.destaque.deletar', ['destaque' => $destaque])}}" role="button">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    @foreach($destaques as $destaque)
        <script>
            var inp = document.getElementById("foto-upload{!! $destaque->id !!}");
            inp.addEventListener('change', function(e){
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(){
                    document.getElementById("foto-preview{!! $destaque->id !!}").src = this.result;
                };
                reader.readAsDataURL(file);
            },false);
        </script>
    @endforeach
    <script>
        var inp = document.getElementById('foto-upload');
        inp.addEventListener('change', function(e){
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(){
                document.getElementById('foto-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        },false);
    </script>
    
    
    <script>
        
        
        $(document).ready(function() {
            $('#datatable').DataTable( {
                language:{
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 até 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "Pesquisar",
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
                    "searchPlaceholder": "Digite um termo para pesquisar",
                    "thousands": "."
                } 
            } );
        } );    
    </script> 

@endsection