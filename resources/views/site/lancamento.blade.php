@extends('site.template.main', ['titulo' => 'Lançamento | COA'])

@section('body_attr', 'id=lancamento')

@section('content')

    <section class="lancamento-hero ">
        <div class="niv">
            <h1>Junte-se a nós!</h1>
            <p>Tenha acesso ao conteúdo exclusivo do portal
                e será disponibilizado vários benefícios!</p>

            <small>Continue lendo para<br>entender melhor!</small>

            <a href="#" class="arrow">
                <picture>
                    <img src="{{ asset('site/assets/img/lancamento/hero-arrow.svg') }}" alt="seta para baixo">
                </picture>
            </a>
        </div>
    </section>

    <section class="lancamento-beneficios">
        <div class="niv">
            <h2 class="--fire">Benefícios</h2>


            <div class="content-list">
                <ul>
                    <li>
                        <strong>1</strong>
                        <hr>
                        <p>Evite enviar artigos e ensaios de autores lusófonos que já foram publicados em outro portal;
                            estes, salvo desnecessário, deverão ser autorizados pelo autor original.</p>
                    </li>
                    <li>
                        <strong>2</strong>
                        <hr>
                        <p>Evite enviar artigos e ensaios de autores lusófonos que já foram publicados em outro portal;
                            estes, salvo desnecessário, deverão ser autorizados pelo autor original.</p>
                    </li>
                    <li>
                        <strong>3</strong>
                        <hr>
                        <p>Evite enviar artigos e ensaios de autores lusófonos que já foram publicados em outro portal;
                            estes, salvo desnecessário, deverão ser autorizados pelo autor original.</p>
                    </li>
                    <li>
                        <strong>4</strong>
                        <hr>
                        <p>Evite enviar artigos e ensaios de autores lusófonos que já foram publicados em outro portal;
                            estes, salvo desnecessário, deverão ser autorizados pelo autor original.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="lancamento-destaque">
        <div class="niv">
            <div class="niv-picture-side">
                <picture>
                    <img src="{{ asset('site/assets/img/lancamento/beneficios-picture.jpg') }}" alt="Foto demonstrativa">
                </picture>
            </div>

            <div class="niv-text-side">
                <p>
                    Todos os materiais enviados serão primeiro analisados pelos nossos editores e, se de acordo com os
                    critérios citados, publicados em seguida.<br><br>

                    Daremos os devidos créditos ao responsável pela publicação.
                    <br><br>
                    Envie o seu material para o e-mail contraosacademicos@gmail.com para que possamos avaliá-lo.Agradecemos
                    pela colaboração!
                </p>

                <a href="#" class="button">
                    Assinar
                </a>
            </div>
        </div>
    </section>

    <section class="lancamento-depoimentos">
        <div class="niv">
            <div class="scroll">
                <div class="niv-area">
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue blandit proin faucibus
                            pellentesque porttitor at elementum arcu. Sed dui condimentum mi quam nullam faucibus. Tellus
                            libero nullam ante velit dictumst egestas. Lorem libero lobortis in et sed scelerisque.</p>

                        <div class="info">
                            <picture>
                                <img src="{{ asset('site/assets/img/lancamento/depoimento-foto.png') }}"
                                    alt="foto do depoimento">
                            </picture>

                            <strong>Amanda Arantes</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue blandit proin faucibus
                            pellentesque porttitor at elementum arcu. Sed dui condimentum mi quam nullam faucibus. Tellus
                            libero nullam ante velit dictumst egestas. Lorem libero lobortis in et sed scelerisque.</p>

                        <div class="info">
                            <picture>
                                <img src="{{ asset('site/assets/img/lancamento/depoimento-foto.png') }}"
                                    alt="foto do depoimento">
                            </picture>

                            <strong>Amanda Arantes</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue blandit proin faucibus
                            pellentesque porttitor at elementum arcu. Sed dui condimentum mi quam nullam faucibus. Tellus
                            libero nullam ante velit dictumst egestas. Lorem libero lobortis in et sed scelerisque.</p>

                        <div class="info">
                            <picture>
                                <img src="{{ asset('site/assets/img/lancamento/depoimento-foto.png') }}"
                                    alt="foto do depoimento">
                            </picture>

                            <strong>Amanda Arantes</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue blandit proin faucibus
                            pellentesque porttitor at elementum arcu. Sed dui condimentum mi quam nullam faucibus. Tellus
                            libero nullam ante velit dictumst egestas. Lorem libero lobortis in et sed scelerisque.</p>

                        <div class="info">
                            <picture>
                                <img src="{{ asset('site/assets/img/lancamento/depoimento-foto.png') }}"
                                    alt="foto do depoimento">
                            </picture>

                            <strong>Amanda Arantes</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="indicators">
                <span active></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>

    <section class="lancamento-professores">
        <div class="niv">
            <h2>Nosso time de professores</h2>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Augue blandit proin faucibus pellentesque porttitor
                at elementum arcu. Sed dui condimentum mi quam nullam faucibus. Tellus libero nullam ante velit dictumst
                egestas. Lorem libero lobortis in et sed scelerisque.
            </p>

            <picture>
                <img src="{{ asset('site/assets/img/lancamento/triple-logo.png') }}" alt="">
            </picture>


            <div class="scroll">
                <div class="professor">
                    <strong>Prof. Everaldo</strong>
                </div>
                <div class="professor">
                    <strong>Prof. Everaldo</strong>
                </div>
                <div class="professor">
                    <strong>Prof. Everaldo</strong>
                </div>
            </div>
        </div>
    </section>


    <section class="cursos">
        <div class="niv">
            <h2>Cursos</h2>

            <div class="boxes-area">
                <div class="scroll">
                    @foreach ($cursos as $curso)
                        <a href="#" class="box-destaque"
                            style="background-image: url('{{ asset($curso->banner) }}')">
                            <div class="tags">
                                {{-- <span class="--filled">Novo</span> --}}
                                <span>{{ $curso->categoria->nome }}</span>
                            </div>
                            <h2>{{ $curso->titulo }}</h2>
                        </a>
                    @endforeach
                </div>
            </div>

            <a href="#" class="--plus">Ver todos os cursos</a>
        </div>
    </section>

    <section class="lancamento-time">
        <div class="niv">
            <div class="niv-top-area">
                <div class="left-side">
                    <h2>Nosso time de professores</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra varius est, at feugiat
                        justo blandit ac. Duis semper libero a porttitor ullamcorper. Donec eget augue quis nisl auctor
                        ultrices. Mauris sit amet finibus dolor. Nunc faucibus maximus sapien, ut accumsan lorem tempor
                        eget. Sed ut ex euismod erat mollis venenatis.</p>
                </div>

                <div class="right-side">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra varius est, at feugiat
                        justo blandit ac. Duis semper libero a porttitor ullamcorper. Donec eget augue quis nisl auctor
                        ultrices. Mauris sit amet finibus dolor. Nunc faucibus maximus sapien, ut accumsan lorem tempor
                        eget. Sed ut ex euismod erat mollis venenatis.</p>
                </div>
            </div>

            <div class="niv-bottom-area">
                <picture>
                    <img src="{{ asset('site/assets/img/lancamento/time-logo.png') }}" alt="Logo do projeto">
                </picture>

                <strong>
                    Todos os materiais enviados serão primeiro analisados pelos nossos editores e, se de acordo com os
                    critérios citados, publicados em seguida.
                </strong>

                <p>
                    Envie o seu material para o e-mail contraosacademicos@gmail.com para que possamos avaliá-lo. Agradecemos
                    pela colaboração!
                </p>

                <form method="post" action="{{ route('payment') }}">
                    @csrf
                    <input type="hidden" value="120" name="amount">
                    <input type="submit" class="button" value="Seja assinante!">
                </form>

            </div>
        </div>
    </section>

@endsection

@section('scripts')

    <script>
        $('body#lancamento section.lancamento-depoimentos div.niv div.indicators span').click(function() {
            $('body#lancamento section.lancamento-depoimentos div.niv div.indicators span').removeAttr('active');
            $(this).attr('active', '');


            switch ($(this).index()) {
                case 0:
                    $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').scrollLeft(0);
                    break;
                case 1:
                    $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').scrollLeft(
                        $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').height() * 3)
                    break;
                case 2:
                    $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').scrollLeft(
                        $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').height() * 5)
                    break;
            }
        })
    </script>

@endsection
