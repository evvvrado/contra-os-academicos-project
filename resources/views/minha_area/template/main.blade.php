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
    {{-- <link rel="stylesheet" href="{{ asset('site/css/style.css') }}"> --}}

    @yield('styles')

    <script src="https://kit.fontawesome.com/8b74899bef.js" crossorigin="anonymous"></script>

    @toastr_css
</head>

@php
use App\Models\UsuarioSite;
@endphp

<body data-topbar="dark" data-layout="horizontal" class="minha-area">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header>
            <div fluid>
                <div class="niv">
                    <a href="/" title="Voltar para home" class="logo-header">
                        <img src="{{ asset('site/assets/img/logo_preta_header.png') }}"
                            alt="Logo Contras os Acadêmicos">
                    </a>

                    <nav>
                        <ul style="opacity: 0; pointer-events: none">
                            <li>
                                <a href="javascript: void(0)" title="menu">
                                    <img src="{{ asset('site/assets/img/icon_hamburguer_header.svg') }}"
                                        alt="Ícone do menu">
                                </a>
                            </li>
                        </ul>
                    </nav>

                    <div>


                        <div class="search-button" style="opacity: 0; pointer-events: none">
                            <input type="text">

                            <picture>
                                <img src="{{ asset('site/assets/img/icon_search_header.svg') }}"
                                    alt="Ícone de pesquisa">
                            </picture>
                        </div>

                        <div class="socials">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            <a href="#"><i class="fa-brands fa-soundcloud"></i></a>

                        </div>

                        <div class="buttons">
                            <a href="#" class="button">
                                Assinar
                            </a>

                            <a href="{{ route('site.index') }}" class="button">
                                Voltar p/ home
                            </a>
                        </div>
                    </div>

                </div>
                {{-- <div class="user-circle">
                    <a href="{{ route('minha_area.index') }}" title="Acessar área">
                        <img src="{{ asset('site/assets/img/icon_user_header.svg') }}" alt="Ícone de usuário">
                    </a>
                </div> --}}
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

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="{{ route('minha_area.sair') }}" id="topnav-dashboard"
                                    role="button">
                                    <i class="bx bx-power-off me-2"></i><span key="t-dashboards">Sair</span>
                                </a>
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
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card overflow-hidden">
                                <div class="bg-primary p-4">
                                    <div class="row">
                                        <div class="col-7">
                                            <div class="text-white p-3">
                                                <h5 class="text-white">Bem-Vindo !</h5>
                                            </div>
                                        </div>
                
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row">
                
                                        <div class="col-sm-4">
                                            <div class="avatar-md profile-user-wid mb-4">
                                                @php
                                                    $usuario_site = UsuarioSite::whereId(session()->get('usuario_site')['id'])->first();
                                                @endphp
                                                @if ($usuario_site->foto)
                                                    <img src="{{ asset($usuario_site->foto) }}" alt=""
                                                        class="img-thumbnail rounded-circle">
                                                @else
                                                    <img src="{{ asset('admin/imagens/usuarios/sem_foto.png') }}" alt=""
                                                        class="img-thumbnail rounded-circle">
                                                @endif
                                            </div>
                                            <h5 class="font-size-15 text-truncate">{{ session()->get('usuario_site')['nome'] }}</h5>
                                        </div>
                
                                        <div class="col-sm-8">
                                            <div class="pt-4">
                
                                                <div class="row">
                                                    <div class="col-6">
                                                        <h5 class="font-size-15">125</h5>
                                                        <p class="text-muted mb-0">Comentários</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <h5 class="font-size-15">324</h5>
                                                        <p class="text-muted mb-0">Likes</p>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <a href="{{ route('minha_area.perfil') }}"
                                                        class="btn btn-primary waves-effect waves-light btn-sm text-white">Ver Perfil <i
                                                            class="mdi mdi-arrow-right ms-1"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4 h4 card-title">Informações pessoais</div>
                                    <div class="table-responsive">
                                        <table class="table-nowrap mb-0 table">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Nome :</th>
                                                    <td>{{ $usuario_site->nome }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Telefone :</th>
                                                    <td>
                                                        @if($usuario_site->telefone)
                                                            {{ $usuario_site->telefone }}
                                                        @else
                                                            Não cadastrado
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">E-mail :</th>
                                                    <td>{{ $usuario_site->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Localização :</th>
                                                    <td>
                                                        @if($usuario_site->cidade AND $usuario_site->uf)
                                                        {{ $usuario_site->cidade }}, {{ $usuario_site->uf }}
                                                        @else
                                                            Não cadastrado
                                                        @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Notifications</h4>
                
                                    <ul class="list-group" data-simplebar="init" style="max-height: 390px;">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <li class="list-group-item border-0">
                                                                <div class="media">
                                                                    <div class="avatar-xs me-3">
                                                                        <span class="avatar-title rounded-circle bg-light">
                                                                            <img src="assets/images/companies/img-1.png" alt=""
                                                                                height="18">
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                                                        <p class="text-muted">If several languages coalesce, the grammar of
                                                                            the resulting language</p>
                
                                                                        <div class="float-end">
                                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i>
                                                                                Joseph</p>
                                                                        </div>
                                                                        <p class="text-muted mb-0">12 Mar, 2020</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <div class="media">
                                                                    <div class="avatar-xs me-3">
                                                                        <span class="avatar-title rounded-circle bg-light">
                                                                            <img src="assets/images/companies/img-2.png" alt=""
                                                                                height="18">
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="font-size-14">Cras ultricies mi eu turpis</h5>
                                                                        <p class="text-muted">To an English person, it will seem like
                                                                            simplified English, as a skeptical cambridge</p>
                
                                                                        <div class="float-end">
                                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i>
                                                                                Jerry</p>
                                                                        </div>
                                                                        <p class="text-muted mb-0">13 Mar, 2020</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <div class="media">
                                                                    <div class="avatar-xs me-3">
                                                                        <span class="avatar-title rounded-circle bg-light">
                                                                            <img src="assets/images/companies/img-3.png" alt=""
                                                                                height="18">
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="font-size-14">Duis arcu tortor suscipit</h5>
                                                                        <p class="text-muted">It va esser tam simplic quam occidental in
                                                                            fact, it va esser occidental.</p>
                
                                                                        <div class="float-end">
                                                                            <p class="text-muted mb-0"><i class="mdi mdi-account me-1"></i>
                                                                                Calvin</p>
                                                                        </div>
                                                                        <p class="text-muted mb-0">14 Mar, 2020</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item border-0">
                                                                <div class="media">
                                                                    <div class="avatar-xs me-3">
                                                                        <span class="avatar-title rounded-circle bg-light">
                                                                            <img src="assets/images/companies/img-1.png" alt=""
                                                                                height="18">
                                                                        </span>
                                                                    </div>
                                                                    <div class="media-body">
                                                                        <h5 class="font-size-14">Donec vitae sapien ut</h5>
                                                                        <p class="text-muted">If several languages coalesce, the grammar of
                                                                            the resulting language</p>
                
                                                                        <div class="float-end">
                                                                            <p class="text-muted mb-0"><i
                                                                                    class="mdi mdi-account me-1"></i> Joseph</p>
                                                                        </div>
                                                                        <p class="text-muted mb-0">12 Mar, 2020</p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder" style="width: auto; height: 493px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar"
                                                style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                            <div class="simplebar-scrollbar"
                                                style="height: 308px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                
                
                        </div>
                        <div class="col-xl-8">
                            @yield('conteudo')
                        </div>
                    </div>

                    
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            {{-- <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Direitos reservados Contra os Acadêmicos
                            </div>
                        </div>
                    </div>
                </div>
            </footer> --}}
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
