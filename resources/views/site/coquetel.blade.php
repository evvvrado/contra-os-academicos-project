@extends('site.template.main', ['titulo' => Definition::NAME.' | Montar coquetel'])

@section("body_attr", "id=coquetel")


@section('content')

<section class="coquetel-detalhes">
    <div class="niv">
        <div class="niv-top">
            <div class="thumbnail">
                <picture>
                    <img src="{{ asset('site/assets/img/drink_EXAMPLE.png') }}" alt="drink representativo">
                </picture>

                <span>
                    <img src="{{ asset('site/assets/img/button_whatsapp.svg') }}" alt="botão whatsapp">
                    <p>
                        Tem dúvida sobre este produto?
                        <a href="/">Mande uma mensagem!</a>
                    </p>
                </span>
            </div>


            <main>
                <h2>APEROL SPRITZ</h2>

                <strong>História do drink</strong>

                <p>
                    Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável para o nosso clima e suas inúmeras variações. A história desse drink, conta que na estadia de soldados
                    austríacos em Triveneto, por fim de 1800, eles acharam o vinho local muito forte e decidiram adicionar um pouco de água com gás, para baixar a concentração alcóolica. Em alemão,
                    essa nova mistura foi batizada de Spritz que significa “esguichar”.
                </p>

                <button>Quero levar minha festa além</button>

                <span class="compartilhar">
                    Compartilhar

                    <picture>
                        <img src="{{ asset('site/assets/img/share_rede.svg') }}" alt="ícone de compaartilhar">
                    </picture>
                </span>

                <span>
                    <a href="/">
                        <img src="{{ asset('site/assets/img/share_pinterest.svg') }}" alt="logo">
                    </a>


                    <a href="/">
                        <img src="{{ asset('site/assets/img/share_facebook.svg') }}" alt="logo">
                    </a>


                    <a href="/">
                        <img src="{{ asset('site/assets/img/share_whatsapp.svg') }}" alt="logo">
                    </a>


                    <a href="/">
                        <img src="{{ asset('site/assets/img/share_linkedin.svg') }}" alt="logo">
                    </a>


                    <a href="/">
                        <img src="{{ asset('site/assets/img/share_youtube.svg') }}" alt="logo">
                    </a>
                </span>
            </main>
        </div>


    </div>
</section>


<section class="coquetel-especificacoes">
    <div class="niv">
        <div class="niv-top">
            <h2>Especificações</h2>
        </div>

        <div class="niv-content">
            <span>
                <p>Teor Alcóolico</p>
                <p>5,2%</p>
            </span>

            <span>
                <p>Valor Calórica</p>
                <p>50 kcal = 209kj*</p>
            </span>

            <span>
                <p>Notas do drink</p>

                <p>Drink leve e fluído com perfumes de laranja, apresenta doçura e frutado agradáveis de baixa acidez.</p>
            </span>

            <span>
                <p>Harmonização</p>

                <p>Um coquetel para abrir apetites. Bem servido com aperitivos fritos, refeições leves que acompanhem saladas, frutas, queijos e sobremesas de pouco dulçor.</p>
            </span>

            <span>
                <p>Ingredientes</p>

                <p>Bitter Aperol, Champanhe ou Espumante Brut, Água com Gás</p>
            </span>

        </div>
    </div>
</section>


<section class="drinks">
    <div class="niv">
        <div class="niv-top">
            <div class="title">
                <h4>Drinks</h4>
                <h2>Relacionados</h2>
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
            <picture><img src="{{ asset('/site/assets/img/icon_arrow_left_purple.svg') }}" alt="botão before"></picture>
            <picture><img src="{{ asset('/site/assets/img/icon_arrow_right_purple.svg') }}" alt="botão next"></picture>
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


@endsection