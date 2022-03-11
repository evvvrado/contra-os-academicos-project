<!DOCTYPE html>
<html lang="pt-br">

<head>
    @include('site.includes.head')
    @yield('styles')

    <title>Área do Cliente - {{Definition::TITLE}}</title>


    <link rel='preload' type='text/css' as='style' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css' crossorigin='anonymous'>


    <link rel='preload' type='text/css' as='style'
        href='https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Bebas+Neue&family=Lato&family=Roboto:wght@500&family=Spartan:wght@400;700&display=swap' crossorigin='anonymous' />
    @toastr_css
</head>


<body id="@yield('id')" class="minha-area">

    @php
    $lead = \App\Models\Lead::find(session()->get('cliente')['id']);
    @endphp


    <section class="mA_menu" alternative>
        <div class="container-fluid">
            <div class="container-fav">
                <div class="logos">
                    <a href="/">
                        <picture>
                            <img src="{{asset('/site/assets/sistema/_logo.png')}}" alt="Imagem da Logo">
                        </picture>
                    </a>
                </div>

                <nav @if(session()->get("primeiro_login") == "Sim")
                    style="opacity:0; pointer-events: none;"
                    @endif>
                    {{-- <a href="{{ route('minha-area.cliente')}}">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/user.svg') }}" alt="">
                        </picture>

                        <span>Minha Área</span>
                    </a> --}}


                    <a href="{{ route('minha-area.cliente-pedidos')}}">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/bag.svg') }}" alt="">
                        </picture>

                        <span>Meus Orçamentos</span>
                    </a>

                    {{-- <a href="{{ route('minha-area.cliente-matriculas')}}">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/page.svg') }}" alt="">
                        </picture>

                        <span>Minhas Matrículas</span>
                    </a> --}}


                    <a href="{{ route('minha-area.cliente-dados')}}">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/clipboard.svg') }}" alt="">
                        </picture>

                        <span>Meus Dados</span>
                    </a>

                </nav>

                <div class="user">
                    <picture>
                        @if (!$lead->avatar)
                        <img src="{{ asset('site/assets/sistema/menu_user.svg') }}" alt="">
                        @else
                        <img src="{{ asset($lead->avatar) }}" alt="">
                        @endif
                    </picture>

                    <div>
                        <span>Olá, <strong>{{ explode(' ', session()->get('cliente')['nome'])[0] }}</strong></span>
                        <a @if(session()->get("primeiro_login") == "Sim")style="display:none;" @endif href="{{route('clienteDeslogar')}}">
                            Sair
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="emptyspace"></div>


    @yield('content')

    @php
    if(session()->get("primeiro_login") != "Sim") {
    @endphp

    <section class="mA_footer">
        <div class="container-fluid">
            <div class="container-fav">
                <div class="text">
                    <h3>FALE CONOSCO</h3>
                    <h2>Entre em contato com a nossa equipe</h2>
                    <p>Estamos prontos para te ajudar</p>
                </div>
                <div class="buttons">
                    <div onclick="window.open('https://api.whatsapp.com/send?phone={{ Definition::WHATSAPP }}')">
                        <img src="{{ asset('site/assets/sistema/chat.svg') }}" alt="" />
                    </div>
                    <div onclick="window.open('tel:{{ Definition::TELEFONE }}')">
                        <img src="{{ asset('site/assets/sistema/call.svg') }}" alt="" />
                    </div>
                    <div onclick="window.open('https://api.whatsapp.com/send?phone={{ Definition::WHATSAPP }}')">
                        <img src="{{ asset('site/assets/sistema/whatsappButton.svg') }}" alt="" />
                    </div>
                    <div onclick="window.open('mailto:{{ Definition::EMAIL }}')">
                        <img src="{{ asset('site/assets/sistema/envelopButton.svg') }}" alt="" />
                    </div>
                </div>

            </div>
            <div class="container-fav">
                <div class="left">
                    <p>{{ Definition::ENDERECO }}</p>

                    <div class="siga">
                        <p>Siga-nos</p>

                        <a href="{{ Definition::INSTAGRAM }}" target="_blank"><img src="{{ asset('site/assets/sistema/instagramLogo.svg') }}" alt="" /></a>
                        <a href="{{ Definition::FACEBOOK }}" target="_blank"><img src="{{ asset('site/assets/sistema/facebookLogo.svg') }}" alt="" /></a>
                    </div>

                    <div class="compraSegura">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/lock.svg') }}" alt="" />
                        </picture>

                        <strong>Compra 100% segura</strong>
                    </div>
                </div>

                <div class="right">
                    <p>Formas de Pagamento</p>
                    <div>
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos1.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos2.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos3.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos4.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos5.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos6.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos7.jpg') }}" alt="" />
                        <img src="{{ asset('site/assets/sistema/pagamentoLogos8.jpg') }}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mA_copyright">
        <div class="container-fluid">
            <div class="container-fav">
                <p>Copyright © {{ Definition::TITLE }} - Todos os direitos reservados. Todo o conteúdo do site, incluindo fotos,
                    imagens,
                    logotipos, marcas, dizeres, som, software, conjunto imagem, layout e trade dress, são de propriedade
                    exclusiva do {{ Definition::NAME }}. É vedada a reprodução total ou parcial de qualquer elemento de identidade sem a
                    expressa autorização. A violação de qualquer direito mencionado implicará na responsabilização cível e
                    criminal nos termos da Lei.
                </p>

                <p>
                    Desenvolvido por
                    <a href="https://7seventrends.com" class="_img">
                        <img src="{{ asset('site/assets/sistema/_logo7seven.png') }}" style="filter: brightness(0);" alt="">
                    </a>
                </p>
            </div>
        </div>
    </section>
    @php
    }
    @endphp



    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    @include('site.includes.scripts')

    <script>
        $('body.minha-area section.mA_menu .container-fav').click(() =>{
            $('body.minha-area section.mA_menu .container-fav nav').toggleAttr('active');
        })
    </script>

    @toastr_js
    @toastr_render
    @yield('scripts')

</body>

</html>