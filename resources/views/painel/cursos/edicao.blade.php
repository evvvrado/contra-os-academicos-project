@extends('painel.template.main')

@section('titulo')
    Edição de Curso
@endsection

@section('conteudo')

@php
    use App\Models\Categoria;
@endphp

@include('painel.includes.errors')
<div class="row">
    <form action="{{route('painel.curso.salvar', ['curso' => $curso])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="titulo">Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $curso->titulo }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="conteudo">Conteúdo</label>
                                    <textarea required cols="80" class="conteudo" id="conteudo" name="conteudo" rows="10" data-sample-short>{{$curso->conteudo}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-4">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-lg-12 mt-2 mb-2 text-center" >
                                <button type="submit" class="btn btn-primary px-5">Salvar</button>
                            </div>

                            <div class="form-group col-lg-12">
                                <label class="mt-3" for="categoria" class="form-label">Categoria</label>
                                <select required id="categoria" name="categoria" class="form-select">
                                    <option value="">Selecione</option>
                                    @php
                                        $categorias = Categoria::whereAtivo(true)->get();
                                    @endphp

                                    @foreach($categorias as $categoria)
                                        <option @if($curso->categoria_id == $categoria->id) selected @endif value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label">Banner</label>
                                <div class="col-12 text-center">
                                    <img class="escolher_imagem" id="foto-preview" src="{{asset($curso->banner)}}" style="max-height: 105px;" alt="">
                                </div>
                                <div>
                                    <div class="col-12 text-center mt-3">
                                        <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                        <input name="banner" id="foto-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')

<script>
        $(document).ready(function(){
            var inp = document.getElementById('foto-upload');
            inp.addEventListener('change', function(e){
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function(){
                    document.getElementById('foto-preview').src = this.result;
                    };
                reader.readAsDataURL(file);
            },false);

            CKEDITOR.replace( 'conteudo', {
                filebrowserBrowseUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=2&editor=ckeditor&fldr=',
                filebrowserUploadUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=2&editor=ckeditor&fldr=',
                filebrowserImageBrowseUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=1&editor=ckeditor&fldr=',
                language : '<?php App::getLocale() ?>'
            });
            
        })
    </script>

@endsection