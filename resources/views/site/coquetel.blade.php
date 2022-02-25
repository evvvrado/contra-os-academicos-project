@extends('site.template.main', ['titulo' => Definition::NAME.' | Montar coquetel'])

@section("body_attr", "id=coquetel")


@section('content')

<section class="coquetel-detalhes">
    <div class="niv">
        <div class="niv-top">
            <div class="thumbnail">
                <picture>
                    <img src="{{ $produto->imagem_1 }}" alt="drink representativo">
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
                <h2>{{ $produto->nome }}</h2>

                <strong>História do drink</strong>

                <p>{{ $produto->historia }}</p>

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
                <p>{{ $produto->teor_alcoolico }}%</p>
            </span>

            <span>
                <p>Valor Calórica</p>
                <p>{{ $produto->calorias }} </p>
                {{-- kcal = 209kj* --}}
            </span>

            <span>
                <p>Notas do drink</p>
                <p>{{ $produto->nota }}</p>
            </span>

            <span>
                <p>Harmonização</p>

                <p>U{{ $produto->harmonizacao }}</p>
            </span>

            <span>
                <p>Ingredientes</p>

                <p>
                    @foreach($ingredientes as $ingrediente)
                        {{ $ingrediente->nome }}, 
                    @endforeach
                </p>
            </span>

        </div>
    </div>
</section>


<section class="drinks">
    <div class="niv">
        <div class="niv-top">
            <div class="title">
                <h4>Produtos</h4>
                <h2>Relacionados</h2>
            </div>

        </div>

        <div class="niv-list">
            <div class="content">

                @foreach($produtos as $produto)
                    <div class="box" niv-fade>
                        <picture>
                            <img src="{{ $produto->imagem_1 }}" alt="imagem representativa">
                        </picture>

                        <strong>{{ $produto->nome }}</strong>
                        <p>{{mb_strimwidth($produto->descricao, 0, 75, "...")}}</p>
                    </div>
                @endforeach 

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