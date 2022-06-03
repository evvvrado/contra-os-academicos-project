@extends('site.template.main', ['titulo' => SIGLA . ' Biblioteca'])

@section('body_attr', 'id=biblioteca')

@section('content')

    <section class="banner">
        <div class="niv">
            <div class="roadmap">
                <a href="/">Início</a>
                >>
                <a href="{{ route('site.biblioteca') }}">Biblioteca</a>
            </div>

            <h2 class="--bar">Listas de Leitura</h2>
        </div>
    </section>

    <section class="complemento --biblioteca">
        <div class="niv">
            <div class="title-area">
                <a href="#">
                    <picture>
                        <img src="{{ asset('site/assets/img/icon_grade_biblioteca.svg') }}" alt="Ícone de grade">
                    </picture>
                    Lista por assunto
                </a>
            </div>


            <div class="boxes-area">
                <button class="scroll-left">
                    <img src="{{ asset('site/assets/img/arrow_left_biblioteca.svg') }}" alt="">
                </button>
                <div class="scroll">
                    <div class="boxes">
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos5_biblioteca.jpg') }})">
                            <h2>Grécia Antiga</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos4_biblioteca.jpg') }})">
                            <h2>Direito</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos3_biblioteca.jpg') }})">
                            <h2>Roma</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos2_biblioteca.jpg') }})">
                            <h2>História</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos1_biblioteca.jpg') }})">
                            <h2>Filosofia</h2>
                        </a>



                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos4_biblioteca.jpg') }})">
                            <h2>Direito</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos5_biblioteca.jpg') }})">
                            <h2>Grécia Antiga</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos3_biblioteca.jpg') }})">
                            <h2>Roma</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos1_biblioteca.jpg') }})">
                            <h2>Filosofia</h2>
                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_assuntos2_biblioteca.jpg') }})">
                            <h2>História</h2>
                        </a>


                    </div>
                </div>
                <button class="scroll-right">
                    <img src="{{ asset('site/assets/img/arrow_right_biblioteca.svg') }}" alt="">
                </button>
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
        $('section.complemento.--biblioteca div.niv div.boxes-area button.scroll-left').click(() => {
            $('section.complemento.--biblioteca div.niv div.boxes-area div.scroll').scrollLeft($(
                'section.complemento.--biblioteca div.niv div.boxes-area div.scroll').scrollLeft() - 200);
        })
        $('section.complemento.--biblioteca div.niv div.boxes-area button.scroll-right').click(() => {
            $('section.complemento.--biblioteca div.niv div.boxes-area div.scroll').scrollLeft($(
                'section.complemento.--biblioteca div.niv div.boxes-area div.scroll').scrollLeft() + 200);
        })
    </script>

@endsection
