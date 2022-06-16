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

                <div class="text-content">
                    <p>
                        {!! $blog->conteudo !!}
                    </p>
                </div>


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
                    </div>


                    <div class="buttons">
                        <button class="button">Quero apoiar</button>
                        <button class="button">Ler artigo completo</button>
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
                            <span>1306</span>
                        </div>
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_chat_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>23</span>
                        </div>
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_share_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>04</span>
                        </div>
                        <div class="icon" active>
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_heart_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>200</span>
                        </div>

                    </div>
                    <div class="buttons">
                        <button class="button --references">Referências</button>
                        <button class="button">Quero compartilhar</button>
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
                                        <img src="{{ asset($blog->banner) }}" alt="Banner relacionados">
                                    </picture>
                                    <div class="content">
                                        <span>{{ date_format($blog->created_at, 'd/m/Y') }}</span>
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
    </script>

@endsection
