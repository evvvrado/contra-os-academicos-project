@extends('site.template.main', ['titulo' => Definition::NAME.' | Montar coqueteis'])

@section("body_attr", "id=coqueteis")


@section('content')

<section class="coqueteis-lista">
    <div class="niv">
        <div class="list-button">
            <img src="{{ asset('site/assets/img/coqueteis-left.png') }}" alt="seta para esquerda">
        </div>
        <div class="list">
            <div class="scroll">
                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_2.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Rum</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_3.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_4.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_4.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_3.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
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

<section class="coqueteis-drinks">
    <div class="niv">
        <div class="niv-top">
            <h4>Drinks</h4>
            <h2>Recomendados</h2>
        </div>

        <div class="niv-content">

            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
            </div>


            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
            </div>


            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
            </div>


            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
            </div>


            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
            </div>
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
            </div>
        </div>
    </div>
</section>



@include('site.includes.video')

@include('site.includes.tempo')

<section class="coqueteis-cocktails">
    <div class="niv">
        <div class="niv-top">
            <h2>Bebidas e cocktails famosos</h2>
        </div>

        <div class="niv-content">
            <div class="scroll">

                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_1.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_2.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_3.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>


                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_1.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_2.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_3.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>



                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_1.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_2.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/cocktail_3.jpg')}}')">

                    <div>
                        <strong>Whiskey Sour</strong>
                        <p>Bourbon, suco de limea-da-pérsia, Xarope</p>
                    </div>


                </div>




            </div>
        </div>
    </div>
</section>

@endsection