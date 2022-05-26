@extends('painel.template.main')

@section('titulo')
    Cadastro de Usuário
@endsection

@section('conteudo')

@php
    use App\Models\Setor;
@endphp

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
                <h4 class="card-title mb-4">Informações Básicas</h4>

                <form action="{{route('painel.usuario.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-lg-5 text-center">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="card-title mb-4 mt-4">Foto</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img class="escolher_imagem" id="foto-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="max-height: 200px;" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="foto-upload">Escolher</label>
                                    <input name="foto" id="foto-upload" style="display: none;" type="file">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    {{--  <small style="color: red;">* Importante: Utilize imagens quadradas para garantir uma melhor visualização no site.</small>  --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 mt-4">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="nome">Nome *</label>
                                    <input type="text" class="form-control" name="nome"
                                        id="nome" required>
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email"
                                        id="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="acesso" class="form-label">Setor *</label>
                                    <select id="setor" name="setor" class="form-select">
                                        <option value="">Selecione</option>
                                        @php
                                            $setores = Setor::where("status", "Ativo")->get();
                                        @endphp

                                        @foreach($setores as $setor)
                                            <option value="{{$setor->id}}">{{$setor->setor}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="usuario">Usuario *</label>
                                    <input type="text" class="form-control" name="usuario"
                                        id="usuario" required>
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="senha">Senha *</label>
                                    <input type="password" class="form-control" name="senha"
                                        id="senha" required>
                                </div>
                            </div>
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
    });
</script>
@endsection