@extends('site.template.main', ['titulo' => SIGLA . ' Nosso Blog'])

@section('body_attr', 'id=blog')

@section('content')

    <section class="banner">
        <div class="niv">
            <div class="roadmap">
                <a href="/">Início</a>
                >>
                <a href="{{ route('site.blog') }}">Blog</a>
            </div>

            <h2 class="--bar">Blog</h2>
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



                    <a href="#" class="button">
                        <picture>
                            <img src="{{ asset('site/assets/img/icon_chocolate_conteudo.svg') }}" alt="Ícone chocolate">
                        </picture>
                        Categorias
                    </a>
                </div>

                <div class="content-area">
                    @foreach($blogs as $blog)
                        <a href="{{ route('site.blog_detalhe', ['blog' => $blog]) }}" class="box">
                            <picture>
                                <img src="{{ asset($blog->banner) }}" alt="">
                            </picture>
                            <div class="box-content">
                                <span>{{ $blog->categoria->nome}}</span>
                                <strong>{{ $blog->titulo }}</strong>

                                <hr>

                                {!!Str::limit($blog->resumo, 104)!!}
                            </div>
                        </a>
                    @endforeach
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

@endsection
