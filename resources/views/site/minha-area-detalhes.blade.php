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


<section class="container-fluid _detalhesdoPedido">
    <div class="container-fav">
        <div class="_top">
            <h2>Pedido - {{$venda->codigo}}</h2>

            <h3>Data da Compra - {{date("d.m.Y", strtotime($venda->created_at))}}</h3>
        </div>


        <div class="_info">
            <div class="_id _infoItem">
                <div class="_name">
                    <div class="text">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/userData.svg') }}" alt="">
                        </div>
                        <span>Identificação</span>
                    </div>
                    <div class="_arrow">
                        <img src="{{ asset('site/img/sistema/arrowright.svg') }}" alt="">
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
                    <div class="_cCard" style="padding-right: 10px;">
                        @if ($venda->forma == 0)
                        <p>Boleto Bancário<br />{{$venda->boleto->codigo_barra}}</p>
                        @elseif($venda->forma == 1)
                        <p>Cartão de Crédito<br /> {{$venda->cartao->numero}}</p>
                        @else
                        <p>Carnê<br /></p>
                        @endif
                    </div>
                    <div class="_payment">R$ {{number_format($venda->total, 2 , ",", ".")}} em {{$venda->parcelas}}x</div>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="container-fluid _meusPedidos _detalhes _produtosDetalhes">
    <div class="container-fav">
        <div class="_top">
            <h2>Produtos:</h2>

        </div>

        <div class="_pedidosList">
            @foreach($venda->carrinho->produtos as $produto)
            <div class="_pedido" onclick="window.open('{{route('site.curso', ['slug' => $produto->curso->slug])}}')">
                <h3>{{$produto->curso->nome}}</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/dollar.svg')}}" alt="">
                        </div>
                        <p>R${{number_format($produto->total, 2, ",", ".")}}</p>
                    </div>
                    {{-- <div class="barcode">
                        <p>Código de Barras</p>
                        <p>{{$venda->boleto->codigo_barra}}</p>
                    </div> --}}
                </div>
                {{-- <button class="btn-primary" onclick="window.open('{{$venda->boleto->link}}', '_blank')">
                    Ver Boleto
                </button> --}}
            </div>
            @endforeach
        </div>
    </div>

</section>

@if($venda->forma != 1)
<section class="container-fluid _meusPedidos _detalhes">
    <div class="container-fav">
        <div class="_top">
            <h2>Parcelas:</h2>

        </div>

        <div class="_pedidosList">
            @if($venda->forma == 0)
            <div class="_pedido">
                <h3>PARCELA ÚNICA</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/calendar.svg')}}" alt="">
                        </div>
                        <p>{{date('d/m/Y', strtotime($venda->boleto->expira))}}</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/plane.svg')}}" alt="">
                        </div>
                        <p>{{config("gerencianet.status")[$venda->boleto->status]}}</p>
                    </div>
                    {{-- <div class="barcode">
                        <p>Código de Barras</p>
                        <p>{{$venda->boleto->codigo_barra}}</p>
                    </div> --}}
                </div>
                <button class="btn-primary" onclick="window.open('{{$venda->boleto->link}}', '_blank')">
                    Ver Boleto
                </button>
            </div>
            @else
            @foreach($venda->carne->parcelas as $parcela)
            <div class="_pedido">
                <h3>PARCELA {{$parcela->parcela}}</h3>
                <div class="_info">
                    <div class="data">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/calendar.svg')}}" alt="">
                        </div>
                        <p>{{date('d/m/Y', strtotime($parcela->data_expiracao))}}</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/plane.svg')}}" alt="">
                        </div>
                        <p>{{config("gerencianet.status")[$parcela->status]}}</p>
                    </div>
                    <div class="numero">
                        <div class="_svg">
                            <img src="{{ asset('site/img/sistema/dollar.svg')}}" alt="">
                        </div>
                        <p>R${{number_format($parcela->valor, 2, ",", ".")}}</p>
                    </div>
                    {{-- <div class="barcode">
                        <p>Código de Barras</p>
                        <p>{{$venda->boleto->codigo_barra}}</p>
                    </div> --}}
                </div>
                <button class="btn-primary" onclick="window.open('{{$parcela->link}}', '_blank')">
                    Ver Boleto
                </button>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endif








@include('site.includes.aluno.footer')
</body>

</html>