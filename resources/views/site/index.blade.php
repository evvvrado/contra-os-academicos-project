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
                <h4>Produtos</h4>
                <h2>Recomendamos</h2>
            </div>

            <div class="button">
                <a href="{{ route('site.coqueteis')}}">
                    Ver todos

                    <picture>
                        <img src="{{ asset('/site/assets/img/icon_arrow_right.svg') }}" alt="seta para direita">
                    </picture>
                </a>
            </div>
        </div>

        <div class="niv-list">
            <div class="content">

                @foreach($produtos as $produto)

                    <div class="box" niv-fade>
                        {{-- {{ route('site.coquetel', ["coquetel" => $produto])}} --}}
                        <a href="">
                            <picture>
                                <img src="{{$produto->imagem_1}}" alt="imagem representativa" style="width: auto; height: 100%; margin: auto;">
                            </picture>
    
                            <strong>{{$produto->nome}}</strong>
                            <p>{{mb_strimwidth($produto->descricao, 0, 72, "...")}}</p>
                        </a>
                    </div>
                @endforeach

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

@include('site.includes.video')

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
        @php
            if($publicidade) {
        @endphp
                <picture>
                    
                        <a target="_blank" rel="noopener" href="{{$publicidade->url}}" title="Conheça {{$publicidade->nome}}" pid="{{$publicidade->id}}">
                            <img style="width: 1213px; height: 313px;" src="{{ asset($publicidade->imagem_desktop) }}" rel="noopener" data-size="desktop" alt="" />
                            {{-- <img src="{{ asset($publicidade->imagem_mobile) }}" rel="noopener" data-size="responsive" alt="" /> --}}
                            {{-- <img src="{{ asset('/site/assets/img/leva_banner.jpg') }}" alt="imagem representativa"> --}}
                        </a>
                </picture>

                <h2>{{ $publicidade->nome }}</h2>
        @php 
            }
        @endphp

        <button>Solicite um orçamento</button>
    </div>
</section>

@include('site.includes.noticias')


@endsection

@section('scripts')
<script>
    $('section.funcionamento div.niv aside ul li').click(()=>{
        window.location.href = '{{ route('site.servicos')}}';
    })

    // $('section.drinks div.niv div.niv-list div.content div.box').click(()=>{
    //     window.location.href = '{{ route('site.coquetel')}}';
    // })
</script>
@endsection