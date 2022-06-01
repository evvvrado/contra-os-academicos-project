<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Minha Área | Contra os Acadêmicos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('site/img/logo_login.png')}}">

    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- owl.carousel css -->
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/assets/libs/owl.carousel/assets/owl.theme.default.min.css') }}">


    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />


    @toastr_css
</head>

<body>
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
                
                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                            <div class="d-flex h-100 flex-column">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content" style="padding-left: 1.5rem; padding-right: 1.5rem;">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mt-4">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="{{ asset('site/assets/img/logo_preta_header.png') }}">
                                    </a>
                                </div>
                                <div class="my-auto">
                                    
                                    <div>
                                        <h5 class="text-primary">Registrar Conta</h5>
                                        <p class="text-muted">Preencha os dados abaixo.</p>
                                    </div>
        
                                    <div class="mt-4">
                                        <form class="needs-validation" novalidate method="POST" action="{{ route('minha_area.registrar') }}">
                                            @csrf
            
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">E-mail</label>
                                                <input name="email" type="email" class="form-control" id="useremail" placeholder="Digite seu e-mail" required>  
                                                <div class="invalid-feedback">
                                                    Por favor digite um e-mail válido
                                                </div>        
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="nome" class="form-label">Nome</label>
                                                <input name="nome" type="text" class="form-control" id="nome" placeholder="Digite um nome" required>
                                                <div class="invalid-feedback">
                                                    Digite seu nome
                                                </div>  
                                            </div>
                    
                                            <div class="mb-3">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input name="senha" type="password" class="form-control" id="userpassword" placeholder="Digite uma senha" required>
                                                <div class="invalid-feedback">
                                                    Digite uma senha
                                                </div>       
                                            </div>

                                            <div>
                                                <p class="mb-0">Registrando na plataforma você concorda com os termos de uso. <a href="#" class="text-primary">Termos de Uso</a></p>
                                            </div>
                                            
                                            <div class="mt-4 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Registrar</button>
                                            </div>
                                        </form>

                                        <div class="mt-5 text-center">
                                            <p>Já tem uma conta ? <a href="{{ route('minha_area.login') }}" class="fw-medium text-primary"> Acessar</a> </p>
                                        </div>
    
                                    </div>
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
    <!-- end account-pages -->

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script>

    <!-- owl.carousel js -->
    <script src="{{ asset('admin/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>

    <!-- validation init -->
    <script src="{{ asset('admin/assets/js/pages/validation.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    @toastr_js
    @toastr_render
</body>

</html>