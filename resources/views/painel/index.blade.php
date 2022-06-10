@extends('painel.template.main')

@section('styles')
@endsection

@php
    use App\Models\Usuario;
    use App\Models\UsuarioSite;
    use App\Models\Blog;
    use App\Models\Lista;
    use App\Models\Revista;
    use App\Models\BlogComentario;
@endphp

@section('conteudo')
<div class="row">

    <div class="col-xl-8">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        
                        <div class="d-flex flex-wrap">
                            <div class="me-3">
                                <p class="text-muted mb-2">Blogs</p>
                                <h5 class="mb-0">{{ Blog::whereStatus(1)->count() }}</h5>
                            </div>

                            <div class="avatar-sm ms-auto">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="bx bxs-book-bookmark"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="card blog-stats-wid">
                    <div class="card-body">

                        <div class="d-flex flex-wrap">
                            <div class="me-3">
                                <p class="text-muted mb-2">Revistas</p>
                                <h5 class="mb-0">{{ Revista::whereStatus(1)->count() }}</h5>
                            </div>

                            <div class="avatar-sm ms-auto">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="bx bxs-note"></i>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card blog-stats-wid">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <div class="me-3">
                                <p class="text-muted mb-2">Listas</p>
                                <h5 class="mb-0">{{ Lista::whereStatus(1)->count() }}</h5>
                            </div>

                            <div class="avatar-sm ms-auto">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="bx bx-receipt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <h5 class="card-title me-2">Visitantes</h5>
                    {{-- <div class="ms-auto">
                        <div class="toolbar button-items text-end">
                            <button type="button" class="btn btn-light btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-light btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-light btn-sm active">
                                1Y
                            </button>
                        </div>
                    </div> --}}
                </div>

                <div class="row text-center">
                    <div class="col-lg-4">
                        <div class="mt-4">
                            <p class="text-muted mb-1">Hoje</p>
                            <h5>500</h5>
                        </div>
                    </div>
                    
                    <div class="col-lg-4">
                        <div class="mt-4">
                            <p class="text-muted mb-1">Esse mês</p>
                            <h5>2.000 <span class="text-success font-size-13">0.10 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-4">
                            <p class="text-muted mb-1">Esse ano</p>
                            <h5>7.829 <span class="text-success font-size-13">0.1 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                        </div>
                    </div>
                </div>

                <hr class="mb-4">
                
                <div class="apex-charts" id="area-chart" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="me-3">
                        @php
                            $usuario = Usuario::where("id", session()->get("usuario")["id"])->first();
                        @endphp
                        @if ($usuario->foto == "")
                            <img src="{{ asset('admin/imagens/usuarios/sem_foto.png') }}" alt="" class="avatar-sm rounded-circle img-thumbnail">
                        @else
                            <img class="rounded-circle header-profile-user" src="{{ asset($usuario->foto)}}">
                        @endif
                    </div>
                    <div class="media-body">
                        <div class="media">
                            <div class="media-body">
                                <div class="text-muted">
                                    <h5 class="mb-1">{{ $usuario->nome }}</h5>
                                    <p class="mb-0">{{ $usuario->setor->setor }}</p>
                                </div>
                                
                            </div>

                            <div class="dropdown ms-2">
                                <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bxs-cog align-middle me-1"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Perfil</a>
                                </div>
                            </div>  
                        </div>
                        

                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <div>
                                    <p class="text-muted text-truncate mb-2">Contribuições</p>
                                    <h5 class="mb-0">0</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <div>
                                    <p class="text-muted text-truncate mb-2">-</p>
                                    <h5 class="mb-0">-</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
                
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <h5 class="card-title mb-3 me-2">Registros de Visitantes</h5>

                    <div class="dropdown ms-auto">
                        <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                      
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Ação</a>
                        </div>
                    </div>
                </div>

                <div class="d-flex flex-wrap">
                    <div>
                        <p class="text-muted mb-1">Total de Registros</p>
                        <h4 class="mb-3">{{ UsuarioSite::all()->count() }}</h4>
                        <p class="text-success mb-0"><span>0.6 % <i class="mdi mdi-arrow-top-right ms-1"></i></span></p>
                    </div>
                    <div class="ms-auto align-self-end">
                        <i class="bx bx-group display-4 text-light"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header bg-transparent border-bottom">
                <div class="d-flex flex-wrap">
                    <div class="me-2">
                        <h5 class="card-title mt-1 mb-0">Posts</h5>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-custom card-header-tabs ms-auto" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#post-recent" role="tab">
                                Recentes
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#post-popular" role="tab">
                                Mais vistos
                            </a>
                        </li>
                    </ul>
                </div>
                
            </div>
            
            <div class="card-body">

                <div data-simplebar style="max-height: 295px;">
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="post-recent" role="tabpanel">
                            <ul class="list-group list-group-flush">

                                @php
                                    $ultimos_blogs = Blog::select(DB::raw("*"))
                                    ->whereStatus(1)
                                    ->orderBy('id', 'Desc')
                                    ->limit(4)
                                    ->get();

                                    $blogs_lidos = Blog::select(DB::raw("*"))
                                    ->whereStatus(1)
                                    ->orderBy('visitas', 'Desc')
                                    ->limit(4)
                                    ->get();

                                    // Force locale
                                    date_default_timezone_set('America/Sao_Paulo');
                                    setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
                                    setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
                                @endphp

                                @foreach ($ultimos_blogs as $ultimos_blog)
                                    @php
                                        $mes = $ultimos_blog->created_at->formatLocalized('%B');
                                    @endphp
                                    <li class="list-group-item py-3">
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <img src="{{ asset($ultimos_blog->banner) }}" alt="" class="avatar-md h-auto d-block rounded">
                                            </div>
                                            
                                            <div class="align-self-center overflow-hidden me-auto">
                                                <div>
                                                    <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">{{ $ultimos_blog->titulo }}</a></h5>
                                                    <p class="text-muted mb-0">{{ date( 'd' , strtotime($ultimos_blog->created_at)) }} {{ $mes }}, {{ date( 'Y' , strtotime($ultimos_blog->created_at)) }}</p>
                                                </div>
                                            </div>

                                            <div class="dropdown ms-2">
                                                <a class="text-muted dropdown-toggle font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Ação</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="post-popular" role="tabpanel">
                            
                            <ul class="list-group list-group-flush">

                                @foreach ($blogs_lidos as $blogs_lido)
                                    @php
                                        $mes = $blogs_lido->created_at->formatLocalized('%B');
                                    @endphp
                                    <li class="list-group-item py-3">
                                        <div class="d-flex">
                                            <div class="me-3">
                                                <img src="{{ asset($blogs_lido->banner) }}" alt="" class="avatar-md h-auto d-block rounded">
                                            </div>
                                            
                                            <div class="align-self-center overflow-hidden me-auto">
                                                <div>
                                                    <h5 class="font-size-14 text-truncate"><a href="#" class="text-dark">{{ $blogs_lido->titulo }}</a></h5>
                                                    <p class="text-muted mb-0">{{ date( 'd' , strtotime($blogs_lido->created_at)) }} {{ $mes }}, {{ date( 'Y' , strtotime($blogs_lido->created_at)) }}</p>
                                                </div>
                                            </div>

                                            <div class="dropdown ms-2">
                                                <a class="text-muted dropdown-toggle font-size-14" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-dots-horizontal"></i>
                                                </a>
                                                
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Ação</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- end tab pane -->
                    </div>
                    <!-- end tab content -->
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
    
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <div class="me-2">
                        <h5 class="card-title mb-3">Comentários</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                      
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Ação</a>
                        </div>
                    </div>
                </div>

                @php
                    $comentarios = BlogComentario::all();
                @endphp

                <div data-simplebar style="max-height: 310px;">
                    <ul class="list-group list-group-flush">
                        
                        @foreach ($comentarios as $key => $comentario)
                            @if ($key < 8)
                                <li class="list-group-item py-3">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-14 mb-1">{{$comentario->usuario_site->nome}} <small class="text-muted float-end">[{{ date( 'd' , strtotime($comentario->created_at)) }} de {{  substr($comentario->created_at->formatLocalized('%B'), 0, 3)}}, {{ date( 'Y' , strtotime($comentario->created_at)) }}]</small></h5>
                                            <p class="text-muted">{{ Str::limit($comentario->conteudo, 77) }}</p>
                                        </div>
                                    </div>
                                </li> 
                                <li class="list-group-item py-3">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-14 mb-1">{{$comentario->usuario_site->nome}} <small class="text-muted float-end">[{{ date( 'd' , strtotime($comentario->created_at)) }} de {{  substr($comentario->created_at->formatLocalized('%B'), 0, 3)}}, {{ date( 'Y' , strtotime($comentario->created_at)) }}]</small></h5>
                                            <p class="text-muted">{{ Str::limit($comentario->conteudo, 77) }}</p>
                                        </div>
                                    </div>
                                </li> 
                                <li class="list-group-item py-3">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-14 mb-1">{{$comentario->usuario_site->nome}} <small class="text-muted float-end">[{{ date( 'd' , strtotime($comentario->created_at)) }} de {{  substr($comentario->created_at->formatLocalized('%B'), 0, 3)}}, {{ date( 'Y' , strtotime($comentario->created_at)) }}]</small></h5>
                                            <p class="text-muted">{{ Str::limit($comentario->conteudo, 77) }}</p>
                                        </div>
                                    </div>
                                </li> 
                                <li class="list-group-item py-3">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-14 mb-1">{{$comentario->usuario_site->nome}} <small class="text-muted float-end">[{{ date( 'd' , strtotime($comentario->created_at)) }} de {{  substr($comentario->created_at->formatLocalized('%B'), 0, 3)}}, {{ date( 'Y' , strtotime($comentario->created_at)) }}]</small></h5>
                                            <p class="text-muted">{{ Str::limit($comentario->conteudo, 77) }}</p>
                                        </div>
                                    </div>
                                </li> 
                                <li class="list-group-item py-3">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-14 mb-1">{{$comentario->usuario_site->nome}} <small class="text-muted float-end">[{{ date( 'd' , strtotime($comentario->created_at)) }} de {{  substr($comentario->created_at->formatLocalized('%B'), 0, 3)}}, {{ date( 'Y' , strtotime($comentario->created_at)) }}]</small></h5>
                                            <p class="text-muted">{{ Str::limit($comentario->conteudo, 77) }}</p>
                                        </div>
                                    </div>
                                </li> 
                                <li class="list-group-item py-3">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                            <div class="avatar-title rounded-circle bg-light text-primary">
                                                <i class="bx bxs-user"></i>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <h5 class="font-size-14 mb-1">{{$comentario->usuario_site->nome}} <small class="text-muted float-end">[{{ date( 'd' , strtotime($comentario->created_at)) }} de {{  substr($comentario->created_at->formatLocalized('%B'), 0, 3)}}, {{ date( 'Y' , strtotime($comentario->created_at)) }}]</small></h5>
                                            <p class="text-muted">{{ Str::limit($comentario->conteudo, 77) }}</p>
                                        </div>
                                    </div>
                                </li> 
                            @endif             
                        @endforeach

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- end col -->

    {{-- <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-wrap">
                    <div class="me-2">
                        <h5 class="card-title mb-3">Top Visitantes</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                      
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-6">
                        <div class="mt-3">
                            <p class="text-muted mb-1">Today</p>
                            <h5>1024</h5>
                        </div>
                    </div>
                    
                    <div class="col-6">
                        <div class="mt-3">
                            <p class="text-muted mb-1">This Month</p>
                            <h5>12356 <span class="text-success font-size-13">0.2 % <i class="mdi mdi-arrow-up ms-1"></i></span></h5>
                        </div>
                    </div>
                </div>

                <hr>

                <div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="py-2">
                                <h5 class="font-size-14">California <span class="float-end">78%</span></h5>
                                <div class="progress animated-progess progress-sm">
                                    <div class="progress-bar" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>    
                        <li class="list-group-item">
                            <div class="py-2">
                                <h5 class="font-size-14">Nevada <span class="float-end">69%</span></h5>
                                <div class="progress animated-progess progress-sm">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="py-2">
                                <h5 class="font-size-14">Texas <span class="float-end">61%</span></h5>
                                <div class="progress animated-progess progress-sm">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>   
                        
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </div> --}}
    <!-- end col -->
