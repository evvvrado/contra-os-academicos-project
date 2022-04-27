<div class="container-fluid">
    <div class="modal-filtro" hide>
        <div fluid>
            <div class="niv">
                <main>
                    <div class="scroll">

                        @foreach ($ingredientes_filtro as $ingrediente_filtro)
                            @php
                                $marca = $ingrediente_filtro->marcas->where('padrao', true)->first();
                            @endphp

                            @if ($marca)
                                <div class="box">
                                    <div>

                                        <picture>
                                            <img src="{{ asset($marca->imagem) }}" alt="bebida representativa">
                                        </picture>

                                        <strong>{{ $ingrediente_filtro->nome }}</strong>
                                    </div>

                                    <input type="checkbox" data-marca="{{ $ingrediente_filtro->nome }}" name="slide">
                                </div>
                            @endif
                        @endforeach

                    </div>
            </div>
            <div class="list-button">
                <img src="{{ asset('site/assets/img/coqueteis-right.png') }}" alt="seta para direita">
            </div>
        </div>
        </section>

        <section class="coqueteis-filtro">
            <div class="niv">
                <div class="filtro" style="pointer-events: none;">
                    <picture>
                        <img src="{{ asset('site/assets/img/icon_filter.svg') }}" alt="ícone de filtro">
                    </picture>
                    <strong>FILTRO</strong>
                </div>
                <div class="filtros">
                    <span>
                        <input type="checkbox" name="visitado">
                        <p>Mais visitados</p>
                    </span>

                    <span>
                        <input type="checkbox" name="lancamento">
                        <p>Lançamentos</p>
                    </span>

                    <span>
                        <p>Calóricos</p>
                        <input type="range" name="caloria" min="0" max="1000" value="0">
                    </span>


                    <span>
                        <p>Teor Alcólico</p>
                        <input type="range" name="teor" min="0" max="100" value="0">
                    </span>


                </div>
            </div>
        </section>

        <section class="coqueteis-drinks">
            <div class="niv">
                <div class="niv-top">
                    <h4>Bora surpreender</h4>
                    <h2>
                        Com base no numero de <br>
                        convidados você pode escolher <i>
                            {{ \App\Classes\Orcamento::qtdTiposDrinks($orcamento->qtd_pessoas) }} drinks</i>
                    </h2>
                </div>

                <div class="niv-content">

                    @if ($orcamento->produtos->count() > 0)

                        @foreach ($orcamento->produtos as $produto_escolhido)
                            @if ($produto_escolhido->lancamento == true)
                                @php
                                    $lancamento = 'lancamento';
                                @endphp
                            @else
                                @php
                                    $lancamento = '';
                                @endphp
                            @endif

                            <div class="box " data-cal="{{ $produto_escolhido->calorias }}"
                                data-teor="{{ $produto_escolhido->teor_alcoolico }}" {{ $lancamento }}>
                                <picture>
                                    <img src="{{ asset($produto_escolhido->imagem_preview) }}"
                                        alt="imagem representativa" style="width: auto; height: 100%; margin: auto;">
                                </picture>


                                <span>
                                    <strong>{{ $produto_escolhido->nome }}</strong>
                                    <p>{{ mb_strimwidth($produto_escolhido->descricao, 0, 72, '...') }}</p>

                                    <main>
                                        <div>
                                            <strong>Teor alcóolico</strong>
                                            <p>{{ $produto_escolhido->teor_alcoolico }}%</p>
                                        </div>

                                        <div>
                                            <strong>Valor Calórico</strong>
                                            <p>{{ $produto_escolhido->calorias }} cal.</p>
                                        </div>

                                        <div>
                                            <strong>Nota</strong>
                                            @for ($i = 0; $i < $produto_escolhido->nota; $i++)
                                                <img src="{{ asset('site/assets/img/icon_star.svg') }}"
                                                    alt="estrela de nota">
                                            @endfor
                                        </div>

                                        <input onclick="escolher_produto({{ $produto_escolhido->id }})" checked
                                            type="checkbox" name="desabilitar">
                                    </main>

                                    <form action="">
                                        <button class="remove">X</button>

                                    </form>
                                </span>
                            </div>

                            <ul>
                                <li><input type="checkbox" name="">Leite condensado</li>
                                <li><input type="checkbox" name="">Leite de coco</li>
                                <li><input type="checkbox" name="">Morango </li>
                                <li><input type="checkbox" name="">Manga</li>
                                <li><input type="checkbox" name="">Uva</li>
                                <li><input type="checkbox" name="">Limão</li>
                                <li><input type="checkbox" name="">Laranja</li>
                                <li><input type="checkbox" name="">Pera</li>
                                <li><input type="checkbox" name="">Acerola</li>
                                <li><input type="checkbox" name="">Caqui</li>
                                <li><input type="checkbox" name="">Goiaba</li>
                            </ul>
                        @endforeach

                        <div class="col">
                            <div class="title">
                                Filtro por destilados
                            </div>

                            <ul>
                                <li><input type="checkbox" name="">Whisky</li>
                                <li><input type="checkbox" name="">Gin</li>
                                <li><input type="checkbox" name="">Vodka</li>
                                <li><input type="checkbox" name="">Single Malts</li>
                                <li><input type="checkbox" name="">Lançamentos</li>
                                <li><input type="checkbox" name="">Licor</li>
                                <li><input type="checkbox" name="">Cachaça</li>
                                <li><input type="checkbox" name="">Premium</li>
                                <li><input type="checkbox" name="">Cerveja</li>
                                <li><input type="checkbox" name="">Vodka Premium</li>
                            </ul>
                        </div>

                        <div class="col">
                            <div class="title">
                                Tipos de gelo
                            </div>

                            <ul>
                                <li><input type="checkbox" name="">Seco</li>
                                <li><input type="checkbox" name="">Cubo</li>
                                <li><input type="checkbox" name="">Quebrado</li>
                            </ul>

                            <div class="title">
                                Marcas
                            </div>

                            <ul>
                                <li><input type="checkbox" name="">Johnnie Walker</li>
                                <li><input type="checkbox" name="">Tanqueray</li>
                                <li><input type="checkbox" name="">Smirnoff</li>
                                <li><input type="checkbox" name="">Guiness</li>
                                <li><input type="checkbox" name="">Cîroc</li>
                                <li><input type="checkbox" name="">Singleton</li>
                                <li><input type="checkbox" name="">Ypióca</li>
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="end">
                    <button>Aplicar filtro</button>
                </div>

                <div class="close">
                    <img src="{{ asset('site/assets/img/close_icon_modal.svg') }}" alt="ícone de fechar">
                </div>
            </div>
    </div>

    <div class="next-step">
        <h2>Leve sua festa <i>além</i></h2>
        <p>Continue sua jornada indo pra próxima página</p>

        <a href="{{ route('site.orcamento.carrinho') }}">Continuar</a>
    </div>

    <section class="coqueteis-lista">
        <div class="niv">
            <div class="list-top">
                <span>
                    <h2>Escolha a base da bebida que<br> mostramos os driks para você ir além</h2>
                </span>

                <p>
                    Mas mesmo assim você pode<br>
                    alterar mais a frente <i>Aqui tudo dá.</i>
                </p>
            </div>
        </div>


        <div class="niv">
            <div class="list-button">
                <img src="{{ asset('site/assets/img/coqueteis-left.png') }}" alt="seta para esquerda">
            </div>
            <div class="list">
                <div class="scroll">

                    @foreach ($ingredientes_filtro as $ingrediente_filtro)
                        @php
                            $marca = $ingrediente_filtro->marcas->where('padrao', true)->first();
                        @endphp

                        @if ($marca)
                            <div class="box" niv-fade>
                                <div>

                                    <picture>
                                        <img src="{{ asset($marca->imagem) }}" alt="bebida representativa">
                                    </picture>

                                    <strong>{{ $ingrediente_filtro->nome }}</strong>
                                </div>

                                <input type="checkbox" data-marca="{{ $ingrediente_filtro->nome }}" name="slide">
                            </div>
                        @endif
                    @endforeach

                </div>
            </div>
            <div class="list-button">
                <img src="{{ asset('site/assets/img/coqueteis-right.png') }}" alt="seta para direita">
            </div>
        </div>
    </section>

    <section class="coqueteis-filtro">
        <div class="niv">
            <div class="filtro" style="pointer-events: none;">
                <picture>
                    <img src="{{ asset('site/assets/img/icon_filter.svg') }}" alt="ícone de filtro">
                </picture>
                <strong>FILTRO</strong>
            </div>
            <div class="filtros">
                <span>
                    <input type="checkbox" name="visitado">
                    <p>Mais visitados</p>
                </span>

                <span>
                    <input type="checkbox" name="lancamento">
                    <p>Lançamentos</p>
                </span>

                <span>
                    <p>Calóricos</p>
                    <input type="range" name="caloria" min="0" max="1000" value="0">
                </span>


                <span>
                    <p>Teor Alcólico</p>
                    <input type="range" name="teor" min="0" max="100" value="0">
                </span>


            </div>
        </div>
    </section>

    <section class="coqueteis-drinks">
        <div class="niv">
            <div class="niv-top">
                <h4>Bora surpreender</h4>
                <h2>
                    Com base no numero de<br>
                    convidados você pode escolher <i>
                        {{ \App\Classes\Orcamento::qtdTiposDrinks($orcamento->qtd_pessoas) }} drinks</i>
                </h2>
            </div>

            @if ($orcamento->produtos->count() > 0)
                <h2>Produtos escolhidos</h2>
                <div class="niv-content">
                    @foreach ($orcamento->orcamento_produtos->groupBy('produto_id') as $produto_id => $orcamento_produtos)
                        @if ($orcamento_produtos->first()->produto->lancamento == true)
                            @php
                                $lancamento = 'lancamento';
                            @endphp
                        @else
                            @php
                                $lancamento = '';
                            @endphp
                        @endif



                        <div class="box --selected " data-cal="{{ $orcamento_produtos->first()->produto->calorias }}"
                            data-teor="{{ $orcamento_produtos->first()->produto->teor_alcoolico }}"
                            {{ $lancamento }}>
                            <picture>
                                <img src="{{ asset($orcamento_produtos->first()->produto->imagem_preview) }}"
                                    alt="imagem representativa" style="width: auto; height: 100%; margin: auto;">
                            </picture>


                            <span>
                                <strong>{{ $orcamento_produtos->first()->produto->nome }}</strong>

                                {{-- <h5 style="margin-top: 15px;">Variações:</h5> --}}
                                <main>
                                    <ul>
                                        @foreach ($orcamento_produtos as $orcamento_produto)
                                            <li>
                                                <a href="#" title="Remover">{{ $orcamento_produto->receita->nome }}
                                                    <svg width="20" height="20" viewBox="0 0 25 25" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#f00"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M10.1562 10.1562V16.4062" stroke="#f00"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M14.8438 10.1562V16.4062" stroke="#f00"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path d="M8.59375 1.95312H16.4062" stroke="#f00"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                        <path
                                                            d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                                                            stroke="#f00" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>

                                                </a>


                                            </li>
                                        @endforeach
                                    </ul>
                                </main>

                                {{-- <main>
                                    <div>
                                        <strong>Teor alcóolico</strong>
                                        <p>{{ $orcamento_produtos->first()->produto->teor_alcoolico }}%</p>
                                        </div>

                                        <div>
                                            <strong>Valor Calórico</strong>
                                            <p>{{ $orcamento_produtos->first()->produto->calorias }} cal.</p>
                                        </div>

                                        <div>
                                            <strong>Nota</strong>

                                            <span>
                                                @for ($i = 0; $i < $orcamento_produtos->first()->produto->nota; $i++)
                                                    <img src="{{ asset('site/assets/img/icon_star.svg') }}"
                                                        alt="estrela de nota">
                                                @endfor
                                            </span>
                                        </div>

                                        <input onclick="escolher_produto({{ $orcamento_produtos->first()->produto->id }})" checked type="checkbox"
                                    name="desabilitar">
                                 </main> --}}




                                <form action="">
                                    <button class="remove">
                                        <svg width="20" height="20" viewBox="0 0 25 25" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#985394" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M10.1562 10.1562V16.4062" stroke="#985394" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M14.8438 10.1562V16.4062" stroke="#985394" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M8.59375 1.95312H16.4062" stroke="#985394" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                                                stroke="#985394" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </form>
                            </span>
                        </div>
                    @endforeach
                </div>
            @endif

            @if ($orcamento->produtos->count() > 0)
                <h2>Outras opções</h2>
            @endif
            <div class="niv-content">
                @foreach ($produtos as $produto)
                    @if ($produto->lancamento == true)
                        @php
                            $lancamento = 'lancamento';
                        @endphp
                    @else
                        @php
                            $lancamento = '';
                        @endphp
                    @endif

                    <div class="box " data-cal="{{ $produto->calorias }}"
                        data-teor="{{ $produto->teor_alcoolico }}" {{ $lancamento }}>
                        <picture>
                            <img src="{{ asset($produto->imagem_preview) }}" alt="imagem representativa"
                                style="width: auto; height: 100%; margin: auto;">
                        </picture>


                        <span>
                            <strong>{{ $produto->nome }}</strong>
                            <p>{{ mb_strimwidth($produto->descricao, 0, 72, '...') }}</p>

                            <main>
                                <div>
                                    <strong>Teor alcóolico</strong>
                                    <p>{{ $produto->teor_alcoolico }}%</p>
                                </div>

                                <div>
                                    <strong>Valor Calórico</strong>
                                    <p>{{ $produto->calorias }} cal.</p>
                                </div>

                                <div>
                                    <strong>Nota</strong>
                                    <span>
                                        @for ($i = 0; $i < $produto->nota; $i++)
                                            <img src="{{ asset('site/assets/img/icon_star.svg') }}"
                                                alt="estrela de nota">
                                        @endfor
                                    </span>
                                </div>

                                <input onclick="escolher_produto({{ $produto->id }})" checked type="checkbox"
                                    name="desabilitar">
                            </main>

                            <main>
                                <form wire:submit.prevent>
                                    <select name="" id="" wire:model.defer="receitas.{{ $produto->id }}">
                                        <option value="-1">Escolha a variação...</option>
                                        @foreach ($produto->receitas as $receita)
                                            @if (!$this->orcamento->receitas->contains($receita))
                                                <option value="{{ $receita->id }}">{{ $receita->nome }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    <button wire:click="selecionar({{ $receita->produto_id }})">+</button>
                                </form>
                            </main>
                        </span>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
</div>
