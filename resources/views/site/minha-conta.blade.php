<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <title>ENAF - Painel do Aluno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="Painel de controle " name="description" />
    <meta content="Luis Gustavo de Souza Carvalho" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin/images/favicon.ico') }}" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('admin/libs/owl.carousel/assets/owl.carousel.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('admin/libs/owl.carousel/assets/owl.theme.default.min.css') }}" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @toastr_css
</head>

<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-9" style="
                        background: url(/admin/images/bg-auth-overlay.png);
                        background-size: cover;
                        background-position: center;
                        ">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            {{-- <div class="bg-overlay"></div> --}}
                            <div class="d-flex h-100 flex-column">
                                <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index.html" class="md-block auth-logo">
                                        <img src="{{ asset('site/imagens/logo.png') }}" alt="" width="200" class="mx-auto auth-logo-dark" />
                                        <img src="{{ asset('site/imagens/logo.png') }}" alt="" width="200" class="mx-auto auth-logo-light" />
                                    </a>
                                    '
                                </div>
                                <div class="my-auto login-box">
                                    <div>
                                        <h5>Bem vindo !</h5>
                                        <p>
                                            Insira seus dados para acessar.
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <form action="{{ route('site.aluno.logar') }}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Informe o email" required />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Senha</label>
                                                <div class="float-end">
                                                    <a class="text-muted" style="cursor: pointer;" onclick="$('.login-box').hide(); $('.forgot-password').show();">Esqueceu
                                                        sua senha?</a>
                                                </div>
                                                <div class="
                                                        input-group
                                                        auth-pass-inputgroup
                                                        ">
                                                    <input type="password" class="form-control" name="senha" placeholder="Informa a senha" aria-label="Password" aria-describedby="password-addon"
                                                        required />
                                                    <button class="
                                                            btn btn-light
                                                            " type="button" id="password-addon">
                                                        <i class="
                                                            mdi
                                                            mdi-eye-outline
                                                            "></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">
                                                        Lembrar de mim
                                                    </label>
                                                    </div> -->
                                            <div class="mt-3 d-grid">
                                                <button class="
                                                        btn
                                                        waves-effect
                                                        waves-light
                                                        " style="
                                                        background-color: #1ac7d6;
                                                        color: white;
                                                        " type="submit">
                                                    Entrar
                                                </button>
                                            </div>
                                        </form>
                                        {{-- <div class="
                                                mt-5
                                                text-center text-white
                                                ">
                                            <p>
                                                Ainda não possui uma conta ?
                                                <a href="auth-register-2.html" class="
                                                        fw-medium
                                                        text-white
                                                        ">
                                                    Cadastre-se Agora</a>
                                            </p>
                                        </div> --}}
                                    </div>
                                    <div class="mt-4 mt-md-5 text-center">
                                        <p>Não tem uma conta? <i style="color: blue; cursor: pointer;"
                                                onclick="$('.login-box').hide();$('.forgot-password').hide(); $('.register').show();">Registrar</i>
                                        </p>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">
                                            © 2021 ENAF. Feito com
                                            <i class="
                                                    mdi mdi-heart
                                                    text-danger
                                                    "></i>
                                            por <a href="https://7seventrends.com" target="_blank">7Seven</a>
                                        </p>
                                    </div>

                                </div>

                                <div class="my-auto register">
                                    <div>
                                        <h5>Registrar conta</h5>
                                    </div>
                                    <div class="mt-4">
                                        <form action="{{ route('site.aluno.cadastrar') }}" method="post" class="form-horizontal av-invalid">
                                            @csrf
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="nome" class="">Nome</label>
                                                    <input name="nome" placeholder="Digide seu nome" required="" id="nome" pattern="^[A-zÀ-ÿ][A-zÀ-ÿ]+\s[A-zÀ-ÿ][A-zÀ-ÿ]+.+" type="name"
                                                        class="form-control is-untouched is-pristine av-invalid form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="email" class="">E-mail</label>
                                                    <input name=" email" placeholder="Digite seu email" required id="emailregister" type="email"
                                                        class="form-control is-untouched is-pristine av-invalid form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="telefone" class="">
                                                        Telefone
                                                    </label>
                                                    <input name="telefone" placeholder="Digite seu telefone" required="" id="telefone" type="tel"
                                                        class="form-control is-untouched is-pristine av-invalid form-control" value="">
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group"><label for="email" class="">CPF</label><input name=" cpf" placeholder="Digite seu cpf" required="" id="cpf" type="cpf"
                                                        class="form-control is-untouched is-pristine av-invalid form-control" value=""></div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group"><label for="password" class="">Senha</label><input name=" senha" placeholder="Digite sua senha" required="" id="senha"
                                                        type="password" class="form-control is-untouched is-pristine av-invalid form-control" value=""></div>
                                            </div>
                                            <div class="mt-3 d-grid"><button class="btn btn-primary btn-block" type="submit"> Registrar </button></div>
                                        </form>
                                        <div class="mt-5 text-center">
                                            <p>Já tem uma conta?<a class="fw-medium" href="javascript: void(0)" onclick="$('.register').hide(); $('.login-box').show()"> Entrar</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-auto forgot-password">
                                    <div>
                                        <h5>
                                            Recuperar senha
                                        </h5>
                                        <p class="text-muted">
                                            Será enviado para o seu e-mail
                                        </p>
                                    </div>
                                    <div class="mt-4">
                                        <form novalidate="" action="#" method="get" class="
                                                form-horizontal
                                                av-invalid
                                                ">
                                            <div class="
                                                    alert alert-success
                                                    text-center
                                                    mb-4
                                                    " role="alert">
                                                Insira seu e-mail e enviaremos para você um coiso
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-group">
                                                    <label for="email" class="">E-mail</label><input name="
                                                        email" placeholder="Insira seu e-mail" required="" id="email" type="email" class="
                                                            form-control
                                                            is-untouched
                                                            is-pristine
                                                            av-invalid
                                                            form-control
                                                            " value="" />
                                                </div>
                                            </div>
                                            <div class="text-end">
                                                <button class="
                                                        btn btn-primary
                                                        w-md
                                                        waves-effect
                                                        waves-light
                                                        " onclick="$('.forgot-password').hide(); $('.send-email').show();" style="background-color: #1ac7d6;color: white;" type="submit">
                                                    Enviar
                                                </button>
                                            </div>
                                        </form>
                                        <div class="mt-5 text-center">
                                            <p onclick="$('.login-box').show(); $('.forgot-password').hide()" style="cursor: pointer;">
                                                Lembrou? Campeão,
                                                <a class="
                                                        fw-medium
                                                        ">
                                                    Manda bala ai
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-auto send-email">
                                    <div class="text-center">
                                        <div class="avatar-md mx-auto">
                                            <div class="avatar-title rounded-circle bg-light">
                                                <i class="bx bx-mail-send h1 mb-0"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 mt-4">
                                            <h4>Sucesso !</h4>
                                            <p class="text-muted">Enviamos uma confirmação para o seu e-mail
                                                veve@abc.com, Please check it</p>
                                            <div class="mt-4">
                                                <a href="" class="btn btn-success">Verificar e-mail</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="
                                        mt-4 mt-md-5
                                        text-center text-white
                                        ">
                                    <p class="mb-0">
                                        ©
                                        <script>
                                            document.write(
                                                new Date().getFullYear()
                                            );
                                        </script>
                                        <img class="ml-2 mt-n1" src="{{ asset('/site/imagens/footer-seven.png') }}" alt="" />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>




    @if (session()->get('erro'))
    <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 100%; max-width: 500px;" role="document">
            <div class="modal-content" style="padding: 0px 0 30px 0; border-radius: 20px;">

                <div class="modal-body px-5 py-0">
                    <button type="button" id="close-modal" class="close cpointer" data-dismiss="modal" aria-label="Close"
                        style="position: absolute; top: 10px; right: 10px; z-index: 22; font-size: 25px; border:none; background:none;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="mt-5">
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <img src="{{ asset('site/img/icone_erro.png') }}" style="width: 100px; margin: auto auto;" alt="Ícone de Cadastro">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center modal-erro-text">
                                <h1>Ops !</h1>
                            </div>
                        </div>
                        <div class="row mt-5 mb-4">
                            <div class="col-12 text-center modal-erro-text">
                                <h2>{{ session()->get('erro') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif


    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ asset('admin/libs/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- auth-2-carousel init -->
    <script src="{{ asset('admin/js/pages/auth-2-carousel.init.js') }}"></script>
    <!-- App js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('admin/js/app.js') }}"></script>
    @toastr_js @toastr_render


    @if (session()->get('erro'))
    <div class="modal fade" id="modalErro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 100%; max-width: 500px;" role="document">
            <div class="modal-content" style="padding: 0px 0 30px 0; border-radius: 20px;">

                <div class="modal-body px-5 py-0">
                    <button type="button" id="close-modal" class="close cpointer" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; z-index: 22;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="mt-5">
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <img src="{{ asset('site/img/icone_erro.png') }}" style="width: 100px; margin: auto auto;" alt="Ícone de Cadastro">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center modal-erro-text">
                                <h1>Ops !</h1>
                            </div>
                        </div>
                        <div class="row mt-5 mb-4">
                            <div class="col-12 text-center modal-erro-text">
                                <h2>{{ session()->get('erro') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif



    @if (session()->get('erro'))
    <script>
        $(document).ready(function() {
                $("#modalErro").modal("show");
                $("#close-modal").click(function() {
                    $("#modalErro").modal("hide");
                })
            });
    </script>
    @endif


    <script>
        $('.forgot-password').hide();
        $('.send-email').hide();
        $('.register').hide();


        $(document).ready(function() {
            $('input[type = "cpf"]').mask("000.000.000-00", {
                reverse: true,
            });
            $('input[type = "tel"]').mask("(00) 00000-0000");
        });
    </script>
</body>

</html>