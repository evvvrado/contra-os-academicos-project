@extends('site.template.main', ['titulo' => Definition::NAME.' | Surpreenda-se'])

@section("body_attr", "id=orcamento-lista")


@section('content')

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

    <a href="{{ route('site.orcamento.confirmacao')}}">Continuar</a>
</div>

{{-- <div class="modal_box modal">
    <div fluid>

        <div class="niv">
            <div class="box">
                <h2>Vamos comerça a montar nossa carta</h2>
                <h2>Opa!</h2>

                <p>Você fazer um up escolhendo mais bebidas?</p>

                <p>Basta colocar novamente a quantidade de convidados novamente que iremos proseguir</p>

                <button>Atualizar convidados</button>
            </div>
        </div>
    </div>
    <div class="close-modal">
    </div>
</div> --}}

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
                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_2.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Rum</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_3.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_4.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_4.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_3.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_1.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>


                <div class="box" niv-fade>
                    <div>

                        <picture>
                            <img src="{{ asset('site/assets/img/bebida_2.jpg') }}" alt="bebida representativa">
                        </picture>

                        <strong>Shisky</strong>
                    </div>

                    <input type="checkbox" name="slide">
                </div>
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
                convidados você pode escolher <i>7 drinks</i>
            </h2>
        </div>

        <div class="niv-content">

            <div class="box" niv-fade data-cal="52" data-teor="15" lancamento>
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>15%</p>
                    <strong>Valor Calórico</strong>
                    <p>52 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="520" data-teor="10" visitado>
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>10%</p>
                    <strong>Valor Calórico</strong>
                    <p>520 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="140" data-teor="86" visitado lancamento>
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CHEROKEE</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>86%</p>
                    <strong>Valor Calórico</strong>
                    <p>140 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="300" data-teor="45" lancamento>
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>45%</p>
                    <strong>Valor Calórico</strong>
                    <p>300 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>





            <div class="box" niv-fade data-cal="52" data-teor="15">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>15%</p>
                    <strong>Valor Calórico</strong>
                    <p>52 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="520" data-teor="10">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>10%</p>
                    <strong>Valor Calórico</strong>
                    <p>520 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="140" data-teor="86">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CHEROKEE</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>86%</p>
                    <strong>Valor Calórico</strong>
                    <p>140 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="300" data-teor="45">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>45%</p>
                    <strong>Valor Calórico</strong>
                    <p>300 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>





            <div class="box" niv-fade data-cal="52" data-teor="15">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>

                <strong>APEROL SPRITZ</strong>
                <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>15%</p>
                    <strong>Valor Calórico</strong>
                    <p>52 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="520" data-teor="10">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_3.png') }}" alt="imagem representativa">
                </picture>

                <strong>CARUSO</strong>
                <p>Criado nos EUA em meados de 1920, foi uma homenagem ao famoso tenor italiano...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>10%</p>
                    <strong>Valor Calórico</strong>
                    <p>520 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="140" data-teor="86">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_2.png') }}" alt="imagem representativa">
                </picture>

                <strong>CHEROKEE</strong>
                <p>Um coquetel moderno, que recebeu este nome devido á sua cor, associada...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>86%</p>
                    <strong>Valor Calórico</strong>
                    <p>140 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>


            <div class="box" niv-fade data-cal="300" data-teor="45">
                <picture>
                    <img src="{{ asset('/site/assets/img/drink_1.png') }}" alt="imagem representativa">
                </picture>

                <strong>NEGRONI</strong>
                <p>Criado me 1920 em Florença, por um bartender chamado Fosco Scarselli, na Itália...</p>

                <div>
                    <strong>Teor alcóolico</strong>
                    <p>45%</p>
                    <strong>Valor Calórico</strong>
                    <p>300 cal.</p>
                    <strong>Valor Calórico</strong>

                    <span>
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                        <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                    </span>

                    <input type="checkbox" name="habilitar">
                </div>
            </div>



        </div>
    </div>
</section>

@endsection