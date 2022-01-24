@include('site.includes.carrinho.head')
<title>ENAF - Compra Realizada</title>

<body class="_carrinho  _tocenter">
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
        </div>
    </header>
    <!-- HEADER -->


    <section class="s_compraRealizada">
        <div class="container-fav">
            <div class="_half">
                <div class="_top">

                    <picture><img src="{{ asset('site/img/sistema/approved2.svg')}}" alt=""></picture>
                    @if ($venda->forma == 0 || $venda->forma == 2)
                    <h2 style="color: green;">Sua compra foi realizada com sucesso! Aguardando o pagamento.</h2>
                    @else
                    <h2 style="color: green;">Sua compra foi realizada com sucesso!</h2>
                    @endif
                </div>
                <div class="_title">
                    <h2>Pedido - {{ $venda->codigo }}</h2>
                    <div class="_sendtoEmail">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/mailData.svg') }}" alt="" />
                        </div>
                        <div class="_text">
                            <p>
                                Toda as informações de sua compra<br />
                                foi enviada para seu email.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="_info">
                    <div class="_id _infoItem">
                        <div class="_name">
                            <div class="text">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/userData.svg') }}" alt="" />
                                </div>
                                <span>Identificação</span>
                            </div>
                            <div class="_arrow">
                                <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                            </div>
                        </div>
                        <div class="_userINFO">
                            <p class="_userNAME">{{ $venda->aluno->nome }}</p>
                        </div>
                        <div class="_userINFO">
                            <p class="_userEMAIL">{{ $venda->aluno->email }}</p>
                        </div>
                    </div>
                    <div class="_pag _infoItem">
                        <div class="_name">
                            <div class="text">
                                <div class="svg">
                                    <img src="{{ asset('site/img/sistema/card.svg') }}" alt="" />
                                </div>
                                <span>Pagamento</span>
                            </div>
                            <div class="_arrow">
                                <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="" />
                            </div>
                        </div>
                        <div class="_pagInfo">
                            <div class="_cCard">
                                @if ($venda->forma == 0)
                                <p>Boleto Bancário<br />{{$venda->boleto->codigo_barra}}</p>
                                @elseif($venda->forma == 1)
                                <p>Cartão de Crédito<br /> {{$venda->cartao->numero}}</p>
                                @else
                                <p>Carnê<br />Consultar boletos no painel.</p>
                                @endif
                            </div>
                            <div class="_payment">R$ {{number_format($venda->total, 2 , ",", ".")}} em {{$venda->parcelas}}x</div>
                        </div>
                    </div>
                </div>

                <div class="_buttons">
                    <button class="btn-primary" onclick="window.location.href = '/minha-area'">
                        Acessar minha área
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="" />
                        </div>
                    </button>
                    <button class="btn-primary _secundary" onclick="window.location.href = '/'">
                        Realizar outra compra
                    </button>
                </div>
            </div>
        </div>
    </section>



    <footer class="container-fluid">
        <section class="container-fav s_faleConosco">
            <div class="_text">
                <h3>FALE CONOSCO</h3>
                <h2>Entre em contato com a nossa equipe</h2>
                <p>Estamos prontos para te ajudar</p>
            </div>
            <div class="_buttons">
                <div>
                    <img src="{{ asset('site/img/sistema/chat.svg') }}" alt="" />
                </div>
                <div>
                    <img src="{{ asset('site/img/sistema/call.svg') }}" alt="" />
                </div>
                <div>
                    <img src="{{ asset('site/img/sistema/whatsappButton.svg') }}" alt="" />
                </div>
                <div>
                    <img src="{{ asset('site/img/sistema/envelopButton.svg') }}" alt="" />
                </div>
            </div>
        </section>
        <section class="container-fav s_info">
            <div class="_left">
                <p>Rua Gaspar Lopes, 34 Centro, 37130-153 Alfenas/MG</p>

                <div class="_siga">
                    <p>Siga-nos</p>
                    <div class="_social">
                        <a href="/"><img src="{{ asset('site/img/sistema/instagramLogo.svg') }}" alt="" /></a>
                        <a href="/"><img src="{{ asset('site/img/sistema/facebookLogo.svg') }}" alt="" /></a>
                    </div>
                </div>

                <div class="_compraSegura">
                    <div class="_svg">
                        <img src="{{ asset('site/img/sistema/lock.svg') }}" alt="" />
                    </div>
                    <p>Compra 100% segura</p>
                </div>
            </div>
            <div class="_right">
                <p>Formas de Pagamento</p>
                <div class="_formasPagamento">
                    <img src="{{ asset('site/img/sistema/pagamentoLogos1.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos2.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos3.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos4.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos5.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos6.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos7.jpg') }}" alt="" />
                    <img src="{{ asset('site/img/sistema/pagamentoLogos8.jpg') }}" alt="" />
                </div>
            </div>
        </section>
    </footer>

    @include('site.includes.aluno.footer')

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
    <script>
        $(" form label input,form label textarea").focus(function() { $(this).parent().find("span").addClass("active"); }); $("form label input,form label textarea").focusout(function() { if
                              ($(this).val()=="" ) { $(this).parent().find("span").removeClass("active"); } }); $("._carButton").click(()=> {
                          $("._meuCarrinho").animate({
                          top: "0",
                          },
                          400
                          );
                          });
                          $(" section._meuCarrinho ._top ._title ._icon img:last-child").click(() => {
                          $("._meuCarrinho").animate({
                          top: "-200vh",
                          },
                          400
                          );
                          });
    </script>