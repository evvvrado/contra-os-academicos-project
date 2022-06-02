@extends('site.template.main', ['titulo' => SIGLA . ' Revistas'])

@section('body_attr', 'id=listas')

@section('content')

    <section class="banner">
        <div class="niv">
            <div class="roadmap">
                <a href="/">Início</a>
                >>
                <a href="{{ route('site.listas') }}">Lista</a>
            </div>

            <h2 class="--bar">Revista</h2>
        </div>
    </section>

    <section class="complemento --listas">
        <div class="niv">

            <div class="indicador">
                <span active></span>
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div class="banner-area">
                <div class="scroll">
                    <div class="banner"
                        style="background-image: url({{ asset('site/assets/img/banner_card_revista.jpg') }})">
                        <h1>Resenha: O Saber e o Enigma (Parte 0)</h1>

                        <p>Por <strong>Contra os Acadêmicos</strong></p>
                    </div>


                    <div class="banner"
                        style="background-image: url({{ asset('site/assets/img/banner_card_revista.jpg') }})">
                        <h1>Resenha: O Saber e o Enigma (Parte I)</h1>

                        <p>Por <strong>Contra os Acadêmicos</strong></p>
                    </div>


                    <div class="banner"
                        style="background-image: url({{ asset('site/assets/img/banner_card_revista.jpg') }})">
                        <h1>Resenha : O Saber e o Enigma (Parte II)</h1>

                        <p>Por <strong>Contra os Acadêmicos</strong></p>
                    </div>
                    <div class="banner"
                        style="background-image: url({{ asset('site/assets/img/banner_card_revista.jpg') }})">
                        <h1>Resenha: O Saber e o Enigma (Parte 0)</h1>

                        <p>Por <strong>Contra os Acadêmicos</strong></p>
                    </div>


                </div>
            </div>
        </div>
    </section>


    <section class="publicacoes">
        <aside>
            <ul class="colunistas">
                <li>
                    <picture>
                        <img src="{{ asset('site/assets/img/colunista1_blog.png') }}" alt="Foto do colunista">
                    </picture>

                    <span>Nome do colunista</span>
                </li>
                <li>
                    <picture>
                        <img src="{{ asset('site/assets/img/colunista2_blog.png') }}" alt="Foto do colunista">
                    </picture>

                    <span>Nome do colunista</span>
                </li>
                <li>
                    <picture>
                        <img src="{{ asset('site/assets/img/colunista3_blog.png') }}" alt="Foto do colunista">
                    </picture>

                    <span>Nome do colunista</span>
                </li>
                <li>
                    <picture>
                        <img src="{{ asset('site/assets/img/colunista4_blog.png') }}" alt="Foto do colunista">
                    </picture>

                    <span>Nome do colunista</span>
                </li>
                <li>
                    <picture>
                        <img src="{{ asset('site/assets/img/colunista5_blog.png') }}" alt="Foto do colunista">
                    </picture>

                    <span>Nome do colunista</span>
                </li>
            </ul>
        </aside>


        <main>
            <div class="niv">
                <div class="title-area">
                    <h3 class="hr-bar"><i></i>Últimas Publicações</h3>

                    <p>Por Contra Acadêmicos</p>

                </div>

                <div class="content-area">
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

                <div class="button-area">
                    <button class="button">
                        Carregar mais conteúdo
                    </button>
                </div>
            </div>
        </main>


        <aside>
            <div class="mais-listas">
                <h3 class="hr-bar"><i></i>Mais lidas</h3>
                <picture class="fire-icon">
                    <img src="{{ asset('site/assets/img/icon_fire_blog.png') }}" alt="Ícone fogo">
                </picture>


                <ul>
                    <li>
                        <a href="#" class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/picture_blog1_conteudo.jpg') }}" alt="">
                            </picture>
                            <div class="box-content">
                                <span>Filosofia da consciências</span>
                                <strong>Como vencer um debate sem precisar ter razão</strong>

                                <hr>

                                <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de
                                    patifaria
                                    intelectual...</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/picture_blog8_conteudo.jpg') }}" alt="">
                            </picture>
                            <div class="box-content">
                                <span>Filosofia da consciências</span>
                                <strong>Como vencer um debate sem precisar ter razão</strong>

                                <hr>

                                <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de
                                    patifaria
                                    intelectual...</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/picture_blog2_conteudo.jpg') }}" alt="">
                            </picture>
                            <div class="box-content">
                                <span>Filosofia da consciências</span>
                                <strong>Como vencer um debate sem precisar ter razão</strong>

                                <hr>

                                <p>A rigor este livro está mal batizado. O título pode sugerir ao leitor um manual de
                                    patifaria
                                    intelectual...</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </section>

@endsection

@section('scripts')
    <script>
        var atualBanner = 0;

        setInterval(() => {
            if (atualBanner < 3) {
                $('section.complemento.--revistas div.banner-area').scrollLeft($(
                    'section.complemento.--revistas div.banner-area').scrollLeft() + $(
                    'section.complemento.--revistas div.banner-area div.scroll div.banner').width())
                atualBanner++;
            } else {
                $('section.complemento.--revistas div.banner-area').scrollLeft(0);
                atualBanner = 0;
            }


            $('div.indicador span').removeAttr('active');
            $(`div.indicador span:nth-child(${atualBanner + 1})`).attr('active', '');

        }, 4000);


        $('div.indicador span').click(function() {

            atualBanner = $(this).index() + 1;


            $('section.complemento.--revistas div.banner-area').scrollLeft(
                $('section.complemento.--revistas div.banner-area div.scroll div.banner')[$(this).index()]
                .offsetLeft
            )

            $('div.indicador span').removeAttr('active');
            $(`div.indicador span:nth-child(${$(this).index() + 1})`).attr('active', '');
        })
    </script>

@endsection
