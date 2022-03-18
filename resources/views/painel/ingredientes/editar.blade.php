@extends('painel.template.main')

@section('styles')
@endsection

@php
    use App\Models\IngredienteCategoria;
@endphp

@section('titulo')
Produtos / <a style="color: unset" href="{{ route('painel.ingredientes') }}">Ingredientes</a> / Cadastro
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edição do ingrediente:</h4>
                <form id="form-cadastro" action="{{route('painel.ingredientes.salvar')}}" method="POST">
                    @csrf
                    <input name="ingrediente_id" type="hidden" class="form-control" value="{{ $ingrediente->id }}">   
                    <div class="col-lx-12">
                        <div class="row">
                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" placeholder="Insira o nome do ingrediente" class="form-control" value="{{ $ingrediente->nome }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Categoria</label>
                                <select class="form-control" name="ingrediente_categoria_id" required>
                                    <option value="">Selecione</option>
                                    @foreach(IngredienteCategoria::orderBy('nome', 'Asc')->where("ativo", '=', true)->get() as $categoria)
                                        <option @if($ingrediente->ingrediente_categoria_id == $categoria->id) selected @endif value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Fornecedor</label>
                                <input name="fornecedor" type="text" class="form-control" value="{{ $ingrediente->fornecedor }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Telefone do Fornecedor</label>
                                <input name="tel_fornecedor" type="text" class="form-control telefone_ddd" value="{{ $ingrediente->tel_fornecedor }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Validade</label>
                                <select class="form-control" name="validade" required>
                                    <option value="">Selecione</option>
                                    @foreach(config("ingredientes.validades") as $key => $validade)
                                        <option value="{{ $key }}" @if($ingrediente->validade == $key) selected @endif>{{ $validade }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a href="{{ route('painel.ingredientes') }}" class="btn btn-secondary waves-effect waves-light">Cancelar</a>
                    </div>


                </form>
            </div>
            
        </div>
    </div>

</div>
</div>
@endsection

@section('scripts')
@endsection