<div class="container-fluid">
    <div class="modal-filtro" hide>
        <div fluid>
            <div class="niv">
                <main>
                    <div class="scroll">

                        <div class="col">
                            <div class="title">
                                Filtro por ingredientes
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
                        </div>

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
                    </div>
                </main>

                <div class="end">
                    <button>Aplicar filtro</button>
                </div>

                <div class="close">
                    <img src="{{ asset('site/assets/img/close_icon_modal.svg') }}" alt="ícone de fechar">
                </div>
            </div>
        </div>
    </div>

    <div class="next-step">
        <h2>Leve sua festa <i>além</i></h2>
        <p>Continue sua jornada indo pra próxima página</p>

        <a href="{{ route('site.orcamento.confirmacao') }}">Continuar</a>
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

                    @foreach ($ingredientes_filtro as $ingrediente)
                        @php
                            $marca = $ingrediente->marcas->where('padrao', true)->first();
                        @endphp

                        @if ($marca)
                            <div class="box" niv-fade>
                                <div>

                                    <picture>
                                        <img src="{{ asset($marca->imagem) }}" alt="bebida representativa">
                                    </picture>

                                    <strong>{{ $ingrediente->nome }}</strong>
                                </div>

                                <input type="checkbox" data-marca="{{ $ingrediente->nome }}" name="slide">
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
            <div class="filtro">
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
                    convidados você pode escolher <i> {{ \App\Classes\Orcamento::qtdTiposDrinks($orcamento->qtd_pessoas) }} drinks</i>
                </h2>
            </div>

            <div class="niv-top">
                <h4>Selecionados</h4>
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

                        <div class="box @foreach ($produto_escolhido->ingredientes as $ingrediente) {{ $ingrediente->nome }} @endforeach"
                            niv-fade data-cal="{{ $produto_escolhido->calorias }}"
                            data-teor="{{ $produto_escolhido->teor_alcoolico }}" {{ $lancamento }}>
                            <picture>
                                <img src="{{ asset($produto_escolhido->imagem_preview) }}" alt="imagem representativa"
                                    style="width: auto; height: 100%; margin: auto;">
                            </picture>

                            <strong>{{ $produto_escolhido->nome }}</strong>
                            <p>{{ mb_strimwidth($produto_escolhido->descricao, 0, 72, '...') }}</p>

                            <div>
                                <strong>Teor alcóolico</strong>
                                <p>{{ $produto_escolhido->teor_alcoolico }}%</p>
                                <strong>Valor Calórico</strong>
                                <p>{{ $produto_escolhido->calorias }} cal.</p>
                                <strong>Nota</strong>

                                <span>
                                    @for ($i = 0; $i < $produto_escolhido->nota; $i++)
                                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                    @endfor
                                </span>
                                <input wire:click='selecionar({{ $produto_escolhido->id }})' checked type="checkbox">
                                {{-- <input onclick="escolher_produto({{ $produto_escolhido->id }})" checked type="checkbox"
                                    name="desabilitar"> --}}
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

            <div class="niv-top" style="margin-top: 50px;">
                <h4>Disponíveis</h4>
            </div>

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

                    <div class="box @foreach ($produto->ingredientes as $ingrediente) {{ $ingrediente->nome }} @endforeach"
                        niv-fade data-cal="{{ $produto->calorias }}" data-teor="{{ $produto->teor_alcoolico }}"
                        {{ $lancamento }}>
                        <picture>
                            <img src="{{ asset($produto->imagem_preview) }}" alt="imagem representativa"
                                style="width: auto; height: 100%; margin: auto;">
                        </picture>

                        <strong>{{ $produto->nome }}</strong>
                        <p>{{ mb_strimwidth($produto->descricao, 0, 72, '...') }}</p>

                        <div>
                            <strong>Teor alcóolico</strong>
                            <p>{{ $produto->teor_alcoolico }}%</p>
                            <strong>Valor Calórico</strong>
                            <p>{{ $produto->calorias }} cal.</p>
                            <strong>Nota</strong>

                            <span>
                                @for ($i = 0; $i < $produto->nota; $i++)
                                    <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                @endfor
                            </span>

                            <input wire:click='selecionar({{ $produto->id }})' type="checkbox">
                            {{-- <input onclick="escolher_produto({{ $produto->id }})" type="checkbox" name="habilitar"> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div wire:loading style="position: fixed; top: 0px; left: 0px; background-color: rgba(0,0,0,0.45); width: 100%; height: 100vh; z-index: 1000;">

    </div>
</div>