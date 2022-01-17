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
                    <h4 class="card-title">Endereço</h4>

                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="row">
                                <div class="form-group col-7 mt-3">
                                    <label for="rua">Rua</label>
                                    <input type="text" class="form-control" name="rua"
                                        id="rua" value="{{$configuracoes->rua}}">
                                </div>
                                <div class="form-group col-2 mt-3">
                                    <label for="numero">Número</label>
                                    <input type="text" class="form-control" name="numero"
                                        id="numero" maxlength="5" value="{{$configuracoes->numero}}">
                                </div>
                                <div class="form-group col-3 mt-3">
                                    <label for="cep">CEP</label>
                                    <input type="text" class="form-control" name="cep"
                                        id="cep" maxlength="10" value="{{$configuracoes->cep}}">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-3 mt-3">
                                    <label for="complemento">Complemento</label>
                                    <input type="text" class="form-control" name="complemento"
                                        id="complemento" maxlength="100" value="{{$configuracoes->complemento}}">
                                </div>
                                <div class="form-group col-3 mt-3">
                                    <label for="bairro">Bairro</label>
                                    <input type="text" class="form-control" name="bairro"
                                        id="bairro" maxlength="50" value="{{$configuracoes->bairro}}">
                                </div>
                                <div class="form-group col-3 mt-3">
                                    <label for="cidade">Cidade</label>
                                    <input type="text" class="form-control" name="cidade"
                                        id="cidade" maxlength="50" value="{{$configuracoes->cidade}}">
                                </div>
                                <div class="form-group col-3 mt-3">
                                    <label for="estado">Estado</label>
                                    <select class="form-select" name="estado"
                                        id="estado">
                                        <option value="AC" @if($configuracoes->estado == "AC") selected @endif >Acre</option>
                                        <option value="AL" @if($configuracoes->estado == "AL") selected @endif >Alagoas</option>
                                        <option value="AP" @if($configuracoes->estado == "AP") selected @endif >Amapá</option>
                                        <option value="AM" @if($configuracoes->estado == "AM") selected @endif >Amazonas</option>
                                        <option value="BA" @if($configuracoes->estado == "BA") selected @endif >Bahia</option>
                                        <option value="CE" @if($configuracoes->estado == "CE") selected @endif >Ceará</option>
                                        <option value="DF" @if($configuracoes->estado == "DF") selected @endif >Distrito Federal</option>
                                        <option value="ES" @if($configuracoes->estado == "ES") selected @endif >Espírito Santo</option>
                                        <option value="GO" @if($configuracoes->estado == "GO") selected @endif >Goiás</option>
                                        <option value="MA" @if($configuracoes->estado == "MA") selected @endif >Maranhão</option>
                                        <option value="MT" @if($configuracoes->estado == "MT") selected @endif >Mato Grosso</option>
                                        <option value="MS" @if($configuracoes->estado == "MS") selected @endif >Mato Grosso do Sul</option>
                                        <option value="MG" @if($configuracoes->estado == "MG") selected @endif >Minas Gerais</option>
                                        <option value="PA" @if($configuracoes->estado == "PA") selected @endif >Pará</option>
                                        <option value="PB" @if($configuracoes->estado == "PB") selected @endif >Paraíba</option>
                                        <option value="PR" @if($configuracoes->estado == "PR") selected @endif >Paraná</option>
                                        <option value="PE" @if($configuracoes->estado == "PE") selected @endif >Pernambuco</option>
                                        <option value="PI" @if($configuracoes->estado == "PI") selected @endif >Piauí</option>
                                        <option value="RJ" @if($configuracoes->estado == "RJ") selected @endif >Rio de Janeiro</option>
                                        <option value="RN" @if($configuracoes->estado == "RN") selected @endif >Rio Grande do Norte</option>
                                        <option value="RS" @if($configuracoes->estado == "RS") selected @endif >Rio Grande do Sul</option>
                                        <option value="RO" @if($configuracoes->estado == "RO") selected @endif >Rondônia</option>
                                        <option value="RR" @if($configuracoes->estado == "RR") selected @endif >Roraima</option>
                                        <option value="SC" @if($configuracoes->estado == "SC") selected @endif >Santa Catarina</option>
                                        <option value="SP" @if($configuracoes->estado == "SP") selected @endif >São Paulo</option>
                                        <option value="SE" @if($configuracoes->estado == "SE") selected @endif >Sergipe</option>
                                        <option value="TO" @if($configuracoes->estado == "TO") selected @endif >Tocantins</option>
                                    </select>
                                </div>
                            </div>
                            <hr class="mt-4">
                        </div>
                    </div>
                    <h4 class="card-title mt-4">Contato</h4>
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="row">
                                <div class="form-group col-3 mt-3">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" name="telefone"
                                        id="telefone" maxlength="15" value="{{$configuracoes->telefone}}">
                                </div>
                                <div class="form-group col-3 mt-3">
                                    <label for="whatsapp">Whatsapp</label>
                                    <input type="text" class="form-control" name="whatsapp"
                                        id="whatsapp" maxlength="15" value="{{$configuracoes->whatsapp}}">
                                </div>
                                <div class="form-group col-6 mt-3">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" name="email"
                                        id="email" maxlength="100" value="{{$configuracoes->email}}">
                                </div>
                            </div>
                            <hr class="mt-4">
                        </div>
                    </div>
                    <h4 class="card-title mt-4">Redes Sociais</h4>
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="row">
                                <div class="form-group col-12 mt-3">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" class="form-control" name="facebook"
                                        id="facebook" maxlength="255" value="{{$configuracoes->facebook}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="instagram">Instagram</label>
                                    <input type="text" class="form-control" name="instagram"
                                        id="instagram" maxlength="255" value="{{$configuracoes->instagram}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="tiktok">Tiktok</label>
                                    <input type="text" class="form-control" name="tiktok"
                                        id="tiktok" maxlength="255" value="{{$configuracoes->tiktok}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" class="form-control" name="twitter"
                                        id="twitter" maxlength="255" value="{{$configuracoes->twitter}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" class="form-control" name="youtube"
                                        id="youtube" maxlength="255" value="{{$configuracoes->youtube}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="linkedin">Linkedin</label>
                                    <input type="text" class="form-control" name="linkedin"
                                        id="linkedin" maxlength="255" value="{{$configuracoes->linkedin}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="pinterest">Pinterest</label>
                                    <input type="text" class="form-control" name="pinterest"
                                        id="pinterest" maxlength="255" value="{{$configuracoes->pinterest}}">
                                </div>
                                <div class="form-group col-12 mt-3">
                                    <label for="google_negocio">Google Meu Negócio</label>
                                    <input type="text" class="form-control" name="google_negocio"
                                        id="google_negocio" maxlength="255" value="{{$configuracoes->google_negocio}}">
                                </div>
                            </div>
                            <hr class="mt-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-7" style="text-align: right;">
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

@endsection