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


@endsection

@section('scripts')

@endsection
