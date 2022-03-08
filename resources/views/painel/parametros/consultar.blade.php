@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
<style>
    .form-control{ height:30px;}
</style>
@endsection

@section('titulo')
Parametros
@endsection

@php
    use App\Models\Parametro;
    use App\Models\Ingrediente;
    use App\Models\IngredienteCat;
@endphp


{{-- <a href="{{ route('painel.ingredientecats') }}" key="t-default">Categorias de Ingrediente</a> --}}

@section('conteudo')

<div class="row">
    <div class="col-12">
        <div class="row" style="padding: 0 15px">
            <div class="card">
                <div class="row">
                    <div class="col-sm-12" style="padding: 20px;">

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button fw-medium" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Parâmetros Gerais
                                    </button>
                                </h2>
                                <form action="{{ route('painel.parametros.salvar') }}" method="post">
                                    @csrf
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">

                                            @php
                                                $parametro = Parametro::where('id', 1)->first();
                                            @endphp
                                            
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p><strong>Valor por KM rodado</strong></p>
                                                    <input name="valor_km" class="form-control dinheiro" type="text" value="{{ $parametro->valor_1 }}" style="width: 30%">
                                                </div>
        
                                                @php
                                                    $parametro = Parametro::where('id', 2)->first();
                                                @endphp
                                                <div class="col-lg-6">
                                                    <p><strong>Número de garçons por quantidade de convidados</strong></p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-lg-1">
                                                            Para 
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="valor_1_param_2" class="form-control" type="text" value="{{ $parametro->valor_1 }}">
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;"> convidados
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="valor_2_param_2" class="form-control" type="text" value="{{ $parametro->valor_2 }}"> 
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;">
                                                            garçons.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">

                                                @php
                                                    $parametro = Parametro::where('id', 3)->first();
                                                @endphp
                                                <div class="col-lg-6">
                                                    <p><strong>Número de tipos de drinks por quantidade de convidados</strong></p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-lg-1">
                                                            Para 
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="valor_1_param_3" class="form-control" type="text" value="{{ $parametro->valor_1 }}">
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;"> convidados
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="valor_2_param_3" class="form-control" type="text" value="{{ $parametro->valor_2 }}"> 
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;">
                                                            tipos de drinks.
                                                        </div>
                                                    </div>
                                                </div>

                                                @php
                                                    $parametro = Parametro::where('id', 4)->first();
                                                @endphp
                                                <div class="col-lg-6">
                                                    <p><strong>Quantidade de drinks por quantidade de convidados</strong></p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-lg-1">
                                                            Para 
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="valor_1_param_4" class="form-control" type="text" value="{{ $parametro->valor_1 }}">
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;"> convidados
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="valor_2_param_4" class="form-control" type="text" value="{{ $parametro->valor_2 }}"> 
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;">
                                                            qtd de drinks.
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <hr>

                                            <div class="row">

                                                @php
                                                    $parametro = Parametro::where('id', 5)->first();
                                                @endphp
                                                <div class="col-lg-6">
                                                    <label class="form-label">Ingredientes para o filtro de orçamento do site</label>
                    
                                                    <select multiple style="height: 52px !important;" class="select2 form-control select2-multiple"
                                                        multiple="multiple" data-placeholder="Selecione os ingredientes" name="ingredientes[]">
                                                        @php
                                                            $ingrediente_cats = IngredienteCat::all();
                                                        @endphp
                    
                                                        @foreach($ingrediente_cats as $ingrediente_cat)
                                                            <optgroup label="{{$ingrediente_cat->nome}}">
                                                                @php
                                                                    $ingredientes = Ingrediente::where('cat_id', $ingrediente_cat->id)
                                                                    wherein()
                                                                    ->get();
                                                                @endphp
                                                                    @foreach($ingredientes as $ingrediente)
                                                                        <option value="{{$ingrediente->id}}">{{$ingrediente->nome}}</option>
                                                                    @endforeach
                                                            </optgroup>
                                                        @endforeach
                                                    </select>
                                                </div>

                                            </div>

                                            <br>
                                            <div style="text-align: center">
                                                <input style="width: 40%; margin: auto" type="submit" class="form-control btn btn-primary">
                                            </div>

                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection


@section('scripts')
<!-- Required datatable js -->
<script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>

<script>

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

