@include('site.includes.carrinho.head')
<title>Forma de Pagamento</title>

<body class="_carrinho">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet" />




    <!-- HEADER -->
    <header class="container-fluid">
        <div class="container-fav">
            <div class="_first">
                <div class="_logos">
                    <a href="{{ route('site.index') }}"><img src="{{ asset('site/img/_logo47_Color.png') }}" alt="" /></a>
                    <div class="_carButton">
                        <img src="{{ asset('site/img/sistema/car.svg') }}" alt="" />
                    </div>
                </div>

                <div class="_duvidas">
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/carrinhoPhone.svg') }}" alt="" />
                    </div>
                    <p>Dúvida na compra ligue - 35 992611988</p>
                </div>
            </div>
            @if(session()->get("carrinho"))
            @include('site.includes.carrinho')
            @endif
        </div>
    </header>
    <!-- HEADER -->

    <div class="pop-up-confirmacao">

        <div class="pop-up-box">

            <div class="pop-up-header">
                <div class="logos">
                    <img src="{{ asset('site/img/_logo92.png') }}" alt="" />
                    <img src="{{ asset('site/img/_logoASI_92.png') }}" alt="" />
                </div>

                <div class="icon">
                    <img src="{{ asset('site/img/sistema/happyemoji.svg') }}" alt="" />
                </div>

                <p>Tudo pronto para finalizar?</p>

            </div>
            <div class="pop-up-middle">

                <div class="icon">
                    <img src="{{ asset('site/img/sistema/mailData.svg') }}" />
                </div>

                <p>Toda as informações de sua compra<br> serão enviadas para seu email.</p>

            </div>

            <div class="pop-up-buttons">
                <button class="cancel" onclick="activepopup()">Cancelar</button>
                <button class="confirm" onclick="window.location = '{{route('site.carrinho.finalizar.boleto')}}'">Finalizar Compra</button>
            </div>

        </div>

        <script>
            function activepopup(){
               $('.pop-up-confirmacao').toggleClass('active')
            }        
        </script>

        <div class="pop-up-blackground"></div>

    </div>



    <section class="container-fluid s_identificacao">
        <div class="container-fav">
            <div class="_half">
                <div class="_top">
                    <div class="_title _active">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/doorData.svg') }}" alt="">
                        </div>
                        <h2><a href="/">Home</a></h2>
                    </div>

                    <div class="arrow _title _active">
                        <img src="{{ asset('site/img/sistema/loadingArrow.svg') }}" alt="" />
                    </div>

                    <div class="_title _active">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/personIdentificacao.svg') }}" alt="" />
                        </div>
                        <h2>Identificação</h2>
                    </div>

                    <div class="arrow _title _active">
                        <img src="{{ asset('site/img/sistema/loadingArrow.svg') }}" alt="" />
                    </div>

                    <div class="_title _active">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/card.svg') }}" alt="" />
                        </div>
                        <h2>Pagamento</h2>
                    </div>
                </div>
                <div class="_pagamento">
                    <div class="_topInfo">
                        <div class="row">
                            <div class="_name">
                                <div class="_img">
                                    <img src="{{ asset('site/img/sistema/user.svg') }}" alt="" />
                                </div>
                                <p>{{ $aluno->nome }}</p>
                            </div>
                            <p>{{ $aluno->email }}</p>
                        </div>
                        {{-- <div class="row">
                            <div>
                                <p>
                                    Rua Rio Grande do Sul - Centro Poços de Caldas - MG Numero
                                    42 Apartamento - 301
                                </p>
                            </div>
                            <div>
                                <span>JAD Log - R$ 19,90</span>
                            </div>
                        </div> --}}
                    </div>
                    {{-- <div class="_cupom">
                        <div class="_text">
                            <span>Cupom de desconto</span>
                            <p>Digite o código de desconto ao lado:</p>
                        </div>
                        <div class="_input">
                            <div class="_form">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/cupom.svg') }}" alt="" />
                                </div>
                                <input type="text" placeholder="#AbsÉ10" />
                                <button>
                                    <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                                </button>
                            </div>
                            <p>- R$ 20 aplicado na sua compra</p>
                        </div>
                    </div> --}}
                    <div class="_choose">
                        <div class="_title">
                            <span>Escolha a forma de pagamento</span>
                            <p>Selecione qual opçao deseja realizar o pagamento</p>
                        </div>
                        <div class="_buttons">
                            @if($boleto)
                            <div class="bolet button" onclick="window.location.href = '{{route('site.carrinho.pagamento.boleto')}}'">
                                <div class="_icon">
                                    <img src="{{ asset('site/img/sistema/boleto.svg') }}" alt="" />
                                </div>
                                <div class="_text">
                                    <span>Boleto Bancário</span>
                                    <p>10% de desconto</p>
                                </div>
                            </div>
                            @endif
                            @if($cartao)
                            <div class="creditCard button" onclick="window.location.href = '{{route('site.carrinho.pagamento.cartao')}}'">
                                <div class="_icon">
                                    <img src="{{ asset('site/img/sistema/creditcard.svg') }}" alt="" />
                                </div>
                                <div class="_text">
                                    <span>Cartão de Crédito</span>
                                    <p>em até @if($configuracao->max_parcelas_cartao) {{$configuracao->max_parcelas_cartao}}x @else 10x @endif sem juros</p>
                                </div>
                            </div>
                            @endif

                            @if(!$boleto && !$cartao)
                            <p style="color: red!important;">Entre esses cursos há formas diferentes de pagamento. Por favor, remova-os clicando no "X" do carrinho.


                                {{--
                            <ul>
                                @foreach ($carrinho->cursos as $curso)
                                @if ($curso->gerencianet)
                                <li>{{$curso->nome}} <small>BOLETO</small></li>
                                @endif

                                @if ($curso->cielo)
                                <li>{{$curso->nome}} <small>CARTÃO</small></li>
                                @endif

                                @endforeach
                            </ul> --}}

                            </p>
                            <img src="{{ asset('site/img/button_example.png') }}" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('site.includes.aluno.footer')

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script>
        $(" form label input,form label textarea").focus(function() { $(this).parent().find("span").addClass("active"); }); 
    </script>