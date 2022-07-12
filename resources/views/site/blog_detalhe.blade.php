@extends('site.template.main', ['titulo' => 'Blog | ' . $blog->titulo])

@section('body_attr', 'id=artigo')

@section('content')

    <div id="referencias_modal" class="modal">
        <div class="niv">
            <div class="box">
                <div class="title-area">
                    <h2>Referências</h2>

                    <button class="cancel">
                        <img src="{{ asset('site/assets/img/icon_close_modal.svg') }}" alt="Ícone de fechar"
                            title="Fechar caixa">
                    </button>
                </div>

                <div class="content">
                    <div class="scroll">
                        {!! $blog->referencias !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="close-modal"></div>
    </div>

    <section class="artigo">
        <div class="niv --row">
            <main>
                <div class="title-area">
                    <div class="roadmap">
                        <a href="#">Blogs</a>
                        /
                        <a href="#">{{ $blog->categoria->nome }}</a>
                        /
                        <a href="#">{{ Str::limit($blog->titulo, 9) }}</a>
                    </div>
                    <div class="info">

                        <h1>{{ $blog->titulo }}</h1>

                        @if ($blog->tradutor_id != 1)
                            <div class="author">
                                <picture>
                                    <img src="{{ asset($blog->tradutor->foto) }}" alt="Foto do colunista">
                                </picture>

                                <div>
                                    <span>Traduzido por {{ $blog->tradutor->nome }}</span>
                                    <div>
                                        <span>{{ date('d', strtotime($blog->created_at)) }} de {{ $mes }} de
                                            {{ date('Y', strtotime($blog->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="author">
                                <picture>
                                    <img src="{{ asset($blog->autor->foto) }}" alt="Foto do colunista">
                                </picture>

                                <div>
                                    <span>Por {{ $blog->autor->nome }}</span>
                                    <div>
                                        <span>{{ date('d', strtotime($blog->created_at)) }} de {{ $mes }} de
                                            {{ date('Y', strtotime($blog->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <?php

                    if($blog->exclusivo == "1") {
                        if (isset(session()->get("usuario_site")["assinante"])) {
                            if(session()->get("usuario_site")["assinante"] == 0 OR session()->get("usuario_site")["assinante"] == ""){
                ?>
                <div class="text-content block-style">
                    <p>
                        {!! Str::limit($blog->conteudo, 800) !!}
                    </p>
                </div>

                <?php
                            }
                        }  else {
                ?>
                <div class="text-content block-style">
                    <p>
                        {!! Str::limit($blog->conteudo, 800) !!}
                    </p>
                </div>
                <?php 
                        }
                    } else {
                ?>
                <div class="text-content block-style">
                    <p>
                        {!! $blog->conteudo !!}
                    </p>
                </div>
                <?php
                    }
                ?>

                <div class="apoie-projeto --alternative">

                    <div class="content-side">
                        <strong>MENSAGEM DA EQUIPE</strong>

                        <strong>
                            Seu apoio é mais importante do que nunca.
                        </strong>

                        <p>
                            Desde 2014 o Contra os Acadêmicos trabalha para divulgar a boa filosofia e incentivar a
                            autoeducação. Apoiando nosso projeto, você assegura a continuidade do nosso trabalho.
                        </p>


                        <div class="buttons">
                            {{-- <button class="button">Quero apoiar</button> --}}
                            <button class="button" style="width: 100%; padding: 15px;"><a
                                    href="https://www.paypal.com/donate/?hosted_button_id=SG3AY5GSPXAHN"
                                    target="_blank">Quero
                                    apoiar</a></b>
                        </div>
                    </div>
                </div>

                <div class="bio">
                    <picture>
                        <img src="{{ asset($blog->autor->foto) }}" alt="Foto do Biografado">
                    </picture>

                    <div>
                        <strong>{{ $blog->autor->nome }}</strong>
                        <p>{{ $blog->autor->resumo }}</p>
                    </div>
                </div>

                <div class="actions">
                    <div class="social-buttons">
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_eye_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>{{ $blog->visitas }}</span>
                        </div>
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_chat_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>{{ $comentarios->count() }}</span>
                        </div>
                        {{-- <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_share_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>04</span>
                        </div> --}}
                        <div class="icon" active>
                            @livewire('blog-curtir-acao', ['blog' => $blog])
                        </div>

                    </div>
                    <div class="buttons">
                        <button class="button --references">Referências</button>
                        <button class="button copyurl">Quero compartilhar</button>
                    </div>
                </div>

                @include('site.includes.comentarios')
            </main>

            <picture class="artigo-banner">
                <img src="{{ asset($blog->banner) }}" alt="Imagem principal do artigo">
            </picture>

            <aside>
                <div class="mais-autor">
                    <strong>Mais do autor</strong>
                    <picture>
                        <img src="{{ asset($blog->autor->foto) }}" alt="">
                    </picture>

                    <ul>
                        @foreach ($mais_do_autors as $mais_do_autor)
                            <li>
                                <a
                                    href="{{ route('site.blog_detalhe', ['blog' => $mais_do_autor]) }}">{{ $mais_do_autor->titulo }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relacionados">
                    <h3>Relacionados</h3>

                    <ul>
                        @foreach ($blog_randomicos as $blog_randomico)
                            <li>
                                <a href="{{ route('site.blog_detalhe', ['blog' => $blog_randomico]) }}" class="box">
                                    <picture>
                                        <img src="{{ asset($blog_randomico->banner) }}" alt="Banner relacionados">
                                    </picture>
                                    <div class="content">
                                        <span>{{ date_format($blog_randomico->created_at, 'd/m/Y') }}</span>
                                        <strong>{{ $blog_randomico->titulo }}</strong>
                                        <p>Por {{ $blog_randomico->autor->nome }}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>

        <div class="niv">
            <div class="cursos">
                <div class="title-area">
                    <picture><img src="{{ asset('site/assets/img/logos_fade_artigo.png') }}" alt="Logo sumindo efeito">
                    </picture>

                    <h3 class="--hr-bar">Cursos em destaque</h3>

                    <div>
                        <button class="scroll-left">
                            <img src="{{ asset('site/assets/img/arrow_left_biblioteca.svg') }}" alt="">
                        </button>
                        <button class="scroll-right">
                            <img src="{{ asset('site/assets/img/arrow_right_biblioteca.svg') }}" alt="">
                        </button>
                    </div>
                </div>

                <div class="card-area">
                    <div class="scroll">
                        @foreach ($cursos as $curso)
                            <a href="#" class="box-destaque"
                                style="background-image: url('{{ asset($curso->banner) }}')">
                                <div class="tags">
                                    {{-- <span class="--filled">Novo</span> --}}
                                    <span>{{ $curso->categoria->nome }}</span>
                                </div>
                                <h2>{{ $curso->titulo }}</h2>
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="#" class="--plus">Acessar todos os cursos</a>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        $('section.artigo div.niv div.cursos div.title-area div button.scroll-left').click(() => {
            $('section.artigo div.niv div.cursos div.card-area').scrollLeft($(
                'section.artigo div.niv div.cursos div.card-area div.scroll').scrollLeft() - $(
                'section.artigo div.niv div.cursos div.card-area div.scroll a.box-destaque').width());
        })
        $('section.artigo div.niv div.cursos div.title-area div button.scroll-right').click(() => {
            $('section.artigo div.niv div.cursos div.card-area').scrollLeft($(
                'section.artigo div.niv div.cursos div.card-area div.scroll').scrollLeft() + $(
                'section.artigo div.niv div.cursos div.card-area div.scroll a.box-destaque').width());
        })

        $('button.--references').click(() => {
            $('#referencias_modal').showModal();
        })

        window.addEventListener('toastr:error', event => {
            toastr.error(event.detail.message);
        });

        window.addEventListener('toastr:success', event => {
            toastr.success(event.detail.message);
        });
    </script>

@endsection
