@include('site.includes.aluno.header')


<section class="container-fluid _menu">
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li>
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li>
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>

        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
<div class="_menuMax">
    <img src="{{ asset('site/img/arrowright.svg') }}" alt="">
</div>
<section class="container-fluid _menu _mobileMenu">
    <div class="_closeButton">
        <img src="{{ asset('site/img/arrowleft.svg') }}" alt="">
    </div>
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area/">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li>
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li>
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
</div>



<section class="container-fluid _meusPedidos">
    <div class="container-fav">
        <div class="_top">
            <h2>Meus Pedidos</h2>

        </div>
        <div class="_contentList">

            <div class="_pedidosList">
                @if (count($aluno->pedidos) <= 0) <h3>Ainda não há nenhum pedido</h3>
                    @else
                    @foreach ($aluno->pedidos->sortByDesc("created_at") as $pedido)
                    <div class="_pedido
                        @if ($pedido->forma == 0)
                            @if (config('gerencianet.status')[$pedido->boleto->status] === 'Pagamento Realizado')
                            _approved               
                            @endif
                        @elseif($pedido->forma== 1)
                            _approved               
                        @endif">
                        <h3>N.{{ $pedido->codigo }}</h3>
                        <div class="_info">
                            <div class="data">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/calendar.svg') }}" alt="">
                                </div>
                                <p>{{ date('d.m.Y', strtotime($pedido->created_at)) }}</p>
                            </div>
                            <div class="numero">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/plane.svg') }}" alt="">
                                </div>
                                <p>{{ $pedido->carrinho->produtos->count() }} Produtos</p>
                            </div>
                        </div>
                        <button class="btn-primary" onclick="window.location.href = '{{route('site.minha-area-detalhes', ['venda' => $pedido])}}'">
                            Mais detalhes
                            <div class="_svg">
                                <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="">
                            </div>
                        </button>
                        <div class="_status _waiting">
                            <div class="_icon">
                                <img src="{{ asset('site/img/sistema/dollar.svg') }} " alt="">
                            </div>
                            <div class="_text">
                                @if ($pedido->forma == 0)
                                <span>{{config("gerencianet.status")[$pedido->boleto->status]}}</span>
                                {{-- <p>{{ date('d.m.Y', strtotime($pedido->boleto->expira)) }}</p> --}}

                                @elseif($pedido->forma == 1)
                                <span>Pagamento Realizado</span>

                                @elseif($pedido->forma == 2)
                                <span>Verificar<br> parcelas</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    {{-- <div class="_pedido">
                        <h3>N. 5588893390122</h3>
                        <div class="_info">
                            <div class="data">
                                <div class="_svg">
                                    <img src="{{asset('site/img/sistema/calendar.svg')}}" alt="">
                                </div>
                                <p>12.05.2020</p>
                            </div>
                            <div class="numero">
                                <div class="_svg">
                                    <img src="{{asset('site/img/sistema/plane.svg')}}" alt="">
                                </div>
                                <p>03 Produtos</p>
                            </div>
                        </div>
                        <button class="btn-primary">
                            Mais detalhes
                            <div class="_svg">
                                <img src="{{asset('site/img/sistema/buttonArrowRight.svg')}}" alt="">
                            </div>
                        </button>
                        <div class="_status _approved">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/approved.svg')}} " alt="">
                            </div>
                            <div class="_text">
                                <span>Pag. Aprovado</span>
                                <p>13.05.2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="_pedido">
                        <h3>N. 5588893390122</h3>
                        <div class="_info">
                            <div class="data">
                                <div class="_svg">
                                    <img src="{{asset('site/img/sistema/calendar.svg')}}" alt="">
                                </div>
                                <p>12.05.2020</p>
                            </div>
                            <div class="numero">
                                <div class="_svg">
                                    <img src="{{asset('site/img/sistema/plane.svg')}}" alt="">
                                </div>
                                <p>03 Produtos</p>
                            </div>
                        </div>
                        <button class="btn-primary">
                            Mais detalhes
                            <div class="_svg">
                                <img src="{{asset('site/img/sistema/buttonArrowRight.svg')}}" alt="">
                            </div>
                        </button>
                        <div class="_status _approved">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/approved.svg')}} " alt="">
                            </div>
                            <div class="_text">
                                <span>Pag. Aprovado</span>
                                <p>13.05.2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="_pedido">
                        <h3>N. 5588893390122</h3>
                        <div class="_info">
                            <div class="data">
                                <div class="_svg">
                                    <img src="{{asset('site/img/sistema/calendar.svg')}}" alt="">
                                </div>
                                <p>12.05.2020</p>
                            </div>
                            <div class="numero">
                                <div class="_svg">
                                    <img src="{{asset('site/img/sistema/plane.svg')}}" alt="">
                                </div>
                                <p>03 Produtos</p>
                            </div>
                        </div>
                        <button class="btn-primary">
                            Mais detalhes
                            <div class="_svg">
                                <img src="{{asset('site/img/sistema/buttonArrowRight.svg')}}" alt="">
                            </div>
                        </button>
                        <div class="_status _canceled">
                            <div class="_icon">
                                <img src="{{asset('site/img/sistema/canceled.svg')}} " alt="">
                            </div>
                            <div class="_text">
                                <span>Cancelado</span>
                                <p>13.05.2020</p>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
</section>

@include('site.includes.aluno.footer')
</body>

</html>