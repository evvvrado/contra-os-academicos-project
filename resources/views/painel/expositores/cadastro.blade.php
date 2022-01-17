@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('titulo')
Catálogo / <a style="color: unset" href="{{ route('painel.expositores') }}">Expositores</a> / Cadastrar
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Expositor</h4>
                <form action="{{ route('painel.expositores.salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" placeholder="Insira o Nome" class="form-control" maxlength="100">
                            </div>
                            <div class="mb-3">
                                <label for="site">Site</label>
                                <input class="form-control" name="site" type="url" placeholder="Insira a URL" id="example-url-input" maxlength="255">
                            </div>
                            <div class="mb-3">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria" required>
                                    @foreach (config('expositores.categorias_nome') as $codigo => $categoria)
                                    <option value="{{ $codigo }}">{{ $categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="telefone">Telefone</label>
                                <input class="form-control" name="telefone" type="tel" placeholder="Insira o telefone" id="example-tel-input" maxlength="20">
                            </div>
                            <div class="mb-3">
                                <label for="email">E-mail</label>
                                <input class="form-control" name="email" type="email" placeholder="Insira o e-mail" id="example-email-input" maxlength="100">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">
                                <span class="mb-3">
                                    <div>
                                        Imagem do Expositor
                                    </div>
                                    <small>Imagem institucional para divulgação de expositor</small>
                                </span>
                                <picture style="height: 281px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                    <img id="banner-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                                </picture>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="banner-upload">Escolher</label>
                                <input name="foto" id="banner-upload" style="display: none;" type="file">
                            </div>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        var inp = document.getElementById('banner-upload');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            $(document).ready(function() {

            });
    </script>
    @endsection