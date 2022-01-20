@extends('site.template.main', ['titulo' => Definition::NAME.' | Nome da notícia'])

@section("body_attr", "id=blog-detalhes")


@section('content')

<section class="destaque-blog">

    <div class="niv">
        <div class="banner" style="background-image: url('/site/assets/img/blog_example_2.jpg')"></div>
    </div>
</section>

<section class="conteudo-blog">
    <div class="niv">
        <div class="niv-share"></div>

        <div class="niv-content">
            <h2>2 drinks fáceis e baratos para fazer na sua festa</h2>

            <hr>

            <p>
                Quando pensamos em festa, uma das primeiras perguntas que vem a mente é: O que vamos beber? Quanto vai custar? Nós que vamos fazer? Alguém sabe fazer algum drinks fáceis e baratos?
                Calma!<br>

                Fim de mês, ou simplesmente uma falta de grana, é algo que nos deixa preocupados e, às vezes, atrapalha nossas festinhas. Temos que economizar, mas, ao mesmo tempo, curtir pra
                valer.<br>

                Bom, estamos aqui para ajudar você, então vamos te ensinar a fazer 10 drinks fáceis e baratos para fazer na sua festa:<br>
            </p>


            <strong>1. Caipirinha</strong>

            <picture>
                <img src="{{ asset('site/assets/img/caipirinha.jpg') }}" alt="imagem representativa">
            </picture>

            <p>
                Um dos maiores símbolos do Brasil, esta é uma bebida clássica, facílima de preparar, bem barata e muito deliciosa. Não a toa, ela está no nosso top 1 de drinks fáceis e baratos.
            </p>

            <strong>
                Ingredientes:
            </strong>

            <p>
                2 Limões<br>
                2 Colheres de açúcar<br>
                Gelo<br>
                Cachaça <br>
            </p>

            <strong>Modo de preparo:</strong>

            <p>
                Corte os limões ao meio;<br>
                Com um corte em V retire o miolo branco do limão;<br>
                Corte fatias dos limões em cruz;<br>
                Coloque os pedaços de limão no copo com casca para baixo;<br>
                Adicione o açúcar no copo;<br>
                Macere o limão (de modo que não venha a forçar a casca)<br>
                Adicione gelo ao copo;<br>
                Complete com cachaça.<br>
                <br>
                A praticidade e simplicidade da receita fez com que surgissem inúmeras versões e receitas inspiradas nela. Onde se troca a cachaça por vodca, saquê ou outros destilados, ou substituem
                os limões por outras frutas, como morango, kiwi, maracujá, etc.
            </p>
        </div>
    </div>
</section>

<section class="orcamento">
    <div class="niv">
        <div class="niv-top">
            <h2>Deseja fazer um orçamento?</h2>
            <p>Preencha o formulario a baixo que logo entraremos em contato</p>
        </div>

        <div class="niv-form">
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
        </div>
    </div>
</section>

@include('site.includes.noticias')

@endsection