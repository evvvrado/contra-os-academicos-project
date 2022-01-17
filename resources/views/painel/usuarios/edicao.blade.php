@extends('painel.template.main')

@section('titulo')
    Edição do Usuário: {{$usuario->nome}}
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
                <h4 class="card-title mb-4">Informações Básicas</h4>

                <form action="{{route('painel.usuario.salvar', ['usuario' => $usuario])}}" method="POST" enctype="multipart/form-data">
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
                                    @if($usuario->foto)
                                        <img id="foto-preview" src="{{asset($usuario->foto)}}" style="max-height: 200px;" alt="">
                                    @else
                                        <img id="foto-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="max-height: 200px;" alt="">
                                    @endif
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
                                        id="nome" value="{{$usuario->nome}}" maxlength="50" required>
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" name="email"
                                        id="email" value="{{$usuario->email}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" name="telefone"
                                        id="telefone" value="{{$usuario->telefone}}" required>
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="acesso"
                                        class="form-label">Acesso *</label>
                                    <select id="acesso" name="acesso"
                                        class="form-select">
                                        <option value="0" @if($usuario->acesso == 0) selected @endif>Administrador</option>
                                        <option value="1" @if($usuario->acesso == 1) selected @endif>Atendente</option>
                                        <option value="2" @if($usuario->acesso == 2) selected @endif>Produção</option>
                                    </select>
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="usuario">Usuario *</label>
                                    <input type="text" class="form-control" name="usuario"
                                        id="usuario" value="{{$usuario->usuario}}" required>
                                </div>
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" name="senha"
                                        id="senha">
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