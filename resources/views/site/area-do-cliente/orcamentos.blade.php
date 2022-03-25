@extends('site.template.area-do-cliente')

@section('id', 'matriculas-aluno-detalhes')

@section('content')

    @php
    use App\Models\Servico;
    use App\Models\Produto;
    use App\Models\OrcamentoServico;
    use App\Models\OrcamentoProduto;
    @endphp



    <section class="mA_showcase">
        <div class="container-fluid">
            <div class="container-fav">
                <div class="top">
                    <picture class="thumb">
                        <img src="{{ asset('site/assets/img/drink_modal.png ') }}" alt="">
                    </picture>

                    <h2>
                        Festa {{ config('orcamentos.tipos')[$orcamento->tipo] }} do dia
                        {{ date('d/m/Y', strtotime($orcamento->data)) }}
                        <p>Para {{ $orcamento->qtd_pessoas }} convidados</p>
                    </h2>

                    <div class="sub pagar">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/dollar.svg') }} " alt="">
                        </picture>
                        <picture>
                            <img src="{{ asset('site/assets/sistema/threeDots.svg') }} " alt="">
                        </picture>
                    </div>
                </div>

                <div class="info">
                    <span>
                        <small>Suas informações</small>
                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/userData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ $cliente->nome }}
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/mailData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ $cliente->email }}
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/phoneData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ $cliente->telefone }}
                            </h4>
                        </div>
                    </span>


                    <span>
                        <small>Informações do evento</small>
                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/flagData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ config('orcamentos.tipos')[$orcamento->tipo] }}
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/atimeData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ $orcamento->duracao }}
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/pinData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ $orcamento->cep }}
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/calendar.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ date('d/m/Y', strtotime($orcamento->created_at)) }}
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/userData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ $orcamento->qtd_pessoas }} Pessoas
                            </h4>
                        </div>

                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/drinkData.svg') }}" alt="">
                            </picture>
                            <h4>
                                {{ config('orcamentos.bebidas')[$orcamento->outras_bebidas] }}
                            </h4>
                        </div>
                    </span>


                    <span>
                        <small>Valores</small>
                        <div>
                            <picture>
                                <img src="{{ asset('site/assets/sistema/dollar.svg') }}" alt="">
                            </picture>

                            @php
                                $total_servicos = OrcamentoServico::where('orcamento_id', $orcamento->id)->sum('valor');
                                
                                $total_produtos = OrcamentoProduto::where('orcamento_id', $orcamento->id)->sum('valor');
                            @endphp

                            <h4>
                                <strong>Total:</strong> R$
                                {{ number_format($total_servicos + $total_produtos, 2, ',', '.') }}
                            </h4>
                        </div>
                    </span>
                </div>


                <nav>
                    <span active>Drinks</span>
                    <span>Inclusos</span>
                    <span>Extras</span>
                </nav>

                <main>
                    <div class="list" active>
                        <div class="info --special">
                            <span>
                                <div style="display: flex; justify-content: space-between; flex-wrap: wrap">
                                    @foreach ($orcamento->orcamento_produtos as $orcamento_produto)
                                        <div>
                                            <picture>
                                                <img width=251 height=271 src="{{ asset($orcamento_produto->produto->imagem_preview) }}"
                                                    alt="">
                                                <h2>{{ $orcamento_produto->qtd }}x <i>{{ $orcamento_produto->produto->nome }}</i></h2>



                                                @foreach ($orcamento_produto->produto->ingredientes as $ingrediente)
                                                    <p>{{ $ingrediente->nome }}</p>
                                                @endforeach
                                            </picture>

                                        </div>
                                    @endforeach
                                </div>
                            </span>
                        </div>
                    </div>

                    <div class="list">
                        <div class="niv-table">
                            <div class="scroll">
                                <form id="formServicos" action="{{ route('site.orcamento.servicos.salvar') }}"
                                    method="POST">
                                    @csrf
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="206">Nome dos serviços</th>
                                                <th width="456">Descrição</th>
                                                {{-- <th width="175">Valor</th> --}}
                                                <th width="200">Quantidade</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($orcamento_servicos_inclusos as $orcamento_servico_incluso)
                                                <tr>
                                                    <td>
                                                        <strong class="nome-produto">
                                                            {{ $orcamento_servico_incluso->servico->nome }}
                                                        </strong>
                                                    </td>

                                                    <td>
                                                        <p class="descricao-produto">
                                                            {{ $orcamento_servico_incluso->servico->descricao }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <input value="{{ $orcamento_servico_incluso->qtd }}" readonly type="tel">
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>
                                <span class="resumo-evento">
                                    <strong>Mensagem de aviso</strong>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi
                                        nunc, platea.
                                        Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                                        et
                                        hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget
                                        duis
                                        fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                                        vitae.
                                        Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla.
                                        Id in
                                        sagittis, sagittis libero.</p>
                                </span>

                                <span class="resumo-evento">
                                    <strong>Resumo do evento</strong>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi
                                        nunc, platea.
                                        Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                                        et
                                        hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget
                                        duis
                                        fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                                        vitae.
                                        Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla.
                                        Id in
                                        sagittis, sagittis libero.</p>
                                </span>

                            </div>
                        </div>
                    </div>

                    <div class="list" style="padding-top: 20px;">


                        <div class="niv-table">
                            <div class="scroll">
                                {{-- <form action="{{ route('site.orcamento.salvar_orcamento') }}" method="post"> --}}
                                <form action="{{ route('site.orcamento.salvar_orcamento') }}" method="post">
                                    @csrf
                                    <table>
                                        <thead>
                                            <tr>
                                                <th width="206">Nome dos serviços</th>
                                                <th width="456">Descrição</th>
                                                <th width="175">Valor</th>
                                                <th width="221">Quantidade</th>
                                                {{-- <th width="221">Mínima</th> --}}
                                                <th width="210">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($orcamento_servicos_nao_inclusos as $orcamento_servico_nao_incluso)
                                                <tr>
                                                    <td>
                                                        <strong class="nome-produto">
                                                            {{ $orcamento_servico_nao_incluso->servico->nome }}
                                                        </strong>
                                                    </td>

                                                    <td>
                                                        <p class="descricao-produto">{{ $orcamento_servico_nao_incluso->servico->descricao }}</p>
                                                    </td>

                                                    <td>
                                                        <strong class="total-produto">
                                                            R${{ number_format($orcamento_servico_nao_incluso->servico->valor, 2, ",", ".") }}
                                                        </strong>
                                                    </td>

                                                    <td>
                                                        <input value="{{ $orcamento_servico_nao_incluso->qtd }}" type="tel" min="0" step="1" name=""
                                                            id="qtd" readonly>
                                                    </td>

                                                    <td>
                                                        <strong id="valor_total" class="total-produto">
                                                            R${{ number_format($orcamento_servico_nao_incluso->valor, 2, ",", ".") }}
                                                        </strong>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </form>

                                <span class="resumo-evento">
                                    <strong>Resumo do evento</strong>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi
                                        nunc, platea.
                                        Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                                        et
                                        hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget
                                        duis
                                        fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                                        vitae.
                                        Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla.
                                        Id in
                                        sagittis, sagittis libero.</p>
                                </span>

                            </div>
                        </div>
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
