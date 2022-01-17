@extends('painel.template.main')

@section('titulo')
    Informações de Meios de Pagamento
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-body">

                <form action="{{route('painel.configuracoes.meios-pagamento.salvar')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <h4 class="card-title">Configurações de Boleto</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group col-12 mt-3">
                                            <label for="min_valor_parcela_boleto">Valor mínimo de parcela</label>
                                            <input type="number" class="form-control" name="min_valor_parcela_boleto"
                                                id="min_valor_parcela_boleto" value="{{$configuracoes->min_valor_parcela_boleto}}" min="5" step="0.01">
                                        </div>
                                        <div class="form-group col-12 mt-3">
                                            <label for="max_parcelas_boleto">Número máximo de parcelas</label>
                                            <input type="number" class="form-control" name="max_parcelas_boleto"
                                                id="max_parcelas_boleto" value="{{$configuracoes->max_parcelas_boleto}}" min="1" step="1">
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                    </div>
                                    <hr class="mt-4">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h4 class="card-title">Configurações de Cartão</h4>

                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="form-group col-12 mt-3">
                                            <label for="min_valor_parcela_cartao">Valor mínimo de parcela</label>
                                            <input type="number" class="form-control" name="min_valor_parcela_cartao"
                                                id="min_valor_parcela_cartao" value="{{$configuracoes->min_valor_parcela_cartao}}" min="1" step="0.01">
                                        </div>
                                        <div class="form-group col-12 mt-3">
                                            <label for="max_parcelas_cartao">Número máximo de parcelas</label>
                                            <input type="number" class="form-control" name="max_parcelas_cartao"
                                                id="max_parcelas_cartao" value="{{$configuracoes->max_parcelas_cartao}}" min="1" step="1">
                                        </div>
                                    </div>
                                    <hr class="mt-4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-12 mt-3">
                            <label for="productdesc">Usar as configurações abaixo para todos os cursos </label>
                            <div class="form-check form-switch form-switch-lg pt-3 ">
                                <input class="form-check-input form-control" name="usar_configuracoes_gerais_pagamento" type="checkbox" @if($configuracoes->usar_configuracoes_gerais_pagamento) checked @endif>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="form-group col-4 mt-3">
                            <label for="productdesc">Liberar Boleto </label>
                            <div class="form-check form-switch form-switch-lg pt-3 ">
                                <input class="form-check-input form-control" name="liberar_boleto" type="checkbox" @if($configuracoes->liberar_boleto) checked @endif>
                            </div>
                        </div>
                        <div class="form-group col-4 mt-3">
                            <label for="productdesc">Liberar Cartão </label>
                            <div class="form-check form-switch form-switch-lg pt-3 ">
                                <input class="form-check-input form-control" name="liberar_cartao" type="checkbox" @if($configuracoes->liberar_cartao) checked @endif>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="mt-4">
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
                            <button type="submit" class="btn btn-primary px-5">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
</div>
<!-- end row -->
@endsection

@section('scripts')

@endsection