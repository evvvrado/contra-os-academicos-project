@extends('painel.template.main')

@section('titulo')
    Informações de Contato
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{route('painel.configuracoes.contato.salvar')}}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="destaque_suspenso" id="desaque_suspenso" value="1" @if($configuracoes->destaque_suspenso) checked @endif>
                                    Ativar Destaque Suspenso
                                </label>
                            </div>
                        </div>
                    </div>
                    <div id="div-campos" @if(!$configuracoes->destaque_suspenso) style="display:none;" @endif>
                        <div class="row">
                            <div class="col-12 col-lg-7 text-center">
                                <div class="row">
                                    <div class="col-12">
                                        <h4 class="card-title mb-4 mt-4">Imagem</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        @if(!$configuracoes->destaque_suspenso_imagem)
                                            <img id="foto-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="width: 100%; max-width:300px;" alt="">
                                        @else
                                            <img id="foto-preview" src="{{asset($configuracoes->destaque_suspenso_imagem)}}" style="width: 100%; max-width:300px;" alt="">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                        <input name="destaque_suspenso_imagem" id="foto-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="row">
                                    <div class="form-group col-12 mt-3">
                                        <label for="destaque_suspenso_titulo">Título</label>
                                        <input type="text" class="form-control" name="destaque_suspenso_titulo"
                                            id="destaque_suspenso_titulo" value="{{$configuracoes->destaque_suspenso_titulo}}">
                                    </div>
                                    <div class="form-group col-12 mt-3">
                                        <label for="destaque_suspenso_descricao">Descrição</label>
                                        <textarea class="form-control" name="destaque_suspenso_descricao"
                                            id="destaque_suspenso_descricao">{{$configuracoes->destaque_suspenso_descricao}}</textarea>
                                    </div>
                                </div>
                                <hr class="mt-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="row">
                                    <div class="form-group col-12 col-lg-6 mt-3">
                                        <label for="destaque_suspenso_inicio">Início</label>
                                        <input type="datetime-local" class="form-control" name="destaque_suspenso_inicio"
                                            id="destaque_suspenso_inicio" value="{{$configuracoes->destaque_suspenso_inicio}}">
                                    </div>
                                    <div class="form-group col-12 col-lg-6 mt-3">
                                        <label for="destaque_suspenso_fim">Fim</label>
                                        <input type="datetime-local" class="form-control" name="destaque_suspenso_fim"
                                            id="destaque_suspenso_fim" value="{{$configuracoes->destaque_suspenso_fim}}">
                                    </div>
                                </div>
                                <hr class="mt-4">
                            </div>
                        </div>             
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 col-lg-7" style="text-align: left;">
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

    var inp = document.getElementById('foto-upload');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('foto-preview').src = this.result;
            };
        reader.readAsDataURL(file);
    },false);

    $(document).ready(function(){
        $("#desaque_suspenso").change(function(){
            if(this.checked){
                $("#div-campos").slideDown(200);
            }else{
                $("#div-campos").slideUp(200);
            }
        })
    });
</script>

@endsection