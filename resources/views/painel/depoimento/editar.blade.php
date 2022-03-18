@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('titulo')
Institucional / <a style="color: unset" href="{{ route('painel.depoimento') }}">Depoimento</a> / Editar
@endsection


@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Editar Depoimento</h4>
                <form action="{{route('painel.depoimento.salvar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="depoimento_id" value="{{$depoimento->id}}">
                    <div class="row">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="productname">Nome</label>
                                        <input id="productname" name="nome" type="text" class="form-control" placeholder="Insira o nome" value="{{$depoimento->nome}}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label for="manufacturerbrand">Depoimento</label>
                                        <textarea id="textarea" name="depoimento" class="form-control" maxlength="107" rows="3"
                                            placeholder="Limite de 107 Caracteres">{!! $depoimento->depoimento !!}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                    <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                        <img id="banner-preview" @if(!$depoimento->foto) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{asset($depoimento->foto)}}" @endif
                                        style="width: 100%; object-fit: cover;" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="banner-upload">Escolher</label>
                                    <input name="foto" id="banner-upload" style="display: none;" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a href="{{ route('painel.depoimento') }}" type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</a>
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
                    $('#summernote').summernote({
                        height: 600,
                    });

                    $('#select_tag').select2({});

                    $('#select_hashtag').select2({});
                });
        </script>
        @endsection