@extends('painel.template.main')

@section('styles')
<style>
    .form-control{ height:30px;}

    .accordion { margin-bottom: 20px;}
</style>
@endsection

@section('titulo')
Parametros
@endsection

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

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p><strong>Valor por KM rodado</strong></p>
                                                    <input name="valor_km_rodado" class="form-control dinheiro" type="text" value="{{ $parametros->valor_km_rodado }}" style="width: 30%">
                                                </div>
                                                <div class="col-lg-6">
                                                    <p><strong>Número de garçons por quantidade de convidados</strong></p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-lg-1">
                                                            Para 
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="garcons_convidados" class="form-control" type="text" value="{{ $parametros->garcons_convidados }}">
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;"> convidados
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="garcons_numero" class="form-control" type="text" value="{{ $parametros->garcons_numero }}"> 
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;">
                                                            garçons.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p><strong>Número de tipos de drinks por quantidade de convidados</strong></p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-lg-1">
                                                            Para 
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="tipos_drinks_convidados" class="form-control" type="text" value="{{ $parametros->tipos_drinks_convidados }}">
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;"> convidados
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="tipos_drinks_numero" class="form-control" type="text" value="{{ $parametros->tipos_drinks_numero }}"> 
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;">
                                                            tipos de drinks.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p><strong>Quantidade de drinks por quantidade de convidados</strong></p>
                                                    <div class="d-flex flex-wrap">
                                                        <div class="col-lg-1">
                                                            Para 
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="drinks_convidados" class="form-control" type="text" value="{{ $parametros->drinks_convidados }}">
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;"> convidados
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <input name="drinks_numero" class="form-control" type="text" value="{{ $parametros->drinks_numero }}"> 
                                                        </div>
                                                        <div class="col-lg-3" style="padding-left: 10px;">
                                                            qtd de drinks.
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <label class="form-label">Categoria para o filtro de orçamento do site</label>
                                                    <select name="categoria_filtro" style="height: auto;" class="form-control" id="">
                                                        <option value="-1">Selecione uma categoria</option>
                                                        @foreach(\App\Models\IngredienteCategoria::all() as $categoria)
                                                            <option value="{{ $categoria->id }}" @if($parametros->categoria_filtro == $categoria->id) selected @endif>{{ $categoria->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p><strong>Quantidade de mais visitados</strong></p>
                                                    <input name="quantidade_mais_visitados" class="form-control" type="text" value="{{ $parametros->quantidade_mais_visitados }}" style="width: 30%">
                                                </div>

                                            </div>

                                            <hr>

                                            <div style="text-align: center">
                                                <input style="width: 20%; margin: auto; line-height: 0px;" type="submit" class="form-control btn btn-primary">
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
@endsection