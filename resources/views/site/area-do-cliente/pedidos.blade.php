@extends('site.template.area-do-aluno')

@section('id', 'pedidos-aluno')

@section('content')
@php
$aluno = \App\Models\Aluno::find(session()->get('aluno')['id']);
@endphp


<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Meus Pedidos</h2>

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
                </div>
            </main>
        </div>
    </div>
</section>







@endsection