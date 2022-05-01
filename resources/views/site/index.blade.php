@extends('site.template.main', ['titulo' => TITLE])

@section('body_attr', 'id=home')

@section('content')
    <section class="hero">
        <div class="niv">
            <a href="#" class="main-card card"
                style="background: url('{{ asset('site/assets/img/banner_mainbox_hero.jpg') }}')">

                <div class="top-bar">
                    <span class="categoria">Revista</span>

                    {{-- <a href="#" class="--plus">Ver mais</a> --}}
                </div>

                <div class="text">
                    <i>Filosofia</i>

                    <h1>Os homens se esqueceram de Deus</h1>

                    <p>Por <strong>Pedro Lucena</strong></p>
                </div>
            </a>

            <div class="col">
                <a href="#" class="mini-card card"
                    style="background: url({{ asset('site/assets/img/banner_minibox_hero.jpg') }})">
                    <strong>O Sacrifício - Andrei Tarkovsky</strong>
                    <p>Por <strong>Pedro Lucena</strong></p>
                </a>
                <a href="#" class="mini-card card"
                    style="background: url({{ asset('site/assets/img/banner_minibox2_hero.jpg') }})">
                    <strong>Notas aos Quatro Quartetos de T.S. Eliot</strong>
                    <p>Por <strong>Pedro Lucena</strong></p>
                </a>
            </div>

            <div class="col">
                <div class="colunistas">
                    <h2>Colunistas</h2>

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
                    <a href="#" class="--plus">Ver mais</a>
                </div>

                <div class="content">
                    <div class="scroll">
                        <a href="#" class="card"
                            style="background-image: url('{{ asset('site/assets/img/banner_card1_blog.jpg') }}')">
                            <span>Leia <i class="niv-arrow-right"></i></span>
                            <strong>Transforma-se o amador na cousa amada – Camões</strong>
                        </a>
                        <a href="#" class="card"
                            style="background-image: url('{{ asset('site/assets/img/banner_card2_blog.jpg') }}')">
                            <span>Leia <i class="niv-arrow-right"></i></span>
                            <strong>F for Fake – Orson Welles</strong>
                        </a>
                        <a href="#" class="card"
                            style="background-image: url('{{ asset('site/assets/img/banner_card3_blog.jpg') }}')">
                            <span>Leia <i class="niv-arrow-right"></i></span>
                            <strong>O Sacrifício – Andrei Tarkovsky</strong>
                        </a>
                        <a href="#" class="card"
                            style="background-image: url('{{ asset('site/assets/img/banner_card4_blog.jpg') }}')">
                            <span>Leia <i class="niv-arrow-right"></i></span>
                            <strong>Notas aos Quatro Quartetos de T.S. Eliot</strong>
                        </a>
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
                <h2>
                    Conteúdo
                </h2>

                <div class="filtros">
                    <ul>
                        <li active data-filter="artigos">Artigos</li>
                        <li data-filter="videos">Vídeos</li>
                        <li data-filter="colunas">Colunas</li>
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
                <div class="scroll" data-filter="artigos" active>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog1_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog8_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog2_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog3_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog4_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog5_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog6_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog7_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                </div>


                <div class="scroll" data-filter="videos">

                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog6_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                </div>



                <div class="scroll" data-filter="colunas">
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog1_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog8_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog2_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog3_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog4_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog5_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog6_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                    <a href="#" class="box">
                        <picture>
                            <img src="{{ asset('site/assets/img/picture_blog7_conteudo.jpg') }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>Filosofia da consciências</span>
                            <strong>Como vencer um debate sem precisar ter razão</strong>

                            <hr>

                            <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de patifaria
                                intelectual...</p>
                        </div>
                    </a>
                </div>



            </div>
        </div>
    </section>


@endsection

@section('scripts')

@endsection
