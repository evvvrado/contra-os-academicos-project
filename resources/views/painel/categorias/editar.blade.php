@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('titulo')
Catálogo / <a style="color: unset" href="{{ route('painel.categorias') }}">Anunciante</a> / Editar
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Categoria</h4>
                <form action="{{ route('painel.categoria.salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="contrato_id" value="{{$contrato->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome" value="{{$contrato->nome}}">
                            </div>
                            <div class="mb-3">
                                <label for="manufacturername">Início de Contrato</label>
                                <input class="form-control" name="inicio" type="date" id="example-date-input" value="{{$contrato->inicio}}">
                            </div>
                            <div class="mb-3">
                                <label for="price">Valor de Contrato</label>
                                <input id="price" name="valor" type="tel" class="form-control" placeholder="Insira o valor" value="{{$contrato->valor}}">
                            </div>
                            <div class="mb-3 ">
                                <label for="productdesc">Ativo</label>
                                <div class="form-check form-switch form-switch-lg pt-3 ">
                                    <input class="form-check-input form-control" name="ativo" type="checkbox" id="SwitchCheckSizelg" @if($contrato->ativo) checked @endif>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">Expositor</label>
                                <select class="form-control" name="expositor_id">
                                    @foreach (\App\Models\Expositor::all() as $expositor)
                                    <option value="{{ $expositor->id }}" @if($contrato->expositor_id == $expositor->id) selected @endif>{{ $expositor->nome }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="manufacturerbrand">Fim de Contrato</label>
                                <input class="form-control" name="fim" type="date" value="{{$contrato->fim}}" id="example-date-input">
                            </div>
                            <div class="mb-3">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" name="categoria" class="form-control">
                                    @foreach (config('expositores.categorias_nome') as $codigo => $nome)
                                    <option value="{{ $codigo }}" @if($contrato->categoria == $codigo) selected @endif>{{ $nome }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-row">
                        <div class="card-body col-2">



                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center flex-column">
                                        Mobile

                                        <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="banner-preview" @if(!$contrato->imagem_mobile) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{asset($contrato->imagem_mobile)}}"
                                            @endif
                                            style="width: 100%; object-fit: cover;" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="banner-upload">Escolher</label>
                                        <input name="imagem_mobile" id="banner-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body col-8">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">
                                        Desktop
                                        <picture style="height: 281px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="logo-preview" @if(!$contrato->imagem_desktop) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{asset($contrato->imagem_desktop)}}"
                                            @endif
                                            style="width: 100%; object-fit: cover;" alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="logo-upload">Escolher</label>
                                        <input name="imagem_desktop" id="logo-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script>
    var inp = document.getElementById('logo-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('logo-preview').src = this.result;
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
            $('#summernote').summernote({
                height: 600,
            });

            $('#select_tag').select2({});

            $('#select_hashtag').select2({});
        });
</script>
@endsection