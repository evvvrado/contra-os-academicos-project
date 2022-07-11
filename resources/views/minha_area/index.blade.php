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
    {{-- <div class="row">
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

    </div> --}}
@endsection

@section('scripts')
@endsection
