@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@php
    use App\Models\AcessorioCategoria;
@endphp

@section('titulo')
Produtos / <a style="color: unset" href="{{ route('painel.ingredientes') }}">Acessórios</a> / Cadastro
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Acessórios</h4>
                <form id="form-cadastro" action="{{route('painel.acessorios.salvar')}}" method="POST">
                    @csrf
                    <div class="col-lx-12">
                        <div class="row">
                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" placeholder="Insira o nome do ingrediente" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Categoria</label>
                                <select class="form-control" name="acessorio_categoria_id" required>
                                    <option value="">Selecione</option>
                                    @foreach($categorias as $categoria)
                                        <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Fornecedor</label>
                                <input name="fornecedor" type="text" class="form-control">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Telefone do Fornecedor</label>
                                <input name="tel_fornecedor" type="text" class="form-control telefone_ddd">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Validade</label>
                                <select class="form-control" name="validade" required>
                                    @foreach(config("ingredientes.validades") as $key => $validade)
                                        <option value="{{ $key }}">{{ $validade }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a href="{{ route('painel.acessorios') }}" class="btn btn-secondary waves-effect waves-light">Cancelar</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>

</div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>
<script>
</script>
@endsection