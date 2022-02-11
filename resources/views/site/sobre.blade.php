@extends('site.template.main', ['titulo' => Definition::NAME.' | Sobre nós'])

@section("body_attr", "id=sobre")


@section('content')

<section class="sobre">
    <div class="niv">
        <div class="niv-left">
            <h2>Porque somos diferente?</h2>

            <p>Em 2015 o Birittas deu o pontapé inicial para oferecer uma coquetelaria de qualidade. Porém, toda decisão leva tempo, não é? E definir o posicionamento foi a mais importante delas. </p>

            <p>Cerca de 18 meses, foram planejamento de nossas atividades, estudos extracurriculares, com atuação em alguns poucos eventos indicados. Sabíamos que só as experiências anteriores no
                ramo, não nos levaria longe.</p>

            <p>Em 2015 o Birittas deu o pontapé inicial para oferecer uma coquetelaria de qualidade. Porém, toda decisão leva tempo, não é? E definir o posicionamento foi a mais importante delas. </p>

            <p>Cerca de 18 meses, foram planejamento de nossas atividades, estudos extracurriculares, com atuação em alguns poucos eventos indicados. Sabíamos que só as experiências anteriores no
                ramo, não nos levaria longe.</p>

        </div>
        <div class="niv-right">
            <picture>
                <img src="{{ asset('/site/assets/img/quem_somos_banner.png') }}" alt="imagem representativa">
            </picture>
        </div>

    </div>
</section>

<section class="timelapse">
    <div class="niv">
        <div class="niv-left">
            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/timelapse_picture.jpg') }}" alt="imagem representativa">
                </picture>

                <strong>Ao longo do tempo, passamos a alcançar o equilíbrio do que havíamos almejado:</strong>
                <p>
                    ofertar uma coquetelaria de qualidade, para quem nunca teve a oportunidade de provar drinks conhecidos no mundo inteiro e oferecer o melhor custo-benefício para quem não admite
                    beber
                    sem um mínimo de excelência.
                </p>
            </div>


            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/timelapse_picture (2).jpg') }}" alt="imagem representativa">
                </picture>

                <strong>Ao longo do tempo, passamos a alcançar o equilíbrio do que havíamos almejado:</strong>
                <p>
                    ofertar uma coquetelaria de qualidade, para quem nunca teve a oportunidade de provar drinks conhecidos no mundo inteiro e oferecer o melhor custo-benefício para quem não admite
                    beber
                    sem um mínimo de excelência.
                </p>
            </div>



            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/timelapse_picture (2).jpg') }}" alt="imagem representativa">
                </picture>

                <strong>Ao longo do tempo, passamos a alcançar o equilíbrio do que havíamos almejado:</strong>
                <p>
                    ofertar uma coquetelaria de qualidade, para quem nunca teve a oportunidade de provar drinks conhecidos no mundo inteiro e oferecer o melhor custo-benefício para quem não admite
                    beber
                    sem um mínimo de excelência.
                </p>
            </div>
        </div>

        <div class="niv-mid">
            <div class="title">
                <p>Linha do tempo</p>
                <h2>Ao longo do tempo passamos</h2>
            </div>

            <div class="line">
                <span>
                    2019
                </span>

                <span>
                    2021
                </span>

                <span>
                    2022
                </span>

                <span>Ainda vamos muito além</span>
            </div>
        </div>

        <div class="niv-right">

            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/timelapse_picture.jpg') }}" alt="imagem representativa">
                </picture>

                <strong>Nosso grade Desafio?</strong>
                <p>
                    num contexto tão competitivo, é um grande desafio diário a toda nossa equipe, que vai crescendo a cada passo. Nesse contexto, nossa gestão não poderia ser “simplista” e para isso
                    pensamos muito além, pensamos em tecnologia! A favor de nosso dia a dia, a favor de nossos clientes, sem perder a intimidade, o charme, a transparência e a facilidade.
                </p>

                <p style="margin-top: 6.7rem">
                    Coquetéis, Especiais e Sob Medida, trazendo aos nossos clientes, mais amostras do que temos à disposição para seus eventos, sejam eles corporativos ou sociais.
                </p>
            </div>



            <div class="box">
                <picture>
                    <img src="{{ asset('/site/assets/img/timelapse_picture (2).jpg') }}" alt="imagem representativa">
                </picture>

                <strong>Ao longo do tempo, passamos a alcançar o equilíbrio do que havíamos almejado:</strong>
                <p>
                    ofertar uma coquetelaria de qualidade, para quem nunca teve a oportunidade de provar drinks conhecidos no mundo inteiro e oferecer o melhor custo-benefício para quem não admite
                    beber
                    sem um mínimo de excelência.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="depoimentos">
    <div class="niv">
        <div class="niv-top">
            <h2>Oque estão dizendo nas redes</h2>
        </div>

        <div class="niv-content">

            <div class="scroll">
                @foreach($depoimentos as $depoimento)
                    <div class="depoimento">
                        <p>{{ $depoimento->depoimento }}</p>

                        <div>
                            <picture>
                                <img src="{{ $depoimento->foto }}" alt="">
                            </picture>

                            <span>{{ $depoimento->nome }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="niv-indicator">
            <img active src="{{ asset('/site/assets/img/depoimento_ball.svg') }}" alt="Bola de indicação">
            <img src="{{ asset('/site/assets/img/depoimento_ball.svg') }}" alt="Bola de indicação">
            <img src="{{ asset('/site/assets/img/depoimento_ball.svg') }}" alt="Bola de indicação">
        </div>
    </div>
</section>

<section class="parceiros">
    <div class="niv">
        <div class="niv-top">
            <h2>Nossos parceiros</h2>
        </div>

        <div class="niv-content">
            <div class="scroll">
                <picture>
                    <img src="{{ asset('site/assets/img/parceiro_1.png') }}" alt="parceiro logo">
                </picture>
                <picture>
                    <img src="{{ asset('site/assets/img/parceiro_2.png') }}" alt="parceiro logo">
                </picture>
                <picture>
                    <img src="{{ asset('site/assets/img/parceiro_3.png') }}" alt="parceiro logo">
                </picture>
                <picture>
                    <img src="{{ asset('site/assets/img/parceiro_4.png') }}" alt="parceiro logo">
                </picture>
                <picture>
                    <img src="{{ asset('site/assets/img/parceiro_5.png') }}" alt="parceiro logo">
                </picture>
            </div>
        </div>
    </div>
</section>

@endsection