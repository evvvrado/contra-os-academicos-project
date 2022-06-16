@extends('minha_area.template.main')

@section('styles')
@endsection


@section('titulo')
    Dashboard @if (isset($tipo))
        {{ $tipo }}
    @endif
@endsection

@section('botoes')
@endsection

@section('conteudo')
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
                                    use App\Models\UsuarioSite;
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
                                        class="btn btn-primary waves-effect waves-light btn-sm">Ver Perfil <i
                                            class="mdi mdi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Orders</p>
                                <h4 class="mb-0">1,235</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-copy-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Revenue</p>
                                <h4 class="mb-0">$35, 723</h4>
                            </div>

                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-archive-in font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div> --}}
    </div>
@endsection

@section('scripts')
@endsection
