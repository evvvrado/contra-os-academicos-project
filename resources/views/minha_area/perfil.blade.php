@extends('minha_area.template.main')

@section('styles')
@endsection


@section('titulo')
    Perfil @if(isset($tipo)) {{$tipo}}  @endif
@endsection

@section('botoes')
@endsection

@section('conteudo')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Informações</h4>
                <form action="{{ route('minha_area.perfil.salvar', ['usuario_site' => $usuario_site]) }}" method="POST" enctype="multipart/form-data">
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
                                    @if($usuario_site->foto)
                                        <img class="escolher_imagem" id="foto-preview" src="{{asset($usuario_site->foto)}}" style="max-height: 200px;" alt="">
                                    @else
                                        <img class="escolher_imagem" id="foto-preview" src="{{asset('admin/imagens/usuarios/sem_foto.png')}}" style="max-height: 200px;" alt="">
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
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="nome" id="nome" value="{{$usuario_site->nome}}" maxlength="50" required>
                                </div>
                                <div class="form-group col-6 mt-3">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" name="email" id="email" value="{{$usuario_site->email}}" required>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="telefone">Telefone</label>
                                    <input type="telefone" placeholder="(00) 0 0000-0000" class="form-control celular" name="telefone" id="telefone" value="{{$usuario_site->telefone}}">
                                </div>

                                <div class="form-group col-2 mt-3">
                                    <label for="uf">UF</label>
                                    <select id="uf" name="uf" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="AC" @if($usuario_site->uf == "AC") selected @endif>Acre</option>
                                        <option value="AL" @if($usuario_site->uf == "AL") selected @endif>Alagoas</option>
                                        <option value="AP" @if($usuario_site->uf == "AP") selected @endif">Amapá</option>
                                        <option value="AM" @if($usuario_site->uf == "AM") selected @endif">Amazonas</option>
                                        <option value="BA" @if($usuario_site->uf == "BA") selected @endif">Bahia</option>
                                        <option value="CE" @if($usuario_site->uf == "CE") selected @endif">Ceará</option>
                                        <option value="DF" @if($usuario_site->uf == "DF") selected @endif">Distrito Federal</option>
                                        <option value="ES" @if($usuario_site->uf == "ES") selected @endif">Espírito Santo</option>
                                        <option value="GO" @if($usuario_site->uf == "GO") selected @endif">Goiás</option>
                                        <option value="MA" @if($usuario_site->uf == "MA") selected @endif">Maranhão</option>
                                        <option value="MT" @if($usuario_site->uf == "MT") selected @endif">Mato Grosso</option>
                                        <option value="MS" @if($usuario_site->uf == "MS") selected @endif">Mato Grosso do Sul</option>
                                        <option value="MG" @if($usuario_site->uf == "MG") selected @endif">Minas Gerais</option>
                                        <option value="PA" @if($usuario_site->uf == "PA") selected @endif">Pará</option>
                                        <option value="PB" @if($usuario_site->uf == "PB") selected @endif">Paraíba</option>
                                        <option value="PR" @if($usuario_site->uf == "PR") selected @endif">Paraná</option>
                                        <option value="PE" @if($usuario_site->uf == "PE") selected @endif">Pernambuco</option>
                                        <option value="PI" @if($usuario_site->uf == "PI") selected @endif">Piauí</option>
                                        <option value="RJ" @if($usuario_site->uf == "RJ") selected @endif">Rio de Janeiro</option>
                                        <option value="RN" @if($usuario_site->uf == "RN") selected @endif">Rio Grande do Norte</option>
                                        <option value="RS" @if($usuario_site->uf == "RS") selected @endif">Rio Grande do Sul</option>
                                        <option value="RO" @if($usuario_site->uf == "RO") selected @endif">Rondônia</option>
                                        <option value="RR" @if($usuario_site->uf == "RR") selected @endif">Roraima</option>
                                        <option value="SC" @if($usuario_site->uf == "SC") selected @endif">Santa Catarina</option>
                                        <option value="SP" @if($usuario_site->uf == "SP") selected @endif">São Paulo</option>
                                        <option value="SE" @if($usuario_site->uf == "SE") selected @endif">Sergipe</option>
                                        <option value="TO" @if($usuario_site->uf == "TO") selected @endif">Tocantins</option>
                                        <option value="EX" @if($usuario_site->uf == "EX") selected @endif">Estrangeiro</option>
                                    </select>
                                </div>

                                <div class="form-group col-4 mt-3">
                                    <label for="cidade">Cidade</label>
                                    <input type="cidade" class="form-control" name="cidade" id="cidade" value="{{$usuario_site->cidade}}">
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="sexo">Sexo</label>
                                    <select name="sexo" id="sexo" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="M" @if($usuario_site->sexo == "M") selected @endif>Masculino</option>
                                        <option value="F" @if($usuario_site->sexo == "F") selected @endif>Feminino</option>
                                        <option value="na" @if($usuario_site->sexo == "NA") selected @endif>Não desejo informar</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="escolaridade">Escolaridade</label>
                                    <select name="escolaridade" id="escolaridade" class="form-control">
                                        <option value="">Selecione</option>
                                        <option value="Ensino Fundamental" @if($usuario_site->escolaridade == "Ensino Fundamental") selected @endif>Ensino Fundamental</option>
                                        <option value="Ensino Médio" @if($usuario_site->escolaridade == "Ensino Médio") selected @endif>Ensino Médio</option>
                                        <option value="Ensino Superior" @if($usuario_site->escolaridade == "Ensino Superior") selected @endif>Ensino Superior</option>
                                        <option value="Graduação" @if($usuario_site->escolaridade == "Graduação") selected @endif>Graduação</option>
                                        <option value="Pós Graduação" @if($usuario_site->escolaridade == "Pós Graduação") selected @endif>Pós Graduação</option>
                                        <option value="Mestrado" @if($usuario_site->escolaridade == "Mestrado") selected @endif>Mestrado</option>
                                        <option value="Doutorado" @if($usuario_site->escolaridade == "Doutorado") selected @endif>Doutorado</option>
                                    </select>
                                </div>

                                <div class="form-group col-6 mt-3">
                                    <label for="nascimento">Nascimento</label>
                                    <input type="nascimento" placeholder="00/00/0000" class="form-control data" name="nascimento" id="nascimento" value="{{date('d-m-Y', strtotime($usuario_site->nascimento))}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-6 mt-3">
                                    <label for="senha">Senha</label>
                                    <input type="password" class="form-control" name="senha" id="senha">
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

        $('.celular').mask('(00) 0 0000-0000');
        $('.data').mask('00/00/0000');
    });
</script>
@endsection