@extends('site.template.main', ['titulo' => Definition::TITLE])

@section("body_attr", "id=home")

@section('content')

<section class="hero">
    <div class="niv">
        <div class="niv-text" niv-fade>
            <h1>Igual para outros</h1>

            <div class="float" niv-follow="0-100">
                <img src="{{ asset('/site/assets/img/hero_float (1).png') }}" alt="imagme flutuante">
            </div>

            <picture>
                <img active src="{{ asset('/site/assets/img/hero_drink.png') }}" alt="imagem de drink">
                <img src="{{ asset('/site/assets/img/hero_drink (2).png') }}" alt="imagem de drink">
                <img src="{{ asset('/site/assets/img/hero_drink.png') }}" alt="imagem de drink">
            </picture>


            <div class="float" niv-follow="0-100">
                <img src="{{ asset('/site/assets/img/hero_float (2).png') }}" alt="imagme flutuante">
            </div>

            <h1>para seu evento</h1>

            <div class="indicador">
                <span active></span>
                <span></span>
                <span></span>
            </div>

        </div>

        <div class="niv-form" niv-fade>
            <form action="javascript: void(0)">
                <label>
                    <span>Nome</span>
                    <input type="text" name="nome" placeholder="Nome completo" required>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="e-mail" name="email" placeholder="e-mail@example.com.br" required>
                </label>
                <label>
                    <span>Telefone</span>
                    <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required>
                </label>

                <button>
                    Quero levar minha festa além
                </button>

            </form>

            <p>Leve o melhor para sua festa com a Birittas</p>
        </div>
    </div>
</section>

<section class="drinks">
    <div class="niv">
        <div class="niv-top">
            <div class="title">
                <h4>Drinks</h4>
                <h2>Recomendamos</h2>
            </div>

            <div class="button">
                <a href="/">
                    Ver todos

                    <picture>
                        <img src="{{ asset('/site/assets/img/icon_arrow_right.svg') }}" alt="seta para direita">
                    </picture>
                </a>
            </div>
        </div>

        <div class="niv-list">
            <div class="content">
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>CARUSO</strong>
                    <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>CARUSO</strong>
                    <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>NEGRONI</strong>
                    <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
                </div>


                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>CARUSO</strong>
                    <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>CARUSO</strong>
                    <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>NEGRONI</strong>
                    <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
                </div>




                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>CARUSO</strong>
                    <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>CARUSO</strong>
                    <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>
                </div>
                <div class="box" niv-fade>
                    <picture>
                        <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                    </picture>

                    <strong>NEGRONI</strong>
                    <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>
                </div>
            </div>
        </div>

        <div class="niv-controller">
            <picture><img src="{{ asset('/site/assets/img/list_left.svg') }}" alt="botão before"></picture>
            <picture><img src="{{ asset('/site/assets/img/list_right.svg') }}" alt="botão next"></picture>
        </div>
    </div>
</section>

<section class="funcionamento">
    <div class="niv">
        <aside>
            <div class="title">
                <h4>Como é que funciona o Birittas?</h4>
                <h2>
                    <span niv-fade>Aqui tem tudo pra você.</span>
                    <span niv-fade>Completo pra dedéu.</span>
                </h2>

                <p>
                    Sua ideia é levar seus eventos pro diferente?<br>
                    Criar experiencias que levam além?<br>
                    Monte seu orçamento online? <i>Aqui tudo dá.</i>
                </p>
            </div>

            <ul>
                <li active>
                    <strong class="corporativos">Corporativos</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                    <button>Conheça</button>
                </li>
                <li>
                    <strong class="casamentos">Casamentos</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </li>
                <li>
                    <strong class="aniversarios">Aniversários</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </li>
                <li>
                    <strong class="formatura">Formatura</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                </li>
            </ul>

        </aside>

        <main>
            <picture>
                <img src="{{ asset('/site/assets/img/funcionamento_banner.png') }}" alt="imagem representativa">
            </picture>
        </main>
    </div>
</section>

<section class="video">
    <div class="niv">
        <div class="niv-top">
            <h2>Veja como é fácil fazer seu orçamento</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur </p>
        </div>

        <div class="niv-video" niv-fade>
            <picture>
                <img src="{{ asset('/site/assets/img/video_banner.jpg') }}" alt="imagem representativa">
            </picture>
        </div>

        <div class="niv-button">
            <a href="/">Quero levar minha festa além</a>
        </div>

    </div>
</section>

@include('site.includes.tempo')

<section class="historia">
    <div class="niv">
        <div class="niv-nossa">
            <h2>NOSSA HISTÓRIA</h2>

            <p>
                Em 2015 o Birittas deu o pontapé inicial para oferecer uma coquetelaria de qualidade. Porém, toda decisão leva tempo, não é? E definir o posicionamento foi a mais importante delas.
            </p>

            <picture niv-fade>
                <img src="{{ asset('/site/assets/img/sobre_banner.jpg') }}" alt="imagem representativa">
            </picture>
        </div>

        <div class="niv-diferente">
            <h3>Porque somos diferente?</h3>
            <p>Cerca de 18 meses, foram planejamento de nossas atividades, estudos extracurriculares, com atuação em alguns poucos eventos indicados. Sabíamos que só as experiências anteriores no
                ramo, não nos levaria longe.</p>

            <p>Ao longo do tempo, passamos a alcançar o equilíbrio do que havíamos almejado: ofertar uma coquetelaria de qualidade, para quem nunca teve a oportunidade de provar drinks conhecidos no
                mundo inteiro e oferecer o melhor custo-benefício para quem não admite beber sem um mínimo de excelência.</p>

            <picture>
                <img src="{{ asset('/site/assets/img/selo 1.png') }}" alt="imagem de um selo">
                <img src="{{ asset('/site/assets/img/selo 3.png') }}" alt="imagem de um selo">
                <img src="{{ asset('/site/assets/img/selo 2.png') }}" alt="imagem de um selo">
            </picture>

            <button onclick="window.location.href = '{{ route('site.sobre')}}'">Saiba mais</button>
        </div>
    </div>
</section>

<section class="leve">
    <div class="niv">
        <picture>
            <img src="{{ asset('/site/assets/img/leva_banner.jpg') }}" alt="imagem representativa">
        </picture>

        <h2>Leva algo diferente para sua festa</h2>

        <button>Solicite um orçamento</button>
    </div>
</section>

<section class="noticias">
    <div class="niv">
        <div class="niv-top">
            <h2>Notícias</h2>

            <a href="/">
                Ver todos

                <picture>
                    <img src="{{ asset('/site/assets/img/icon_arrow_right_black.svg') }}" alt="seta para direita">
                </picture>
            </a>
        </div>

        <div class="niv-content">
            <div class="scroll">

                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 1.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 2.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 3.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>


                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 1.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 2.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 3.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>



                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 1.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 2.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>
                <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 3.jpg')}}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>19 jul 2021</small>
                        </span>

                        <strong>Como fazer os melhores drinks com Rum?</strong>
                    </div>


                </div>




            </div>
        </div>


        <div class="niv-controller">
            <picture>
                <img src="{{ asset('/site/assets/img/blog_left.svg') }}" alt="seta esquerda">
            </picture>
            <picture>
                <img src="{{ asset('/site/assets/img/blog_right.svg') }}" alt="seta direita">
            </picture>
        </div>
    </div>
</section>


@endsection