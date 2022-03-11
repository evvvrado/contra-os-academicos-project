@extends('site.template.main', ['titulo' => Definition::NAME.' | Meu carrinho!'])

@section('body_attr', 'id=orcamento-carrinho')

@php
use App\Models\OrcamentoProdutosIngredientes;
use App\Models\MarcaIngrediente;
use App\Models\Produto;
use App\Models\Parametro;
@endphp

@section('content')

<div class="super-up" hide>
    <div fluid>
        <div class="niv">

            <aside>
                <div class="scroll">
                    <table>
                        <thead>
                            <tr>
                                <th width="82"></th>
                                <th width="112">Produtos</th>
                                <th width="195">Descrição</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <picture class="foto-produto">
                                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                                    </picture>
                                </td>

                                <td>
                                    <strong class="nome-produto">
                                        Aperol Sprintz
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <picture class="foto-produto">
                                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                                    </picture>
                                </td>

                                <td>
                                    <strong class="nome-produto">
                                        Aperol Sprintz
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <picture class="foto-produto">
                                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                                    </picture>
                                </td>

                                <td>
                                    <strong class="nome-produto">
                                        Aperol Sprintz
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <picture class="foto-produto">
                                        <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                                    </picture>
                                </td>

                                <td>
                                    <strong class="nome-produto">
                                        Aperol Sprintz
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </aside>

            {{-- <main>
                <h2>Vamos dar<br> um up? 🍹</h2>

                <div class="frutas">
                    <strong>
                        Veja as frutas combina com seu upgrade
                    </strong>

                    <div class="boxes">
                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Morango</span>

                            <input type="checkbox">
                        </div>


                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Morango</span>

                            <input type="checkbox">
                        </div>


                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Morango</span>

                            <input type="checkbox">
                        </div>
                    </div>
                    <div class="boxes">
                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Morango</span>

                            <input type="checkbox">
                        </div>


                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Morango</span>

                            <input type="checkbox">
                        </div>


                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Morango</span>

                            <input type="checkbox">
                        </div>
                    </div>
                </div>


                <div class="adicionais">
                    <strong>
                        Adicionais
                    </strong>

                    <div class="boxes">
                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/gelo_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Gelo</span>

                            <input type="checkbox">
                        </div>
                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/gelo_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Gelo</span>

                            <input type="checkbox">
                        </div>
                        <div class="box">
                            <picture>
                                <img src="{{ asset('site/assets/img/gelo_1.png') }}" alt="imagem representativa">
                            </picture>

                            <span>Gelo</span>

                            <input type="checkbox">
                        </div>
                    </div>
                </div>

                <button>
                    Quero dar um upgrade
                </button>
            </main> --}}



            <div class="close">
                <img src="{{ asset('site/assets/img/close_icon_modal.svg') }}" alt="ícone de fechar">
            </div>
        </div>
    </div>
</div>

<div class="next-step">
    <h2>Leve sua festa <i>além</i></h2>
    <p>Continue sua jornada indo pra próxima página</p>

    <a href="{{ route('site.orcamento.encerrar') }}">Solicitar</a>
</div>


