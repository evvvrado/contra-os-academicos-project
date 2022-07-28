@extends('site.template.main', ['titulo' => SIGLA . ' Entre em contato'])

@section('body_attr', 'id=contato')

@section('content')

    <section class="banner">
        <div class="niv">
            <div class="roadmap">
                <a href="/">Início</a>
                >>
                <a href="{{ route('site.contato') }}">Contato</a>
            </div>

            <h2 class="--bar">Entre em contato</h2>
            {{-- <p>Dúvidas e sugestões entre em contato conosco:</p> --}}
        </div>
    </section>

    <section class="contato">
        @livewire('site.contato-view')
    </section>

@endsection

@section('scripts')
@endsection