<script>
    !function(s){"use strict";function e(){}e.prototype.init=function(){s(".select2").select2(),s(".select2-limiting").select2({maximumSelectionLength:2}),s(".select2-search-disable").select2({minimumResultsForSearch:1/0}),s(".select2-ajax").select2({ajax:{url:"https://api.github.com/search/repositories",dataType:"json",delay:250,data:function(e){return{q:e.term,page:e.page}},processResults:function(e,t){return t.page=t.page||1,{results:e.items,pagination:{more:30*t.page<e.total_count}}},cache:!0},placeholder:"Search for a repository",minimumInputLength:1,templateResult:function(e){if(e.loading)return e.text;var t=s("<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='"+e.owner.avatar_url+"' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'></div><div class='select2-result-repository__description'></div><div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> </div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> </div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> </div></div></div></div>");return t.find(".select2-result-repository__title").text(e.full_name),t.find(".select2-result-repository__description").text(e.description),t.find(".select2-result-repository__forks").append(e.forks_count+" Forks"),t.find(".select2-result-repository__stargazers").append(e.stargazers_count+" Stars"),t.find(".select2-result-repository__watchers").append(e.watchers_count+" Watchers"),t},templateSelection:function(e){return e.full_name||e.text}}),s(".select2-templating").select2({templateResult:function(e){return e.id?s('<span><img src="/assets/images/flags/select2/'+e.element.value.toLowerCase()+'.png" class="img-flag" /> '+e.text+"</span>"):e.text}}),s("#colorpicker-default").spectrum(),s("#colorpicker-showalpha").spectrum({showAlpha:!0}),s("#colorpicker-showpaletteonly").spectrum({showPaletteOnly:!0,showPalette:!0,color:"#34c38f",palette:[["#556ee6","white","#34c38f","rgb(255, 128, 0);","#50a5f1"],["red","yellow","green","blue","violet"]]}),s("#colorpicker-togglepaletteonly").spectrum({showPaletteOnly:!0,togglePaletteOnly:!0,togglePaletteMoreText:"more",togglePaletteLessText:"less",color:"#556ee6",palette:[["#000","#444","#666","#999","#ccc","#eee","#f3f3f3","#fff"],["#f00","#f90","#ff0","#0f0","#0ff","#00f","#90f","#f0f"],["#f4cccc","#fce5cd","#fff2cc","#d9ead3","#d0e0e3","#cfe2f3","#d9d2e9","#ead1dc"],["#ea9999","#f9cb9c","#ffe599","#b6d7a8","#a2c4c9","#9fc5e8","#b4a7d6","#d5a6bd"],["#e06666","#f6b26b","#ffd966","#93c47d","#76a5af","#6fa8dc","#8e7cc3","#c27ba0"],["#c00","#e69138","#f1c232","#6aa84f","#45818e","#3d85c6","#674ea7","#a64d79"],["#900","#b45f06","#bf9000","#38761d","#134f5c","#0b5394","#351c75","#741b47"],["#600","#783f04","#7f6000","#274e13","#0c343d","#073763","#20124d","#4c1130"]]}),s("#colorpicker-showintial").spectrum({showInitial:!0}),s("#colorpicker-showinput-intial").spectrum({showInitial:!0,showInput:!0}),s("#timepicker").timepicker({icons:{up:"mdi mdi-chevron-up",down:"mdi mdi-chevron-down"},appendWidgetTo:"#timepicker-input-group1"}),s("#timepicker2").timepicker({showMeridian:!1,icons:{up:"mdi mdi-chevron-up",down:"mdi mdi-chevron-down"},appendWidgetTo:"#timepicker-input-group2"}),s("#timepicker3").timepicker({minuteStep:15,icons:{up:"mdi mdi-chevron-up",down:"mdi mdi-chevron-down"},appendWidgetTo:"#timepicker-input-group3"});var i={};s('[data-toggle="touchspin"]').each(function(e,t){var a=s.extend({},i,s(t).data());s(t).TouchSpin(a)}),s("input[name='demo3_21']").TouchSpin({initval:40,buttondown_class:"btn btn-primary",buttonup_class:"btn btn-primary"}),s("input[name='demo3_22']").TouchSpin({initval:40,buttondown_class:"btn btn-primary",buttonup_class:"btn btn-primary"}),s("input[name='demo_vertical']").TouchSpin({verticalbuttons:!0}),s("input#defaultconfig").maxlength({warningClass:"badge bg-info",limitReachedClass:"badge bg-warning"}),s("input#thresholdconfig").maxlength({threshold:20,warningClass:"badge bg-info",limitReachedClass:"badge bg-warning"}),s("input#moreoptions").maxlength({alwaysShow:!0,warningClass:"badge bg-success",limitReachedClass:"badge bg-danger"}),s("input#alloptions").maxlength({alwaysShow:!0,warningClass:"badge bg-success",limitReachedClass:"badge bg-danger",separator:" out of ",preText:"You typed ",postText:" chars available.",validate:!0}),s("textarea#textarea").maxlength({alwaysShow:!0,warningClass:"badge bg-info",limitReachedClass:"badge bg-warning"}),s("input#placement").maxlength({alwaysShow:!0,placement:"top-left",warningClass:"badge bg-info",limitReachedClass:"badge bg-warning"})},s.AdvancedForm=new e,s.AdvancedForm.Constructor=e}(window.jQuery),function(){"use strict";window.jQuery.AdvancedForm.init()}(),$(function(){"use strict";var o=$(".docs-date"),n=$(".docs-datepicker-container"),r=$(".docs-datepicker-trigger"),l={show:function(e){console.log(e.type,e.namespace)},hide:function(e){console.log(e.type,e.namespace)},pick:function(e){console.log(e.type,e.namespace,e.view)}};o.on({"show.datepicker":function(e){console.log(e.type,e.namespace)},"hide.datepicker":function(e){console.log(e.type,e.namespace)},"pick.datepicker":function(e){console.log(e.type,e.namespace,e.view)}}).datepicker(l),$(".docs-options, .docs-toggles").on("change",function(e){var t,a=e.target,i=$(a),s=i.attr("name"),c="checkbox"===a.type?a.checked:i.val();switch(s){case"container":c?(c=n).show():n.hide();break;case"trigger":c?(c=r).prop("disabled",!1):r.prop("disabled",!0);break;case"inline":(t=$('input[name="container"]')).prop("checked")||t.click();break;case"language":$('input[name="format"]').val($.fn.datepicker.languages[c].format)}l[s]=c,o.datepicker("reset").datepicker("destroy").datepicker(l)}),$(".docs-actions").on("click","button",function(e){var t,a=$(this).data(),i=a.arguments||[];e.stopPropagation(),a.method&&(a.source?o.datepicker(a.method,$(a.source).val()):(t=o.datepicker(a.method,i[0],i[1],i[2]))&&a.target&&$(a.target).val(t))})});
</script>
@endsection