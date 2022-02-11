@extends('site.template.main', ['titulo' => Definition::NAME.' | Nome da notícia'])

@section("body_attr", "id=blog-detalhes")


@section('content')

<section class="destaque-blog">

    <div class="niv">
        <div class="banner" style="background-image: url('{{asset($noticia->banner)}}')"></div>
    </div>
</section>

<section class="conteudo-blog">
    <div class="niv">
        <div class="niv-share"></div>

        <div class="niv-content">
            <h2>{{ $noticia->titulo }}</h2>

            <hr>

            {!! $noticia->conteudo !!}
        </div>
    </div>
</section>

<section class="orcamento">
    <div class="niv">
        <div class="niv-top">
            <h2>Deseja fazer um orçamento?</h2>
            <p>Preencha o formulario a baixo que logo entraremos em contato</p>
        </div>

        <div class="niv-form">
            <form action="{{ route('site.orcamento.evento')}}" method="post">
                @csrf
                <label>
                    <span>Nome</span>
                    <input type="text" name="nome" placeholder="Nome completo" required>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="e-mail" name="email" placeholder="e-mail@example.com.br" required>
                </label>
                <label>
                    <span>Telefone</span>
                    <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required>
                </label>

                <button>
                    Quero levar minha festa além
                </button>

            </form>
        </div>
    </div>
</section>

@include('site.includes.noticias')

@endsection