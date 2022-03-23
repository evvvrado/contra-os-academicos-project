@php

$usuario = \App\Models\Usuario::find(session()->get('usuario')['id']);

@endphp

<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="utf-8" />
    <title>Painel Administrativo - BIRITTAS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/favicon.ico" />

    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    @toastr_css
    @livewireStyles()
    @yield("styles")

    <style>
        .bx-minus-circle {
            font-size: 16px !important;
        }

    </style>
</head>

<body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ route('painel.index') }}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{ asset('site/assets/img/_logoBIRITTAS.svg') }}" alt="" width="32">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('site/assets/img/_logoBIRITTAS.svg') }}" alt="" width="32">
                            </span>
                        </a>

                        <a href="{{ route('painel.index') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('site/assets/img/_logoBIRITTAS.svg') }}" alt="" width="22">
                            </span>
                            <span class="logo-lg">
                                <img class="" src="{{ asset('site/assets/img/_logoBIRITTAS.svg') }}"
                                    alt="" height="44">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect"
                        id="vertical-menu-btn" style="color: white;">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    {{-- <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <select class="form-control">
                                <option>Nenhuma Academia Selecionada</option>
                                @foreach (\App\Models\Academia::all() as $academia)
                                <option value="{{$academia->id}}">{{$academia->nome}}</option>
                                @endforeach
                            </select>
                            <span class="bx bx-search-alt"></span>
                        </div>
                    </form> --}}

                    {{-- <div class="dropdown dropdown-mega d-none d-lg-block ms-2">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                            <span key="t-megamenu">Mega Menu</span>
                            <i class="mdi mdi-chevron-down"></i>
                        </button>
                        <div class="dropdown-menu dropdown-megamenu">
                            <div class="row">

                            </div>

                        </div>
                    </div> --}}
                </div>

                <div class="d-flex">

                    {{-- <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        {{-- <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-customize"></i>
                        </button> --}}
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <div class="px-lg-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="https://www.instagram.com/abs.brasil/"
                                            target="_blank">
                                            <img src="{{ asset('admin/images/icone_instagram.png') }}"
                                                alt="Instagram">
                                            <span>Instagram</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item"
                                            href="https://www.facebook.com/ABS-Brasil-105852698310241" target="_blank">
                                            <img src="{{ asset('admin/images/icone_facebook.png') }}" alt="Facebook">
                                            <span>Facebook</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item"
                                            href="https://www.youtube.com/channel/UCjm6Wo9sSzg3L88oFicZvYg"
                                            target="_blank">
                                            <img src="{{ asset('admin/images/icone_youtube.png') }}" alt="Youtube">
                                            <span>Youtube</span>
                                        </a>
                                    </div>
                                </div>

                                {{-- <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#" target="_blank">
                                            <img src="{{asset('admin/images/icone_linkedin.png')}}" alt="Linkedin">
                                            <span>Linkedin</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#" target="_blank">
                                            <img src="{{asset('admin/images/icone_tiktok.png')}}" alt="Tiktok">
                                            <span>Tiktok</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="https://api.whatsapp.com/send?phone=5535997097707" target="_blank">
                                            <img src="{{asset('admin/images/icone_whatsapp.png')}}" alt="Whatsapp">
                                            <span>Whatsapp</span>
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-none d-lg-inline-block ms-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="bx bx-fullscreen"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon waves-effect"
                            id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <i class="bx bx-bell bx-tada"></i>
                            {{-- <span class="badge bg-danger rounded-pill">0</span> --}}
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                            aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0" key="t-notifications"> Notificações </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small" key="t-view-all"> Ver Todas</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#" class="text-reset notification-item">
                                    <div class="media">
                                        {{-- <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="bx bx-cart"></i>
                                            </span>
                                        </div> --}}
                                        <div class="media-body">
                                            {{-- <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6> --}}
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1" key="t-grammer">Você não possui notificações
                                                </p>
                                                {{-- <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p> --}}
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="d-none d-xl-inline-block ms-1" style="color: white;"
                                key="t-henry">{{ session()->get('usuario')['nome'] }}</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            {{-- <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                            <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span
                                    key="t-settings">Settings</span></a>
                            <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                            <div class="dropdown-divider"></div> --}}
                            <a class="dropdown-item text-danger" href="{{ route('painel.sair') }}"><i
                                    class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span
                                    key="t-logout">Sair</span></a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled mt-3" id="side-menu">
                        <li class="menu-title" key="t-menu">Menu</li>
                        <li>
                            <a href="{{ route('painel.index') }}" class="waves-effect">
                                <i class="bx bxs-dashboard" aria-hidden="true"></i>
                                <span key="t-dashboards">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-news" aria-hidden="true"></i>
                                <span key="t-dashboards">Lead</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('painel.leads') }}" key="t-default">Lead</a></li>
                                <li><a href="{{ route('painel.orcamentos') }}" key="t-default">Orçamento</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-select-multiple" aria-hidden="true"></i>
                                <span key="t-dashboards">Produtos</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('painel.produtos') }}" key="t-default">Produtos</a></li>
                                <li><a href="{{ route('painel.servicos') }}" key="t-default">Serviços</a></li>
                                <li><a href="{{ route('painel.ingredientes') }}" key="t-default">Ingredientes</a>
                                </li>
                                <li><a href="{{ route('painel.acessorios') }}" key="t-default">Acessórios</a></li>
                                <li><a href="{{ route('painel.parametros') }}" key="t-default">Parâmetros</a></li>
                                {{-- <li><a href="{{ route('painel.marcas') }}" key="t-default">Marcas</a></li> --}}
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-compass" aria-hidden="true"></i>
                                <span key="t-dashboards">Institucional</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('painel.depoimento') }}" key="t-default">Depoimentos</a></li>
                                <li><a href="{{ route('painel.duvidas') }}" key="t-default">Dúvidas</a></li>
                                <li><a href="{{ route('painel.noticias') }}" key="t-default">Notícias</a></li>
                                <li><a href="{{ route('painel.anuncios') }}" key="t-default">Anúncios</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="waves-effect">
                                <i class="bx bx-info-circle" aria-hidden="true"></i>
                                <span key="t-dashboards">Configurações</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="{{ route('painel.usuarios') }}" key="t-default">Usuários</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



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
                                <div class="col-6 text-start">
                                    <h4 class="mb-sm-0 font-size-18">@yield("titulo")</h4>
                                </div>
                                <div class="col-6 text-end">
                                    @yield("botoes")
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @yield("conteudo")
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © GEFIT | Fitness Intelligence.
                        </div> --}}
                        <div class="col-12">
                            <div class="text-sm-end d-none d-sm-block">
                                <a href=""><img src="{{ asset('site/img/_logo7seven_black.png') }}" height="20px"
                                        alt=""></a>
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
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('admin/js/jquery.mask.min.js') }}"></script>

    <script>
        $('.dinheiro').mask('#.##0,00', {
            reverse: true,
            placeholder: "R$ 0,00"
        });
        $('.telefone_ddd').mask('(00) 00000-0000', {
            placeholder: "(00) 00000-0000"
        });
    </script>
    @toastr_js
    @toastr_render

    <!-- dashboard init -->
    {{-- <script src="{{asset('admin/js/pages/dashboard.init.js')}}"></script> --}}

    <!-- App js -->
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script>
        window.addEventListener('notificaToastr', event => {
            if (event.detail.tipo == 'success') {
                toastr.success(event.detail.mensagem);
            } else if (event.detail.tipo == 'error') {
                toastr.error(event.detail.mensagem);
            }
        });
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    @livewireScripts()
    @yield("scripts")
</body>

</html>
