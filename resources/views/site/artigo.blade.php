@extends('site.template.main', ['titulo' => SIGLA . ' Artigo Interno'])

@section('body_attr', 'id=artigo')

@section('content')

    <div id="referencias_modal" class="modal">
        <div class="niv">
            <div class="box">
                <div class="title-area">
                    <h2>Referências</h2>

                    <button class="cancel">
                        <img src="{{ asset('site/assets/img/icon_close_modal.svg') }}" alt="Ícone de fechar"
                            title="Fechar caixa">
                    </button>
                </div>

                <div class="content">
                    <div class="scroll">
                        <ul>
                            <li> De fide Trin., 2.</li>
                            <li> Idem, 10.</li>
                            <li> De fide Trin., 2; P.L. 158, 265A</li>
                            <li> De fide Trin., 2; P.L. 158, 265B.</li>
                            <li> P.L., 178, 358B.</li>
                            <li> Polycraiicus, 7, 12; P.L., 199, 665A</li>
                            <li> Idem, 2, 17; P.L., 199, 874C.</li>
                            <li> De div. omnip.; P.L., 145, 63.</li>
                            <li> Hist, calam., 2; P.L., 178, 119AB</li>
                            <li> Diakctica, edit. Geyer, p. 10.</li>
                            <li> De generibus et speciebus; Cousin, Ouvrages inidits d’A hilar d, p. 153.</li>
                            <li> Hist, calam., 2; P.L., 178, 119B.</li>
                            <li> Edit. Leffcvre, p. 24.</li>
                            <li> ngreditntibus, edit. Geyer, 16.</li>
                            <li> In Boeih. de dual, nat.; P.L.. 64, 1378.</li>
                            <li> In Boeth. de Trinit.; P.L., 64, 1393. Cf. John of Salisbury</li>
                            <li> De generibus et speciebus; Cousin, Ouvrages inidits d’A hilar d, p. 153.</li>
                            <li> Hist, calam., 2; P.L., 178, 119B.</li>
                            <li> Edit. Leffcvre, p. 24.</li>
                            <li> ngreditntibus, edit. Geyer, 16.</li>
                            <li> In Boeih. de dual, nat.; P.L.. 64, 1378.</li>
                            <li> In Boeth. de Trinit.; P.L., 64, 1393. Cf. John of Salisbury</li>
                            <li> De fide Trin., 2; P.L. 158, 265B.</li>
                            <li> P.L., 178, 358B.</li>
                            <li> Polycraiicus, 7, 12; P.L., 199, 665A</li>
                            <li> Idem, 2, 17; P.L., 199, 874C.</li>
                            <li> De div. omnip.; P.L., 145, 63.</li>
                        </ul>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="close-modal"></div>
    </div>


    <section class="artigo">
        <div class="niv --row">
            <main>
                <div class="title-area">
                    <div class="roadmap">
                        <a href="#">Colunistas</a>
                        /
                        <a href="#">Filosofia</a>
                        /
                        <a href="#">Os homens...</a>
                    </div>
                    <div class="info">

                        <h1>Os homens se esqueceram de Deus</h1>

                        <div class="author">
                            <picture>
                                <img src="{{ asset('site/assets/img/colunista3_blog.png') }}" alt="Foto do colunista">
                            </picture>

                            <div>
                                <span>Por Pedro Lucena</span>
                                <span>15 de janeiro de 2022</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-content">
                    <p>
                        Como um sobrevivente do Holocausto Comunista, estou horrorizado ao testemunhar como minha amada
                        América, o país que me adotou, está sendo gradualmente transformado em uma utopia secularista e
                        ateísta, onde ideais comunistas são glorificados e promovidos, enquanto os valores e a moralidade
                        judaico-cristãos são ridicularizados e cada vez mais erradicados da consciência pública e social de
                        nossa nação. Sob décadas de ataque e radicalismo militante de muitas elites que se intitulam
                        “liberais” e “progressistas”, Deus tem sido progressivamente apagado de nossas instituições públicas
                        e educacionais, para ser substituído com todo tipo de ilusão, perversão, corrupção, violência,
                        decadência, e insanidade.<br><br>

                        Não é por acaso que, com as ideologias marxistas e princípios seculares, há a um empobrecimento da
                        cultura e perversão do pensamento tradicional e assim se observa o desaparecimento rápido das
                        liberdades individuais. Como conseqüência, os americanos se sentem cada vez mais impotentes e
                        subjugados por alguns dos indivíduos mais radicais, mais hipócritas, menos democráticos e enfadonhos
                        que nossa sociedade já produziu.<br><br>

                        Aqueles de nós que experimentamos e testemunhamos de primeira mão as atrocidades e o terror do
                        comunismo compreendemos o porquê de tal mal se enraizar, como ele cresce e ilude, e o tipo de
                        inferno que acabará por desencadear aos inocentes e fiéis. O ateísmo é sempre o primeiro passo para
                        a tirania e a opressão!<br><br>

                        Prêmio Nobel, autor cristão ortodoxo, e dissidente russo, Alexander Solzhenitsyn, em seu “A Falta de
                        Deus: O Primeiro Passo Para o Gulag” endereçado, quando ele recebeu o Prêmio Templeton para o
                        Progresso da Religião em maio de 1983, explicou como a Revolução Russa e a tomada comunista foram
                        facilitadas por uma mentalidade ateísta de um longo processo de secularização que alienou o povo de
                        Deus e da moralidade e crenças cristãs tradicionais. Ele corretamente concluiu: “Os homens se
                        esqueceram de Deus, é por isso que tudo isso aconteceu”.<br><br>

                        O texto do seu discurso ao receber o Prêmio Templeton é mostrado abaixo. Os paralelos com a atual
                        crise e decadência moral na sociedade americana são impressionantes e assustadoras. Aqueles que têm
                        ouvidos para ouvir, ouça!
                    </p>

                    <span class="citation">
                        <h1>"Os homens se esqueceram de Deus"</h1>
                        <p>Aleksandr Solzhenitsyn</p>
                    </span>

                    <p>
                        Mais de meio século atrás, quando eu ainda era criança, lembro-me de ouvir um número de pessoas mais
                        velhas oferecem a seguinte explicação para os grandes desastres que se abateram sobre a Rússia: Os
                        homens se esqueceram de Deus, é por isso que tudo isso aconteceu.<br><br>

                        Desde então, tenho passado quase 50 anos estudando a história de nossa revolução. Durante esse
                        processo, li centenas de livros, colecionei centenas de testemunhos pessoais e contribuí com oito
                        volumes de minha própria lavra no esforço de transpor o entulho deixado por aquele levante. Mas se
                        hoje me pedissem para formular da maneira mais concisa possível a causa principal da perniciosa
                        revolução que deu cabo de mais de 60 milhões de compatriotas, não poderia fazê-lo de modo mais
                        preciso do que repetir: ‘Os homens se esqueceram de Deus; é por isso que aconteceram todas essas
                        coisas’.<br><br>

                        Além disso, só agora os eventos de revolução podem ser entendidos, no final do século, no contexto
                        daquilo que ocorreu com o resto do mundo. O que emerge aqui é um processo de significação universal.
                        E se eu fosse chamado para identificar brevemente a principal característica de todo o século XX,
                        novamente aqui, eu seria incapaz de encontrar algo mais preciso e conciso do que repetir mais uma
                        vez: Os homens se esqueceram de Deus.<br><br>

                        As deficiências da consciência humana, privado de sua dimensão do divino, têm sido um fator
                        determinante em todos os principais crimes deste século.<br><br>

                        A primeira delas foi a I Guerra Mundial, e grande parte da nossa situação atual pode ser rastreada
                        até ela. Foi uma guerra (memória que parece estar se enfraquecendo), quando a Europa, repleta de
                        saúde e abundância, caiu em uma onda de auto-mutilação que não poderia se não só enfraquecer sua
                        força por um século ou mais, e talvez para sempre. A única explicação possível para esta guerra é um
                        eclipse mental entre os líderes da Europa, devido à sua perda da sensibilização de um Poder Supremo
                        acima deles. Só uma pessoa fragilizada e sem Deus poderia ter movido estados supostamente cristãos
                        para empregar gases venenosos, uma arma que é evidentemente além dos limites da humanidade.<br><br>

                        O mesmo tipo de problema, a falha de uma consciência da dimensão do divino, se manifestou após a
                        Segunda Guerra Mundial, quando o Ocidente se rendeu à tentação satânica do guarda-chuva nuclear. Era
                        equivalente a dizer: vamos abandonar preocupações, vamos livrar a geração mais jovem de seus deveres
                        e obrigações, vamos fazer nenhum esforço para nos defender, vamos tapar nossos ouvidos para os
                        gemidos que emana do Oriente, e deixem-nos viver em vez da busca da felicidade. Se o perigo nos
                        ameaçar, devemos nos proteger com a bomba nuclear, se não, então deixe o resto do mundo mundo
                        queimar no inferno, não nos importa. O estado lamentavelmente impotente para que o Ocidente
                        contemporâneo tem afundado é, em grande medida, devido a esse erro fatal: a crença de que a defesa
                        da paz depende não de corações robustos e homens firmes, mas apenas de uma bomba nuclear…<br><br>

                        O mundo de hoje atingiu um estágio que, se tivesse sido descrito a séculos anteriores, teria
                        escutado um grito de alguém: “Isto é o Apocalipse!”. Ainda assim nós nos acostumamos a este tipo de
                        mundo, até mesmo nos sentimos em casa nele.<br><br>

                        Dostoiévski advertiu que “grandes eventos poderiam cair em cima de nós e nos pegar intelectualmente
                        despreparado”. Isto é precisamente o que aconteceu. E ele previu que “o mundo só será salvo depois
                        de ter sido possuído pelo demônio do mal”. Se ele realmente vai ser salvo, teremos que esperar e
                        ver: isso vai depender de nossa consciência, de nossa lucidez espiritual, do nosso esforço
                        individual e combinados em face de circunstâncias catastróficas. Mas isto já aconteceu, o demônio do
                        mal já passou, como um redemoinho, e triunfante circunda todos os cinco continentes da
                        terra…<br><br>

                        Em seu passado, em uma época que a Rússia sabia que o ideal social não era fama ou riqueza, ou o
                        êxito material, mas uma maneira piedosa de vida. A Rússia foi, então, mergulhada em um cristianismo
                        ortodoxo, que se manteve fiel à Igreja dos primeiros séculos. A ortodoxia da época sabia como
                        proteger o seu povo sob o jugo de uma ocupação estrangeira, que durou mais de dois séculos, e ao
                        mesmo tempo afastou golpes injustos das espadas dos cruzados ocidentais. Durante esses séculos, a fé
                        ortodoxa em nosso país tornou-se parte do próprio padrão de pensamento e da personalidade do nosso
                        povo, as formas de vida diária, o calendário de trabalho, as prioridades em todos os empreendimento,
                        a organização da semana e do ano. A fé foi a força modeladora e unificante da nação.<br><br>

                        Mas no século XVII, a Ortodoxia Russa foi gravemente enfraquecida por um cisma interno. No século
                        XVIII, o país foi abalado por transformações impostas à força de Pedro, o que favoreceu a economia,
                        o Estado e os militares às custas do espírito religioso e da vida nacional. E junto com esta
                        iluminação Petrina desequilibrada, a Rússia sentiu o primeiro sinal do secularismo; seus venenos
                        sutis permearam as classes educadas no decorrer do século XIX e abriu o caminho para o marxismo. No
                        momento da Revolução, a fé tinha praticamente desaparecido em círculos educados russos, e entre os
                        sem instrução, sua saúde estava ameaçada.<br><br>

                        Foi Dostoiévski, mais uma vez, que observou na Revolução Francesa, sua aparente repulsa da Igreja a
                        lição de que “a revolução deve necessariamente começar com o ateísmo”. Isso é absolutamente
                        verdadeiro. Mas o mundo nunca antes tinha conhecido a irreligiosidade tão organizada, militarizada,
                        e tenazmente malévola como a praticada pelo marxismo. Dentro do sistema filosófico de Marx e Lênin,
                        e no coração de sua psicologia, o ódio de Deus é a principal força motriz, mais fundamental do que
                        todas as suas pretensões políticas e econômicas. O ateísmo militante não é meramente acidentais ou
                        marginal à política comunista, não é um efeito colateral, mas o pivô central.<br><br>

                        Por um curto período de tempo, quando ele precisava reunir forças para a luta contra Hitler, Stalin
                        cinicamente adotou uma postura amigável em relação à Igreja. Este jogo enganoso, continuou nos anos
                        posteriores por Brezhnev, com a ajuda de publicações de folhetos e fachadas, infelizmente essas
                        medidas tendem a ser tomadas como verdade pelos ocidentais. No entanto, a tenacidade com que o ódio
                        religioso está enraizada no comunismo pode ser julgada pelo exemplo de seu líder mais liberal,
                        Krushchev: ainda que tenha realizado uma série de medidas importantes para aumentar a liberdade,
                        Krushchev reacendeu simultaneamente a obsessão leninista frenética de destruir a religião.
                    </p>
                </div>

                <div class="apoie-projeto --alternative">

                    <div class="content-side">
                        <strong>MENSAGEM DA EQUIPE</strong>

                        <strong>
                            Seu apoio é mais importante do que nunca.
                        </strong>

                        <p>
                            Desde 2014 o Contra os Acadêmicos trabalha para divulgar a boa filosofia e incentivar a
                            autoeducação. Apoiando nosso projeto, você assegura a continuidade do nosso trabalho.
                        </p>
                        <div class="buttons">
                            <button class="button">Quero apoiar</button>
                            <button class="button">Ler artigo completo</button>
                        </div>
                    </div>
                </div>



                <div class="bio">
                    <picture>
                        <img src="{{ asset('site/assets/img/picture_aleksandr.png') }}" alt="Foto do Biografado">
                    </picture>

                    <div>
                        <strong>Aleksandr Solzhenitsyn</strong>
                        <p>
                            foi um preso político do regime soviético e também autor, dramaturgo e historiador russo cujas
                            obras revelaram ao mundo as atrocidades cometidas nos gulags, campos de concentração com
                            trabalhos forçados existente na antiga União Soviética.
                        </p>
                    </div>
                </div>

                <div class="actions">
                    <div class="social-buttons">
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_eye_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>1306</span>
                        </div>
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_chat_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>23</span>
                        </div>
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_share_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>04</span>
                        </div>
                        <div class="icon" active>
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_heart_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>200</span>
                        </div>

                    </div>
                    <div class="buttons">
                        <button class="button --references">Referências</button>
                        <button class="button">Quero compartilhar</button>
                    </div>
                </div>
            </main>

            <picture class="artigo-banner">
                <img src="{{ asset('site/assets/img/banner_artigo.jpg') }}" alt="Imagem principal do artigo">
            </picture>

            <aside>
                <div class="mais-autor">
                    <strong>Mais do autor</strong>
                    <picture>
                        <img src="{{ asset('site/assets/img/colunista2_blog.png') }}" alt="">
                    </picture>

                    <ul>
                        <li><a href="#">Como vencer um debate sem precisar ter razão</a></li>
                        <li><a href="#">O Verbo e o Símbolo – René Guénon</a></li>
                        <li><a href="#">O que dizemos ser Deus</a></li>
                        <li><a href="#">Joathas Bello: Deiformidade e Graça em Xavier Zubiri</a></li>
                    </ul>
                </div>

                <div class="relacionados">
                    <h3>Relacionados</h3>

                    <ul>
                        <li>
                            <a href="#" class="box">
                                <picture>
                                    <img src="{{ asset('site/assets/img/banner_relacionados_artigo.svg') }}"
                                        alt="Banner relacionados">
                                </picture>
                                <div class="content">
                                    <span>15/01/21</span>
                                    <strong>O Verbo e o Símbolo – René Guénon</strong>
                                    <p>Por Fernando Teixeira</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="box">
                                <picture>
                                    <img src="{{ asset('site/assets/img/banner_relacionados_artigo.svg') }}"
                                        alt="Banner relacionados">
                                </picture>
                                <div class="content">
                                    <span>15/01/21</span>
                                    <strong>O Verbo e o Símbolo – René Guénon</strong>
                                    <p>Por Fernando Teixeira</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="box">
                                <picture>
                                    <img src="{{ asset('site/assets/img/banner_relacionados_artigo.svg') }}"
                                        alt="Banner relacionados">
                                </picture>
                                <div class="content">
                                    <span>15/01/21</span>
                                    <strong>O Verbo e o Símbolo – René Guénon</strong>
                                    <p>Por Fernando Teixeira</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="box">
                                <picture>
                                    <img src="{{ asset('site/assets/img/banner_relacionados_artigo.svg') }}"
                                        alt="Banner relacionados">
                                </picture>
                                <div class="content">
                                    <span>15/01/21</span>
                                    <strong>O Verbo e o Símbolo – René Guénon</strong>
                                    <p>Por Fernando Teixeira</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="atalhos">
                    <h3>Atalhos</h3>
                    <ul>
                        <li><a href="">Filosofia da Religião</a></li>
                        <li><a href="">Filosofia Política</a></li>
                        <li><a href="">Historia</a></li>
                        <li><a href="">História da Filosofia</a></li>
                        <li><a href="">Lógica</a></li>
                        <li><a href="">Metafísica</a></li>
                        <li><a href="">Pedagogia</a></li>
                        <li><a href="">Psicologia</a></li>
                        <li><a href="">Resenha</a></li>
                        <li><a href="">Semiótica</a></li>
                    </ul>
                </div>
            </aside>
        </div>

        <div class="niv">
            <div class="cursos">
                <div class="title-area">
                    <picture><img src="{{ asset('site/assets/img/logos_fade_artigo.png') }}" alt="Logo sumindo efeito">
                    </picture>

                    <h3 class="--hr-bar">Cursos em destaque</h3>

                    <div>
                        <button class="scroll-left">
                            <img src="{{ asset('site/assets/img/arrow_left_biblioteca.svg') }}" alt="">
                        </button>
                        <button class="scroll-right">
                            <img src="{{ asset('site/assets/img/arrow_right_biblioteca.svg') }}" alt="">
                        </button>
                    </div>
                </div>

                <div class="card-area">
                    <div class="scroll">
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso4_cursos.jpg') }})">
                            <div class="tags">
                                <span class="--filled">Novo</span>
                                <span>Filosofia</span>
                            </div>
                            <h2>Filosofia Avançada</h2>
                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso3_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>A vida humana</h2>

                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso2_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>Descontrução Mundial</h2>

                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso1_cursos.jpg') }})">
                            <div class="tags">
                                <span>Arte</span>
                            </div>
                            <h2>Michelangelo</h2>
                        </a>




                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso2_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>Descontrução Mundial</h2>

                        </a>
                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso4_cursos.jpg') }})">
                            <div class="tags">
                                <span class="--filled">Novo</span>
                                <span>Filosofia</span>
                            </div>
                            <h2>Filosofia Avançada</h2>
                        </a>


                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso3_cursos.jpg') }})">
                            <div class="tags">
                                <span>História</span>
                            </div>
                            <h2>A vida humana</h2>

                        </a>



                        <a href="#" class="box-destaque"
                            style="background-image: url({{ asset('site/assets/img/banner_curso1_cursos.jpg') }})">
                            <div class="tags">
                                <span>Arte</span>
                            </div>
                            <h2>Michelangelo</h2>
                        </a>
                    </div>
                </div>

                <a href="#" class="--plus">Acessar todos os cursos</a>
            </div>
        </div>
    </section>
@endsection


@section('scripts')
    <script>
        $('section.artigo div.niv div.cursos div.title-area div button.scroll-left').click(() => {
            $('section.artigo div.niv div.cursos div.card-area').scrollLeft($(
                'section.artigo div.niv div.cursos div.card-area div.scroll').scrollLeft() - $(
                'section.artigo div.niv div.cursos div.card-area div.scroll a.box-destaque').width());
        })
        $('section.artigo div.niv div.cursos div.title-area div button.scroll-right').click(() => {
            $('section.artigo div.niv div.cursos div.card-area').scrollLeft($(
                'section.artigo div.niv div.cursos div.card-area div.scroll').scrollLeft() + $(
                'section.artigo div.niv div.cursos div.card-area div.scroll a.box-destaque').width());
        })

        $('button.--references').click(() => {
            $('#referencias_modal').showModal();
        })
    </script>

@endsection
