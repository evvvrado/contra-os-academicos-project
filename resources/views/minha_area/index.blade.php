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
                                    <th scope="row">Full Name :</th>
                                    <td>Cynthia Price</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mobile :</th>
                                    <td>(123) 123 1234</td>
                                </tr>
                                <tr>
                                    <th scope="row">E-mail :</th>
                                    <td>cynthiaskote@gmail.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Location :</th>
                                    <td>California, United States</td>
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
            <div class="row">
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-star"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Favoritos</a></h5>
                            <p class="text-muted">Acesse seus favoritos</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-book"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Meus cursos</a></h5>
                            <p class="text-muted">Acesse seus cursos</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-show"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Últimas leituras</a></h5>
                            <p class="text-muted">Acesse seus leituras</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-star"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Favoritos</a></h5>
                            <p class="text-muted">Acesse seus favoritos</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-book"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Meus cursos</a></h5>
                            <p class="text-muted">Acesse seus cursos</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-show"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Últimas leituras</a></h5>
                            <p class="text-muted">Acesse seus leituras</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-star"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Favoritos</a></h5>
                            <p class="text-muted">Acesse seus favoritos</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-book"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Meus cursos</a></h5>
                            <p class="text-muted">Acesse seus cursos</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="text-center card">
                        <div class="card-body c-pointer">
                            <div class="avatar-sm mx-auto mb-4"><span
                                    class="avatar-title rounded-circle bg-primary text-white font-size-16">
                                    <i class="bx bx-show"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15 mb-1"><a class="text-dark">Últimas leituras</a></h5>
                            <p class="text-muted">Acesse seus leituras</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection

@section('scripts')
@endsection
