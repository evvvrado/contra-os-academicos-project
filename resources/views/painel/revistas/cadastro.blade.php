@extends('painel.template.main')

@section('titulo')
    Cadastro de Revistas
@endsection

@section('conteudo')

@php
    use App\Models\Usuario;
    use App\Models\Categoria;
    use App\Models\Autor;
@endphp

@include('painel.includes.errors')

<div class="row">
    <form action="{{route('painel.revista.cadastrar')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-xl-9 col-lg-8">
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="col-xl-11">
                            <input type="hidden" id="tipo_pub" name="tipo_pub" value="">

                            <div class="col-lg-7 pt-3 d-flex justify-content-between">
                                <button onClick="salvar('publicar')" type="submit" class="btn btn-success waves-effect btn-label waves-light"><i class="bx bx-check-double label-icon"></i> Publicar</button>

                                <button onClick="salvar('rascunho')" type="submit" class="btn btn-primary waves-effect btn-label waves-light"><i class="bx bx-file-blank label-icon"></i> Rascunho</button>

                                <button onClick="salvar('visualizar')" class="btn btn-light waves-effect btn-label waves-light visualizar"><i class="bx bx-show-alt label-icon"></i> Visualizar</button>
                            </div>

                            {{-- (610x 380x) --}}
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="titulo">Título</label>
                                    <input type="text" class="form-control" name="titulo" id="titulo" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label class="mt-3" for="conteudo">Conteúdo</label>
                                    <textarea required cols="80" class="conteudo" id="conteudo" name="conteudo" rows="10" data-sample-short></textarea>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-12 pb-5">
                                    <label class="mt-3" for="resumo">Resumo</label>
                                    <textarea maxlength="104" required cols="80" class="form-control" id="resumo" name="resumo" rows="5" data-sample-short></textarea>
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
                            <div class="form-group col-lg-12">
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
                            <div class="form-group col-lg-12">
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

                            <div class="form-group mt-3">
                                <label class="form-label">Banner</label>
                                <div class="col-12 text-center">
                                    <img class="escolher_imagem" id="foto-preview1" src="{{asset('admin/imagens/thumb-padrao.png')}}" style="max-height: 105px;" alt="">
                                </div>
                                <div>
                                    <div class="col-12 text-center mt-3">
                                        <label class="btn btn-primary" for="foto-upload1">Escolher</label>
                                        <input onchange="mudar_foto(this.files, 1)" name="banner" id="foto-upload1" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group mt-3">
                                <label class="form-label">Destaque</label>
                                <div class="col-12 text-center">
                                    <img class="escolher_imagem" id="foto-preview2" src="{{asset('admin/imagens/thumb-padrao.png')}}" style="max-height: 105px;" alt="">
                                </div>
                                <div>
                                    <div class="col-12 text-center mt-3">
                                        <label class="btn btn-primary" for="foto-upload2">Escolher</label>
                                        <input onchange="mudar_foto(this.files, 2)" name="banner_destaque" id="foto-upload2" style="display: none;" type="file">
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
<!-- end row -->

@endsection

@section('scripts')

<script>
        function salvar(valor) {
            $('#tipo_pub').val(valor);
        }

        function mudar_foto(files, id) {
            var inp = document.getElementById('foto-upload'+id);
            var file = files[0];
            var reader = new FileReader();
            reader.onload = function(){
                console.log(this.result)
                document.getElementById('foto-preview'+id).src = this.result;
            };
            reader.readAsDataURL(file);
        }
        $(document).ready(function(){

            CKEDITOR.replace( 'conteudo', {
                filebrowserBrowseUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=2&editor=ckeditor&fldr=',
                filebrowserUploadUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=2&editor=ckeditor&fldr=',
                filebrowserImageBrowseUrl : '@filemanager_get_resource(dialog.php)?akey=@filemanager_get_key()&type=1&editor=ckeditor&fldr=',
                language : '<?php App::getLocale() ?>'
            });
            
        })
    </script>

@endsection