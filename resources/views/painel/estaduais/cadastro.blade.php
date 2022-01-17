@extends('painel.template.main')

@section("styles")
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{asset('admin/libs/select2/css/select2.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
{{--  <link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" />  --}}
@endsection

@section('titulo')
    Cadastrod de Estadual
@endsection

@section('botoes')
    <a href="{{route('painel.estaduais')}}" class="btn btn-primary">Voltar</a>
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 text-left my-3" style="color:red;">
                        * Campos obrigatórios
                    </div>
                </div>
                {{--  <h4 class="card-title mb-4">Informações Básicas</h4>  --}}

                <form action="{{route('painel.estadual.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="card-title mb-4 mt-4">Foto</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img id="foto-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="width: 100%; max-width:200px;" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                    <input name="foto" id="foto-upload" style="display: none;" type="file" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <small style="color: red;">* Dimensões: 470px por 400px.</small>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group col-12 col-lg-5 mt-3">
                            <label for="nome">Nome *</label>
                            <input type="text" class="form-control" name="nome"
                                id="nome" maxlenght="100" required>
                        </div>
                        <div class="form-group col-12 col-lg-5 mt-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email"
                                id="email" maxlenght="100">
                        </div>
                        <div class="form-group col-12 col-lg-2 mt-3">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" name="slug"
                                id="slug" maxlenght="50">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-lg-6 mt-3">
                            <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone"
                                id="telefone" maxlenght="16">
                        </div>
                        <div class="form-group col-12 col-lg-6 mt-3">
                            <label for="whatsapp">Whatsapp</label>
                            <input type="text" class="form-control" name="whatsapp"
                                id="whatsapp" maxlenght="16">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-lg-6 mt-3">
                            <label for="">Região</label>
                            <select class="form-control" name="regiao">
                                @foreach(config("globals.regioes") as $key => $regiao)
                                    <option value="{{$key}}">{{$regiao}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-12 col-lg-6 mt-3">
                            <label for="site">Link do Site</label>
                            <input type="text" class="form-control" name="site"
                                id="site" maxlenght="255">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12 col-lg-6 mt-3">
                            <label for="instagram">Link do Instagram</label>
                            <input type="text" class="form-control" name="instagram"
                                id="instagram" maxlenght="255">
                        </div>
                        <div class="form-group col-12 col-lg-6 mt-3">
                            <label for="facebook">Link do Facebook</label>
                            <input type="text" class="form-control" name="facebook"
                                id="facebook" maxlenght="255">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" name="titulo"
                                id="titulo" maxlenght="255">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Sobre</label>
                            <textarea class="form-control" name="sobre" id="summernote" rows="10"></textarea>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-12" style="text-align: right;">
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{asset('admin/libs/select2/js/select2.min.js')}}"></script>
<script>
    var inp = document.getElementById('foto-upload');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('foto-preview').src = this.result;
            };
        reader.readAsDataURL(file);
    },false);

    $(document).ready(function() {

        $('#summernote').summernote({
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Merriweather'],
            fontSizes: ['8', '9', '10', '11', '12', '13', '14', '15', '16', '18', '20', '22' , '24', '28', '32', '36', '40', '48'],
            height: 600,
            toolbar: [
                // [groupName, [list of button]]
                ['style'],
                ['style', ['clear', 'bold', 'italic', 'underline']],
                ['fontname', ['fontname']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],       
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['view', ['codeview']],
                ['insert', ['picture', 'link', 'video', 'table', 'hr']]
            ]
        });
    });

</script>
@endsection