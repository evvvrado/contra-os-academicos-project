@extends('site.template.main', ['titulo' => SIGLA . ' Sobre a COA'])

@section('body_attr', 'id=sobre')

@section('content')
    <section class="banner">
        <div class="niv">
            <div class="roadmap">
                <a href="/">Início</a>
                >>
                <a href="{{ route('site.sobre') }}">Projeto</a>
            </div>

            <h2 class="--bar">Contra os acadêmicos</h2>

            <picture class="icon-arrow">
                <img src="{{ asset('site/assets/img/icon_arrow_artigo.svg') }}" alt="Seta para baixo">
            </picture>
        </div>
    </section>

    <section class="quem-somos">
        <div class="niv">
            <div class="content">
                <main>
                    <h2>Quem somos</h2>

                    <p>
                        O Contra os Acadêmicos é um projeto educacional de ensino-aprendizagem independente voltado para o
                        estudo de Filosofia e temas afins. Surgiu da união voluntária de estudantes e professores com o
                        objetivo de auxiliar o estudante autodidata com o fornecimento de bibliografias, guias de estudo e
                        conteúdos de qualidade em geral.<br><br>

                        O CoA – sigla pela qual é também conhecido – foi criado em 29 de outubro de 2014, inicialmente por
                        um estudante inquietado com a forma com que a Filosofia era comumente tratada e discutida nos meios
                        virtuais. Aparentemente, grupos interessados em filosofia serviam apenas para promover disputas
                        egoístas, alimentar sonhos niilistas e deturpar massivamente aforismos nietzschianos.<br><br>

                        Tudo começou com uma página no Facebook administrada por quatro amigos. Em seguida, o projeto
                        alcançou o Instagram e o Twitter, tomando, finalmente, a forma de um website.<br><br>

                        Em nosso site, fornecemos um programa de estudos abrangente com bibliografia básica em filosofia e
                        pelo menos mais oito áreas, todas interligadas de algum modo. Incentivamos o estudo autodidata e a
                        autoeducação; não possuímos projeto algum de reforma da educação pública – nosso único interesse é
                        ajudar e incentivar aqueles que desejam educar a si mesmos.<br><br>

                        O nome Contra os Acadêmicos vem do livro homônimo de Santo Agostinho de Hipona, o qual critica
                        duramente os céticos da Nova Academia. Seguimos o espírito de Santo Agostinho presente neste livro
                        por acreditarmos que, na presente época, vivemos uma era de ceticismo a qual deve ser suprimida para
                        o bem de nossas almas. Desprezamos a filosofia negativista tal qual descrita por Mário Ferreira dos
                        Santos, e não temos pudor algum em assumir que há muitos pretensiosos filósofos “personae non
                        gratae” em nossas estantes. Por outro lado, incentivamos a leitura de tudo o que for útil de algum
                        modo; não pregamos a queima de livros, mas a leitura consciente.<br><br>

                        Desprezamos as ideologias na forma descrita por Eric Voegelin. Somos abertamente contra ideologias e
                        não cremos que o termo seja sinônimo de “ideário” ou “sistema de ideias”. Ideologia, para nós, é não
                        mais que a forma política de uma deformidade da alma. Não cremos que “tudo é política”, e os que
                        assim o afirmam têm intenções inconfessáveis. Somos abertamente simpáticos à filosofia clássica e
                        abertamente contra anacronismos grosseiros, os quais, infelizmente, são muito comuns. Somos
                        simpáticos à religiosidade e acreditamos que a fé acompanha a razão e vice-versa; que a amputação da
                        religião da vida das pessoas causa problemas e deformações graves em suas almas – mais uma vez, como
                        demonstrado por Eric Voegelin. Assim, fides quaerens intellectum.<br><br>

                        Não cremos na relatividade da verdade; isto decorre da nossa posição, que embora anticética, é não
                        dogmática; com efeito, acreditamos que a dicotomia ceticismo-dogmatismo é falsa. Diferente do que se
                        possa imaginar, nosso nome não prega a destruição da Academia, da Universidade em geral. A
                        “academia” em nosso nome, insistimos, refere-se à Nova Academia de Carnéades a qual simboliza o
                        ceticismo da época.<br><br>

                        Nosso símbolo é composto pela letra grega “phi”, inicial de Φιλοσοφία (filosofia), abaixo da Flor de
                        Lis, que é símbolo de poder, soberania, honra e lealdade, assim como de pureza de corpo e alma. Ao
                        centro, “veritas adaequatio intellectus ad rem”, a definição tomista da verdade. O centro do phi com
                        a flor formam uma lança, que representa a luta contra o relativismo em geral. As rachaduras, quase
                        sempre despercebidas, são as cicatrizes que a filosofia carrega após anos de vilipêndio decorrente
                        das ideologias e abstratismos. Os louros representam a nobreza do objetivo e o triunfo da alma
                        humana sobre o vazio da modernidade.<br><br>

                        Ao contrário do que parece, não desprezamos a filosofia moderna e contemporânea; acreditamos que o
                        termo moderno se tornou pejorativo por conta de filósofos que, de grande, tiveram apenas a própria
                        sombra.<br><br>

                        Estamos sempre abertos a sugestões quanto à bibliografia oferecida e novos artigos para publicação.
                    </p>
                </main>
            </div>

            {{-- <div class="read-more"><span>Ver tudo</span></div> --}}
        </div>
    </section>

    <section class="nossa-equipe">
        <div class="niv">
            <div class="float-images">
                <picture><img src="{{ asset('site/assets/img/float_images_sobre.png') }}" alt="imagens flutuantes">
                </picture>
            </div>

            <div class="title-area">
                <h2>Nossa Equipe</h2>
            </div>

            <div class="equipe-area">
                <div class="membro">
                    <picture>
                        <img src="{{ asset('site/assets/img/picture_membro1_sobre.png') }}" alt="Foto membro da equipe">
                    </picture>

                    <strong>Beatriz Dias</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <hr>
                </div>
                <div class="membro">
                    <picture>
                        <img src="{{ asset('site/assets/img/picture_membro2_sobre.png') }}" alt="Foto membro da equipe">
                    </picture>

                    <strong>Beatriz Dias</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <hr>
                </div>
                <div class="membro">
                    <picture>
                        <img src="{{ asset('site/assets/img/picture_membro3_sobre.png') }}" alt="Foto membro da equipe">
                    </picture>

                    <strong>Beatriz Dias</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <hr>
                </div>
                <div class="membro">
                    <picture>
                        <img src="{{ asset('site/assets/img/picture_membro4_sobre.png') }}" alt="Foto membro da equipe">
                    </picture>

                    <strong>Beatriz Dias</strong>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section class="apoie-projeto">
        <div class="niv">
            <div class="float-images">
                <picture><img src="{{ asset('site/assets/img/float_images_apoie.png') }}" alt="imagens flutuantes">
                </picture>
            </div>

            <div class="title-area">
                <h2>Apoie o projeto</h2>
            </div>

            <div class="content-area">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum pharetra varius est, at feugiat justo
                    blandit ac. Duis semper libero a porttitor ullamcorper. Donec eget augue quis nisl auctor ultrices.
                    Mauris sit amet finibus dolor. Nunc faucibus maximus sapien, ut accumsan lorem tempor eget. Sed ut ex
                    euismod erat mollis venenatis.</p>

                <div class="clickable">
                    <a href="#">
                        <img src="{{ asset('site/assets/img/logo_paypal_apoie.svg') }}" alt="Ícone PAYPAL">
                    </a>
                    <a href="#">
                        <img src="{{ asset('site/assets/img/logo_pix_apoie.svg') }}" alt="Ícone PIX">
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="trabalhe-conosco">
        <div class="niv">
            <div class="boxes-side">
                <div class="red-box">
                    É interessante para o Contra os Acadêmicos a divulgação de artigos de filosofia e áres afins de autores
                    nacionais e estrageiros não divulgados no Brasil.
                </div>

                <span>
                    Todos os materiais enviados serão primeiro analisados pelos nossos editores e, se de acordo com os
                    critérios citados, publicados em seguida.<br><br>

                    Daremos os devidos créditos ao responsável pela publicação.<br><br>

                    Envie o seu material para o e-mail contraosacademicos@gmail.com para que possamos avaliá-lo.Agradecemos
                    pela colaboração!
                </span>

                <picture>
                    <img src="{{ asset('site/assets/img/picture_trabalhe.jpg') }}" alt="Imagem representativa">
                </picture>
            </div>
            <div class="list-side">
                <picture><img src="{{ asset('site/assets/img/logo_repeat.png') }}" alt="Logo em repetição"></picture>

                <h2>Trabalhe Conosco</h2>

                <p>Antes de enviar, pedimos, gentilmente, que analise os seguintes critérios:</p>

                <ul>
                    <li>
                        <span class="number">1</span>
                        <hr>
                        <p>A tradução deverá conter as fontes. Se houver notas feitas pelo autor, estas também devem constar
                            do artigo. </p>
                    </li>
                    <li>
                        <span class="number">2</span>
                        <hr>
                        <p>Evite enviar artigos e ensaios de autores lusófonos que já foram publicados em outro portal;
                            estes, salvo desnecessário, deverão ser autorizados pelo autor original. </p>
                    </li>
                    <li>
                        <span class="number">3</span>
                        <hr>
                        <p>Os Ensaios – inclusive traduções – também devem apresentar as fontes.</p>
                    </li>
                    <li>
                        <span class="number">4</span>
                        <hr>
                        <p>Nas resenhas, identifique o livro, o autor, a editora e a data de publicação.</p>
                    </li>
                    <li>
                        <span class="number">5</span>
                        <hr>
                        <p>As resenhas deverão ser escritas de maneira imparcial, objetiva e privilegiando o essencial. </p>
                    </li>
                    <li>
                        <span class="number">6</span>
                        <hr>
                        <p>Apresente o livro, resuma os textos, evite parcialidade e recomende o título de acordo com o que
                            você achou importante e já conhece sobre a obra do autor.</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="envie-seu-trabalho">
        <div class="niv">
            <div class="title-area">
                <h2>ENVIE SEU TRABALHO</h2>

                <p>
                    Se o leitor aprecia nosso trabalho e gostaria de participar de alguma forma, estamos sempre abertos ao
                    recebimento de materiais condizentes com nossa filosofia. Aceitamos resenhas, ensaios, artigos e
                    traduções.
                </p>
            </div>

            <form action="javascript:void(0)" method="post">
                <label>
                    <input type="text" name="nome" placeholder="Nome">
                </label>
                <label>
                    <input type="email" name="e-mail" placeholder="E-mail">
                </label>
                <label>
                    <input type="text" name="assunto" placeholder="Assunto">
                </label>

                <label>
                    <textarea placeholder="Escreva sua Mensagem" name="mensagem"></textarea>
                </label>

                <label>
                    <input type="checkbox" name="aceitar-termos" id="aceitar-termos">

                    <span>Li e aceito os <a href="#" class="--blue">termos de uso</a></span>
                </label>


                <button class="button">Enviar</button>
            </form>
        </div>
    </section>


@endsection

@section('scripts')
    <script>
        $('div.read-more').click(() => {
            $('section.quem-somos div.niv div.content').attr('complete', '');
            $('div.read-more').hide();
        })
    </script>
@endsection
