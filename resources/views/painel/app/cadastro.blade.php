@extends('painel.template.main')

@section('titulo')
    Cadastro de App
@endsection

@section('conteudo')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-12">
                        <a name="" id="" class="btn btn-primary" href="{{route('painel.app')}}" role="button">Voltar</a>
                    </div>
                </div>
                <form action="{{route('painel.app.cadastrar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome">
                            </div>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" id="slug">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-3">
                                <label for="ativo" class="form-label">Ativo</label>
                                <select class="form-select" name="ativo">
                                    <option value="0">Não</option>
                                    <option value="1" selected>Sim</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <h4 class="card-title mb-4 mt-4">Links e Credenciais</h4>

                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="url" class="form-label">Url do Website</label>
                                <input type="text" class="form-control" name="url" id="url">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="whatsapp" class="form-label">Whatsapp</label>
                                <input type="text" class="form-control" name="whatsapp" id="whatsapp">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="login_google" class="form-label">Email Google</label>
                                <input type="text" class="form-control" name="login_google" id="login_google">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="senha_google" class="form-label">Senha do email</label>
                                <input type="text" class="form-control" name="senha_google" id="senha_google">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="facebook" class="form-label">Facebook</label>
                                <input type="text" class="form-control" name="facebook" id="facebook">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_facebook" class="form-label">Login do facebook</label>
                                <input type="text" class="form-control" name="login_facebook" id="login_facebook">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_facebook" class="form-label">Senha do facebook</label>
                                <input type="text" class="form-control" name="senha_facebook" id="senha_facebook">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="linkedin" class="form-label">Linkedin</label>
                                <input type="text" class="form-control" name="linkedin" id="linkedin">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_linkedin" class="form-label">Login do linkedin</label>
                                <input type="text" class="form-control" name="login_linkedin" id="login_linkedin">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_linkedin" class="form-label">Senha do linkedin</label>
                                <input type="text" class="form-control" name="senha_linkedin" id="senha_linkedin">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="instagram" class="form-label">Instagram</label>
                                <input type="text" class="form-control" name="instagram" id="instagram">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_instagram" class="form-label">Login do instagram</label>
                                <input type="text" class="form-control" name="login_instagram" id="login_instagram">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_instagram" class="form-label">Senha do instagram</label>
                                <input type="text" class="form-control" name="senha_instagram" id="senha_instagram">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="pinterest" class="form-label">Pinterest</label>
                                <input type="text" class="form-control" name="pinterest" id="pinterest">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_pinterest" class="form-label">Login do pinterest</label>
                                <input type="text" class="form-control" name="login_pinterest" id="login_pinterest">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_pinterest" class="form-label">Senha do pinterest</label>
                                <input type="text" class="form-control" name="senha_pinterest" id="senha_pinterest">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="twitter" class="form-label">Twitter</label>
                                <input type="text" class="form-control" name="twitter" id="twitter">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_twitter" class="form-label">Login do twitter</label>
                                <input type="text" class="form-control" name="login_twitter" id="login_twitter">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_twitter" class="form-label">Senha do twitter</label>
                                <input type="text" class="form-control" name="senha_twitter" id="senha_twitter">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="youtube" class="form-label">Youtube</label>
                                <input type="text" class="form-control" name="youtube" id="youtube">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_youtube" class="form-label">Login do youtube</label>
                                <input type="text" class="form-control" name="login_youtube" id="login_youtube">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_youtube" class="form-label">Senha do youtube</label>
                                <input type="text" class="form-control" name="senha_youtube" id="senha_youtube">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="google_negocio" class="form-label">Google Meu Negócio</label>
                                <input type="text" class="form-control" name="google_negocio" id="google_negocio">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_google_negocio" class="form-label">Login do Google Meu Negócio</label>
                                <input type="text" class="form-control" name="login_google_negocio" id="login_google_negocio">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_google_negocio" class="form-label">Senha do Google Meu Negócio</label>
                                <input type="text" class="form-control" name="senha_google_negocio" id="senha_google_negocio">
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="mb-3">
                                <label for="tiktok" class="form-label">Tiktok</label>
                                <input type="text" class="form-control" name="tiktok" id="tiktok">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="login_tiktok" class="form-label">Login do Tiktok</label>
                                <input type="text" class="form-control" name="login_tiktok" id="login_tiktok">
                            </div>
                        </div>
                        <div class="col-lg-3 col-6">
                            <div class="mb-3">
                                <label for="senha_tiktok" class="form-label">Senha do Tiktok</label>
                                <input type="text" class="form-control" name="senha_tiktok" id="senha_tiktok">
                            </div>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-center">
                            <div class="row">
                                <div class="col-12">
                                    <h4 class="card-title mb-4 mt-4">Logo</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <img id="logo-preview" src="{{asset('admin/images/padrao.png')}}" style="width: 100%; max-width:200px;" alt="">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="logo-upload">Escolher</label>
                                    <input name="logo" id="logo-upload" style="display: none;" type="file">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <small style="color: red;">* Importante: Caso a logo tenha elementos brancos, coloque um fundo de outra cor.</small>
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
        var inp = document.getElementById('logo-upload');
        inp.addEventListener('change', function(e){
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(){
                document.getElementById('logo-preview').src = this.result;
                };
            reader.readAsDataURL(file);
        },false);
    </script>
@endsection