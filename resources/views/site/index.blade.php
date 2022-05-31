@extends('site.template.main', ['titulo' => TITLE])

@section('body_attr', 'id=home')

@section('content')
    <section class="hero">
        <div class="niv">
            @foreach($revistas as $key => $revista)
                @if($key == 0)
                    <a href="{{ route('site.revista_detalhe', ['revista' => $revista]) }}" class="main-card card" style="background: url('{{ asset($revista->banner) }}')">

                        <div class="top-bar">
                            <span class="categoria">Revista</span>
                            <span class="categoria">{{ $revista->categoria->nome }}</span>
                            {{-- <a href="#" class="--plus">Ver mais</a> --}}
                        </div>

                        <div class="text">

                            <h1>{{ $revista->titulo }}</h1>

                            <p>Por <strong>{{ $revista->autor->nome }}</strong></p>
                        </div>
                    </a>
                @endif
            @endforeach

            <div class="col">
                @foreach($revistas as $key => $revista)
                    @if($key > 0 AND $key < 3)
                        <a href="{{ route('site.revista_detalhe', ['revista' => $revista]) }}" class="mini-card card"
                        style="background: url({{ asset($revista->banner) }})">
                            <strong>{{ $revista->titulo }}</strong>
                            <p>Por <strong>{{ $revista->autor->nome }}</strong></p>
                        </a>
                    @endif
                @endforeach
            </div>

            <div class="col">
                <div class="colunistas">
                    <h2>Colunas</h2>

                    <ul class="lista-colunistas">
                        <li>
                            <picture>
                                <img src="{{ asset('site/assets/img/pic_colunista1_hero.png') }}"
                                    alt="Imagem do Colunista">
                            </picture>
                            <div>
                                <span>
                                    Por Artur Lira
                                </span>
                                <span>
                                    Poética – Vinícius de Moraes
                                </span>
                            </div>
                        </li>
                        <li>
                            <picture>
                                <img src="{{ asset('site/assets/img/pic_colunista2_hero.png') }}"
                                    alt="Imagem do Colunista">
                            </picture>
                            <div>
                                <span>
                                    Por Fernando Texeira
                                </span>
                                <span>
                                    F for Fake
                                </span>
                            </div>
                        </li>
                        <li>
                            <picture>
                                <img src="{{ asset('site/assets/img/pic_colunista3_hero.png') }}"
                                    alt="Imagem do Colunista">
                            </picture>
                            <div>
                                <span>
                                    Por Leandro Medeiros
                                </span>
                                <span>
                                    O mundo como objeto de ilusão...
                                </span>
                            </div>
                        </li>
                        <li>
                            <picture>
                                <img src="{{ asset('site/assets/img/pic_colunista4_hero.png') }}"
                                    alt="Imagem do Colunista">
                            </picture>
                            <div>
                                <span>
                                    Por Pedro Lucena
                                </span>
                                <span>
                                    Viva...
                                </span>
                            </div>
                        </li>
                    </ul>


                    <a href="#" class="--plus">Ver mais</a>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-news">
        <div class="niv">
            <div class="blog-area">
                <div class="top-title">
                    <h2>
                        <picture>
                            <img src="{{ asset('site/assets/img/icon_fire_blog.png') }}" alt="Ícone de fogo">
                        </picture>
                        Blog
                    </h2>
                    <a href="{{ route('site.blog') }}" class="--plus">Ver mais</a>
                </div>

                <div class="content">
                    <div class="scroll">
                        @foreach($blogs as $key => $blog)
                            @if($key < 4)
                                <a href="{{ route('site.blog_detalhe', ['blog' => $blog]) }}" class="card" style="background-image: url('{{ asset($blog->banner) }}')">
                                    <span>Leia <i class="niv-arrow-right"></i></span>
                                    <strong>{{ $blog->titulo }}</strong>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="news-area">
                <h2>Nossa Newsletter</h2>
                <h3>O melhor do Contra os Acadêmicos no seu inbox</h3>

                <form action="javascript:void(0)" method="post">
                    <label>
                        <span>Inscreva-se para receber o nosso conteúdo</span>

                        <input type="email" name="email-news" id="email-news" placeholder="Qual seu e-mail?">
                    </label>

                    <label class="checkbox">
                        <input type="checkbox" name="aceitar-termos" id="aceitar-termos">

                        <span>Li e aceito os <a href="#" class="--blue">termos de uso</a></span>
                    </label>

                    <div>

                        <button class="button">Cadastrar</button>

                        <div class="pictures">
                            <picture><img src="{{ asset('site/assets/img/picture_news.png') }}" alt=""></picture>
                            <picture><img src="{{ asset('site/assets/img/picture_news-1.png') }}" alt=""></picture>
                            <picture><img src="{{ asset('site/assets/img/picture_news-2.png') }}" alt=""></picture>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <section class="conteudo">
        <div class="niv">
            <div class="top-area">
                <h2 class="--bar">
                    Conteúdo
                </h2>

                <div class="filtros">
                    <ul>
                        <li active data-filter="blogs">Blog</li>
                        <li data-filter="revistas">Revista</li>
                        <li data-filter="listas">Lista</li>
                    </ul>
                </div>

                <a href="#" class="button">
                    <picture>
                        <img src="{{ asset('site/assets/img/icon_chocolate_conteudo.svg') }}" alt="Ícone chocolate">
                    </picture>
                    Categorias
                </a>
            </div>

            <div class="content-area">
                <div class="scroll" data-filter="blogs" active>
                    @foreach($blogs as $key => $blog)
                        @if($key < 8)
                            <a href="{{ route('site.blog_detalhe', ['blog' => $blog]) }}" class="box">
                                <picture>
                                    <img src="{{ asset($blog->banner) }}" alt="">
                                </picture>
                                <div class="box-content">
                                    <span>{{ $blog->categoria->nome }}</span>
                                    <strong>{{ $blog->titulo }}</strong>

                                    <hr>

                                    <p>{{ Str::limit($blog->resumo, 104) }}</p>
                                </div>
                            </a>
                        @endif
                    @endforeach 
                </div>


                <div class="scroll" data-filter="revistas">

                    @foreach($revistas as $key => $revista)
                        @if($key < 8)
                            <a href="{{ route('site.revista_detalhe', ['revista' => $revista]) }}" class="box">
                                <picture>
                                    <img src="{{ asset($revista->banner) }}" alt="">
                                </picture>
                                <div class="box-content">
                                    <span>{{ $revista->categoria->nome }}</span>
                                    <strong>{{ $revista->titulo }}</strong>

                                    <hr>

                                    <p>{{ Str::limit($revista->resumo, 104) }}</p>
                                </div>
                            </a>
                        @endif
                    @endforeach 

                </div>



                <div class="scroll" data-filter="listas">
                    @foreach($listas as $key => $lista)
                        @if($key < 8)
                            <a href="{{ route('site.lista_detalhe', ['lista' => $lista]) }}" class="box">
                                <picture>
                                    <img src="{{ asset($lista->banner) }}" alt="">
                                </picture>
                                <div class="box-content">
                                    <span>{{ $lista->categoria->nome }}</span>
                                    <strong>{{ $lista->titulo }}</strong>

                                    <hr>

                                    <p>{{ Str::limit($lista->resumo, 104) }}</p>
                                </div>
                            </a>
                        @endif
                    @endforeach 
                </div>



            </div>
        </div>
    </section>

    <section class="lista-destaque">
        <div class="niv">
            <h2 class="--bar">Lista em destaque</h2>

            <div class="boxes-area">
                <div class="scroll">
                    <a href="#" class="box-destaque"
                        style="background-image: url({{ asset('site/assets/img/banner_lista4_destaque.jpg') }})">
                        <h2>Grandes Compositores</h2>
                    </a>
                    <a href="#" class="box-destaque"
                        style="background-image: url({{ asset('site/assets/img/banner_lista3_destaque.jpg') }})">
                        <h2>Cinema</h2>
                    </a>
                    <a href="#" class="box-destaque"
                        style="background-image: url({{ asset('site/assets/img/banner_lista2_destaque.jpg') }})">
                        <h2>Parte 8 Rússia</h2>
                    </a>
                    <a href="#" class="box-destaque"
                        style="background-image: url({{ asset('site/assets/img/banner_lista1_destaque.jpg') }})">
                        <h2>Química</h2>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="indicacao-cast">
        <div class="niv">
            <div class="indicacao-area">
                <div class="box --livro">
                    <div class="box-top">
                        <div>

                            <p>Indicação</p>
                            <h2>Livro em Destaque</h2>
                        </div>

                        <a href="#" class="--plus">
                            Ir para livraria
                        </a>
                    </div>
                    <div class="box-content">
                        <span>Frederick Copleston</span>
                        <h2>Uma história da filosofia - Vol .1</h2>

                        <main>
                            <div class="--novidade">
                                <picture>
                                    <img src="{{ asset('site/assets/img/livro_indicacao.jpg') }}" alt="Livro Indicado">
                                </picture>
                            </div>

                            <div class="info">
                                <div class="valor-antigo">
                                    <span class="riscado">
                                        R$ 149,00
                                    </span>

                                    <span class="desconto">
                                        -36 %
                                    </span>
                                </div>

                                <span class="valor">
                                    R$ 95,84
                                </span>

                                <a href="#" class="button">Comprar</a>
                            </div>
                        </main>
                    </div>
                </div>

                {{-- <div class="box --video">
                    <div class="box-top">
                        <div>

                            <p>Indicação</p>
                            <h2>Livro em Destaque</h2>
                        </div>

                        <a href="#" class="--plus">
                            Ir para livraria
                        </a>
                    </div>
                    <div class="box-content">
                        <picture>
                            <img src="{{ asset('site/assets/img/video_indicacao.png') }}" alt="Vídeo Indicado">
                        </picture>
                    </div>
                </div> --}}
            </div>

            <div class="contraCast-area">
                <div class="banner-area">
                    <div>
                        <picture>
                            <img src="{{ asset('site/assets/img/logo_branca_podcast.png') }}"
                                alt="Logo {{ NAME }}">
                        </picture>

                        <h2>ContraCast</h2>
                        <h3>online</h3>
                    </div>

                    <a href="#" class="--plus">saiba mais</a>
                </div>
                <div class="content-area">
                    <ul>
                        <li>
                            <main>
                                <small>Episódio 1</small>
                                <strong>Filosofia como objeto reparador do mundo</strong>

                                <hr>

                                <span>Duração: 65:12</span>
                            </main>

                            <aside>
                                <img src="{{ asset('site/assets/img/icon_play_podcast.svg') }}" alt="ícone de play">
                            </aside>
                        </li>
                        <li>
                            <main>
                                <small>Episódio 2</small>
                                <strong>Qual o futuro da esquerda mundial?</strong>

                                <hr>

                                <span>Duração: 36:12</span>
                            </main>

                            <aside>
                                <img src="{{ asset('site/assets/img/icon_play_podcast.svg') }}" alt="ícone de play">
                            </aside>
                        </li>
                        <li>
                            <main>
                                <small>Episódio 3</small>
                                <strong>Qual o futuro da direita mundial?</strong>

                                <hr>

                                <span>Duração: 36:12</span>
                            </main>

                            <aside>
                                <img src="{{ asset('site/assets/img/icon_play_podcast.svg') }}" alt="ícone de play">
                            </aside>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="cursos">
        <div class="niv">
            <h2>Cursos</h2>

            <div class="boxes-area">
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
                </div>
            </div>

            <a href="#" class="--plus">Ver todos os cursos</a>
        </div>
    </section>

    <section class="parceiros">
        <div class="niv">
            <h2 class="--bar">
                Nossos parceiros
            </h2>

            <div class="partners">
                <a href="#"><img src="{{ asset('site/assets/img/logo_parceiro1.png') }}" alt="Logo parceiro"></a>
                <a href="#"><img src="{{ asset('site/assets/img/logo_parceiro2.png') }}" alt="Logo parceiro"></a>
                <a href="#"><img src="{{ asset('site/assets/img/logo_parceiro3.png') }}" alt="Logo parceiro"></a>
                <a href="#"><img src="{{ asset('site/assets/img/logo_parceiro4.png') }}" alt="Logo parceiro"></a>
                <a href="#"><img src="{{ asset('site/assets/img/logo_parceiro5.png') }}" alt="Logo parceiro"></a>
            </div>
        </div>
    </section>
@endsection

@section('scripts')

@endsection
