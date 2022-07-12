@extends('site.template.main', ['titulo' => SIGLA . ' Revistas'])

@section('body_attr', 'id=revistas')

@section('content')

    <section class="banner">
        <div class="niv">
            <div class="roadmap">
                <a href="/">Início</a>
                >>
                <a href="{{ route('site.revistas') }}">Revista</a>
            </div>

            <h2 class="--bar">Revista</h2>
        </div>
    </section>

    <section class="complemento --revistas">
        <div class="niv">

            <div class="indicador">
                @php
                    $ativo = "active";

                    foreach ($destaques as $destaque) {
                @endphp
                        <span {{ $ativo }}></span>
                @php
                        $ativo = "";
                    }
                @endphp
            </div>

            <div class="banner-area">
                <div class="scroll">

                    @foreach ($destaques as $destaque)
                        <a href="{{ route('site.revista_detalhe', ['revista' => $destaque]) }}">
                            <div class="banner" style="background-image: url('{{ asset($destaque->banner_destaque) }}')">
                                {{-- <h1>{{ $destaque->titulo }}</h1>
    
                                <p>Por <strong>{{ $destaque->autor->nome }}</strong></p> --}}
                            </div>
                        </a>
                    @endforeach


                </div>
            </div>
        </div>
    </section>


    <section class="publicacoes">

        <main>
            <div class="niv">
                <div class="title-area">
                    <h3 class="hr-bar"><i></i>Últimas Publicações</h3>

                    <p>Por Contra Acadêmicos</p>

                </div>

                <div class="content-area">

                    {{-- @foreach ($revistas as $revista)
                        <a href="{{ route('site.revista_detalhe', ['revista' => $revista]) }}" class="box">
                            <picture>
                                <img src="{{ asset($revista->banner) }}" alt="">
                            </picture>
                            <div class="box-content">
                                <span>{{ $revista->categoria->nome }}</span>
                                <strong>{{ $revista->titulo }}</strong>

                                <hr>

                                <p>{{ Str::limit($revista->resumo, 104) }}</p>
                            </div>
                        </a>
                    @endforeach --}}
                    @livewire('carregar-mais-revista')

                </div>
            </div>

        </main>


        <aside>
            <div class="mais-listas">
                <h3 class="hr-bar"><i></i>Mais lidas</h3>
                <picture class="fire-icon">
                    <img src="{{ asset('site/assets/img/icon_fire_blog.png') }}" alt="Ícone fogo">
                </picture>


                <ul>
                    @foreach ($mais_lidas as $mais_lida)
                        <li>
                            <a href="{{ route('site.revista_detalhe', ['revista' => $mais_lida]) }}" class="box">
                                <picture>
                                    <img src="{{ asset($mais_lida->banner) }}" alt="">
                                </picture>
                                <div class="box-content">
                                    <span>{{ $mais_lida->categoria->nome }}</span>
                                    <strong>{{ $mais_lida->titulo }}</strong>

                                    <hr>

                                    <p>{{ Str::limit($mais_lida->resumo, 104) }}</p>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </aside>
    </section>




    <section class="blog-news">
        <div class="niv">

            <div class="blog-area --reduced">
                <div class="top-title">
                    <h2>
                        <picture>
                            <img src="{{ asset('site/assets/img/icon_fire_blog.png') }}" alt="Ícone de fogo">
                        </picture>
                        Em breve
                    </h2>
                </div>

                <div class="content">
                    <div class="scroll">
                        @foreach ($blogs as $key => $blog)
                            @if ($key < 3)
                                <a href="{{ route('site.blog_detalhe', ['blog' => $blog]) }}" class="card"
                                    style="background-image: url('{{ asset($blog->banner) }}')">

                                    <strong>{{ $blog->titulo }}</strong>
                                    <p>Por <strong>{{ $blog->autor->nome }}</strong></p>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </section>

@endsection

@section('scripts')
    <script>
        var atualBanner = 0;

        setInterval(() => {
            if (atualBanner < 3) {
                $('section.complemento.--revistas div.banner-area').scrollLeft($(
                    'section.complemento.--revistas div.banner-area').scrollLeft() + $(
                    'section.complemento.--revistas div.banner-area div.scroll div.banner').width())
                atualBanner++;
            } else {
                $('section.complemento.--revistas div.banner-area').scrollLeft(0);
                atualBanner = 0;
            }


            $('div.indicador span').removeAttr('active');
            $(`div.indicador span:nth-child(${atualBanner + 1})`).attr('active', '');

        }, 4000);


        $('div.indicador span').click(function() {

            atualBanner = $(this).index() + 1;


            $('section.complemento.--revistas div.banner-area').scrollLeft(
                $('section.complemento.--revistas div.banner-area div.scroll div.banner')[$(this).index()]
                .offsetLeft
            )

            $('div.indicador span').removeAttr('active');
            $(`div.indicador span:nth-child(${$(this).index() + 1})`).attr('active', '');
        })
    </script>

@endsection
