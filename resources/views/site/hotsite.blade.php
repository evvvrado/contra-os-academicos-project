@include('site.includes.head')

@php
$expositor = App\Models\Expositor::where("id", $hotsite->expositor_id)->first();
@endphp
<title>{{$expositor->nome}} confia no ENAF! </title>


<body id="hotsite" style="background-color: {!! $hotsite->cor_fundo !!}">

    @include('site.includes.navbar')

    <section class="h_hero container-fluid" style="background-color: {!! $hotsite->cor_fundo !!}">
        <div class="container-fav">
            <div class="_image">
                <div class="_col">
                    <h1>{!! $hotsite->slogan !!}</h1>
                </div>
                <div class="_banner">
                    <img src="{{ asset($hotsite->foto1) }}" style="max-width: 100%; object-fit: cover;" alt="Imagem Personalizada" />
                    <img src="{{ asset('site/img/hotsite/chatbox.png') }}" alt="Chatbox" />
                </div>
                <div class="_col">
                    <div>
                        <h2>{!! $hotsite->sessao1_titulo !!}</h2>
                    </div>
                    <p>
                        {!! $hotsite->sessao1_texto !!}
                    </p>
                </div>
            </div>

            <div class="_content fade">
                <div class="logo">
                    <a href="{{ $hotsite->site }}" style="width: 80%" target="_blank">
                        <img src="{{ asset($hotsite->logo) }}" style="width: 100%" alt="Imagem do Expositor" /></a>
                </div>

                <div class="contat">
                    <a href="{{ $hotsite->site }}">
                        <svg width="32" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 1H19C20.1 1 21 1.9 21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3C1 1.9 1.9 1 3 1Z" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 3L11 10L1 3" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>{!! $hotsite->site !!}</span>
                    </a>
                    <a href="mailto:{{$hotsite->email}}">
                        <svg width="32" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 1H19C20.1 1 21 1.9 21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3C1 1.9 1.9 1 3 1Z" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 3L11 10L1 3" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span>{{$hotsite->email}}</span>
                    </a>
                    <a href="tel:{{$hotsite->telefone}}"">
                            <svg
                                width=" 32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25 12.25L26.25 11" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M26.25 21L25 19.75" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M27.5 16H28.75" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M5 19.75L3.75 21" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M3.75 11L5 12.25" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M2.5 16H1.25" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.6 22.875H16.4" stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M11.25 6H18.75C20.1313 6 21.25 7.11875 21.25 8.5V23.5C21.25 24.8813 20.1313 26 18.75 26H11.25C9.86875 26 8.75 24.8813 8.75 23.5V8.5C8.75 7.11875 9.86875 6 11.25 6Z"
                            stroke=" {{$hotsite->cor_destaque}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span>{{$hotsite->telefone}}</span>
                    </a>
                </div>
            </div>

            <div class="hero_endtext">
                <p style="color: {!! $hotsite->cor_destaque !!} !important">
                    Entre em contato conosco através do formulário abaixo que teremos o prazer
                    de atendê-lo.
                </p>
            </div>
        </div>
    </section>

    <section class="h_form container-fluid">
        <div class="container-fav">
            <form action="javascript: void(0)">
                <label>
                    <span>Nome completo</span>
                    <input type="text" name="nome" placeholder="Seu nome" />
                </label>
                <label>
                    <span>Seu e-mail</span>
                    <input type="email" name="email" placeholder="email@exemplo.com.br" />
                </label>
                <label>
                    <span>Telefone</span>
                    <input type="tel" name="telefone" placeholder="(35) 9 88000000" />
                </label>

                <button onclick="enviar2()">ENVIAR</button>
            </form>
        </div>
    </section>

    <section class="container-fluid h_sobre">
        <div class="container-fav">
            <div class="_left">
                <h6 style="color: {{$hotsite->cor_destaque}}">Sobre</h6>
                <h3>{!! $hotsite->coluna1_titulo !!}</h3>
                <p>
                    {!! $hotsite->coluna1_texto !!}
                </p>

                <picture>
                    <img src="{{ asset($hotsite->foto2) }}" alt="Imagem Personalizada" />
                </picture>
            </div>

            <div class="_right">
                <h3>{!! $hotsite->coluna2_titulo !!}</h3>

                <p>
                    {!! $hotsite->coluna2_texto !!}
                </p>
            </div>
        </div>
    </section>

    <section class="container-fluid h_empresas">
        <div class="container-fav">
            <h2>Veja quem confia em nós</h2>
            <div class="_list">
                @foreach($hotsite->parceiros->take(5) as $parceiro)
                <div class="listItem">
                    <picture>
                        <img src="{{ asset($parceiro->logo) }}" alt="{{$parceiro->nome}}" title="{{$parceiro->nome}}" onclick="window.open('{{$parceiro->url}}')" />
                    </picture>
                    <picture>
                        <img src="{{ asset($parceiro->logo) }}" alt="{{$parceiro->nome}}" title="{{$parceiro->nome}}" onclick="window.open('{{$parceiro->url}}')" />
                    </picture>
                    <picture>
                        <img src="{{ asset($parceiro->logo) }}" alt="{{$parceiro->nome}}" title="{{$parceiro->nome}}" onclick="window.open('{{$parceiro->url}}')" />
                    </picture>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid h_galeria">
        <div class="container-fav">
            <div class="_title">
                <h6 style="color: {{ $hotsite->cor_destaque}}">{{$hotsite->galeria1_titulo}}</h6>
                <h3>{{$hotsite->galeria1_descricao}}</h3>
            </div>

            <div class="_images fade">
                @foreach($hotsite->fotos->where("galeria", 1) as $foto)
                <picture>
                    <img src="{{ asset($foto->foto) }}" alt="Imagem de Galeria" />
                </picture>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid h_galeria">
        <div class="container-fav">
            <div class="_title">
                <h6 style="color: {{ $hotsite->cor_destaque}}">{{$hotsite->galeria2_titulo}}</h6>
                <h3>{{$hotsite->galeria2_descricao}}</h3>
            </div>

            <div class="_images fade">
                @foreach($hotsite->fotos->where("galeria", 2) as $foto)
                <picture>
                    <img src="{{ asset($foto->foto) }}" alt="Imagem de Galeria" />
                </picture>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid h_duvidas">
        <div class="container-fav">
            <div class="_top">
                <h4>Dúvidas Frequentes</h4>
            </div>

            <div class="_duvidas">
                @foreach($hotsite->duvidas as $duvida)
                <div class="_box">
                    <div class="_main">
                        <span style="color: {{$hotsite->cor_fundo}}">{{$duvida->duvida}}</span>
                        <div style="color: {{$hotsite->cor_fundo}}" class="_icon">
                            <svg width="19" height="10" viewBox="0 0 19 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.65234 1.00049L9.65234 9.00049L17.6523 1.00049" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                    <p>
                        {{$duvida->resposta}}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid h_contato">
        <div class="container-fav">
            <div class="_info">
                <iframe src="https://www.google.com/maps?q=[{{$hotsite->endereco}}]&output=embed" width="100%" style="max-width: 600px" height="389" style="border: 0" allowfullscreen=""
                    loading="lazy"></iframe>

                <h4>Fale com nossos consultores</h4>
                <p>
                    Teremos o prazer em falar com você o mais rapido possivel. Aguarde que logo
                    nós falamos.
                </p>

                <div class="informacoes">
                    <div class="_col">
                        <a href="tel:{{$hotsite->telefone}}">
                            <svg width="32" height="30" viewBox="0 0 32 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 12.25L26.25 11" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M26.25 21L25 19.75" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M27.5 16H28.75" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5 19.75L3.75 21" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.75 11L5 12.25" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.5 16H1.25" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M13.6 22.875H16.4" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.25 6H18.75C20.1313 6 21.25 7.11875 21.25 8.5V23.5C21.25 24.8813 20.1313 26 18.75 26H11.25C9.86875 26 8.75 24.8813 8.75 23.5V8.5C8.75 7.11875 9.86875 6 11.25 6Z"
                                    stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span>{{$hotsite->telefone}}</span>
                        </a>
                        <a href="">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11.395 17.7336C6.9525 18.3186 3.75 19.9499 3.75 21.8749C3.75 24.2911 8.78625 26.2499 15 26.2499C21.2138 26.2499 26.25 24.2911 26.25 21.8749C26.25 19.9499 23.0475 18.3186 18.605 17.7336"
                                    stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M22.5 9.79125C22.5 5.765 19.1425 2.5 15 2.5C10.8575 2.5 7.5 5.765 7.5 9.79125C7.5 15.26 15 21.25 15 21.25C15 21.25 22.5 15.26 22.5 9.79125Z"
                                    stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M16.7678 8.23223C17.7441 9.20854 17.7441 10.7915 16.7678 11.7678C15.7915 12.7441 14.2085 12.7441 13.2322 11.7678C12.2559 10.7915 12.2559 9.20855 13.2322 8.23223C14.2085 7.25592 15.7915 7.25592 16.7678 8.23223"
                                    stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span>{{$hotsite->endereco}}</span>
                        </a>
                    </div>
                    <div class="_col">
                        <a href="mailto:{{$hotsite->email}}r">
                            <svg width="32" height="18" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3 1H19C20.1 1 21 1.9 21 3V15C21 16.1 20.1 17 19 17H3C1.9 17 1 16.1 1 15V3C1 1.9 1.9 1 3 1Z" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 3L11 10L1 3" stroke="{{ $hotsite->cor_fundo}}" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            <span>{{$hotsite->email}}</span>
                        </a>

                        <a href="mailto:rede@atendimentorede.com.br">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22 17.002C21.9996 18.3696 21.5321 19.696 20.675 20.7616C19.8179 21.8273 18.6226 22.5683 17.287 22.862L16.649 20.948C17.2332 20.8518 17.7888 20.6271 18.2758 20.2903C18.7627 19.9534 19.1689 19.5128 19.465 19H17C16.4696 19 15.9609 18.7893 15.5858 18.4142C15.2107 18.0391 15 17.5304 15 17V13C15 12.4696 15.2107 11.9609 15.5858 11.5858C15.9609 11.2107 16.4696 11 17 11H19.938C19.694 9.0669 18.7529 7.28927 17.2914 6.00068C15.8299 4.71208 13.9484 4.00108 12 4.00108C10.0516 4.00108 8.17007 4.71208 6.70857 6.00068C5.24708 7.28927 4.30603 9.0669 4.062 11H7C7.53043 11 8.03914 11.2107 8.41421 11.5858C8.78929 11.9609 9 12.4696 9 13V17C9 17.5304 8.78929 18.0391 8.41421 18.4142C8.03914 18.7893 7.53043 19 7 19H4C3.46957 19 2.96086 18.7893 2.58579 18.4142C2.21071 18.0391 2 17.5304 2 17V12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12V17.002ZM20 17V13H17V17H20ZM4 13V17H7V13H4Z"
                                    fill="{{ $hotsite->cor_fundo}}" />
                            </svg>

                            <span>{{$hotsite->email}}</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="_form">
                <p style="color: {{$hotsite->cor_fundo}}">
                    Entre em contato conosco através do formulário abaixo que teremos o prazer
                    de atendê-lo
                </p>

                <form action="javascript: void(0)">
                    <label>
                        <span>Nome completo</span>
                        <input type="text" name="nome2" placeholder="Seu nome" />
                    </label>
                    <label>
                        <span>Seu e-mail</span>
                        <input type="email" name="email2" placeholder="email@exemplo.com.br" />
                    </label>
                    <label>
                        <span>Telefone</span>
                        <input type="tel" name="telefone2" placeholder="(35) 9 88000000" />
                    </label>

                    <button onclick="enviar()">ENVIAR</button>
                </form>
            </div>
        </div>
    </section>


    @include('site.includes.footer')

    <script>
        function enviar(){
            var nome = $('input[name = "nome2"]').val();
            var email = $('input[name = "email2"]').val();
            var cellphone = $('input[name = "telefone2"]').val();

            window.open(`https://wa.me/{{ \App\Classes\Util::limparString($hotsite->telefone)}}/?text=Ol%C3%A1%2C+sou+${nome}+Me+contate%21+E-mail+${email}+%0D%0A++Celular%3A+${cellphone}`)
        }

        
        function enviar2(){
            var nome = $('input[name = "nome"]').val();
            var email = $('input[name = "email"]').val();
            var cellphone = $('input[name = "telefone"]').val();

            window.open(`https://wa.me/{{ \App\Classes\Util::limparString($hotsite->telefone)}}/?text=Ol%C3%A1%2C+sou+${nome}+Me+contate%21+E-mail+${email}+%0D%0A++Celular%3A+${cellphone}`)
        }
    </script>



    <script>
        var slideItem;
    var slideTimes = 0;
    var next = true;

    function nextSlide(number) {
        var goNext = next ? 40 : -40;

        if (slideTimes == 2) {
            next = false;
        }
        if (slideTimes == 0) {
            next = true;
        }

        $(
            "body#hotsite section.h_empresas .container-fav ._list .listItem:first-child"
        ).scrollTop(
            $(
                "body#hotsite section.h_empresas .container-fav ._list .listItem:first-child"
            ).scrollTop() + goNext
        );

        $(
            "body#hotsite section.h_empresas .container-fav ._list .listItem:nth-child(3)"
        ).scrollTop(
            $(
                "body#hotsite section.h_empresas .container-fav ._list .listItem:nth-child(3)"
            ).scrollTop() + goNext
        );

        $(
            "body#hotsite section.h_empresas .container-fav ._list .listItem:last-child"
        ).scrollTop(
            $(
                "body#hotsite section.h_empresas .container-fav ._list .listItem:last-child"
            ).scrollTop() + goNext
        );

        var subAdd = next ? slideTimes++ : slideTimes--;
    }

    $(
        "section.h_duvidas .container-fav ._duvidas ._box ._main, section.s_content .container-fav ._modulos ._box ._main"
    ).click(function () {
        $(this).closest("div._box").toggleClass("active");
    });
    setInterval(nextSlide, 3000);
    </script>

    <style>
        body#hotsite section.h_duvidas .container-fav ._duvidas ._box.active {
            border-color: {
                    {
                    $hotsite->cor_destaque
                }
            }

            ;
        }
    </style>