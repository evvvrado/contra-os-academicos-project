@extends('site.template.main', ['titulo' => 'Revista | ' . $revista->titulo])

@section('body_attr', 'id=artigo')

@section('content')

    <section class="artigo">
        <div class="niv --row">
            <main>
                <div class="title-area">
                    <div class="roadmap">
                        <a href="#">Revistas</a>
                        /
                        <a href="#">{{ $revista->categoria->nome }}</a>
                        /
                        <a href="#">{{ Str::limit($revista->titulo, 9) }}</a>
                    </div>
                    <div class="info">

                        <h1>{{ $revista->titulo }}</h1>

                        <div class="author">
                            <picture>
                                <img src="{{ asset($revista->autor->foto) }}" alt="Foto do colunista">
                            </picture>

                            <div>
                                <span>Por {{ $revista->autor->nome }}</span>
                                <div>
                                    <span>{{ date('d', strtotime($revista->created_at)) }} de {{ $mes }} de
                                        {{ date('Y', strtotime($revista->created_at)) }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php

                    if($revista->exclusivo == "1") {
                        if (isset(session()->get("usuario_site")["assinante"])) {
                            if(session()->get("usuario_site")["assinante"] == 0 OR session()->get("usuario_site")["assinante"] == ""){
                ?>
                <div class="text-content block-style">
                    <p>
                        {!! Str::limit($revista->conteudo, 800) !!}
                    </p>
                </div>

                <?php
                            }
                        }  else {
                ?>
                <div class="text-content block-style">
                    <p>
                        {!! Str::limit($revista->conteudo, 800) !!}
                    </p>
                </div>
                <?php 
                        }
                    } else {
                ?>
                <div class="text-content block-style">
                    <p>
                        {!! $revista->conteudo !!}
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
                            <button class="button">Assinar</button>
                            <button class="button"><a href="https://www.paypal.com/donate/?hosted_button_id=SG3AY5GSPXAHN"
                                    target="_blank">Quero apoiar</a></b>
                        </div>
                    </div>


                </div>

                <div class="actions">
                    <div class="social-buttons">
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_eye_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>1306</span>
                        </div>
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_chat_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>23</span>
                        </div>
                        {{-- <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_share_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>04</span>
                        </div> --}}
                        <div class="icon" active>
                            @livewire('revista-curtir-acao', ['revista' => $revista])
                        </div>

                    </div>
                    <div class="buttons">
                        <button class="button copyurl">Quero compartilhar</button>
                    </div>
                </div>
            </main>

            <picture class="artigo-banner">
                <img src="{{ asset($revista->banner) }}" alt="Imagem principal do artigo">
            </picture>

            <aside>
                <div class="mais-autor">
                    <strong>Mais do autor</strong>
                    <picture>
                        <img src="{{ asset($revista->autor->foto) }}" alt="">
                    </picture>

                    <ul>
                        @foreach ($mais_do_autors as $mais_do_autor)
                            <li>
                                <a
                                    href="{{ route('site.revista_detalhe', ['revista' => $mais_do_autor]) }}">{{ $mais_do_autor->titulo }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relacionados">
                    <h3>Relacionados</h3>

                    <ul>
                        @foreach ($revista_randomicos as $revista_randomico)
                            <li>
                                <a href="{{ route('site.revista_detalhe', ['revista' => $revista_randomico]) }}"
                                    class="box">
                                    <picture>
                                        <img src="{{ asset($revista_randomico->banner) }}" alt="Banner relacionados">
                                    </picture>
                                    <div class="content">
                                        <span>{{ date_format($revista_randomico->created_at, 'd/m/Y') }}</span>
                                        <strong>{{ $revista_randomico->titulo }}</strong>
                                        <p>Por {{ $revista_randomico->autor->nome }}</p>
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
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso4_cursos.jpg') }})">
                            <div class="tags">
                                <span class="--filled">Novo</span>
                                <span>Filosofia</span>
                            </div>
                            <h2>Filosofia Avançada</h2>
                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso3_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>A vida humana</h2>

                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso2_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>Descontrução Mundial</h2>

                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso1_cursos.jpg') }})">
                            <div class="tags">
                                <span>Arte</span>
                            </div>
                            <h2>Michelangelo</h2>
                        </a>




                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso2_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>Descontrução Mundial</h2>

                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso4_cursos.jpg') }})">
                            <div class="tags">
                                <span class="--filled">Novo</span>
                                <span>Filosofia</span>
                            </div>
                            <h2>Filosofia Avançada</h2>
                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso3_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>A vida humana</h2>

                        </a>



                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso1_cursos.jpg') }})">
                            <div class="tags">
                                <span>Arte</span>
                            </div>
                            <h2>Michelangelo</h2>
                        </a>
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
