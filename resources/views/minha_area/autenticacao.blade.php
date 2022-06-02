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
                                    <div class="text-center">

                                        <div class="avatar-md mx-auto">
                                            <div class="avatar-title rounded-circle bg-light">
                                                <i class="bx bxs-envelope h1 mb-0 text-primary"></i>
                                            </div>
                                        </div>
                                        <div class="p-2 mt-4">
    
                                            <h4>Verifique seu e-mail</h4>
                                            <p class="mb-5">Por favor digite os 4 digitos de segurança enviados no e-mail <span class="font-weight-semibold">example@abc.com</span></p>
    
                                            <form method="POST" action="{{ route('minha_area.autentica') }}">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit1-input" class="visually-hidden">Dight 1</label>
                                                            <input type="text"
                                                                class="form-control form-control-lg text-center"
                                                                onkeyup="moveToNext(this, 2)" maxLength="1"
                                                                id="digit1-input">
                                                        </div>
                                                    </div>
    
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit2-input" class="visually-hidden">Dight 2</label>
                                                            <input type="text"
                                                                class="form-control form-control-lg text-center"
                                                                onkeyup="moveToNext(this, 3)" maxLength="1"
                                                                id="digit2-input">
                                                        </div>
                                                    </div>
    
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit3-input" class="visually-hidden">Dight 3</label>
                                                            <input type="text"
                                                                class="form-control form-control-lg text-center"
                                                                onkeyup="moveToNext(this, 4)" maxLength="1"
                                                                id="digit3-input">
                                                        </div>
                                                    </div>
    
                                                    <div class="col-3">
                                                        <div class="mb-3">
                                                            <label for="digit4-input" class="visually-hidden">Dight 4</label>
                                                            <input type="text"
                                                                class="form-control form-control-lg text-center"
                                                                onkeyup="moveToNext(this, 4)" maxLength="1"
                                                                id="digit4-input">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <input type="submit" class="btn btn-success w-md" value="Confirmar">
                                                </div>
                                            </form>
    
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

    <!-- two-step-verification js -->
    <script src="{{ asset('admin/assets/js/pages/two-step-verification.init.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    @toastr_js
    @toastr_render
</body>

</html>