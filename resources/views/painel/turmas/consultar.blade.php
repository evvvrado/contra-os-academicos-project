@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="{{asset('admin/libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('titulo')
    Turmas do Curso: {{$curso->titulo}}
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" onclick="novaTurma()" role="button">Nova Turma</a>
    <a href="{{route('painel.cursos')}}" name="" id="" class="btn btn-primary" role="button">Voltar</a>
@endsection

@section('conteudo')
<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body" style="overflow-x: scroll; min-height: 80vh;">
                <table id="datatable" class="table table-bordered dt-responsive text-left nowrap w-100">
                    <thead>
                        <tr>
                            <th style="width: 30px;"></th>
                            <th>Nome, Período</th>
                            <th>Data</th>
                            <th>Vagas</th>
                            <th>Valor</th>
                            <th>Inscrições</th>
                            <th style="width: 30px;">Ativo</th>
                        </tr>
                    </thead>


                    <tbody>

                        @foreach($turmas as $turma)
                            <tr>
                                <td class="text-center">
                                    <div class="dropdown mt-4 mt-sm-0">
                                        <a href="#" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-bars" aria-hidden="true"></i>
                                        </a>
                                        <div class="dropdown-menu" style="margin: 0px;">
                                            <a class="dropdown-item" onclick="carregaTurma({{$turma->id}})" role="button"><i class="bx bx-edit-alt"></i> Editar</a>
                                            @if($turma->ativo)
                                                <a href="{{route('painel.turma.ativo', ['turma' => $turma])}}" class="dropdown-item" role="button"><i class="fas fa-eye-slash"></i> Desativar</a>
                                            @else
                                                <a href="{{route('painel.turma.ativo', ['turma' => $turma])}}" class="dropdown-item" role="button"><i class="fas fa-eye"></i> Ativar</a>
                                            @endif

                                            @if($turma->aberto)
                                                <a href="{{route('painel.turma.inscricao', ['turma' => $turma])}}" class="dropdown-item" role="button"><i class="fas fa-lock"></i> Fechar Inscrições</a>
                                            @else
                                                <a href="{{route('painel.turma.inscricao', ['turma' => $turma])}}" class="dropdown-item" role="button"><i class="fas fa-lock-open"></i> Abrir Inscrições</a>
                                            @endif
                                            {{--  <a href="{{route('painel.turma.deletar', ['turma' => $turma])}}" id="" class="dropdown-item" role="button"><i class="fas fa-trash-alt pr-3"></i> Excluir</a>
                                            <a href="{{route('painel.diretorias', ['turma' => $turma])}}" id="" class="dropdown-item" role="button"><i class="fas fa-user pr-3"></i> Diretoria</a>  --}}
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span>{{$turma->nome}}</span>
                                    <br>
                                    <small>{{config("globals.periodos")[$turma->periodo]}}</small>
                                </td>
                                <td style="vertical-align: middle;">{{date("d/m/Y", strtotime($turma->data))}}</td>
                                <td style="vertical-align: middle;">{{$turma->inscritos}} de {{$turma->vagas}}</td>
                                <td style="vertical-align: middle;">R${{number_format($turma->preco, 2 , ",", ".")}}</td>
                                <td>
                                    @if($turma->aberto)
                                        Abertas
                                    @else
                                        Fechadas
                                    @endif
                                </td>
                                <td class="text-center" style="vertical-align: middle;">
                                    <i class="fa fa-check" @if($turma->ativo) style="color: green;" @endif aria-hidden="true"></i>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

<div class="modal fade" id="modalTurma" tabindex="-1" role="dialog" aria-labelledby="modalTurmaLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body" id="modalTurmaBody">
                
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{asset('admin/libs/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
    <script>
        function novaTurma(){
            //$("#modalTurmaBody").html("");
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/includes/loading');
            xhr.onreadystatechange = function() {
                if (this.readyState!==4) return;
                if (this.status!==200) return; // or whatever error handling you want
                $("#modalTurmaBody").html(this.responseText);
                $("#modalTurma").modal("show");
                xhr.open('GET', '/includes/turma/formulario');
                xhr.onreadystatechange = function() {
                    if (this.readyState!==4) return;
                    if (this.status!==200) return; // or whatever error handling you want
                    $("#modalTurmaBody").html(this.responseText);
                    $("#form-edicao input[id='curso_id']").val({!! $curso->id !!});
                }
                xhr.send();
            }
            xhr.send();
        }

        function carregaTurma(id){
            var nome = $("input[name='nome']").val();
            var _token = $('meta[name="_token"]').attr('content');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': _token
                }
            });  

            $.ajax({
                url: '/sistema/turmas/api/getTurma/' + id,
                type: 'GET',
                dataType: 'JSON',
                beforeSend: function(){
                    //$("#modalTurmaBody").html("");
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', '/includes/loading');
                    xhr.onreadystatechange = function() {
                        if (this.readyState!==4) return;
                        if (this.status!==200) return; // or whatever error handling you want
                        $("#modalTurmaBody").html(this.responseText);
                        $("#modalTurma").modal("show");
                    }
                    xhr.send();
                   
                },
                success: function(data) {
                    data = JSON.parse(data);
                    var xhr = new XMLHttpRequest();
                    xhr.open('GET', '/includes/turma/formulario');
                    xhr.onreadystatechange = function() {
                        if (this.readyState!==4) return;
                        if (this.status!==200) return; // or whatever error handling you want
                        $("#modalTurmaBody").html(this.responseText);
                        $("#form-edicao input[id='turma_id']").val(data.id);
                        $("#form-edicao input[id='nome']").val(data.nome);
                        $("#form-edicao input[id='local']").val(data.local);
                        $("#form-edicao input[id='data']").val(data.data);
                        $("#form-edicao input[id='horario']").val(data.horario);
                        $("#form-edicao input[id='periodo']").val(data.periodo);
                        $("#form-edicao input[id='preco']").val(data.preco);
                        $("#form-edicao input[id='parcelas']").val(data.parcelas);
                        $("#form-edicao input[id='vagas']").val(data.vagas);
                        $("#form-edicao input[id='botao_comprar']").val(data.botao_comprar);
                        $("#form-edicao input[id='texto_turma']").val(data.texto_turma);
                    }
                    xhr.send();
                },
                error: function(err){
                    console.log(err);
                }
            });
        }

        $(document).ready(function() {
            var tabela = $('#datatable').DataTable( {
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
            tabela.columns.adjust().draw();
            
        } );    
    </script> 
@endsection