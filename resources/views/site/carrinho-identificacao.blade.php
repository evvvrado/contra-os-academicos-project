@include('site.includes.carrinho.head')
<title>ENAF - Conecte-se</title>


<body class="_carrinho _tocenter">
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
            {{-- <section class="_meuCarrinho">
                <div class="_top">
                    <div class="_title">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/car.svg') }}" alt="" />
                            <img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
                        </div>
                        <span>Meu Carrinho</span>
                    </div>
                    <div class="_numberofItems">
                        <span>2</span>
                    </div>
                </div>
                <div class="_value">
                    <p>Total</p>
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                    </div>
                    <strong>R$ <span class="_total">160,00</span></strong>
                </div>
                <div class="_innerCar">
                    <div class="_innerItem">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/carrinhoExample.jpg') }}" alt="" />
                        </div>
                        <div class="_content">
                            <h3 class="isOnline">Curso Online</h3>
                            <h2 class="itemName">Meeting de Musculação</h2>
                            <p class="itemExtra">Certificado de 10hs</p>
                            <div class="itemValue">
                                <strong>R$ <span class="_itemValue">100,00</span></strong>
                                <div class="_controls">
                                    <div class="itemControl cancel">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="itemControl more">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/more.svg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_innerItem">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/carrinhoExample.jpg') }}" alt="" />
                        </div>
                        <div class="_content">
                            <h3 class="isOnline">Curso Online</h3>
                            <h2 class="itemName">Meeting de Musculação</h2>
                            <p class="itemExtra">Certificado de 10hs</p>
                            <div class="itemValue">
                                <strong>R$ <span class="_itemValue">100,00</span></strong>
                                <div class="_controls">
                                    <div class="itemControl cancel">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="itemControl more">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/more.svg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_innerItem">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/carrinhoExample.jpg') }}" alt="" />
                        </div>
                        <div class="_content">
                            <h3 class="isOnline">Curso Online</h3>
                            <h2 class="itemName">Meeting de Musculação</h2>
                            <p class="itemExtra">Certificado de 10hs</p>
                            <div class="itemValue">
                                <strong>R$ <span class="_itemValue">100,00</span></strong>
                                <div class="_controls">
                                    <div class="itemControl cancel">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="itemControl more">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/more.svg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="_innerItem">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/carrinhoExample.jpg') }}" alt="" />
                        </div>
                        <div class="_content">
                            <h3 class="isOnline">Curso Online</h3>
                            <h2 class="itemName">Meeting de Musculação</h2>
                            <p class="itemExtra">Certificado de 10hs</p>
                            <div class="itemValue">
                                <strong>R$ <span class="_itemValue">100,00</span></strong>
                                <div class="_controls">
                                    <div class="itemControl cancel">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/cancel.svg') }}" alt="" />
                                        </div>
                                    </div>
                                    <div class="itemControl more">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/more.svg') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="_bottom">
                    <div class="_subTotal _bottomSub">
                        <div class="_title">
                            <span>Sub Total</span>
                        </div>
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                        </div>
                        <span>R$ <span class="_subtotalValue">160,00</span></span>
                    </div>
                    <div class="_subDesconto _bottomSub">
                        <span>Desconto</span>
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                        </div>
                        <span><span class="_subdescontoValue">-</span></span>
                    </div>
                </div>

                <div class="_finalTotal _bottomSub">
                    <span>Total</span>
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                    </div>
                    <strong>R$ <span class="_finaltotalValue">160,00</span> </strong>
                </div>
            </section> --}}
        </div>
    </header>
    <!-- HEADER -->

    <section class="container-fluid s_identificacao">
        <div class="container-fav">
            <div class="_half">
                <div class="_top">
                    <div class="_title _active">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/personIdentificacao.svg') }}" alt="" />
                        </div>
                        <h2>Identificação</h2>
                    </div>
                    <div class="arrow _title">
                        <img src="{{ asset('site/img/sistema/loadingArrow.svg') }}" alt="" />
                    </div>

                    <div class="_title">
                        <div class="_img">
                            <img src="{{ asset('site/img/sistema/card.svg') }}" alt="" />
                        </div>
                        <h2>Pagamento</h2>
                    </div>
                </div>
                <div class="content">
                    <h2>Já sou Cadastrado</h2>
                    <div class="_offtitle">
                        <div class="_left">

                            {{-- MENSAGENS DE ERRO --}}
                            @if(session()->get("erro"))
                            {{-- {{session()->get("erro")}} para escrever a mensagem --}}
                            {{-- EX: <span>{{session()->get("erro")}}</span> --}}

                            <div class="alert alert-danger">
                                {{session()->get("erro")}}
                            </div>

                            <style>
                                .alert {
                                    position: relative;
                                    padding: .75rem 1.25rem;
                                    margin-bottom: 1rem;
                                    border: 1px solid transparent;
                                    border-radius: .25rem;
                                }

                                .alert-danger {
                                    color: #721c24;
                                    background-color: #f8d7da;
                                    border-color: #f5c6cb;
                                    font-family: "Spartan", sans-serif;
                                    font-weight: bold;
                                    font-size: 2rem;
                                    line-height: 22px;
                                }
                            </style>
                            @endif


                            <form action="{{route('site.carrinho-identificar')}}" method="POST">
                                @csrf
                                <label>
                                    <span>Meu e-mail</span>
                                    <input type="email" name="email" />
                                </label>
                                <label>
                                    <span>Digite sua senha</span>
                                    <input type="password" name="senha" />
                                </label>
                                <button>
                                    Acessar <img src="{{ asset('site/img/arrowlong.svg') }}" alt="" />
                                </button>
                            </form>

                            <a href="/minha-conta" class="_forgotPass">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/lockData.svg') }}" alt="" />
                                </div>
                                Esqueci minha senha
                            </a>

                            {{-- <div class="_others">
                                <h2>Login com um clique</h2>
                                <div class="_buttons">
                                    <div class="_button">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/google.svg') }}" alt="" />
                                        </div>
                                        Google
                                    </div>
                                    <div class="_button">
                                        <div class="_img">
                                            <img src="{{ asset('site/img/sistema/facebook.svg') }}" alt="" />
                                        </div>
                                        Facebook
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                        <a href="{{ route('site.minha-conta')}}" class="_right">
                            <div class="_icon">
                                <img src="{{ asset('site/img/sistema/register.svg') }}" alt="" />
                            </div>
                            <span>É a sua primeira vez?
                                <strong>Cadastre-se Agora!</strong>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    @include('site.includes.aluno.footer')


    <script>
        $("form label input,form label textarea").focus(function() {
            $(this).parent().find("span").addClass("active");
        });

        $("form label input,form label textarea").focusout(function() {
            if ($(this).val() == "") {
                $(this).parent().find("span").removeClass("active");
            }
        });

  
    </script>