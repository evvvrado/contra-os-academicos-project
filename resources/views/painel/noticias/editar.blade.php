@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('titulo')
Blog / <a style="color: unset" href="{{ route('painel.noticias') }}">Noticias</a> / Cadastro
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Notícia</h4>
                <form id="form-cadastro" action="{{ route('painel.noticia.cadastrar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="noticia_id" value="{{$noticia->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="titulo">Título</label>
                                <input id="titulo" name="titulo" type="text" placeholder="Insira o título da notícia" class="form-control" value="{{$noticia->titulo}}">
                            </div>
                            <div class="mb-3">
                                <label for="categoria">Categoria</label>
                                <select class="form-control" name="categoria_id" id="select_categoria" required>
                                    @foreach (\App\Models\Categoria::all() as $categoria)
                                    <option value="{{ $categoria->id }}" @if($noticia->categoria_id == $categoria->id) selected @endif>{{ $categoria->nome }}</option>}
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="fonte">Fonte</label>
                                <input id="fonte" name="fonte" type="text" placeholder="Fonte da Notícia" class="form-control" value="{{$noticia->fonte}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="autor">Autor</label>
                                <input id="autor" name="autor" type="text" placeholder="Insira o nome do autor" class="form-control" value="{{$noticia->autor}}">
                            </div>
                            <div class="mb-3">
                                <label for="publicacaodata">Data de Publicação</label>
                                <input class="form-control" name="publicacao" type="date" value="{{$noticia->publicacao}}" id="publicacaodata">
                            </div>
                            <div class="mb-3">
                                <label for="tags">Tags</label>
                                <select class="form-control" name="tags[]" id="select_tag" multiple="multiple">
                                    @foreach (\App\Models\Tag::all() as $tag)
                                    <option value="{{ $tag->id }}" @if($noticia->tags->contains($tag->id)) selected @endif>{{ $tag->nome }}</option>}
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3">
                            <label for="resumo">Resumo</label>
                            <input id="resumo" name="resumo" type="text" placeholder="Resumo da Notícia" class="form-control" value="{{$noticia->resumo}}">
                        </div>
                    </div>
                    <div class="row">

                        <div class="mb-3">
                            <label for="resumo">Conteúdo</label>
                            <textarea class="form-control" name="conteudo" id="summernote" rows="10">{!! $noticia->conteudo !!}</textarea>
                        </div>

                    </div>
                    <div class="row flex-row">
                        <div class="card-body col-2">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center flex-column">

                                        Thumbnail
                                        <small>Uma imagem quadrada em uma alta resolução</small>

                                        <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="thumbnail-preview" @if(!$noticia->preview) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($noticia->preview) }}" @endif
                                            style="width: 100%; object-fit: cover;" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="thumbnail-upload">Escolher</label>
                                        <input name="preview" id="thumbnail-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                </form>
            </div>

            <div class="card-body col-8">
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">

                            Banner
                            <small>Uma imagem escura em uma alta resolução</small>
                            <picture style="height: 281px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="banner-preview" @if(!$noticia->banner) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($noticia->banner) }}" @endif
                                style="width: 100%; object-fit: cover;" alt="">
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
        <div class="d-flex flex-wrap gap-2">
            <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
        </div>
        </form>
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
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>
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

        $(document).ready(function() {
            $("#btn-submit").click(function() {
                $("#form-cadastro").submit();
            });

            $('#summernote').summernote({
                height: 600,
            });

            $('#select_tag').select2({
                tags: true
            });

            $('#select_categoria').select2({
                tags: true
            });
                
                $('.select2-selection--multiple').addClass('form-control');


                $('.select2-selection--single').height('53px')
                $('.select2-selection--single').css('display', 'flex');
                $('.select2-selection--single').css('align-items', 'center');
                $('.select2-container--default .select2-selection--single').css('border', '1px solid #ced4da');
        });
        
</script>
@endsection