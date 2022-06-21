@extends('painel.template.main')

@section('titulo')
    Edição de Blog
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
    <form action="{{route('painel.blog.salvar', ['blog' => $blog])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">

                            <input type="hidden" id="tipo_pub" name="tipo_pub" value="">

                            <div class="col-lg-7 pt-3 d-flex justify-content-between">
                                @if($blog->status == 1)
                                    <button onClick="salvar('rascunho')" type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-file-blank label-icon"></i> Rascunho</button>

                                    <button onClick="salvar('publicar')" type="submit" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Publicar</button>
                                @elseif($blog->status == 2)
                                    <button onClick="salvar('rascunho')" type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-file-blank label-icon"></i> Rascunho</button>

                                    <button onClick="salvar('publicar')" type="submit" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Publicar</button>
                                @endif
                                
                                <button onClick="salvar('visualizar')" class="btn btn-light waves-effect btn-label waves-light visualizar"><i class="bx bx-show-alt label-icon"></i> Visualizar</button>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="titulo">Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" value="{{ $blog->titulo }}" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="conteudo">Conteúdo</label>
                                    <textarea required cols="80" class="conteudo" id="conteudo" name="conteudo" rows="10" data-sample-short>{{$blog->conteudo}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="resumo">Resumo</label>
                                    <textarea maxlength="104" required cols="80" class="form-control" id="resumo" name="resumo" rows="5" data-sample-short>{{$blog->resumo}}</textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 pb-5">
                                    <label class="mt-3" for="referencias">Referências</label>
                                    <textarea cols="80" class="form-control" id="referencias" name="referencias" rows="10" data-sample-short>{{$blog->referencias}}</textarea>
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
                            <div class="form-group col-lg-12">
                                <label class="mt-3" for="exclusivo" class="form-label">Conteúdo Exclusivo</label>
                                <select required id="exclusivo" name="exclusivo" class="form-select">
                                    <option value="">Selecione</option>
                                    <option value="1" @if($blog->exclusivo == 1) selected @endif>Sim</option>
                                    <option value="0" @if($blog->exclusivo == 0) selected @endif>Não</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="mt-3" for="categoria" class="form-label">Categoria</label>
                                <select required id="categoria" name="categoria" class="form-select">
                                    <option value="">Selecione</option>
                                    @php
                                        $categorias = Categoria::whereAtivo(true)->get();
                                    @endphp

                                    @foreach($categorias as $categoria)
                                        <option @if($blog->categoria_id == $categoria->id) selected @endif value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="mt-3" for="usuario" class="form-label">Usuário</label>
                                <select required id="usuario" name="usuario" class="form-select">
                                    <option value="">Selecione</option>
                                    @php
                                        $usuarios = Usuario::whereAtivo(true)->get();
                                    @endphp

                                    @foreach($usuarios as $usuario)
                                        <option @if($blog->usuario_id == $usuario->id) selected @endif value="{{$usuario->id}}">{{$usuario->nome}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-lg-12">
                                <label class="mt-3" for="autor" class="form-label">Autor</label>
                                <select required id="autor" name="autor" class="form-select">
                                    <option value="">Selecione</option>
                                    @php
                                        $autores = Autor::whereAtivo(true)->get();
                                    @endphp

                                    @foreach($autores as $autor)
                                        <option @if($blog->autor_id == $autor->id) selected @endif value="{{$autor->id}}">{{$autor->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-lg-12">
                                <label class="mt-3" for="tradutor" class="form-label">Tradutor</label>
                                <select id="tradutor" name="tradutor" class="form-select" required>
                                    <option value="">Selecione</option>
                                    @php
                                        $tradutores = Tradutor::whereAtivo(true)->get();
                                    @endphp

                                    @foreach($tradutores as $tradutor)
                                        <option @if($blog->tradutor_id == $tradutor->id) selected @endif value="{{$tradutor->id}}">{{$tradutor->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label">Banner</label>
                                <div class="col-12 text-center">
                                    <img class="escolher_imagem" id="foto-preview" src="{{asset($blog->banner)}}" style="max-height: 105px;" alt="">
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
                <!-- end card -->
            </div>
        </div>
    </form>
</div>
@endsection

@section('scripts')

<script>
        function salvar(valor) {
            $('#tipo_pub').val(valor);
        }

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

            CKEDITOR.replace( 'referencias', {
                filebrowserBrowseUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=2&editor=ckeditor&fldr=',
                filebrowserUploadUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=2&editor=ckeditor&fldr=',
                filebrowserImageBrowseUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=1&editor=ckeditor&fldr=',
                language : '<?php App::getLocale() ?>'
            });
            
        })
    </script>

@endsection