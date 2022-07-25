@extends('site.template.main', ['titulo' => 'Lançamento | COA'])

@section('body_attr', 'id=lancamento')

@section('content')

    <section class="lancamento-hero ">
        <div class="niv">
            <h1>Junte-se a nós!</h1>
            <p>Artigos, ensaíos, resenhas, revistas...<br>Tenha acesso a todos os conteúdos exclusivos do CoA.</p>

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
                        <p>
                        <h4> Substância e tangibilidade.</h4> <br>
                        Aproximamos assuntos complexos, obras e autores concretos da sua compreensão.
                        </p>
                    </li>
                    <li>
                        <strong>2</strong>
                        <hr>
                        <p>
                        <h4>Não só filosofia, mas cultura. </h4> <br>
                        São muitos os conhecimentos dos quais você precisa se nutrir contra a ordem generalizada de
                        ignorância e dispersão.
                        </p>
                    </li>
                    <li>
                        <strong>3</strong>
                        <hr>
                        <p>
                        <h4>Instrução para a autoeducação.</h4> <br>
                        Saiba o que dizem os maiores pensadores sobre o estudo metódico e a formação intelectual.
                        </p>
                    </li>
                    <li>
                        <strong>4</strong>
                        <hr>
                        <p>
                        <h4>Liberdade.</h4> <br>
                        Tenha acesso a todos os nossos conteúdos, sem limites e sem censura.
                        </p>
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
                    Contra os Acadêmicos oferece uma mistura estimulante de conhecimento de ponta, humor inteligente,
                    orientação para a vida e instruções para a autoeducação. Concluindo a sua assinatura, você terá acesso a
                    todo conteúdo do nosso portal.<br><br>

                    Cultura de todas as formas.

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

                        <p>
                            O Contra os Acadêmicos é um dos melhores locais de onde se pode tirar o aprendizado real.
                        </p>

                        <div class="info">
                            <strong>Jean Barreto</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            O conteúdo do Contra os Acadêmicos é muito bom e me motiva a estudar e a ser melhor como pessoa.
                        </p>

                        <div class="info">
                            <strong>Tiago Monteiro</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            Vi no Contra os Acadêmicos uma genuína devoção à verdade. Estou nos Prolegômenos e crescendo
                            sempre!
                        </p>

                        <div class="info">
                            <strong>Thamiel Duaik</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            O site do CoA é top e os textos que vocês publicam são muito bons.
                        </p>

                        <div class="info">
                            <strong>Patrick Bastos</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            Sou professor de filosofia e uso alguns alguns conteúdos do CoA em sala de aula. São ótimos.
                        </p>

                        <div class="info">
                            <strong>Victor Lima</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            Tenho o CoA como referência para leitura, músicas, hábitos e conteúdos em geral.
                        </p>

                        <div class="info">
                            <strong>Marcos S.</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            Sinto que o CoA me inspira a buscar conhecimento e sintetiza por onde devo começar.
                        </p>

                        <div class="info">
                            <strong>Rômulo Teixeira</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            O Contra os Acadêmicos salvou minha vida e me mostrou um mundo diferente.
                        </p>

                        <div class="info">
                            <strong>César Bathke</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            O CoA me motiva a aprender. Este é um lugar onde as pessoas conhecem e não apenas acham algo.
                        </p>

                        <div class="info">
                            <strong>Daniel Cardozo</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            Aqui se vê trabalho intelectual de verdade.
                        </p>

                        <div class="info">
                            <strong>Eugênio Costa</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            O CoA é um oásis na qualidade do conteúdo e um farol no meio da confusão.
                        </p>

                        <div class="info">
                            <strong>Jefferson Medeiros</strong>
                        </div>
                    </div>
                    <div class="depoimento">
                        <picture><img src="{{ asset('site/assets/img/lancamento/depoimento-aspas.svg') }}" alt="Aspas">
                        </picture>

                        <p>
                            O pouco que tenho de bom nasceu da influência do CoA. Muito obrigado!
                        </p>

                        <div class="info">
                            <strong>Pedro Trindade </strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="indicators">
                <span active></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </section>

    {{-- <section class="lancamento-professores">
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
    </section> --}}


    <section class="cursos">
        <div class="niv">
            <h2>Cultura de todas as formas</h2>

            <div class="boxes-area">
                <div class="scroll">
                    @foreach ($cursos as $curso)
                        <a href="#" class="box-destaque"
                            style="background-image: url('{{ asset($curso->banner) }}')">
                            <div class="tags">
                            </div>
                            <h2>{{ $curso->titulo }}</h2>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="lancamento-time">
        <div class="niv">
            <div class="niv-top-area">
                <div class="left-side">
                    <h2>Conheça a nossa revista</h2>
                    <p>
                        A Revista Contra os Acadêmicos traz análises cuidadosas, críticas honestas e reflexões inspiradas
                        nas maiores referências do mundo intelectual.
                    </p>
                </div>

                <div class="right-side">
                    <p> "O fim da educação intelectual é a formação do juízo: aprender a ver as coisas e as verdadeiras
                        relações, eis o que convém realizar."<br><br> - Régis Jolivet</p>
                </div>
            </div>

            <div class="niv-bottom-area">

                <div class="absolute">
                    <strong> -35% off na primeira semana de lançamento</strong>
                </div>

                <picture>
                    <img src="{{ asset('site/assets/img/lancamento/time-logo.png') }}" alt="Logo do projeto">
                </picture>

                <strong>
                    Assine o nosso plano anual por apenas

                </strong>

                <p>
                    12x <s> R$ 22,90</s> <strong>R$ 14,90</strong>
                </p>

                <ul>
                    <li>✔ Revista Contra os Acadêmicos</li>
                    <li>✔ Artigos</li>
                    <li>✔ Ensaios</li>
                    <li>✔ Resenhas</li>
                    <li>✔ Listas</li>
                </ul>

                <form method="post" action="{{ route('payment') }}">
                    @csrf
                    <input type="hidden" value="178.80" name="amount">
                    <button type="submit" class="button">Seja assinante</button>
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

            $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').scrollLeft(
                $('body#lancamento section.lancamento-depoimentos div.niv div.scroll').height() * ($(this)
                    .index() * 3))
        })
    </script>

@endsection
