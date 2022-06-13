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
        <div class="niv">
            <form action="javascript:void(0)" method="post">
                <label>
                    <input type="text" name="nome" placeholder="Nome">
                </label>
                <label>
                    <input type="email" name="e-mail" placeholder="E-mail">
                </label>
                <label>
                    <input type="text" name="assunto" placeholder="Assunto">
                </label>

                <label>
                    <textarea placeholder="Escreva sua Mensagem" name="mensagem"></textarea>
                </label>

                <button class="button">Enviar</button>
            </form>
        </div>
    </section>

@endsection

@section('scripts')
@endsection
