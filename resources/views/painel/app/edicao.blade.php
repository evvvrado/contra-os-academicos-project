@extends('painel.template.main')

@section('styles')
    <!-- Sweet Alert-->
    <link href="{{asset('admin/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Editando APP: {{$app->nome}}
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-12">
                        <a name="" id="" class="btn btn-primary" href="{{route('painel.app')}}" role="button">Voltar</a>
                    </div>
                </div>

                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link @if(!session()->get('meuslinks')) active @endif" data-bs-toggle="tab" href="#cadastro" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Dados de Cadastro</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(session()->get('meuslinks')) active @endif" data-bs-toggle="tab" href="#gefitapp" role="tab">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Links</span>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane @if(!session()->get('meuslinks')) active @endif" id="cadastro" role="tabpanel">
                        <form id="form-edicao" action="{{route('painel.app.salvar', ['app' => $app])}}" method="POST" enctype="multipart/form-data">
                    
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome" value="{{$app->nome}}" required>
                            </div>
        
                            <div class="row">
                                <div class="col-lg-3 ol-md-6 col-12 mt-3">
                                    <div class="mb-3">
                                        <label for="slug" class="form-label">Slug</label>
                                        <input type="text" class="form-control" name="slug" id="slug" value="{{$app->slug}}">
                                        <small>Ex: appteste</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-12 mt-3">
                                    <div class="mb-3">
                                        <label for="ativo" class="form-label">Ativo</label>
                                        <select class="form-select" name="ativo">
                                            <option value="0" @if($app->ativo == 0) selected @endif>Não</option>
                                            <option value="1" @if($app->ativo == 1) selected @endif>Sim</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
        
                            <hr>
        
                            <h4 class="card-title mb-4 mt-4">Meus Links</h4>
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <div class="mb-3">
                                        <label for="titulo" class="form-label">Título</label>
                                        <input type="text" class="form-control" name="titulo" id="titulo" maxlength="100" value="{{$app->titulo}}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-10">
                                    <div class="mb-3">
                                        <label for="subtitulo" class="form-label">Subtítulo</label>
                                        <input type="text" class="form-control" name="subtitulo" id="subtitulo" maxlength="250" value="{{$app->subtitulo}}">
                                    </div>
                                </div>

                                <div class="col-lg-2 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="example-color-input" class="col-form-label">Cor do Título</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control form-control-color" name="cor_titulo" type="color" value="{{$app->cor_titulo}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="example-color-input" class="col-form-label">Cor do Subtítulo</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control form-control-color" name="cor_subtitulo" type="color" value="{{$app->cor_subtitulo}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="example-color-input" class="col-form-label">Fundo do Cartão</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control form-control-color mx-2" name="cor_fundo_cartao" type="color" value="{{$app->cor_fundo_cartao}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="example-color-input" class="col-form-label">Fundo do Cartão (Hover)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control form-control-color mx-2" name="cor_fundo_cartao_hover" type="color" value="{{$app->cor_fundo_cartao_hover}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="example-color-input" class="col-form-label">Letra do Cartão</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control form-control-color mx-2" name="cor_letra_cartao" type="color" value="{{$app->cor_letra_cartao}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="example-color-input" class="col-form-label">Letra do Cartão (Hover)</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <input class="form-control form-control-color mx-2" name="cor_letra_cartao_hover" type="color" value="{{$app->cor_letra_cartao_hover}}">
                                        </div>
                                    </div>
                                </div>      
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class="card-title mb-4 mt-4">Imagem de Fundo</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            @if($app->fundo)
                                                <img id="fundo_getree-preview" src="{{asset($app->fundo)}}" style="max-height: 400px;" alt="">
                                            @else
                                                <img id="fundo_getree-preview" src="{{asset('admin/images/padrao.png')}}" style="max-height: 400px;" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <label class="btn btn-primary" for="fundo_getree-upload">Escolher</label>
                                            <input name="fundo" id="fundo_getree-upload" style="display: none;" type="file">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
        
                            <h4 class="card-title mb-4 mt-4">Links e Credenciais</h4>
        
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="url" class="form-label">Url do Website</label>
                                        <input type="text" class="form-control" name="url" id="url" value="{{$app->url}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="whatsapp" class="form-label">Whatsapp</label>
                                        <input type="text" class="form-control" name="whatsapp" id="whatsapp" value="{{$app->whatsapp}}">
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="login_google" class="form-label">Email Google</label>
                                        <input type="text" class="form-control" name="login_google" id="login_google" value="{{$app->login_google}}">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="mb-3">
                                        <label for="senha_google" class="form-label">Senha do email</label>
                                        <input type="text" class="form-control" name="senha_google" id="senha_google" value="{{$app->senha_google}}">
                                    </div>
                                </div>
                                
                                {{--  FACEBOOK  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="facebook" class="form-label">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" id="facebook" value="{{$app->facebook}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_facebook" class="form-label">Login do facebook</label>
                                        <input type="text" class="form-control" name="login_facebook" id="login_facebook" value="{{$app->login_facebook}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_facebook" class="form-label">Senha do facebook</label>
                                        <input type="text" class="form-control" name="senha_facebook" id="senha_facebook" value="{{$app->senha_facebook}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="facebook_ativo" @if($app->facebook_ativo) checked @endif >
                                    </div>
                                </div>

                                {{--  LINKEDIN  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="linkedin" class="form-label">Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin" id="linkedin" value="{{$app->linkedin}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_linkedin" class="form-label">Login do linkedin</label>
                                        <input type="text" class="form-control" name="login_linkedin" id="login_linkedin" value="{{$app->login_linkedin}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_linkedin" class="form-label">Senha do linkedin</label>
                                        <input type="text" class="form-control" name="senha_linkedin" id="senha_linkedin" value="{{$app->senha_linkedin}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="linkedin_ativo" @if($app->linkedin_ativo) checked @endif>
                                    </div>
                                </div>

                                {{--  INSTAGRAM  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="instagram" class="form-label">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" id="instagram" value="{{$app->instagram}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_instagram" class="form-label">Login do instagram</label>
                                        <input type="text" class="form-control" name="login_instagram" id="login_instagram" value="{{$app->login_instagram}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_instagram" class="form-label">Senha do instagram</label>
                                        <input type="text" class="form-control" name="senha_instagram" id="senha_instagram" value="{{$app->senha_instagram}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="instagram_ativo" @if($app->instagram_ativo) checked @endif>
                                    </div>
                                </div>

                                {{--  PINTEREST  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="pinterest" class="form-label">Pinterest</label>
                                        <input type="text" class="form-control" name="pinterest" id="pinterest" value="{{$app->pinterest}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_pinterest" class="form-label">Login do pinterest</label>
                                        <input type="text" class="form-control" name="login_pinterest" id="login_pinterest" value="{{$app->login_pinterest}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_pinterest" class="form-label">Senha do pinterest</label>
                                        <input type="text" class="form-control" name="senha_pinterest" id="senha_pinterest" value="{{$app->senha_pinterest}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="pinterest_ativo" @if($app->pinterest_ativo) checked @endif>
                                    </div>
                                </div>

                                {{--  TWITTER  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="twitter" class="form-label">Twitter</label>
                                        <input type="text" class="form-control" name="twitter" id="twitter" value="{{$app->twitter}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_twitter" class="form-label">Login do twitter</label>
                                        <input type="text" class="form-control" name="login_twitter" id="login_twitter" value="{{$app->login_twitter}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_twitter" class="form-label">Senha do twitter</label>
                                        <input type="text" class="form-control" name="senha_twitter" id="senha_twitter" value="{{$app->senha_twitter}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="twitter_ativo" @if($app->twitter_ativo) checked @endif>
                                    </div>
                                </div>

                                {{--  YOUTUBE  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="youtube" class="form-label">Youtube</label>
                                        <input type="text" class="form-control" name="youtube" id="youtube" value="{{$app->youtube}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_youtube" class="form-label">Login do youtube</label>
                                        <input type="text" class="form-control" name="login_youtube" id="login_youtube" value="{{$app->login_youtube}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_youtube" class="form-label">Senha do youtube</label>
                                        <input type="text" class="form-control" name="senha_youtube" id="senha_youtube" value="{{$app->senha_youtube}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="youtube_ativo" @if($app->youtube_ativo) checked @endif>
                                    </div>
                                </div>

                                {{--  GOOGLE MEU NEGOCIO  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="google_negocio" class="form-label">Google Meu Negócio</label>
                                        <input type="text" class="form-control" name="google_negocio" id="google_negocio" value="{{$app->google_negocio}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_google_negocio" class="form-label">Login do Google Meu Negócio</label>
                                        <input type="text" class="form-control" name="login_google_negocio" id="login_google_negocio" value="{{$app->login_google_negocio}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_google_negocio" class="form-label">Senha do Google Meu Negócio</label>
                                        <input type="text" class="form-control" name="senha_google_negocio" id="senha_google_negocio" value="{{$app->senha_google_negocio}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="google_negocio_ativo" @if($app->google_negocio_ativo) checked @endif>
                                    </div>
                                </div>

                                {{--  TIKTOK  --}}
                                <div class="col-lg-5 col-12">
                                    <div class="mb-3">
                                        <label for="tiktok" class="form-label">Tiktok</label>
                                        <input type="text" class="form-control" name="tiktok" id="tiktok" value="{{$app->tiktok}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="login_tiktok" class="form-label">Login do Tiktok</label>
                                        <input type="text" class="form-control" name="login_tiktok" id="login_tiktok" value="{{$app->login_tiktok}}">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-5">
                                    <div class="mb-3">
                                        <label for="senha_tiktok" class="form-label">Senha do Tiktok</label>
                                        <input type="text" class="form-control" name="senha_tiktok" id="senha_tiktok" value="{{$app->senha_tiktok}}">
                                    </div>
                                </div>
                                <div class="col-lg-1 col-2 d-flex align-items-center justify-content-center">
                                    <div class="form-check form-switch form-switch-md mt-2" dir="ltr">
                                        <input class="form-check-input getree-check" type="checkbox" name="tiktok_ativo" @if($app->tiktok_ativo) checked @endif> 
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
                                            @if($app->logo)
                                                <img id="logo-preview" src="{{asset($app->logo)}}" style="width: 100%; max-width:200px;" alt="">
                                            @else
                                                <img id="logo-preview" src="{{asset('admin/images/logos/padrao.png')}}" style="width: 100%; max-width:200px;" alt="">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-center">
                                            <label class="btn btn-primary" for="logo-upload">Trocar</label>
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
                        </form>
                        <div class="row">
                            <div class="col-12 col-lg-6 text-left" style="color:red;">
                                * Campos obrigatórios
                            </div>
                            <div class="col-12 col-lg-6 text-end">
                                <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Salvar</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane @if(session()->get('meuslinks')) active @endif" id="gefitapp" role="tabpanel">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <form action="{{route('painel.app.rede.adicionar', ['app' => $app])}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="mt-3">
                                            <label for="formFile" class="form-label">Imagem</label>
                                            <input class="form-control" name="imagem" type="file">
                                        </div>   
                                        <div class="mt-3">
                                            <label for="titulo">Título</label>
                                            <input type="text" class="form-control" name="titulo" id="titulo-getree" maxlength="250">
                                        </div> 
                                        <div class="mt-3">
                                            <label for="link">Link</label>
                                            <input type="text" class="form-control" name="link" maxlength="250">
                                        </div>   
                                        <div class="mt-3">
                                            <label for="link">Posição</label>
                                            <input type="number" class="form-control" name="posicao" min="0" max="100">
                                        </div> 
                                        <div class="mt-3 text-end">
                                            <button class="btn btn-primary" type="submit">Adicionar</button>    
                                        </div>                                   
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th>Imagem</th>
                                                <th>Título</th>
                                                <th>Posição</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                    
                    
                                        <tbody>
                                            @foreach($app->elementos->sortByDesc("posicao") as $elemento)
                                                <tr>
                                                    <td style="width: 10%; text-align: center;"><img src="{{asset($elemento->imagem)}}" alt="" width="40"></td>
                                                    <td><a href="{{$elemento->link}}">{{$elemento->titulo }}</a></td>
                                                    <td class="text-center">{{$elemento->posicao}}</td>
                                                    <td width="200">
                                                        <a name="" id="" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalEditaGetree{{ $elemento->id }}" role="button">Editar</a>
                                                        <a class="btn btn-danger mx-1" href="{{route('painel.app.rede.remover', ['elemento' => $elemento])}}">Excluir</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@foreach($app->elementos as $elemento)
    <div class="modal fade" id="modalEditaGetree{{$elemento->id}}" tabindex="-1" role="dialog" aria-labelledby="modalEditaGetree{{$elemento->id}}Label"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('painel.app.rede.salvar', ['elemento' => $elemento])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mt-3">
                            <label for="formFile" class="form-label">Imagem</label>
                            <input class="form-control" name="imagem" type="file">
                            <small>Escolha apenas caso deseje trocar</small>
                        </div>   
                        <div class="mt-3">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" name="titulo" value="{{$elemento->titulo}}" id="titulo-getree">
                        </div> 
                        <div class="mt-3">
                            <label for="link">Link</label>
                            <input type="text" class="form-control" value="{{$elemento->link}}" name="link">
                        </div>   
                        <div class="mt-3">
                            <label for="link">Posição</label>
                            <input type="number" class="form-control" value="{{$elemento->posicao}}" name="posicao" min="0" max="100">
                        </div> 
                        <div class="mt-3 text-end">
                            <button class="btn btn-primary" type="submit">Salvar</button>    
                        </div>  

                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection

@section('scripts')
    <!-- Sweet Alerts js -->
    <script src="{{asset('admin/libs/sweetalert2/sweetalert2.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
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

        var inp = document.getElementById('fundo_getree-upload');
        inp.addEventListener('change', function(e){
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function(){
                document.getElementById('fundo_getree-preview').src = this.result;
                };
            reader.readAsDataURL(file);
        },false);

        $(document).ready(function(){
            $("#sa-warning").click(function () {
                Swal.fire({
                    title: "Tem Certeza?",
                    text: "Isso irá atualizar as informações da app!",
                    icon: "warning",
                    showCancelButton: !0,
                    confirmButtonColor: "#34c38f",
                    cancelButtonColor: "#f46a6a",
                    confirmButtonText: "Sim, atualizar!",
                }).then(function (t) {
                    if(t.isConfirmed){
                        $("#form-edicao").submit();
                    }
                });
            })

            $(".getree-check").change(function(){
                var name = $(this).attr("name");
                var id = {!! $app->id !!}
                var _token = $('meta[name="_token"]').attr('content');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': _token
                    }
                });  
                $.ajax({
                    url: '/sistema/app/rede/' + id,
                    type: 'POST',
                    data: {
                        name: name
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        toastr.success(data, 'Sucesso')
                    },
                    error: function(){
                        toastr.error('Erro na operação. Atualize a página e tente novamente.', 'Erro')
                    }
                });
            });
        })
    </script>
@endsection
