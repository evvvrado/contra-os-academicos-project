@extends('site.template.main', ['titulo' => SIGLA . ' Listas'])

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

        <main>
            <div class="niv">
                <div class="title-area">
                    <h3 class="hr-bar"><i></i>Últimas Publicações</h3>

                    <p>Por Contra Acadêmicos</p>

                </div>

                <div class="content-area">
                    @foreach($listas as $key => $lista)
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
                    @foreach($mais_lidas as $mais_lida)
                    <li>
                        <a href="#" class="box">
                            <picture>
                                <img src="{{ asset($mais_lida->banner) }}" alt="">
                            </picture>
                            <div class="box-content">
                                <span>{{ $mais_lida->categoria->nome }}</span>
                                <strong>{{ $mais_lida->titulo }}</strong>

                                <hr>

                                <p>{{ Str::limit($mais_lida->resumo, 104) }}</p>
                            </div>
                        </a>
                    </li>
                    @endforeach
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
