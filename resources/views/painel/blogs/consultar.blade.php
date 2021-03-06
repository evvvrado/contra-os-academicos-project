@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Blogs @if(isset($tipo)) {{$tipo}}  @endif
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" href="{{route('painel.blog.cadastro')}}" role="button">Novo</a>
@endsection

@section('conteudo')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll;">
                <table id="datatable" class="table table-bordered dt-responsive wrap w-100">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Categoria</th>
                            <th class="text-center"><i class="bx bx-show-alt"></i></th>
                            <th class="text-center"><i class="bx bx-comment-dots"></i></th>
                            <th class="text-center"><i class="bx bx-share-alt"></i></th>
                            <th>Publicado</th>
                            <th class="text-center"></th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach($blogs as $blog)
                            @php
                                $date = new DateTime($blog->created_at);
                                $data = $date->format('d/m/Y');
                            @endphp
                            <tr>
                                <td style="position: relative;">{{ Str::limit($blog->titulo, 32 ) }}
                                    @if($blog->status == 1)
                                        <i style="position: absolute; right: 10px; top: 2px; color: green" class="bx bx-check"></i>
                                    @elseif($blog->status == 2)
                                        <i style="position: absolute; right: 10px; top: 2px; color: blue" class="bx bx-file"></i>
                                    @elseif($blog->status == 3)
                                        <i style="position: absolute; right: 10px; top: 2px; color: red" class="bx bx-x"></i>
                                    @endif
                                </td>
                                <td>{{$blog->categoria->nome}}</td>
                                <td class="text-center">{{$blog->visitas}}</td>
                                <td class="text-center">0</td>
                                <td class="text-center">0</td>
                                <td>{{ $data }}</td>
                                <td class="text-center">
                                    <a href="{{ route('painel.blog.editar', ['blog' => $blog]) }}" class="btn btn-sm btn-success" role="button"><i class="bx bx bx-edit-alt"></i></a>
                                    <a onClick="deletar({{ $blog->id }})" class="btn btn-sm btn-danger" role="button"><i class="bx bx bx bx-window-close"></i></a>
                                    <div class="btn btn-sm btn-info">
                                        <i class="bx bx-link-alt" onClick="copiar_slug('https://contraosacademicos.com.br/blog/{{ $blog->slug }}')"></i>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Sweet Alerts js -->
    <script src="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    
    <script>
        function deletar(id) {
            Swal.fire({
                title: "Tem certeza?",
                text: "Esse conteúdo irá para lixeira!",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#34c38f",
                cancelButtonColor: "#f46a6a",
                confirmButtonText: "Sim, deletar!"
            }).then(function(t) {
                t.value && Swal.fire("Deletado!", "Movido para lixeira.", "success")
                

            })
        }
        $(document).ready(function() {
            $('#datatable').DataTable( {
                "pageLength": 50,
                "ordering": false,
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