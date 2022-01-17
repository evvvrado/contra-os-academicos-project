@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@section('titulo')
Publicidade / <a style="color: unset" href="{{ route('painel.patrocinadores') }}">Patrocinadores</a> / Editar
@endsection


@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Editar Patrocinador</h4>
                <form action="{{ route('painel.patrocinadores.salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="patrocinador_id" value="{{$patrocinador->id}}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Nome</label>
                                <input id="productname" name="nome" type="text" class="form-control" placeholder="Insira o nome" value="{{$patrocinador->nome}}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="manufacturerbrand">URL para redirecionar</label>
                                <input class="form-control" name="url" type="url" placeholder="Insira a URL" id="example-url-input" value="{{$patrocinador->url}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <div class="row">
                            <div class="text-center mb-3">
                                <small>Logo sem fundo 115px x 45px</small>
                            </div>
                            <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                <picture style="    height: 85px;
                                    background-color: #f3f4f6;
                                    width: 100%;
                                    max-width: 115px                                ;
                                    overflow: hidden;
                                    display: flex;
                                    align-items: center;
                                    justify-content: center;">
                                    <img id="banner-preview" @if(!$patrocinador->foto) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($patrocinador->foto) }}" @endif
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

</script>
@endsection