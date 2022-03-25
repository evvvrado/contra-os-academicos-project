<div class="container-fluid">
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
                                            <img src="{{ asset('/site/assets/img/drink_3.png') }}"
                                                alt="imagem representativa">
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
                                            <img src="{{ asset('/site/assets/img/drink_3.png') }}"
                                                alt="imagem representativa">
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
                                            <img src="{{ asset('/site/assets/img/drink_3.png') }}"
                                                alt="imagem representativa">
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
                                            <img src="{{ asset('/site/assets/img/drink_3.png') }}"
                                                alt="imagem representativa">
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

                    <p>Com base no numero de convidados você pode escolher
                        <i>{{ \App\Classes\Orcamento::qtdTiposDrinks($orcamento->qtd_pessoas) }}
                            drinks</i></p>
                </span>

                <a href="{{ route('site.orcamento.lista') }}" style="text-align: center">
                    <picture>
                        <img style="margin: auto" src="{{ asset('site/assets/img/add_icon.svg') }}"
                            alt="Adicionar mais drinks">
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
                            @foreach ($orcamento_produtos as $orcamento_produto)
                                <tr>
                                    <td>
                                        <button class="remover-produto"
                                            onclick="escolher_produto({{ $orcamento_produto->produto_id }});
                                                                                                        $(this).closest('tr').attr('hide', '');">
                                            <picture>
                                                <img src="{{ asset('site/assets/img/icon_remove.svg') }}"
                                                    alt="Remover ícone">
                                            </picture>
                                        </button>
                                    </td>

                                    <td>
                                        <picture class="foto-produto">
                                            <img src="{{ asset($orcamento_produto->produto->imagem_preview) }}"
                                                alt="imagem representativa">
                                        </picture>
                                    </td>

                                    <td>
                                        <strong class="nome-produto">
                                            {{ $orcamento_produto->produto->nome }}
                                        </strong>
                                    </td>

                                    <td>
                                        <p class="descricao-produto">
                                            {{ mb_strimwidth($orcamento_produto->produto->descricao, 0, 55, '...') }}
                                        </p>
                                    </td>

                                    <td>
                                        <input disabled
                                            value="{{ ceil(\App\Classes\Orcamento::qtdDrinks($orcamento->qtd_pessoas) / $orcamento->produtos->count()) }}"
                                            type="tel" placeholder="Quantidade">
                                        {{-- <input hidden value="" type="tel" placeholder="Quantidade"
                                            name="quantidade_produto"> --}}
                                    </td>

                                    {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format($total_drink,2,",",".") }}
                                    </strong>
                                </td> --}}

                                    <td>
                                        <button wire:click='upgrade({{ $orcamento_produto->id }})'>
                                            <picture>
                                                <img src="{{ asset('site/assets/img/upgrade_button.svg') }}"
                                                    alt="ícone de upgrade">
                                            </picture>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
    <div class="up" @if(!$orcamento_produto_selecionado) hide @endif style="">
        <div fluid>
            <div class="niv" style="height: auto !important; max-height: 100vh; overflow-y: scroll;">

                <div class="niv-top">
                    <span>
                        <h2>Vamos<br>dar um Up?<h2>
                    </span>

                    <p>
                        Mas mesmo assim você pode<br>
                        alterar mais a frente <i>Aqui tudo dá.</i>
                    </p>
                </div>

                @if($orcamento_produto_selecionado)
                    <main>
                        @foreach ($orcamento_produto_selecionado->orcamento_produto_ingredientes as $orcamento_produto_selecionado_ingrediente)
                            <div class="drinks {{ $orcamento_produto_selecionado_ingrediente->ingrediente->nome }}">
                                @foreach ($orcamento_produto_selecionado_ingrediente->ingrediente->marcas as $marca)
                                    <div class="box caixa{{ $orcamento_produto_selecionado_ingrediente->ingrediente->id }}">

                                        <picture>
                                            <img src="{{ asset($marca->imagem) }}"
                                                alt="bebida representativa">
                                        </picture>

                                        <strong>{{ $marca->nome }}</strong>

                                        <input class="marca" type="checkbox" name="slide" @if ($marca->id == $orcamento_produto_selecionado_ingrediente->marca_id) checked disabled @endif wire:click="trocar_marca({{ $orcamento_produto_selecionado_ingrediente }}, {{ $marca->id }})">
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </main>
                
                    <button class="close" wire:click="fecha_upgrade">
                        Pronto
                    </button>


                    <div class="close" wire:click="fecha_upgrade">
                        <img src="{{ asset('site/assets/img/close_icon_modal.svg') }}"
                            alt="ícone de fechar">
                    </div>
                @endif
            </div>
        </div>
    </div>

</div>