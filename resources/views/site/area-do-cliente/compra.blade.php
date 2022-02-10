@extends('site.template.area-do-aluno')

@section('id', 'pedidos-aluno-detalhes')

@section('content')
<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Detalhes do Pedido</h2>
        </div>
    </div>
</section>


<section class="mA_pedido">
    <div class="container-fluid">
        <div class="container-fav">
            <div class="title">
                <h2>Pedido - 000000006</h2>

                <h3>Data da Compra - 12/06/2022</h3>
            </div>

            <div class="info">
                <div class="row">
                    <span>
                        <picture>
                            <img src="{{ asset('site/assets/sistema/userData.svg') }}" alt="">
                        </picture>

                        <strong>Identificação</strong>

                        <picture>
                            <img src="{{ asset('site/assets/sistema/arrowright.svg') }}" alt="">
                        </picture>
                    </span>


                    <span>
                        Everaldo Júnior
                    </span>

                    <span>
                        everaldo@hyp8.com
                    </span>
                </div>
                <div class="row">
                    <span>
                        <picture>
                            <img src="{{ asset('site/assets/sistema/card.svg') }}" alt="">
                        </picture>

                        <strong>Pagamento</strong>

                        <picture>
                            <img src="{{ asset('site/assets/sistema/arrowright.svg') }}" alt="">
                        </picture>
                    </span>


                    <span>
                        Boleto Bancário<br />4532452345234523452345
                    </span>

                    <span>
                        R$ 1.058,00 em 3x
                        <br><strong style="display: contents; color:black;">* com desconto</strong>
                    </span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mA_produtos">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Produtos:</h2>

            <main>
                <div class="boxes">
                    <div class="box">
                        <strong>Curso de Sommelier</strong>

                        <div class="info">
                            <div>
                                <picture>
                                    <img src="{{ asset('site/assets/sistema/dollar.svg')}}" alt="">
                                </picture>
                                <p>R$ 1.500,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</section>


<section class="mA_parcelas">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Parcelas:</h2>

            <main>
                <div class="boxes">
                    <div class="box">
                        <strong>Parcela Única</strong>

                        <div class="info">
                            <div>
                                <picture>
                                    <img src="{{asset('site/assets/sistema/calendar.svg')}}" alt="">
                                </picture>
                                <p>12.05.2020</p>
                            </div>
                            <div>
                                <picture>
                                    <img src="{{asset('site/assets/sistema/plane.svg')}}" alt="">
                                </picture>
                                <p>03 Produtos</p>
                            </div>

                            <button>Ver Boleto</button>
                        </div>
                    </div>
                </div>
            </main>

        </div>
    </div>
</section>


@endsection