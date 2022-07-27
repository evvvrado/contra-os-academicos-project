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

                                {{-- <div class="p-4 mt-auto">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-7">
                                            <div class="text-center">
                                                
                                                <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">5k</span>+ Satisfied clients</h4>
                                                
                                                <div dir="ltr">
                                                    <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" Fantastic theme with a ton of options. If you just want the HTML to integrate with your project, then this is the package. You can find the files in the 'dist' folder...no need to install git and all the other stuff the documentation talks about. "</p>

                                                                <div>
                                                                    <h4 class="font-size-16 text-primary">Abs1981</h4>
                                                                    <p class="font-size-14 mb-0">- Skote User</p>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>

                                                        <div class="item">
                                                            <div class="py-3">
                                                                <p class="font-size-16 mb-4">" If Every Vendor on Envato are as supportive as Themesbrand, Development with be a nice experience. You guys are Wonderful. Keep us the good work. "</p>

                                                                <div>
                                                                    <h4 class="font-size-16 text-primary">nezerious</h4>
                                                                    <p class="font-size-14 mb-0">- Skote User</p>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-4">
                        <div class="w-100">

                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="{{ asset('site/assets/img/logo_preta_header.png') }}" class="auth-logo-dark">
                                    </a>
                                </div>
                                <div class="my-auto">
                                    
                                    <div>
                                        <h5 class="text-primary">Trocar senha</h5>
                                        <p class="text-muted">Digite sua nova senha</p>
                                    </div>
        
                                    <div class="mt-4">
                                        <form action="{{ route('minha_area.trocar_senha_act') }}" method="post">
                                            @csrf
            
                                            <div class="mb-3">
                                                <label for="nova_senha" class="form-label">Nova senha</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input name="nova_senha" type="password" class="form-control" id="nova_senha" aria-label="Password" aria-describedby="password-addon" placeholder="Digite sua senha">
                                                    <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3">
                                                <label for="nova_senha_2" class="form-label">Digite novamente sua nova senha</label>
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input name="nova_senha_2" type="password" class="form-control" id="nova_senha_2" placeholder="Digite sua senha" aria-label="Passwords" aria-describedby="password-addon2">
                                                    <button class="btn btn-light " type="button" id="password-addon2"><i class="mdi mdi-eye-outline"></i></button>
                                                </div>
                                            </div>

                                            <input hidden type="text" name="id" value="{{ app('request')->input('id') }}">
                                            <input hidden type="text" name="hash" value="{{ app('request')->input('hash')}}">

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Salvar</button>
                                            </div>

                                        </form>
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

    <!-- App js -->
    <script src="{{ asset('admin/assets/js/app.js') }}"></script>

    @toastr_js
    @toastr_render
</body>

</html>