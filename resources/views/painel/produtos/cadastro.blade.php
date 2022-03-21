@extends('painel.template.main')

@section('styles')
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .select2-selection {
            height: 53px;
        }

    </style>
@endsection

@php
use App\Models\Acessorio;
use App\Models\AcessorioCategoria;
use App\Models\IngredienteCategoria;
use App\Models\Ingrediente;
@endphp


@section('titulo')
    Produtos / <a style="color: unset" href="{{ route('painel.produtos') }}">Produtos</a> / Cadastro
@endsection

@section('conteudo')
    @include('painel.includes.errors')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Produtos</h4>
                    <form id="form-cadastro" action="{{ route('painel.produtos.salvar') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="col-lx-12">
                            <div class="row">
                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Nome</label>
                                    <input required name="nome" type="text" class="form-control" maxlength="100">
                                </div>


                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Teor Alcoólico (%)</label>
                                    <input required name="teor_alcoolico" type="number" step="0.01" min="0"
                                        class="form-control">
                                </div>
                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Descrição</label>
                                    <textarea required class="form-control" name="descricao"></textarea>
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>História do Produto</label>
                                    <textarea required class="form-control" name="historia"></textarea>
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Calorias</label>
                                    <input required name="calorias" type="number" step="0.01" min="0"
                                        class="form-control">
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Nota</label>
                                    <input required name="nota" type="number" step="1" max="5" class="form-control">
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Harmonização</label>
                                    <input required name="harmonizacao" type="text" class="form-control">
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label>Lançamento</label>
                                    <select class="form-control" required name="lancamento" required>
                                        <option value="">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label class="form-label">Ingredientes</label>

                                    <select multiple style="height: 52px !important;"
                                        class="select2 form-control select2-multiple" multiple="multiple"
                                        data-placeholder="Selecione os ingredientes" required name="ingredientes[]">
                                        @php
                                            $ingrediente_categorias = IngredienteCategoria::all();
                                        @endphp

                                        @foreach ($ingrediente_categorias as $ingrediente_categoria)
                                            <optgroup label="{{ $ingrediente_categoria->nome }}">
                                                @php
                                                    $ingredientes = $ingrediente_categoria->ingredientes;
                                                @endphp
                                                @foreach ($ingredientes as $ingrediente)
                                                    <option value="{{ $ingrediente->id }}">{{ $ingrediente->nome }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label class="form-label">Acessórios</label>

                                    <select multiple style="height: 52px !important;"
                                        class="select2 form-control select2-multiple" multiple="multiple"
                                        data-placeholder="Selecione os acessórios" name="acessorios[]">
                                        @php
                                            $acessorio_categorias = AcessorioCategoria::all();
                                        @endphp

                                        @foreach ($acessorio_categorias as $acessorio_categoria)
                                            <optgroup label="{{ $acessorio_categoria->nome }}">
                                                @php
                                                    $acessorios = $acessorio_categoria->acessorios;
                                                @endphp
                                                @foreach ($acessorios as $acessorio)
                                                    <option value="{{ $acessorio->id }}">{{ $acessorio->nome }}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label class="form-label">Imagem de Preview</label>
                                    <input required name="imagem_preview" type="file" class="form-control"
                                        style="height: 36px !important">
                                </div>

                                <div class="form-group col-6 col-lg-6 mt-3">
                                    <label class="form-label">Imagem Detalhada</label>
                                    <input required name="imagem_detalhada" type="file" class="form-control"
                                        style="height: 36px !important">
                                </div>
                            </div>

                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-3">
                            <button id="btn-submit" type="submit"
                                class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <a href="{{ route('painel.produtos') }}" type="button"
                                class="btn btn-secondary waves-effect waves-light">Cancelar</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        ! function(s) {
            "use strict";

            function e() {}
            e.prototype.init = function() {
                s(".select2").select2(), s(".select2-limiting").select2({
                    maximumSelectionLength: 2
                }), s(".select2-search-disable").select2({
                    minimumResultsForSearch: 1 / 0
                }), s(".select2-ajax").select2({
                    ajax: {
                        url: "https://api.github.com/search/repositories",
                        dataType: "json",
                        delay: 250,
                        data: function(e) {
                            return {
                                q: e.term,
                                page: e.page
                            }
                        },
                        processResults: function(e, t) {
                            return t.page = t.page || 1, {
                                results: e.items,
                                pagination: {
                                    more: 30 * t.page < e.total_count
                                }
                            }
                        },
                        cache: !0
                    },
                    placeholder: "Search for a repository",
                    minimumInputLength: 1,
                    templateResult: function(e) {
                        if (e.loading) return e.text;
                        var t = s(
                            "<div class='select2-result-repository clearfix'><div class='select2-result-repository__avatar'><img src='" +
                            e.owner.avatar_url +
                            "' /></div><div class='select2-result-repository__meta'><div class='select2-result-repository__title'></div><div class='select2-result-repository__description'></div><div class='select2-result-repository__statistics'><div class='select2-result-repository__forks'><i class='fa fa-flash'></i> </div><div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> </div><div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> </div></div></div></div>"
                            );
                        return t.find(".select2-result-repository__title").text(e.full_name), t.find(
                                ".select2-result-repository__description").text(e.description), t.find(
                                ".select2-result-repository__forks").append(e.forks_count + " Forks"), t
                            .find(".select2-result-repository__stargazers").append(e.stargazers_count +
                                " Stars"), t.find(".select2-result-repository__watchers").append(e
                                .watchers_count + " Watchers"), t
                    },
                    templateSelection: function(e) {
                        return e.full_name || e.text
                    }
                }), s(".select2-templating").select2({
                    templateResult: function(e) {
                        return e.id ? s('<span><img src="/assets/images/flags/select2/' + e.element.value
                            .toLowerCase() + '.png" class="img-flag" /> ' + e.text + "</span>") : e.text
                    }
                }), s("#colorpicker-default").spectrum(), s("#colorpicker-showalpha").spectrum({
                    showAlpha: !0
                }), s("#colorpicker-showpaletteonly").spectrum({
                    showPaletteOnly: !0,
                    showPalette: !0,
                    color: "#34c38f",
                    palette: [
                        ["#556ee6", "white", "#34c38f", "rgb(255, 128, 0);", "#50a5f1"],
                        ["red", "yellow", "green", "blue", "violet"]
                    ]
                }), s("#colorpicker-togglepaletteonly").spectrum({
                    showPaletteOnly: !0,
                    togglePaletteOnly: !0,
                    togglePaletteMoreText: "more",
                    togglePaletteLessText: "less",
                    color: "#556ee6",
                    palette: [
                        ["#000", "#444", "#666", "#999", "#ccc", "#eee", "#f3f3f3", "#fff"],
                        ["#f00", "#f90", "#ff0", "#0f0", "#0ff", "#00f", "#90f", "#f0f"],
                        ["#f4cccc", "#fce5cd", "#fff2cc", "#d9ead3", "#d0e0e3", "#cfe2f3", "#d9d2e9",
                            "#ead1dc"
                        ],
                        ["#ea9999", "#f9cb9c", "#ffe599", "#b6d7a8", "#a2c4c9", "#9fc5e8", "#b4a7d6",
                            "#d5a6bd"
                        ],
                        ["#e06666", "#f6b26b", "#ffd966", "#93c47d", "#76a5af", "#6fa8dc", "#8e7cc3",
                            "#c27ba0"
                        ],
                        ["#c00", "#e69138", "#f1c232", "#6aa84f", "#45818e", "#3d85c6", "#674ea7",
                            "#a64d79"],
                        ["#900", "#b45f06", "#bf9000", "#38761d", "#134f5c", "#0b5394", "#351c75",
                            "#741b47"],
                        ["#600", "#783f04", "#7f6000", "#274e13", "#0c343d", "#073763", "#20124d",
                            "#4c1130"]
                    ]
                }), s("#colorpicker-showintial").spectrum({
                    showInitial: !0
                }), s("#colorpicker-showinput-intial").spectrum({
                    showInitial: !0,
                    showInput: !0
                }), s("#timepicker").timepicker({
                    icons: {
                        up: "mdi mdi-chevron-up",
                        down: "mdi mdi-chevron-down"
                    },
                    appendWidgetTo: "#timepicker-input-group1"
                }), s("#timepicker2").timepicker({
                    showMeridian: !1,
                    icons: {
                        up: "mdi mdi-chevron-up",
                        down: "mdi mdi-chevron-down"
                    },
                    appendWidgetTo: "#timepicker-input-group2"
                }), s("#timepicker3").timepicker({
                    minuteStep: 15,
                    icons: {
                        up: "mdi mdi-chevron-up",
                        down: "mdi mdi-chevron-down"
                    },
                    appendWidgetTo: "#timepicker-input-group3"
                });
                var i = {};
                s('[data-toggle="touchspin"]').each(function(e, t) {
                    var a = s.extend({}, i, s(t).data());
                    s(t).TouchSpin(a)
                }), s("input[name='demo3_21']").TouchSpin({
                    initval: 40,
                    buttondown_class: "btn btn-primary",
                    buttonup_class: "btn btn-primary"
                }), s("input[name='demo3_22']").TouchSpin({
                    initval: 40,
                    buttondown_class: "btn btn-primary",
                    buttonup_class: "btn btn-primary"
                }), s("input[name='demo_vertical']").TouchSpin({
                    verticalbuttons: !0
                }), s("input#defaultconfig").maxlength({
                    warningClass: "badge bg-info",
                    limitReachedClass: "badge bg-warning"
                }), s("input#thresholdconfig").maxlength({
                    threshold: 20,
                    warningClass: "badge bg-info",
                    limitReachedClass: "badge bg-warning"
                }), s("input#moreoptions").maxlength({
                    alwaysShow: !0,
                    warningClass: "badge bg-success",
                    limitReachedClass: "badge bg-danger"
                }), s("input#alloptions").maxlength({
                    alwaysShow: !0,
                    warningClass: "badge bg-success",
                    limitReachedClass: "badge bg-danger",
                    separator: " out of ",
                    preText: "You typed ",
                    postText: " chars available.",
                    validate: !0
                }), s("textarea#textarea").maxlength({
                    alwaysShow: !0,
                    warningClass: "badge bg-info",
                    limitReachedClass: "badge bg-warning"
                }), s("input#placement").maxlength({
                    alwaysShow: !0,
                    placement: "top-left",
                    warningClass: "badge bg-info",
                    limitReachedClass: "badge bg-warning"
                })
            }, s.AdvancedForm = new e, s.AdvancedForm.Constructor = e
        }(window.jQuery),
        function() {
            "use strict";
            window.jQuery.AdvancedForm.init()
        }(), $(function() {
            "use strict";
            var o = $(".docs-date"),
                n = $(".docs-datepicker-container"),
                r = $(".docs-datepicker-trigger"),
                l = {
                    show: function(e) {
                        console.log(e.type, e.namespace)
                    },
                    hide: function(e) {
                        console.log(e.type, e.namespace)
                    },
                    pick: function(e) {
                        console.log(e.type, e.namespace, e.view)
                    }
                };
            o.on({
                "show.datepicker": function(e) {
                    console.log(e.type, e.namespace)
                },
                "hide.datepicker": function(e) {
                    console.log(e.type, e.namespace)
                },
                "pick.datepicker": function(e) {
                    console.log(e.type, e.namespace, e.view)
                }
            }).datepicker(l), $(".docs-options, .docs-toggles").on("change", function(e) {
                var t, a = e.target,
                    i = $(a),
                    s = i.attr("name"),
                    c = "checkbox" === a.type ? a.checked : i.val();
                switch (s) {
                    case "container":
                        c ? (c = n).show() : n.hide();
                        break;
                    case "trigger":
                        c ? (c = r).prop("disabled", !1) : r.prop("disabled", !0);
                        break;
                    case "inline":
                        (t = $('input[name="container"]')).prop("checked") || t.click();
                        break;
                    case "language":
                        $('input[name="format"]').val($.fn.datepicker.languages[c].format)
                }
                l[s] = c, o.datepicker("reset").datepicker("destroy").datepicker(l)
            }), $(".docs-actions").on("click", "button", function(e) {
                var t, a = $(this).data(),
                    i = a.arguments || [];
                e.stopPropagation(), a.method && (a.source ? o.datepicker(a.method, $(a.source).val()) : (
                    t = o.datepicker(a.method, i[0], i[1], i[2])) && a.target && $(a.target).val(t))
            })
        });
    </script>
@endsection
