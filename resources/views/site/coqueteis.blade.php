@extends('site.template.main', ['titulo' => Definition::NAME.' | Montar coquetel'])

@section("body_attr", "id=coquetel")


@section('content')

<section class="coqueteis-lista">
    <div class="niv">
        <div class="list-button">
            <img src="{{ asset('site/assets/img/coqueteis-left.png') }}" alt="seta para esquerda">
        </div>
        <div class="list">
            <div class="scroll">
                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_2.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Rum</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_3.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_4.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_4.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_3.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box">
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_2.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>
            </div>
        </div>
        <div class="list-button">
            <img src="{{ asset('site/assets/img/coqueteis-right.png') }}" alt="seta para direita">
        </div>
    </div>
</section>

<section class="coqueteis-filtro">
    <div class="niv">
        <div class="filtro">
            <picture>
                <img src="{{ asset('site/assets/img/icon_filter.svg') }}" alt="ícone de filtro">
            </picture>
            <strong>FILTRO</strong>
        </div>
        <div class="filtros">
            <span>
                <input type="checkbox">
                <p>Mais visitados</p>
            </span>

            <span>
                <input type="checkbox">
                <p>Lançamentos</p>
            </span>

            <span>
                <p>Calóricos</p>
                <input type="range">
            </span>


            <span>
                <p>Teor Alcólico</p>
                <input type="range">
            </span>


        </div>
    </div>
</section>


{{--
@include('site.includes.video')

@include('site.includes.tempo') --}}


@endsection