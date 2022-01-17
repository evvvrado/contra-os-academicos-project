@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}




<style>
    .filters {
        cursor: default;
        border-radius: 5px 5px 0 0;
        width: 100%;
        color: white;
        font-size: .8125rem;
        display: flex;
        max-width: max-content;
        /* border: solid white 1px; */
    }

    .filters span {
        cursor: pointer;
        transition: 0.32s;
        padding: .84rem 1rem;

        /* border: solid white 1px; */
        border-radius: 5px 5px 0 0;

        color: #495057;

        font-weight: 600;
    }

    .filters span:hover {
        opacity: 0.7;
    }

    .filters span.active {
        color: var(--principal);
        background: white;
    }

    .card:not(.evento) {
        display: none;
    }
</style>

@endsection

@section('titulo')
Projetos / <a style="color: unset" href="{{ route('painel.eventos') }}">Eventos</a> / Cadastrar
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card evento">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Evento</h4>
                <form action="{{route('painel.eventos.salvar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome" maxlength="255">
                            </div>
                            <div class="mb-3">
                                <label for="titulo">Subtítulo</label>
                                <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Insira o subtítulo" maxlength="255">
                            </div>


                            <div class="mb-3">
                                <label for="inicio">Data de Início</label>
                                <input class="form-control" name="inicio" type="date" id="example-date-input" min="{{date('Y-m-d')}}">
                            </div>
                            <div class="mb-3">
                                <label for="inicio">Hora de Início</label>

                                <input class="form-control" name="hora_inicio" type="time" id="example-date-input">

                            </div>

                            <div class="mb-3">
                                <label for="video">URL Do Vídeo</label>
                                <input id="video" name="video" type="text" class="form-control" placeholder="youtu.be/linkdovideo" maxlength="255">
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="mb-3">
                                <label for="descricao">Descrição</label>
                                <input id="descricao" name="descricao" type="text" class="form-control" placeholder="Insira a decrição da clínica" maxlength="255">
                            </div>

                            <div class="mb-3">
                                <label for="sobre">Parágrafo</label>
                                <textarea id="sobre" name="sobre" class="form-control" placeholder="Insira o conteúdo do paragrafo"></textarea>
                            </div>


                            <div class="mb-3">
                                <label for="fim">Data de encerramento</label>
                                <input class="form-control" name="fim" type="date" id="example-date-input" min="{{date('Y-m-d')}}">
                            </div>
                            <div class="mb-3">
                                <label for="fim">Hora de encerramento</label>
                                <input class="form-control" name="hora_fim" type="time" id="example-date-input">
                            </div>



                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                    </div>
                    <div class="row flex-row">
                        <div class="card-body col-2">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center flex-column">
                                        Thumbnail
                                        <small>Uma imagem quadrada em uma alta resolução</small>

                                        <picture style="height: 350px; max-width: 350px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="thumbnail-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="thumbnail-upload">Escolher</label>
                                        <input name="thumbnail" id="thumbnail-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body col-8">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">
                                        Banner
                                        <small>Uma imagem escura em uma alta resolução</small>
                                        <picture style="height: 350px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="banner-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="banner-upload">Escolher</label>
                                        <input name="banner" id="banner-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>




        <!-- end card-->
        {{-- <div class="card">
            <div class="card-body">
                <h4 class="card-title">Meta Data</h4>
                <p class="card-title-desc">Fill all information below</p>
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="metatitle">Meta title</label>
                                <input id="metatitle" name="productname" type="text" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="metakeywords">Meta Keywords</label>
                                <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="metadescription">Meta Description</label>
                                <textarea class="form-control" id="metadescription" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <button type="submit" class="btn btn-secondary waves-effect waves-light">Cencelar</button>
                    </div>
                </form>
            </div>
        </div> --}}


    </div>

    @endsection

    @section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        var inp = document.getElementById('thumbnail-upload');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('thumbnail-preview').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            var inp = document.getElementById('banner-upload');
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('banner-preview').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);

            $('.filters span').click(function() {
                $('.card').hide();
                $(`.${$(this).data('filter')}`).show();
                $('.filters span').removeClass('active');
                $(this).addClass('active');
            })

            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 600,
                });

                $('#select_tag').select2({});

                $('#select_hashtag').select2({});
            });
    </script>
    @endsection