@include("site.includes.head")
<title>{{$curso->nome}} - ENAF</title>


<body id="cursoDetalhes">

    @include("site.includes.navbar")

    <section class="container-fluid t_box">
        <div class="_data">
            <span>
                <div class="_icon">
                    <img src="{{ asset('site/img/icon_clock.svg') }}" alt="Icone de relógio" />
                </div>
                <p>{{ $curso->total_horas }} horas</p>
            </span>
            @if ($curso->certificacao)
            <span>
                <div class="_icon">
                    <img src="{{ asset('site/img/icon_medal.svg') }}" alt="Icone de medalha" />
                </div>
                <p>Certificado</p>
            </span>
            @endif

            <span>
                <h6>R$ {{number_format($curso->valor, 2, ",", ".")}}</h6>
            </span>

            <span>
                <div class="_btn" onclick="window.location.href ='{{ route('site.carrinho-adicionar', ['curso' => $curso]) }}'">Comprar</dvi>
            </span>
        </div>
    </section>

    <section class="container-fluid s_hero" style="background-image: url('{{ asset($curso->banner)}}');background-blend-mode: soft-light;">
        <div class="container-fav">
            <div class="_h1 fade">
                <h6>CURSO {{ strtoupper(config('cursos.tipo_nome')[$curso->tipo]) }}</h6>
                <h1>{{ $curso->nome }}</h1>
                <p>
                    {!! $curso->descricao !!}
                </p>

                <div class="_data">
                    <span>
                        <div class="_icon">
                            <img src="{{ asset('site/img/icon_clock.svg') }}" alt="Icone de relógio" />
                        </div>
                        <p>{{ $curso->total_horas }} horas</p>
                    </span>
                    @if ($curso->certificacao)
                    <span>
                        <div class="_icon">
                            <img src="{{ asset('site/img/icon_medal.svg') }}" alt="Icone de medalha" />
                        </div>
                        <p>Certificado</p>
                    </span>
                    @endif

                    <span>
                        <h6>R$ {{number_format($curso->valor, 2, ",", ".")}}</h6>
                    </span>

                    <span>
                        <div class="_btn" onclick="window.location.href ='{{ route('site.carrinho-adicionar', ['curso' => $curso]) }}'">Comprar</dvi>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid s_cursoVideo">
        <div class="container-fav">
            <div class="_text">
                <h4>{{$curso->titulo}}</h4>
                <p>
                    {!! $curso->sobre !!}
                </p>
            </div>

            <div class="_video">

                {!! \App\Classes\Util::convertYoutube($curso->video) !!}
            </div>
        </div>

        <div class="blackout"></div>
    </section>


    {{-- @if (count($curso->professores) > 1)

    <section class="container-fluid s_embaixadores">
        <div class="container-fav">
            <div class="_title">
                <h4>Professores</h4>
            </div>

            <div class="_pictures">
                @foreach($curso->professores as $professor)
                <picture>
                    <img src="{{ asset($professor->foto) }}" onclick="" alt="{{$professor->nome}}" />
                </picture>
                @endforeach
            </div>
        </div>
    </section>

    @endif --}}


    <section class="container-fluid s_content">
        <div class="container-fav">
            <div class="title">
                <h4>Conteúdo do Curso</h4>
            </div>

            <main>
                <div class="_modulos">
                    @foreach($curso->modulos as $modulo)
                    <div class="_box">
                        <div class="_main">
                            <span>{{$modulo->nome}}</span>
                            <div class="_icon">
                                <img src="{{ asset('site/img/arrowbottom.svg') }}" alt="Seta para baixo" />
                            </div>
                        </div>
                        <p>
                            {!! str_replace("\n", "<br>" ,$modulo->descricao) !!}
                        </p>
                    </div>
                    @endforeach
                </div>
                @if (count($curso->professores) == 1)

                @foreach($curso->professores as $professor)
                <div class="_info">
                    <picture>
                        <img src="{{ asset($professor->foto) }}" alt="Imagem do professor" alt="{{$professor->nome}}" @if($professor->hotsite)
                        onclick="window.open('{{route('site.treinador', ['slug' => $professor->hotsite->slug])}}')"
                        @endif>
                    </picture>

                    <h4>{{$professor->nome}}</h4>
                    {{-- <p> A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de
                        "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto
                        legível.</p> --}}

                </div>
                @endforeach

                @else
                <div class="_pictures">
                    @foreach($curso->professores as $professor)
                    <picture>
                        <span>{{$professor->nome}}</span>
                        <img src="{{ asset($professor->foto) }}" onclick="" alt="{{$professor->nome}}" title="{{$professor->nome}}" />
                    </picture>
                    @endforeach
                </div>
                @endif
            </main>
        </div>
    </section>




    <section class="container-fluid s_depoimentos _alternative">
        <div class="container-fav">
            <div class="_depoimentos">


                <div class="_title">
                    <h6>Vejam o que dizem sobre o curso</h6>
                </div>

                <div class="_content">
                    <div class="_depoimentosList">
                        @foreach($curso->depoimentos as $depoimento)
                        <div class="_depoimento">
                            <div class="_pic">
                                <img src="{{ asset($depoimento->foto) }}" alt="{{$depoimento->nome}}" />
                            </div>
                            <div class="_text">
                                <p>
                                    {{$depoimento->depoimento}}
                                </p>
                                <h5>{{$depoimento->nome}}</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="_menu">
                    <div class="_buttons">
                        <div class="_previous _button">
                            <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
                        </div>

                        <div class="_indicator">
                            <img class="active" alt="Indicador da lista" />
                            <img alt="Indicador da lista" />
                            <img alt="Indicador da lista" />
                        </div>

                        <div class="_next _button">
                            <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="container-fluid s_cursos">
        <div class="container-fav">
            <div class="title">
                <h4>Veja também</h4>
                <div class="_filter">
                    <nav>
                        <div class="_filterItem active">Online</div>
                        <div class="_filterItem ">EAD</div>
                        <div class="_filterItem">Presenciais</div>
                    </nav>
                </div>
            </div>
            <div class="_cursosList">
                <div class="_curso online">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (1).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Meeting de musculação</h4>
                            <p class="curso_description">
                                Treinamentos para hipertrofia muscular e suplementação combinada
                            </p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
                <div class="_curso online">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (2).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Treinamento Multifuncional</h4>
                            <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
                <div class="_curso online">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (3).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Cross Training</h4>
                            <p class="curso_description">Baseado na metodologia do CrossFit</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
                <div class="_curso online">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (4).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Musculação Feminina</h4>
                            <p class="curso_description">Programa para maximizar os resultados</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>

                <div class="_curso presencial">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (4).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Musculação Feminina</h4>
                            <p class="curso_description">Programa para maximizar os resultados</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
                <div class="_curso presencial">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (3).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Cross Training</h4>
                            <p class="curso_description">Baseado na metodologia do CrossFit</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
                <div class="_curso presencial">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (2).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Treinamento Multifuncional</h4>
                            <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
                <div class="_curso presencial">
                    <div class="_pic">
                        <img src="{{ asset('site/img/curso_Pic (1).jpg') }}" alt="Imagem deste curso" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">Meeting de musculação</h4>
                            <p class="curso_description">
                                Treinamentos para hipertrofia muscular e suplementação combinada
                            </p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_certificate">Certificado de 10hs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    @include('site.includes.cursos')

    @include('site.includes.publicidade')



    @include("site.includes.parceiros")


    @include("site.includes.footer-expanded")

    <script>
        $(document).scroll(() =>{
            if (
                $(document).scrollTop() >=
                $('.s_cursoVideo .container-fav').offset().top -
                    ($(window).height() * 3) / 4
            ) {
                $(".t_box").addClass('active');
            }
            else if($(document).scrollTop() == 0){
                $(".t_box").removeClass('active');
            }
        })
    </script>