@extends('site.template.main', ['titulo' => Definition::NAME.' | Confirmar drinks!'])

@section("body_attr", "id=orcamento-confirm")


@section('content')

<div class="modal_confirm modal">
    <div fluid>

        <div class="niv">
            <div class="box">
                <h2>Opa!</h2>
                <h2>Você tem certeza?</h2>

                <p>Realmente quer remover TODOS os drinks da sua lista?</p>

                <p>Clique na ação que deseja seguir</p>

                <div class="button_list">
                    <button class="alert">Remover</button>
                    <button class="cancel">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="close-modal">
    </div>
</div>

<div class="next-step">

    <div>
        <h2>Leve sua festa <i>além</i></h2>
        <p>16 drinks selecionados</p>
    </div>

    <a href="{{ route('site.orcamento.carrinho')}}">Solicitar orçamento</a>

</div>

<section class="coqueteis-filtro">
    <div class="niv">
        <div class="filtro">
            <strong>Excluir todos</strong>
        </div>


        <div class="filtros">
            {{-- <span>
                <input type="checkbox" name="selectALL">
                <p>Selecionar todos</p>
            </span> --}}
        </div>
    </div>
</section>

<section class="coqueteis-drinks">
    <div class="niv">
        <div class="niv-top">
            <h4>Bora surpreender</h4>
            <h2>
                Veja a sua seleção de bebidas<br>
                para sua festa ir além
            </h2>
        </div>

        <div class="niv-content">

            <div class="box">
                <button class="remove">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.1562 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.8438 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.59375 1.95312H16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                            stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>

                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>



                <span>
                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                    <main>
                        <div>
                            <strong>Teor alcóolico</strong>
                            <p>15%</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>
                            <p>52 cal.</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>

                            <div class="stars">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                            </div>
                        </div>
                    </main>
                </span>
            </div>


            <div class="box">
                <button class="remove">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.1562 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.8438 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.59375 1.95312H16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                            stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>

                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>



                <span>
                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                    <main>
                        <div>
                            <strong>Teor alcóolico</strong>
                            <p>15%</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>
                            <p>52 cal.</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>

                            <div class="stars">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                            </div>
                        </div>
                    </main>
                </span>
            </div>

            <div class="box">
                <button class="remove">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.1562 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.8438 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.59375 1.95312H16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                            stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>

                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>



                <span>
                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                    <main>
                        <div>
                            <strong>Teor alcóolico</strong>
                            <p>15%</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>
                            <p>52 cal.</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>

                            <div class="stars">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                            </div>
                        </div>
                    </main>
                </span>
            </div>

            <div class="box">
                <button class="remove">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.1562 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.8438 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.59375 1.95312H16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                            stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>

                <picture>
                    <img src="{{ asset('/site/assets/img/drink_4.png') }}" alt="imagem representativa">
                </picture>



                <span>
                    <strong>APEROL SPRITZ</strong>
                    <p>Um coquetel que caiu no gosto dos brasileiros, devido a seu sabor agradável...</p>

                    <main>
                        <div>
                            <strong>Teor alcóolico</strong>
                            <p>15%</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>
                            <p>52 cal.</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>

                            <div class="stars">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                            </div>
                        </div>
                    </main>
                </span>
            </div>



        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $('body#orcamento-confirm section.coqueteis-filtro div.niv div.filtro strong').click(() => {
        $('.modal_confirm').showModal()
    })

</script>
@endsection