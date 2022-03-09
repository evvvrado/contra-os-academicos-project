@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@php
    use App\Models\AcessorioCat;
    use Illuminate\Support\Facades\DB;
@endphp

@section('titulo')
<a style="color: unset" href="{{ route('painel.servicos') }}">Serviços</a> / Cadastro
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edição de Serviços</h4>
                <form id="form-cadastro" action="{{route('painel.servicos.salvar')}}" method="POST">
                    @csrf
                    
                    <div class="col-lx-12">
                        <div class="row">
                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" class="form-control" value="{{ $servico->nome }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Descrição</label>
                                <textarea class="form-control" name="descricao">{{ $servico->descricao }}</textarea>
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Valor</label>
                                <input id="valor" name="valor" type="text" class="form-control dinheiro" value="{{ $servico->valor }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Incluso</label>
                                <select name="incluso" class="form-control">
                                    <option value="1" @if($servico->incluso) selected @endif>Sim</option>
                                    <option value="0" @if(!$servico->incluso) selected @endif>Não</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a href="{{ route('painel.servicos') }}" class="btn btn-secondary waves-effect waves-light">Cancelar</a>
                    </div>

                    <input name="id" type="hidden" class="form-control" value="{{ $servico->id }}">
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