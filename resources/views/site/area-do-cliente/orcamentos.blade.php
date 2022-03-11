@extends('site.template.area-do-cliente')

@section('id', 'matriculas-aluno-detalhes')

@section('content')

@php
use App\Models\Servico;
use App\Models\Produto;
use App\Models\OrcamentoServico;
use App\Models\MarcaIngrediente;
@endphp



<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <div class="top">
                {{--
                <picture>
                    <img src="{{ asset('/site/assets/sistema/capaMatricula.jpg')}}" alt="">
                </picture> --}}

                <h2>
                    Festa {{ $orcamento->tipo }} do dia {{date('d/m/Y', strtotime($orcamento->data))}}
                    <p>Para {{ $orcamento->qtd_pessoas }} convidados</p>
                </h2>
            </div>

            <div class="info">
                <span>
                    <small>Suas informações</small>
                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/userData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $lead_info->nome }}
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/mailData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $lead_info->email }}
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/phoneData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $lead_info->telefone }}
                        </h4>
                    </div>
                </span>


                <span>
                    <small>Informações do evento</small>
                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/flagData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $orcamento->tipo }}
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/atimeData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $orcamento->duracao }}
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/pinData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $orcamento->cep }}
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/calendar.svg')}}" alt="">
                        </picture>
                        <h4>
                            @php
                            $parteData = explode("-", $orcamento->data);
                            $dataInvertida = $parteData[1] . "/" . $parteData[2] . "/" . $parteData[0];
                            @endphp
                            {{ $dataInvertida }}
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/userData.svg')}}" alt="">
                        </picture>
                        <h4>
                            {{ $orcamento->qtd_pessoas }} Pessoas
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/drinkData.svg')}}" alt="">
                        </picture>
                        <h4>
                            @php
                            if($orcamento->outras_bebidas == 1) {
                            $outras_bebidas = "Teão outras bebidas com Alcool";
                            } else if ($orcamento->duracao == 2){
                            $outras_bebidas = "Teão outras bebidas sem Alcool";
                            } else {
                            $outras_bebidas = "Não terá outras bebidas";
                            }
                            @endphp
                            {{ $outras_bebidas }}

                        </h4>
                    </div>
                </span>


                <span>
                    <small>Valores</small>
                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/dollar.svg')}}" alt="">
                        </picture>
                        <h4>
                            <strong>Total:</strong> R$ 350,00
                        </h4>
                    </div>
                </span>
            </div>


            <nav>
                <span active>Inclusos</span>
                <span>Não Inclusos</span>
            </nav>

            <main>
                <div class="list" active>
                    <div class="niv-table">
                        <div class="scroll">
                            @if($servicos_sim->count() > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th width="206">Nome dos serviços</th>
                                        <th width="456">Descrição</th>
                                        <th width="175">Valor</th>
                                        <th width="221">Quantidade</th>
                                        <th width="210">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($servicos_sim as $servico)
                                    <tr>
                                        <td>
                                            <strong class="nome-produto">
                                                {{ $servico->nome }}
                                            </strong>
                                        </td>

                                        <td>
                                            <p class="descricao-produto">
                                                {{ $servico->descricao }}
                                            </p>
                                        </td>

                                        <td>
                                            <strong class="total-produto">
                                                R$ {{ number_format($servico->valor, 2, ",", ".") }}
                                            </strong>
                                        </td>

                                        <td>
                                            <input disabled value="{{ $servico->qtd }}" type="tel" placeholder="250" name="quantidade-produto">
                                        </td>

                                        <td>
                                            <strong class="total-produto">
                                                R$ {{ number_format($servico->valor, 2, ",", ".") }}
                                            </strong>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <br>
                            Não há serviços inclusos adicionados neste orçamento
                            <br>
                            @endif

                            <span class="resumo-evento">
                                <strong>Resumo do evento</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi nunc, platea. Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                                    et
                                    hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget duis fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                                    vitae.
                                    Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla. Id in sagittis, sagittis libero.</p>
                            </span>

                        </div>
                    </div>
                </div>

                <div class="list" style="padding-top: 20px;">


                    <div class="niv-table">
                        <div class="scroll">
                            @if($servicos_nao->count() > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th width="206">Nome dos serviços</th>
                                        <th width="456">Descrição</th>
                                        <th width="175">Valor</th>
                                        <th width="221">Quantidade</th>
                                        <th width="210">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($servicos_nao as $servico)
                                    <tr>
                                        <td>
                                            <strong class="nome-produto">
                                                {{ $servico->nome }}
                                            </strong>
                                        </td>

                                        <td>
                                            <p class="descricao-produto">
                                                {{ $servico->descricao }}
                                            </p>
                                        </td>


                                        @php
                                        $servico_valor = Servico::select('valor')
                                        ->where('id', $servico->servico_id)
                                        ->first();
                                        @endphp

                                        <td>
                                            <strong class="total-produto">
                                                R$ {{ number_format($servico_valor->valor, 2, ",", ".") }}
                                            </strong>
                                        </td>

                                        <td>
                                            <input disabled value="{{ $servico->qtd }}" type="tel" placeholder="250" name="quantidade-produto">
                                        </td>

                                        <td>
                                            <strong class="total-produto">
                                                R$ {{ number_format($servico->valor, 2, ",", ".") }}
                                            </strong>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            <br>
                            Não há serviços extras adicionados neste orçamento
                            <br>
                            @endif

                            <span class="resumo-evento">
                                <strong>Resumo do evento</strong>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi nunc, platea. Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                                    et
                                    hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget duis fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                                    vitae.
                                    Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla. Id in sagittis, sagittis libero.</p>
                            </span>

                        </div>
                    </div>
                </div>

                <div class="list">

                </div>



                <div class="info --special">
                    <span>
                        <small>Drinks</small>

                        <div style="display: flex; justify-content: space-between; flex-wrap: wrap">
                            @foreach($orcamento->orcamento_produtos as $orcamento_produto)
                            @php
                            $total = 0;

                            $produto = Produto::where('id', $orcamento_produto->produto_id)->first();

                            foreach($produto->ingredientes as $ingrediente) {
                            $marcas = MarcaIngrediente::where('ingrediente_id', $ingrediente->id)
                            ->join('marcas', 'marca_id', 'marcas.id')
                            ->get();

                            foreach($marcas as $marca) {
                            $total = ($total + $marca->valor) * $orcamento_produto->qtd;
                            }
                            }
                            @endphp
                            <div>
                                <picture>
                                    <img width=251 height=271 src="{{$produto->imagem_1}}" alt="">
                                    <h2>{{ $orcamento_produto->qtd }}x <i>{{ $produto->nome }}</i><br>R$ {{ number_format($total, 2, ',', '.') }}</h2>
                                </picture>

                            </div>
                            @endforeach
                        </div>
                    </span>
                </div>
            </main>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $('.mA_showcase nav span').click(function() {
        $('.mA_showcase nav span').removeAttr('active');
        $(this).attr('active', '');

        $(`.mA_showcase main div.list`).removeAttr('active');
        $($(`.mA_showcase main div.list`)[$(this).index()]).attr('active', '');
    })
</script>
@endsection