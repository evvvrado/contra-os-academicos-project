@include("site.includes.head")
<title>ENAF -@if($tipo == 0) Nosso Blog @else Nossos Artigos @endif</title>


<body id="nossoblog">

    @include("site.includes.navbar")

    @php
    $noticiaUm = $noticias->first();
    @endphp

    <section class="container-fluid s_hero">
        <div class="container-fav">
            <div class="_h1 fade">
                @if ($noticiaUm)

                <p>{{$noticiaUm->categoria->nome}}</p>
                <h6>{{$noticiaUm->titulo}}</h6>

                <p>by <span>{{$noticiaUm->autor}}</span> • {{date('d.m.Y', strtotime($noticiaUm->publicacao))}}</p>

                @endif

            </div>
        </div>
    </section>

    <section class="container-fluid s_blog">
        <div class="container-fav">
            <div class="_title">
                <div class="_icon">
                    <img src="{{ asset('/site/img/icon_check.svg') }}" alt="Ícone de Check" />
                </div>
                <h4>@if($tipo == 0) Blog @else Artigos @endif</h4>
            </div>

            <div class="_content">
                <div class="rowling">
                    <div class="_blogList">
                        @foreach($noticias as $noticia)
                        <div class="_blog" @if($tipo==0) onclick="window.location.href = '{{route('site.noticia', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}'" @else
                            onclick="window.location.href = '{{route('site.artigo', ['categoria' => $noticia->categoria->slug, 'noticia' => $noticia->slug])}}'" @endif>
                            <div class="_pic">
                                <img src="{{ asset($noticia->preview) }}" alt="{{$noticia->titulo}}" />
                            </div>
                            <div class="_info">
                                <span class="blogTag">{{strtoupper($noticia->categoria->nome)}}</span>
                                <h6 class="blogTitle">{{$noticia->titulo}}</h6>
                                <p class="blogText">
                                    {{$noticia->resumo}}
                                </p>
                                <p class="blogDate">{{date('d.m.Y', strtotime($noticia->publicacao))}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

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
        </div>
    </section>

    @include('site.includes.parceiros')
    @include('site.includes.footer-expanded')