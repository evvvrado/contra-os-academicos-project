@extends('painel.template.main')

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
                                    <input required name="harmonizacao" type="text" maxlength="255" class="form-control">
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