</div>
<!-- end row -->


<div class="row">
    {{-- <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="me-2">
                        <h5 class="card-title mb-4">Activity</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                      
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
                <div data-simplebar class="mt-2" style="max-height: 280px;">
                    <ul class="verti-timeline list-unstyled">
                        <li class="event-list active">
                            <div class="event-timeline-dot">
                                <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                            </div>
                            <div class="media">
                                <div class="me-3">
                                    <h5 class="font-size-14">10 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Posted <span class="font-weight-semibold">Beautiful Day with Friends</span> blog... <a href="#">View</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="me-3">
                                    <h5 class="font-size-14">08 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        If several languages coalesce, the grammar of the resulting... <a href="#">Read</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="me-3">
                                    <h5 class="font-size-14">02 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Create <span class="font-weight-semibold">Drawing a sketch blog</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="me-3">
                                    <h5 class="font-size-14">24 Oct <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        In enim justo, rhoncus ut, imperdiet a venenatis vitae
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="event-list">
                            <div class="event-timeline-dot">
                                <i class="bx bx-right-arrow-circle font-size-18"></i>
                            </div>
                            <div class="media">
                                <div class="me-3">
                                    <h5 class="font-size-14">21 Oct <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                                </div>
                                <div class="media-body">
                                    <div>
                                        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                
                <div class="text-center mt-4"><a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
        <!-- end card -->
    </div> --}}
    <!-- end col -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="me-2">
                        <h5 class="card-title mb-4">Post</h5>
                    </div>
                    <div class="dropdown ms-auto">
                        <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="mdi mdi-dots-horizontal"></i>
                        </a>
                      
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#">Action</a>
                        </div>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <tr>
                            <th scope="col" colspan="2">Post</th>
                            <th scope="col">Likes</th>
                            <th scope="col">Comentários</th>
                            <th scope="col">Ação</th>
                          </tr>
                        <tbody>
                            @foreach ($ultimos_blogs as $ultimos_blog)
                                @php
                                    $mes = $ultimos_blog->created_at->formatLocalized('%B');
                                @endphp
                                <tr>
                                    <td style="width: 100px;"><img src="{{ $ultimos_blog->banner }}" alt="" class="avatar-md h-auto d-block rounded"></td>
                                    <td>
                                        <h5 class="font-size-13 text-truncate mb-1"><a href="#" class="text-dark">{{ $ultimos_blog->titulo }}</a></h5>
                                        <p class="text-muted mb-0">{{ date( 'd' , strtotime($blogs_lido->created_at)) }} {{ $mes }}, {{ date( 'Y' , strtotime($blogs_lido->created_at)) }}</p>
                                    </td>
                                    <td><i class="bx bx-like align-middle me-1"></i> 0</td>
                                    <td><i class="bx bx-comment-dots align-middle me-1"></i> 0</td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="text-muted dropdown-toggle font-size-16" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                <i class="mdi mdi-dots-horizontal"></i>
                                            </a>
                                          
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Ação</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                      
                </div>
            </div>
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')

    <!-- apexcharts -->
    <script src="{{ asset('admin/assets/libs/apexcharts/apexcharts.min.js')}}"></script>
        
    <!-- dashboard init -->
    <script src="{{ asset('admin/assets/js/pages/dashboard.init.js')}}"></script>

    <script>
        var options = {
            series: [{
                name: "Current",
                data: [18, 21, 45, 36, 65, 47, 51, 32, 40, 28, 31, 26]
            }, {
                name: "Previous",
                data: [30, 11, 22, 18, 32, 23, 58, 45, 30, 36, 15, 34]
            }],
            chart: {
                height: 350,
                type: "area",
                toolbar: {
                    show: !1
                }
            },
            colors: ["#556ee6", "#f1b44c"],
            dataLabels: {
                enabled: !1
            },
            stroke: {
                curve: "smooth",
                width: 2
            },
            fill: {
                type: "gradient",
                gradient: {
                    shadeIntensity: 1,
                    inverseColors: !1,
                    opacityFrom: .45,
                    opacityTo: .05,
                    stops: [20, 100, 100, 100]
                }
            },
            xaxis: {
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]
            },
            markers: {
                size: 3,
                strokeWidth: 3,
                hover: {
                    size: 4,
                    sizeOffset: 2
                }
            },
            legend: {
                position: "top",
                horizontalAlign: "right"
            }
        },
        chart = new ApexCharts(document.querySelector("#area-chart"), options);
    chart.render();
    </script>
@endsection