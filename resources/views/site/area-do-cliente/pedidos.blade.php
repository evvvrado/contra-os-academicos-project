@extends('site.template.area-do-cliente')

@section('id', 'pedidos-aluno')

@section('content')


<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Meus Orçamentos</h2>

            <main>
                <div class="boxes">
                    {{-- @if (count($aluno->pedidos) <= 0) <h3>Ainda não há nenhum pedido</h3>

                        @else

                        @foreach ($aluno->pedidos->sortByDesc("created_at") as $pedido)
                        <div class="box" @if ($pedido->forma == 0)
                            app
                            @elseif($pedido->forma== 1)
                            app
                            @endif>

                            <strong>N.{{ $pedido->codigo }}</strong>

                            <div class="info">
                                <div>
                                    <picture>
                                        <img src="{{asset('site/assets/sistema/calendar.svg')}}" alt="">
                                    </picture>
                                    <p>{{ date('d.m.Y', strtotime($pedido->created_at)) }}</p>
                                </div>
                                <div>
                                    <picture>
                                        <img src="{{asset('site/assets/sistema/plane.svg')}}" alt="">
                                    </picture>
                                    <p>{{ $pedido->carrinho->produtos->count() }} Produtos</p>
                                </div>
                            </div>


                            <button onclick="window.location.href= '{{ route('minha-area.aluno-pedidos-detalhes')}}'">
                                Mais detalhes
                                <div class="_svg">
                                    <img src="{{asset('site/assets/sistema/buttonArrowRight.svg')}}" alt="">
                                </div>
                            </button>

                            <div class="sub">

                                <picture>
                                    <img src="{{ asset('site/assets/sistema/dollar.svg') }} " alt="">
                                </picture>


                                @if ($pedido->forma == 0)
                                <span>{{config("gerencianet.status")[$pedido->boleto->status]}}</span>

                                @elseif($pedido->forma == 1)
                                <span>Pagamento Realizado</span>

                                @elseif($pedido->forma == 2)
                                <span>Verificar<br> parcelas</span>
                                @endif
                            </div>
                        </div>


                        @endforeach
                        @endif --}}

                        @if ($orcamentos->count() == 0) <h3>Ainda não há nenhum pedido</h3>

                            @else

                            @foreach ($orcamentos->sortByDesc("created_at") as $orcamento)

                            @php
                                $parteData = explode("-", $orcamento->data);    
                                $dataInvertida = $parteData[1] . "/" . $parteData[2] . "/" . $parteData[0];
                            @endphp         

                            <a href="{{ route('minha-area.cliente-orcamentos', ['orcamento' => $orcamento]) }}">
                                <div class="box" app>

                                    <strong>Festa {{ $orcamento->tipo }}</strong>

                                    <div class="info">
                                        <div>
                                            <picture>
                                                <img src="{{asset('site/assets/sistema/calendar.svg')}}" alt="">
                                            </picture>
                                            <p>{{ $dataInvertida }}</p>
                                        </div>
                                        <div>
                                            <picture>
                                                <img src="{{asset('site/assets/sistema/plane.svg')}}" alt="">
                                            </picture>
                                            <p>{{ $orcamento->produtos->count() }} Produtos</p>
                                        </div>
                                    </div>

                                    <button>
                                        Pagar
                                        <div class="_svg">
                                            <img src="{{asset('site/assets/sistema/buttonArrowRight.svg')}}" alt="">
                                        </div>
                                    </button>


                                    <button>
                                        Compartilhar
                                        <div class="_svg">
                                            <img src="{{asset('site/assets/sistema/buttonArrowRight.svg')}}" alt="">
                                        </div>
                                    </button>
                                    <div class="sub">

                                        <picture>
                                            <img src="{{ asset('site/assets/sistema/dollar.svg') }} " alt="">
                                        </picture>

                                        <span>Aguardando Pag.</span>
                                    </div>
                                </div>
                            </a>
                            

                            @endforeach
                        @endif

                        {{-- <div class="box --new">
                            <form action="{{ route('site.orcamento.evento')}}" method="post">
                                @csrf
                                <input type="submit" value="Novo Orçamento">
                                <input type="hidden" name="email" value="{{ $lead->email }}">
                            </form>
                        </div> --}}

                        <div class="box --new">
                            <a href="{{ route('site.orcamento.evento')}}" title="Novo orçamento">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 490 490"
                                    style="enable-background:new 0 0 490 490;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <g>
                                                <path
                                                    d="M227.8,174.1v53.7h-53.7c-9.5,0-17.2,7.7-17.2,17.2s7.7,17.2,17.2,17.2h53.7v53.7c0,9.5,7.7,17.2,17.2,17.2     s17.1-7.7,17.1-17.2v-53.7h53.7c9.5,0,17.2-7.7,17.2-17.2s-7.7-17.2-17.2-17.2h-53.7v-53.7c0-9.5-7.7-17.2-17.1-17.2     S227.8,164.6,227.8,174.1z" />
                                                <path
                                                    d="M71.7,71.7C25.5,118,0,179.5,0,245s25.5,127,71.8,173.3C118,464.5,179.6,490,245,490s127-25.5,173.3-71.8     C464.5,372,490,310.4,490,245s-25.5-127-71.8-173.3C372,25.5,310.5,0,245,0C179.6,0,118,25.5,71.7,71.7z M455.7,245     c0,56.3-21.9,109.2-61.7,149s-92.7,61.7-149,61.7S135.8,433.8,96,394s-61.7-92.7-61.7-149S56.2,135.8,96,96s92.7-61.7,149-61.7     S354.2,56.2,394,96S455.7,188.7,455.7,245z" />
                                            </g>
                                        </g>
                                    <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                        <g>
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </a>
                        </div>



                </div>
            </main>
        </div>
    </div>
</section>







@endsection