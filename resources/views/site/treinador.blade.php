@include("site.includes.head")
<title>ENAF - {{ $professor->hotsite->nome }}</title>

<body id="treinador">

    @include("site.includes.navbar")


    <section class="container-fluid s_hero">
        <div class="container-fav">
            <div class="_h1 fade">
                <h6>Professor</h6>
                <h1>{{ $professor->hotsite->nome }}</h1>
            </div>

            <div class="trainer">
                <img src="{{asset($professor->hotsite->foto)}}" alt="Foto do treinador">
            </div>
        </div>
    </section>

    <section class="container-fluid s_treinadorVideo">
        <div class="container-fav">
            {!! \App\Classes\Util::convertYoutube($professor->hotsite->video) !!}


        </div>

    </section>

    <section class="container-fluid s_programas">
        <div class="container-fav">
            <div class="_title fade">
                <h6>
                    {!! $professor->hotsite->sessao1_titulo !!}
                </h6>
            </div>
            <p>
                {!! $professor->hotsite->sessao1_texto !!}
            </p>
        </div>
    </section>

    <section class="container-fluid s_alternative">
        <div class="container-fav c_cursos">
            <div class="_title fade">
                <span>Bônus Exclusivo</span>
                <h6>{!! $professor->hotsite->sessao2_titulo !!}</h6>

                <p>
                    {!! $professor->hotsite->sessao2_texto !!}
                </p>
            </div>

            @if($professor->cursos->count() > 3)
            <div class="_menu">
                <div class="_buttons">
                    <div class="_previous _button">
                        <img src="{{ asset('/site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
                    </div>

                    <div class="_indicator">
                        <img class="active" alt="Indicador da lista" />
                        <img alt="Indicador da lista" />
                        <img alt="Indicador da lista" />
                    </div>

                    <div class="_next _button">
                        <img src="{{ asset('/site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
                    </div>
                </div>
            </div>
            @endif

            <div class="_content fade">
                <div class="_cursoList">
                    @foreach($professor->cursos as $curso)
                    <div class="_curso" onclick="window.location.href = '{{route('site.curso', ['slug' => $curso->slug])}}'">
                        <div class="_pic">
                            <img src="{{ asset($curso->thumbnail) }}" alt="{{$curso->nome}}" />
                        </div>
                        <main>
                            <div class="_top">
                                <h6>{{$curso->nome}}</h6>
                                <p>{{$curso->descricao}}</p>
                            </div>
                            <div class="_bottom">
                                <strong>R$ {{number_format($curso->valor, 2, ",", ".")}}</strong>
                                <button>Comprar</button>
                            </div>
                        </main>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="container-fav c_depoimentos">
            <div class="_title fade">
                <h6>
                    {!! $professor->hotsite->sessao3_titulo !!}
                </h6>

                <p>
                    {!! $professor->hotsite->sessao3_texto !!}
                </p>
            </div>

            <div class="_videos">
                @foreach($professor->hotsite->depoimentos->where("video", true) as $depoimento)
                {!! \App\Classes\Util::convertYoutube($depoimento->url) !!}
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid s_depoimentos-single">
        <div class="container-fav">
            <div class="_title fade">
                <div class="_circles"></div>
                <h6>Oque dizem sobre nós</h6>
            </div>

            <main>
                <div class="_content">
                    <div class="_depoimentoList">
                        @foreach($professor->hotsite->depoimentos->where("video", false) as $depoimento)
                        <div class="_depoimento">
                            <p class="_text">
                                {!! $depoimento->depoimento !!}
                            </p>
                            <div class="_end">
                                <div class="_pic">
                                    <img src="{{ asset($depoimento->foto) }}" alt="{{$depoimento->nome}}" style="
                                    object-fit: cover; width: 50px; height: 50px;" />
                                </div>
                                <p>{{$depoimento->nome}}</p>
                                {{-- <a href="/">
                                    <div class="_icon">
                                        <img src="{{ asset('/site/img/logo_instagram_depoimento.svg') }}" alt="Logo Instagram" />
                                    </div>
                                    @rodrigo
                                </a> --}}
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- <div class="_menu">
            <div class="_buttons">
            <div class="_previous _button">
                <img src="{{ asset('/site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
            </div>

            <div class="_indicator">
                <img class="active" alt="Indicador da lista" />
                <img alt="Indicador da lista" />
                <img alt="Indicador da lista" />
            </div>

            <div class="_next _button">
                <img src="{{ asset('/site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
            </div>
            </div>
        </div> -->
            </main>
        </div>
    </section>

    <section class="container-fluid s_sobremim">
        <div class="container-fav">
            <div class="_text fade">
                <h1>SOBRE MIM</h1>
                <p>
                    {{ $professor->hotsite->sobre }}
                </p>
            </div>
            <div class="_img">
                <img src="{{ asset($professor->hotsite->foto) }}" alt="Foto do treinador" />
            </div>
        </div>
    </section>

    {{-- <section class="container-fluid s_meusposts">
        <div class="container-fav">
            <div class="_top">
                <h4>Blog</h4>
            </div>

            <div class="_content">
                <div class="_blogList">
                    <div class="_blog">
                        <div class="_img">
                            <img src="{{ asset('/site/img/blog_post.jpg') }}" alt="Foto Blog" />
                        </div>
                        <div class="_text">
                            <span>Dicas</span>
                            <h6>Tradução para o inglês por H. Rackha, feita em 1914</h6>
                            <p>10.09.2020</p>
                        </div>
                    </div>
                    <div class="_blog">
                        <div class="_img">
                            <img src="{{ asset('/site/img/blog_post.jpg') }}" alt="Foto Blog" />
                        </div>
                        <div class="_text">
                            <span>Dicas</span>
                            <h6>Tradução para o inglês por H. Rackha, feita em 1914</h6>
                            <p>10.09.2020</p>
                        </div>
                    </div>
                    <div class="_blog">
                        <div class="_img">
                            <img src="{{ asset('/site/img/blog_post.jpg') }}" alt="Foto Blog" />
                        </div>
                        <div class="_text">
                            <span>Dicas</span>
                            <h6>Tradução para o inglês por H. Rackha, feita em 1914</h6>
                            <p>10.09.2020</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid s_cursos">
        <div class="container-fav">
            <div class="_title">
                <h4>Meus cursos</h4>
            </div>
            <div class="_cursosList">
                <div class="_curso">
                    <div class="_pic">
                        <img src="{{ asset('/site/img/curso_Pic (1).') }}jpg" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Meeting de musculação</h4>
                            <p class="curso_description">
                                Treinamentos para hipertrofia muscular e suplementação combinada
                            </p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_price">R$ 38,00</p>
                            <button>Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="_curso">
                    <div class="_pic">
                        <img src="{{ asset('/site/img/curso_Pic (2).') }}jpg" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Treinamento Multifuncional</h4>
                            <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_price">R$ 38,00</p>
                            <button>Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="_curso">
                    <div class="_pic">
                        <img src="{{ asset('/site/img/curso_Pic (3).') }}jpg" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Cross Training</h4>
                            <p class="curso_description">Baseado na metodologia do CrossFit</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_price">R$ 38,00</p>
                            <button>Comprar</button>
                        </div>
                    </div>
                </div>
                <div class="_curso">
                    <div class="_pic">
                        <img src="{{ asset('/site/img/curso_Pic (4).') }}jpg" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Musculação Feminina</h4>
                            <p class="curso_description">Programa para maximizar os resultados</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_price">R$ 38,00</p>
                            <button>Comprar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('site.includes.publicidade')

    <section class="container-fluid s_duvidas">
        <div class="container-fav">
            <div class="_top">
                <h4>Dúvidas Frequentes</h4>
            </div>

            <div class="_duvidas">
                @foreach($professor->hotsite->duvidas as $duvida)
                <div class="_box">
                    <div class="_main">
                        <span>{{$duvida->duvida}}</span>
                        <div class="_icon">
                            <img src="{{ asset('/site/img/arrowbottom.svg') }}" alt="Seta para baixo" />
                        </div>
                    </div>
                    <p>
                        {!! $duvida->resposta !!}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    @include('site.includes.parceiros')



    <footer>
        <div class="container-fluid footer_form">
            <div class="container-fav">
                <div class="_col">
                    <p>Fale conosco</p>

                    <h6>Simply dummy text of the printing</h6>

                    <p>
                        Preencha o formulário para que possamos conversar sobre os cursos ou esclarecer suas
                        dúvidas.
                    </p>
                    <p>
                        Você também pode ligar para <i>{{$professor->hotsite->telefone}}</i> Ou enviar um e-mail para
                        <i>{{$professor->hotsite->email}}</i>
                    </p>

                    <div class="_download">
                        <p>Baixe nosso app</p>
                        <div class="_buttons">
                            <a href="/"><img src="{{ asset('site/img/download_google.png') }} " alt="Download na playstore" /></a>
                            <a href="/"> <img src="{{ asset('site/img/download_app.png') }}   " alt="Download na App Store" /></a>
                        </div>
                    </div>
                </div>
                <div class="_col">
                    <form action="javascript: void(0);">
                        <label>
                            <p>Nome</p>
                            <input type="text" />
                        </label>
                        <label>
                            <p>E-mail</p>
                            <input type="email" />
                        </label>
                        <label>
                            <p>Telefone</p>
                            <input type="tel" />
                        </label>
                        <button onclick="sendmessage()">Quero me inscrever</button>
                    </form>
                </div>
            </div>
        </div>

        @include('site.includes.footer')


        <script>
            function sendmessage() {
                var nome = $('input[type = "text"]').val();
                var email = $('input[type = "email"]').val();
                var cellphone = $('input[type = "tel"]').val();
                var number = '55{{ \App\Classes\Util::limparString($professor->hotsite->telefone) }}';
    
                window.open(`https://wa.me/${number}/?text=Ol%C3%A1%2C+sou+${nome}+.+Me+contate%21+E-mail+${email}+%0D%0A++Celular%3A+${cellphone}`)
            }
        </script>