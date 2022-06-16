<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Minha Área | Contra os Acadêmicos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

    @yield('styles')

    @toastr_css
</head>

@php
use App\Models\UsuarioSite;
@endphp

<body data-topbar="dark" data-layout="horizontal">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route('minha_area.index') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img style="" src="{{ asset('site/assets/img/logo_branca_footer.png') }}">
                            </span>
                            <span class="logo-lg">
                                <img style="" src="{{ asset('site/assets/img/logo_branca_footer.png') }}">
                            </span>
                        </a>
                    </div>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @php
                                $usuario_site = UsuarioSite::whereId(session()->get('usuario_site')['id'])->first();
                            @endphp
                            @if ($usuario_site->foto)
                                <img class="rounded-circle header-profile-user" src="{{ asset($usuario_site->foto) }}"
                                    alt="Header Avatar">
                            @else
                                <img class="rounded-circle header-profile-user"
                                    src="{{ asset('admin/imagens/usuarios/sem_foto.png') }}" alt="Header Avatar">
                            @endif
                            <span class="d-none d-xl-inline-block ms-1"
                                key="t-henry">{{ session()->get('usuario_site')['nome'] }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="#"><i
                                    class="bx bx-user font-size-16 align-middle me-1"></i> <span
                                    key="t-profile">Perfil</span></a>
                            <a class="dropdown-item text-danger" href="{{ route('minha_area.sair') }}"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Sair</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="topnav">
            <div class="container-fluid">
                <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                    <div class="collapse navbar-collapse" id="topnav-menu-content">
                        <ul class="navbar-nav">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard"
                                    role="button">
                                    <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboards</span>
                                    <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                                    <a href="{{ route('minha_area.index') }}" class="dropdown-item"
                                        key="t-default">Default</a>
                                </div>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">@yield('titulo')</h4>
                                <div class="col-6 text-end">
                                    @yield('botoes')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @yield('conteudo')

                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            {{-- <script>document.write(new Date().getFullYear())</script> © Skote. --}}
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Direitos reservados Contra os Acadêmicos
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.mask.js') }}"></script>
    {{-- <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js') }}"></script> --}}

    {{-- <script src="{{ asset('admin/assets/js/app.js') }}"></script> --}}

    @toastr_js
    @toastr_render

    @yield('scripts')
</body>

</html>