<section class="carrinho">
    <div class="niv">
        <div class="niv-top">
            <span>
                <h2>Meu Carrinho - Resumo dos produtos</h2>

                <p>Com base no numero de convidados você pode escolher <i>{{ session()->get('qtd_tipos_drinks') }}
                        drinks</i></p>
            </span>

            <a href="{{ route('site.orcamento.lista') }}" style="text-align: center">
                <picture>
                    <img style="margin: auto" src="{{ asset('site/assets/img/add_icon.svg') }}" alt="Adicionar mais drinks">
                </picture>

                <p>Adicione mais drinks</p>
            </a>
        </div>


        <div class="niv-table">
            <div class="scroll">
                <table>
                    <thead>
                        <tr>
                            <th width="110"></th>
                            <th width="138"></th>
                            <th width="228">Produtos</th>
                            <th width="285">Descrição</th>
                            <th width="221">Quantidade</th>
                            {{-- <th width="111">Total</th> --}}
                            <th width="99"></th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach ($produtos as $produto)
                        @php
                        $total = 0;
                        @endphp

                        <div class="up" hide style="">
                            <div fluid>
                                <div class="niv">
                                    <main>
                                        <h2>Vamos dar<br> um up? 🍹</h2>

                                        @php
                                        $produto_info = Produto::where('id', $produto->produto_id)->first();

                                        $ingredientes = OrcamentoProdutosIngredientes::where('orcamentoproduto_id', $produto->id)
                                        ->join('ingredientes', 'ingrediente_id', 'ingredientes.id')
                                        ->get();

                                        // $total_drink = OrcamentoProdutosIngredientes::where("orcamentoproduto_id", $produto->id)
                                        // ->join('marcas', 'marca_id', 'marcas.id')
                                        // ->sum('valor');
                                        // dd($total_drink);

                                        @endphp

                                        @foreach ($ingredientes as $ingrediente)
                                        <div class="drinks {{ $ingrediente->nome }}">
                                            @php
                                            $marcas = MarcaIngrediente::where('ingrediente_id', $ingrediente->id)
                                            ->join('marcas', 'marca_id', 'marcas.id')
                                            ->get();
                                            @endphp

                                            @foreach ($marcas as $marca)
                                            <div class="box caixa{{ $ingrediente->id }}">

                                                <picture>
                                                    <img src="{{ $marca->imagem }}" alt="bebida representativa">
                                                </picture>

                                                <strong>{{ $marca->nome }}</strong>

                                                <input class="marca" mid="{{ $marca->id }}"
                                                    onclick="altera_ingrediente({{ $marca->id }}, {{ $ingrediente->id }}, {{ $produto->id }}, '{{ $ingrediente->nome }}')" type="checkbox" name="slide"
                                                    @if ($marca->id == $ingrediente->marca_id) checked @endif>

                                                @if ($marca->id == $ingrediente->marca_id)
                                                @php
                                                $parametro = Parametro::where('id', 4)->first();
                                                $qtd_total_drinks = Round(($orcamento->qtd_pessoas * $parametro->valor_2) / $parametro->valor_1);
                                                $qtd_unica = $qtd_total_drinks / $produtos->count();

                                                $total = $total + $marca->valor * $qtd_unica;
                                                @endphp
                                                @endif

                                                <p>R$ {{ number_format($marca->valor, 2, ',', '.') }}</p>
                                            </div>
                                            @endforeach
                                        </div>
                                        @endforeach

                                        {{-- <div class="frutas">
                                            <strong>
                                                Veja as frutas combina com seu upgrade
                                            </strong>

                                            <div class="boxes">
                                                <div class="box">
                                                    <picture>
                                                        <img src="{{ asset('site/assets/img/fruta_1.png') }}" alt="imagem representativa">
                                                    </picture>

                                                    <span>Morango</span>

                                                    <input type="checkbox">
                                                </div>
                                            </div>
                                        </div> --}}


                                        {{-- <div class="adicionais">
                                            <strong>
                                                Adicionais
                                            </strong>

                                            <div class="boxes">
                                                <div class="box">
                                                    <picture>
                                                        <img src="{{ asset('site/assets/img/gelo_1.png') }}" alt="imagem representativa">
                                                    </picture>

                                                    <span>Gelo</span>

                                                    <input type="checkbox">
                                                </div>
                                            </div>
                                        </div> --}}
                                    </main>

                                    <button class="close">
                                        Aplicar alterações
                                    </button>


                                    <div class="close">
                                        <img src="{{ asset('site/assets/img/close_icon_modal.svg') }}" alt="ícone de fechar">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <tr>
                            <td>
                                <button class="remover-produto" onclick="escolher_produto({{ $produto->produto_id }}); 
                                            $(this).closest('tr').attr('hide', '');">
                                    <picture>
                                        <img src="{{ asset('site/assets/img/icon_remove.svg') }}" alt="Remover ícone">
                                    </picture>
                                </button>
                            </td>

                            <td>
                                <picture class="foto-produto">
                                    <img src="{{ $produto_info->imagem_1 }}" alt="imagem representativa">
                                </picture>
                            </td>

                            <td>
                                <strong class="nome-produto">
                                    {{ $produto_info->nome }}
                                </strong>
                            </td>

                            <td>
                                <p class="descricao-produto">
                                    {{ mb_strimwidth($produto_info->descricao, 0, 55, '...') }}
                                </p>
                            </td>

                            <td>
                                <input disabled value="{{ $qtd_total_drinks }}" type="tel" placeholder="Quantidade">
                                <input hidden value="{{ $qtd_total_drinks }}" type="tel" placeholder="Quantidade" name="quantidade_produto">
                            </td>

                            {{-- <td>
                                <strong class="total-produto">
                                    R$ {{ number_format($total_drink,2,",",".") }}
                                </strong>
                            </td> --}}

                            <td>
                                <button class="upgrade-produto">
                                    <picture>
                                        <img src="{{ asset('site/assets/img/upgrade_button.svg') }}" alt="ícone de upgrade">
                                    </picture>
                                </button>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <strong class="total-produto">
                                    @php
                                    session()->put(['total_orcamento_produtos' => $total]);
                                    @endphp
                                    R$ {{ number_format($total, 2, ',', '.') }}
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>

@endsection

@section('scripts')
<script>
    function escolher_produto(idproduto) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/orcamento/escolher_produto/" + idproduto,
                success: function(ret) {
                    console.log(ret)
                },
                error: function(ret) {
                    console.log("Deu muito ruim");
                    console.log(ret);
                }
            });
        }

        $('div.up [fluid] div.close, div.up [fluid] div.niv button').click(function() {
            if (!$('div.up').is('[hide]')) {
                window.location.href = '{{ route('site.orcamento.carrinho') }}';
            }
            $('div.up').toggleAttr('hide')
        })


        $('section.carrinho div.niv div.niv-send button').click(() => {
            window.location.href = '{{ route('site.orcamento.encerrar') }}';
        })

        function altera_ingrediente(idmarca, idingrediente, orcamentoproduto, ingrediente, nome) {

            var elem = $(".marca[mid='" + idmarca + "']");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/orcamento/ingrediente/" + idmarca + "/" + idingrediente + "/" + orcamentoproduto,
                success: function(ret) {
                    $(".caixa" + idingrediente + " .marca").each(function() {
                        if ($(this).attr("mid") != idmarca) {
                            $(this).prop("checked", false);
                        } else {
                            $(this).prop("checked", true);
                        }
                    });
                },
                error: function(ret) {
                    console.log("Deu muito ruim");
                    console.log(ret);
                }
            });
        }

        function alterar_qtd_produto(idproduto, idorcamento, qtd) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/orcamento/carrinho/qtd_altera/" + idorcamento + "/" + idproduto + "/" + qtd,
                success: function(ret) {
                    console.log(ret)
                    document.location.reload(true);
                },
                error: function(ret) {
                    console.log("Deu muito ruim");
                    console.log(ret);
                }
            });
        }
</script>
@endsection