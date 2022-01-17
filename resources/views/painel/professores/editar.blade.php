@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('titulo')
Projeto / <a style="color: unset" href="{{ route('painel.professores') }}">Professores</a> / editar
@endsection


@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Professor</h4>
                <form action="{{ route('painel.professores.salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="professor_id" value="{{ $professor->id }}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" class="form-control" value="{{ $professor->nome }}" maxlength="100" required>
                            </div>
                            <div class="mb-3">
                                <label for="atuacao">Atuação</label>
                                <select id="atuacao" name="atuacao" class="form-control">
                                    @foreach (config('professores.atuacao_nome') as $codigo => $nome)
                                    <option value="{{ $codigo }}" @if ($codigo==$professor->atuacao) selected @endif>{{ $nome }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="empresa">Empresa</label>
                                <input id="empresa" name="empresa" type="text" class="form-control" value="{{ $professor->empresa }}" maxlength="100">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                <picture style="height: 464px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                    <img id="foto-preview" @if (!$professor->foto) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($professor->foto) }}" @endif style="height:
                                    100%;" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                <input name="foto" id="foto-upload" style="display: none;" type="file">
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <a href="{{ route('painel.professores') }}" class="btn btn-secondary waves-effect waves-light">Cancelar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        @endsection




        @section('scripts')
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
        <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
        <script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>
        <script>
            var inp = document.getElementById('foto-upload');
                inp.addEventListener('change', function(e) {
                    var file = this.files[0];
                    var reader = new FileReader();
                    reader.onload = function() {
                        document.getElementById('foto-preview').src = this.result;
                    };
                    reader.readAsDataURL(file);
                }, false);
        </script>
        @endsection