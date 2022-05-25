@extends('painel.template.main')

@section('titulo')
    Cadastro de Blog
@endsection

@section('conteudo')

@php
    use App\Models\Usuario;
    use App\Models\Autor;
    use App\Models\Categoria;
    use App\Models\Tradutor;
@endphp

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{route('painel.blog.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img id="foto-preview" src="{{asset('admin/imagens/thumb-padrao.png')}}" style="max-height: 200px;" alt="">
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                        <input name="banner" id="foto-upload" style="display: none;" type="file" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="titulo">Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="subtitulo">Subtítulo</label>
                                    <input type="text" class="form-control" name="subtitulo" id="subtitulo" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="conteudo">Conteúdo</label>
                                    <textarea required cols="80" class="conteudo" id="conteudo" name="conteudo" rows="10" data-sample-short></textarea>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="referencias">Referências</label>
                                    <textarea required cols="80" class="form-control" id="referencias" name="referencias" rows="10" data-sample-short></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="exclusivo" class="form-label">Conteúdo Exclusivo</label>
                                    <select id="exclusivo" name="exclusivo" class="form-select" required>
                                        <option value="">Selecione</option>
                                        <option value="1">Sim</option>
                                        <option value="0">Não</option>
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="categoria" class="form-label">Categoria</label>
                                    <select id="categoria" name="categoria" class="form-select" required>
                                        <option value="">Selecione</option>
                                        @php
                                            $categorias = Categoria::whereAtivo(true)->get();
                                        @endphp

                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="usuario" class="form-label">Usuário</label>
                                    <select id="usuario" name="usuario" class="form-select" required>
                                        <option value="">Selecione</option>
                                        @php
                                            $usuarios = Usuario::whereAtivo(true)->get();
                                        @endphp

                                        @foreach($usuarios as $usuario)
                                            <option @if(session()->get("usuario")["id"] == $usuario->id) selected @endif value="{{$usuario->id}}">{{$usuario->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="autor" class="form-label">Autor</label>
                                    <select id="autor" name="autor" class="form-select" required>
                                        <option value="">Selecione</option>
                                        @php
                                            $autores = Autor::whereAtivo(true)->get();
                                        @endphp

                                        @foreach($autores as $autor)
                                            <option value="{{$autor->id}}">{{$autor->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label class="mt-3" for="tradutor" class="form-label">Tradutor</label>
                                    <select id="tradutor" name="tradutor" class="form-select" required>
                                        <option value="">Selecione</option>
                                        @php
                                            $tradutores = Tradutor::whereAtivo(true)->get();
                                        @endphp

                                        @foreach($tradutores as $tradutor)
                                            <option value="{{$tradutor->id}}">{{$tradutor->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5" >
                            <button type="submit" class="btn btn-primary px-5">Salvar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
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