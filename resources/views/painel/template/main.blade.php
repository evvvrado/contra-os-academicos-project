<!doctype html>

@php
    use App\Models\Usuario;
@endphp

<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Admin | Contra os Acadêmicos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/favicon.ico" />
        {{-- <link rel='icon' type='image/vnd.microsoft.icon' sizes='16x16 32x32 48x48 64x64 96x96 128x128 144x144 180x180 192x192 256x256' href='/favicon.ico' /> --}}

        <!-- Bootstrap Css -->
        <link href="{{ asset('admin/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('admin/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('admin/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        @yield('styles')

        <style>
            .escolher_imagem {
                padding: 0.25rem !important;
                background-color: #f8f8fb !important;
                border: 1px solid #f6f6f6 !important;
                border-radius: 0.25rem !important;
                max-width:100%; 
                height: auto;
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
                                <a href="{{ route('painel.index') }}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img style="width: 21%; height: auto;" src="{{ asset('site/assets/img/logo_preta_header.png') }}" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img style="width: 21%; height: auto;" src="{{ asset('site/assets/img/logo_preta_header.png') }}" alt="" height="19">
                                    </span>
                                </a>
                            </div>
    
                            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                                <i class="fa fa-fw fa-bars"></i>
                            </button>

                        </div>
    
                        <div class="d-flex">
    
                            {{-- NOTIFICACOES --}}
                            {{-- <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-bell bx-tada"></i>
                                    <span class="badge bg-danger rounded-pill">3</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0" key="t-notifications"> Notifications </h6>
                                            </div>
                                            <div class="col-auto">
                                                <a href="#!" class="small" key="t-view-all"> View All</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-simplebar style="max-height: 230px;">
                                        <a href="#" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="bx bx-cart"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1" key="t-your-order">Your order is placed</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="assets/images/users/avatar-3.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">James Lemire</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="#" class="text-reset notification-item">
                                            <div class="media">
                                                <div class="avatar-xs me-3">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="bx bx-badge-check"></i>
                                                    </span>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1" key="t-shipped">Your item is shipped</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
    
                                        <a href="#" class="text-reset notification-item">
                                            <div class="media">
                                                <img src="assets/images/users/avatar-4.jpg"
                                                    class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                <div class="media-body">
                                                    <h6 class="mt-0 mb-1">Salena Layfield</h6>
                                                    <div class="font-size-12 text-muted">
                                                        <p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
                                                        <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="p-2 border-top d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span> 
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
    
                            <div class="dropdown d-inline-block">
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @php
                                        $usuario = Usuario::where("id", session()->get("usuario")["id"])->first();

                                        if ($usuario->foto == "") {
                                    @endphp
                                        <img class="rounded-circle header-profile-user" src="{{ asset('admin/imagens/usuarios/sem_foto.png') }}">
                                    @php
                                        } else {
                                    @endphp
                                        <img class="rounded-circle header-profile-user" src="{{ asset($usuario->foto)}}">
                                    @php 
                                        }
                                    @endphp
                                    <span class="d-none d-xl-inline-block ms-1">{{ session()->get('usuario')['nome'] }}</span>
                                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item text-danger" href="{{route('painel.sair')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Sair</span></a>
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
                            <ul class="metismenu list-unstyled" id="side-menu">
                                <li class="menu-title" key="t-menu">Menu</li>
    
                                <li>
                                    <a href="{{ route('painel.index') }}" class="waves-effect">
                                        <i class="bx bx-home-circle"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-receipt"></i>
                                        <span key="t-invoices">Conteúdo</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="{{ route('painel.categorias') }}" key="t-invoice-list">Categorias</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('painel.autores') }}" key="t-invoice-list">Autores</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('painel.tradutores') }}" key="t-invoice-list">Tradutores</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('painel.blog') }}" key="t-invoice-list">Blog</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('painel.lista') }}" key="t-invoice-list">Listas</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('painel.revista') }}" key="t-invoice-list">Revistas</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-user"></i>
                                        <span key="t-invoices">Gerenciamento</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li>
                                            <a href="{{ route('painel.usuarios') }}" key="t-invoice-list">Usuários</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('painel.setores') }}" key="t-invoice-list">Setores</a>
                                        </li>
                                    </ul>
                                </li>
    
                            </ul>
                        </div>
                        <!-- Sidebar -->
                    </div>
                </div>
                <!-- Left Sidebar End -->

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

                            @yield('conteudo')
                            
                        </div>
                    </div>

    
                    <footer class="footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-6">
                                    Todos os direitos reservados <script>document.write(new Date().getFullYear())</script> ©.
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
            <script src="{{ asset('admin/assets/libs/jquery/jquery.min.js')}}"></script>
            <script src="{{ asset('admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <script src="{{ asset('admin/assets/libs/metismenu/metisMenu.min.js')}}"></script>
            <script src="{{ asset('admin/assets/libs/simplebar/simplebar.min.js')}}"></script>
            <script src="{{ asset('admin/assets/libs/node-waves/waves.min.js')}}"></script>
    
            <!-- apexcharts -->
            <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
    
            <!-- dashboard init -->
            <script src="{{ asset('admin/assets/js/pages/dashboard.init.js')}}"></script>
    
            <!-- App js -->
            <script src="{{ asset('admin/assets/js/app.js')}}"></script>

            <script src="https://cdn.ckeditor.com/4.19.0/full/ckeditor.js"></script>

            @yield('scripts')
        </body>

</html>