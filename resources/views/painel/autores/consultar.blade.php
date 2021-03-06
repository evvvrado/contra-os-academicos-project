@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Autores @if(isset($tipo)) {{$tipo}}  @endif
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" href="#" data-bs-toggle="modal" data-bs-target=".cadastrar_autor" role="button">Novo</a>
@endsection

@section('conteudo')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach($autores as $autor)
                            <tr>
                                <td>{{$autor->nome}}</td>
                                <td class="text-center">
                                    <a href="#" data-bs-toggle="modal" data-bs-target=".editar_autor{{ $autor->id }}" class="btn btn-success" role="button">Editar</a>
                                    <a class="btn btn-danger" href="" role="button">Inativar</a>
                                </td>
                            </tr>

                            <!--  Large modal example -->
                            <div class="modal fade editar_autor{{ $autor->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myLargeModalLabel">Editando Autor</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('painel.autor.salvar', ['autor' => $autor])}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-12 text-center">
                                                        <img class="escolher_imagem" id="foto-preview{{ $autor->id }}" src="{{asset($autor->foto)}}" style="max-height: 200px;" alt="">
                                                    </div>
                                                    <div class="row mt-3">
                                                        <div class="col-12 text-center">
                                                            <label class="btn btn-primary" for="foto-upload{{ $autor->id }}">Escolher</label>
                                                            <input onchange="mudar_foto(this.files, {{ $autor->id }})" name="foto" id="foto-upload{{ $autor->id }}" style="display: none;" type="file">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <label class="mt-3" for="nome">Nome</label>
                                                        <input type="text" class="form-control" name="nome" id="nome" value="{{ $autor->nome }}" required>

                                                        <label class="mt-3" for="link">Link de Divulga????o</label>
                                                        <input type="text" class="form-control" name="link" id="link" value="{{ $autor->link }}">

                                                        <label class="mt-3" for="resumo">Resumo</label>
                                                        <textarea rows="8" class="form-control" name="resumo" id="resumo" required>{{ $autor->resumo }}</textarea>
                                                    </div>
                                            
                                                    <div class="col-lg-4 mt-5" >
                                                        <button type="submit" class="btn btn-primary px-5">Salvar</button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<!--  Large modal example -->
<div class="modal fade cadastrar_autor" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Cadastrando Autor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('painel.autor.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="escolher_imagem" id="foto-preview0" src="{{asset('admin/imagens/thumb-padrao.png')}}" style="max-height: 200px;" alt="">
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="foto-upload0">Escolher</label>
                                <input onchange="mudar_foto(this.files, 0)" name="foto" id="foto-upload0" style="display: none;" type="file" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <label class="mt-3" for="nome">Nome</label>
                            <input type="text" class="form-control" name="nome" id="nome" required>

                            <label class="mt-3" for="link">Link de divulga????o</label>
                            <input type="text" class="form-control" name="link" id="link">

                            <label class="mt-3" for="resumo">Resumo</label>
                            <textarea rows="8" class="form-control" name="resumo" id="resumo" required></textarea>
                        </div>
                
                        <div class="col-lg-4 mt-5" >
                            <button type="submit" class="btn btn-primary px-5">Salvar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script>
        function mudar_foto(files, id) {
            var inp = document.getElementById('foto-upload'+id);
            var file = files[0];
            var reader = new FileReader();
            reader.onload = function(){
                console.log(this.result)
                document.getElementById('foto-preview'+id).src = this.result;
            };
            reader.readAsDataURL(file);
        }

        $(document).ready(function() {

            $('#datatable').DataTable( {
                language:{
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ at?? _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 at?? 0 de 0 registros",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoThousands": ".",
                    "loadingRecords": "Carregando...",
                    "processing": "Processando...",
                    "zeroRecords": "Nenhum registro encontrado",
                    "search": "Pesquisar",
                    "paginate": {
                        "next": "Pr??ximo",
                        "previous": "Anterior",
                        "first": "Primeiro",
                        "last": "??ltimo"
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
                            "1": "1 c??lula selecionada",
                            "_": "%d c??lulas selecionadas"
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
                        "collection": "Cole????o  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a ??rea de transfer??ncia do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copyTitle": "Copiar para a ??rea de Transfer??ncia",
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
                        "fill": "Preencher todas as c??lulas com",
                        "fillHorizontal": "Preencher c??lulas horizontalmente",
                        "fillVertical": "Preencher c??lulas verticalmente"
                    },
                    "lengthMenu": "Exibir _MENU_ resultados por p??gina",
                    "searchBuilder": {
                        "add": "Adicionar Condi????o",
                        "button": {
                            "0": "Construtor de Pesquisa",
                            "_": "Construtor de Pesquisa (%d)"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condi????o",
                        "conditions": {
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "N??o",
                                "notBetween": "N??o Entre",
                                "notEmpty": "N??o Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "N??o",
                                "notBetween": "N??o Entre",
                                "notEmpty": "N??o Vazio"
                            },
                            "string": {
                                "contains": "Cont??m",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "N??o",
                                "notEmpty": "N??o Vazio",
                                "startsWith": "Come??a Com"
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
                            "0": "Pain??is de Pesquisa",
                            "_": "Pain??is de Pesquisa (%d)"
                        },
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Pain??is de Pesquisa...",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "Digite um termo para pesquisar",
                    "thousands": "."
                } 
            } );
        } );    
    </script> 
@endsection