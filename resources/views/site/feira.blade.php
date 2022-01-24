@include("site.includes.head")
<title> EXPO ENAF | Feira </title>

<body id="feira">

    @include("site.includes.navbar")




    @include('site.includes.destaque')

    <section class="container-fluid s_backtoFeira">
        <div class="container-fav">
            <div class="_select" style="opacity: 0; pointer-events: none;">
                <div class="_icon">
                    <img src="{{ asset('site/img/icon_filter.svg') }}" alt="Ícone de Filtro" />
                </div>
                <a>SELECIONAR SESSÃO</a>
            </div>



            <div class="_filters">
                <a href="javascript(0): void">
                    Visite nossa feira
                </a>
                <a href="{{ route('site.catalogo')}}">Tenha nova experiência</a>
            </div>
        </div>



    </section>


    <!-- A FEIRA -->

    <section class="container-fluid s_feira">
        <div class="_filter">
            <div class="_top">
                <span>Filtro</span>
                <div class="_close">
                    <img src="{{ asset('site/img/feira/icon_close.svg') }}" alt="Botão de Fechar" />
                </div>
            </div>

            <div class="_list">
                <ul>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Equipamentos Articulados</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Equipamento</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Cardiovascular</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Equipamentos Peso Livre</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Equipamentos Box</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Equipamentos de Ar Livre</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Anilhas</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Programa de Treinamento</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Fitness - Zumba, Fitdance</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Peças de Manutenção</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Convênios</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Adquirentes</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Livros</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Produtos naturais</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Acessórios</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Moda Fitness</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Estética Fitness</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Agência de Marketing</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Bebedouros</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Lojas de Sport</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Marcas de Sport</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Iluminação</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Comunicação Visual</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Pilates</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Limpeza</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Papelaria</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Nutrição e Alimentação</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Brinquedoteca</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Sistema de Gestão</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Consultoria Fitness</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Rádio e TV Online</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Diárias Academias</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Uniformes</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Tecnologia</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Franquias</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Monitoramento</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Corretora de Seguros</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Sistemas Inteligentes</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Arquitetos</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Moveis Decoração</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Refrigeração</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Suplementação</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Piso e Grama</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Brindes e Acessórios</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Entidades e Sindicatos</span>
                    </li>
                    <li>
                        <div class="_checkbox"></div>
                        <span>Órgãos e Federações</span>
                    </li>
                </ul>
            </div>

            <div class="_bottom">
                <button>Aplicar Filtro</button>
            </div>
        </div>

        <div class="_box">
            <aside>
                <div class="_close">
                    <img src="{{ asset('site/img/feira/icon_close.svg') }}" alt="Ícone de fechar" />
                </div>

                <picture>
                    <img src="" alt="" />
                </picture>

                <h4></h4>

                <div>
                    <strong>Minas Gerais</strong>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam euismod semper vulputate
                        ligula. Consectetur gravida auctor dolor, mi, scelerisque sit.
                    </p>
                    <strong>São Paulo</strong>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam euismod semper vulputate
                        ligula. Consectetur gravida auctor dolor, mi, scelerisque sit.
                    </p>
                    <strong>Mato Grosso</strong>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam euismod semper vulputate
                        ligula. Consectetur gravida auctor dolor, mi, scelerisque sit.
                    </p>
                    <strong>Rio de Janeiro</strong>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Diam euismod semper vulputate
                        ligula. Consectetur gravida auctor dolor, mi, scelerisque sit.
                    </p>
                </div>
            </aside>


            <main>
                <img src="" alt="">
            </main>
        </div>

        <div class="_form">
            <h4>Já vai? :(</h4>
            <p>Antes de ir deixe seus dados para deixamos você informado das novidades</p>
            <div class="_close"><img src="{{ asset('site/img/feira/icon_close.svg') }}" alt="Fechar" /></div>

            <form>
                <label>
                    <span>Nome Completo</span>
                    <input type="text" name="nome" />
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_persons.svg') }}" alt="" />
                    </div>
                </label>
                <label>
                    <span>Cidade</span>
                    <input type="text" name="cidade" />
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_building.svg') }}" alt="" />
                    </div>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="email" name="email" />
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_envelop.svg') }}" alt="" />
                    </div>
                </label>
                <label>
                    <span>Telefone</span>
                    <input type="tel" name="telefone" />
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/icon_form_cellphone.svg') }}" alt="" />
                    </div>
                </label>

                <button>Enviar</button>
            </form>
        </div>

        <div class="_blackground"></div>

        <div class="_bubble" data-type="waiting"></div>

        <div class="_bubble" data-type="1">
            <h4>Palestra</h4>

            <p>Saiba como ter uma <strong>vida saúdavel</strong></p>

            <button>Pegue seu voucher</button>
        </div>
        <div class="_bubble" data-type="2">
            <h4>Palestra</h4>

            <p>Saiba como ter uma <strong>vida saúdavel</strong></p>
            <h2>R$ 75,00</h2>

            <button>Comprar</button>
        </div>
        <div class="_bubble" data-type="3">
            <picture><img src="{{ asset('site/img/feira/icon_genders.png') }}" alt="Gêneros" /></picture>
            <h4>Intervalo</h4>
            <p>Pausa para ir ao banheiro</p>
        </div>
        <div class="_bubble" data-type="4">
            <p>Palestra <strong>grátis uhuull...</strong></p>
            <button>Acessar a palestra</button>
        </div>
        <div class="_bubble" data-type="5">
            <p>Vamos beber água?</p>
            <picture>uma imagem</picture>
        </div>
        <div class="_bubble" data-type="7">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="container-fav">
            <picture>
                <img src="{{ asset('site/img/feira/char_bemvindo.png') }}" alt="Personagem dando bem vindo" />
            </picture>

            <div class="_bubble active" data-type="6">
                <p>
                    <strong>Seja bem vindo!</strong>
                    <span>A nossa feira online, aqui você irá encontra o que precisa. Caso tenha dúvida basta
                        falar com nossos colaboradores espalhados pela feira...</span>
                </p>
            </div>

            <h4>Entrada de Visitantes</h4>
        </div>

        <div class="_bubble active cursorBubble" style="position: fixed; top: 0; left: 0; z-index: 1000;" data-type="waiting"></div>

        <div class="_aFeira">
            <div class="_l1 _l">
                <div class="_c1 _c">
                    <picture>
                        <img src="{{ asset('site/img/feira/char_secretaria.png') }}" alt="Pessoa" />
                    </picture>
                    <span>Secretária</span>
                    <div class="_bubble active" data-type="waiting"></div>

                    <div class="_bubble" data-type="7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="_c2 _c">
                    <picture>
                        <img src="{{ asset('site/img/feira/char_imprensa.png') }}" alt="Pessoa" />
                    </picture>
                    <span>Imprensa</span>
                    <div class="_bubble active" data-type="waiting"></div>
                    <div class="_bubble" data-type="7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="_c3 _c">
                    <div class="_rectangle"></div>
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/arrow_down.svg') }}" alt="Seta para baixo" />
                    </div>
                    <div class="_icon">
                        <img src="{{ asset('site/img/feira/arrow_down.svg') }}" alt="Seta para baixo" />
                    </div>
                    <div class="_rectangle"></div>
                </div>
                <div class="_c4 _c">
                    <picture>
                        <img src="{{ asset('site/img/feira/char_salavip.png') }}" alt="Pessoa" />
                    </picture>
                    <span>Sala VIP</span>
                    <div class="_bubble active" data-type="waiting"></div>
                    <div class="_bubble" data-type="7">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="_c5 _c">
                    <p>Primeiros Socorros</p>
                    <picture>
                        <img src="{{ asset('site/img/feira/icon_primeirossocorros.svg') }}" alt="Primeiros Socorros" />
                    </picture>
                </div>
            </div>
            <div class="_a">
                <div class="_c2">
                    <div class="_r">
                        <div class="a_e">
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_cadeiraderodasH.svg') }}" alt="Cadeira de Rodas" />
                            </picture>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_cadeiraderodasH.svg') }}" alt="Cadeira de Rodas" />
                            </picture>
                        </div>
                        <div class="a_b">
                            <picture><img src="{{ asset('site/img/feira/icon_saidadeemergencia.svg') }}" alt="" />
                            </picture>
                            <span>Saída de Emergência</span>
                        </div>
                        <div class="a_c">

                            <div class="_bubble" data-type="3">
                                <picture><img src="{{ asset('site/img/feira/icon_genders.png') }}" alt="Gêneros" />
                                </picture>
                                <h4>Intervalo</h4>
                                <p>Pausa para ir ao banheiro</p>
                            </div>

                            <picture>
                                <img src="{{ asset('site/img/feira/icon_wheelchair.svg') }}" alt="Sanitário especial" />
                            </picture>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_man.svg') }}" alt="Sanitário masculino" />
                            </picture>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_woman.svg') }}" alt="Sanitário Feminino" />
                            </picture>
                        </div>
                        <div class="b_d">
                            <div>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                            </div>
                            <span>Bebedouros</span>
                        </div>
                        <div class="a_d">
                            <div class="_t">
                                <picture><img src="{{ asset('site/img/feira/char_auditorio1.png') }}" alt="Pessoa" />
                                </picture>

                                <div class="_bubble active" data-type="waiting"></div>

                                <div class="_bubble" data-type="4">
                                    <p>Palestra <strong>grátis uhuull...</strong></p>
                                    <button>Acessar a palestra</button>
                                </div>

                                <span>Auditório 01</span>
                            </div>

                            <div class="_a">
                                <div class="_re">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                </div>
                                <div class="_re">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                </div>
                                <div class="_re">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                </div>
                                <div class="_re">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.927246" y="0.317627" width="14.8783" height="14.1526" fill="#EF9875" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="a_d_b">
                            <div class="_a">
                                <div class="_r">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                </div>
                                <div class="_r">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#19B2D4" />
                                    </svg>
                                </div>
                            </div>
                            <div class="_t">
                                <span>Auditório 02</span>
                                <div class="_bubble active" data-type="waiting"></div>

                                <div class="_bubble" data-type="2">
                                    <h4>Palestra</h4>

                                    <p>Saiba como ter uma <strong>vida saúdavel</strong></p>
                                    <h2>R$ 75,00</h2>

                                    <button>Comprar</button>
                                </div>
                                <picture><img src="{{ asset('site/img/feira/char_auditorio2.png') }}" alt="Pessoa" />
                                </picture>
                            </div>
                        </div>
                        <div class="a_b_b">
                            <picture><img src="{{ asset('site/img/feira/icon_saidadeemergencia.svg') }}" alt="" />
                            </picture>
                            <span>Saída de Emergência</span>
                        </div>

                        <div class="a_e_b">
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_cadeiraderodas.svg') }}" alt="Cadeira de Rodas" />
                            </picture>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_cadeiraderodas.svg') }}" alt="Cadeira de Rodas" />
                            </picture>
                        </div>
                    </div>

                    <div class="_c">
                        <div class="_details">
                            <picture>
                                <img src="{{ asset('site/img/feira/char_street.png') }}" alt="Pessoa" />
                            </picture>

                            <picture>
                                <img src="{{ asset('site/img/feira/char_street.png') }}" alt="Pessoa" />
                            </picture>
                        </div>
                        <svg class="desktop-style" style="margin-right: 7px" xmlns="http://www.w3.org/2000/svg" width="1216" height="1621" viewBox="0 0 1216 1621" fill="none">
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'equipamento-articulado')}}'" x="238.629" y="0.673828" width="235.001" height="206.794"
                                fill="#EF9875" />
                            <path d="M28.9062 0.673828H203.799V207.468H194.847L28.9062 0.673828Z" fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'orgaos-e-federacoes')}}'"
                                d="M150.344 207.469L0.00141907 207.469L0.00142012 20.882L17.578 42.514L150.344 207.469Z" fill="#E16D7D" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'pecas-de-manutencao')}}'" x="778.613" y="0.673828" width="235.001" height="198.963" fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'equipamento-de-anilhas')}}'" d=" M1048.11 0.673828H1193.64L1137.75 75.118L1048.11 199.637V0.673828Z"
                                fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'livros')}}'" d="M778.613 234.238H1013.61V244.469L926.909 359.975H778.613V234.238Z" fill="#EF9875" />
                            <rect onclick="window.location.href = ''" x="508.121" y="156.465" width="235.001" height="203.85" fill="#EF9875" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'produtos-naturais')}}'" x="508.121" y="0.673828" width="235.001" height="116.153" fill="#EF9875" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'marcas-esportivas')}}'" x="778.281" y="631.18" width="235.001" height="319.236" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'limpeza')}}'" x="778.281" y="985.242" width="235.001" height="88.9988" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'papelaria')}}'" d="M778.281 1109.07H1013.28V1198.07H819.669L778.281 1160.1V1109.07Z" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'uniforme-esportivo')}}'"
                                d="M743.457 1198.07L508.456 1198.07L508.456 1109.07L675.736 1109.07L743.457 1174.13V1198.07Z" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'corretora-de-seguros')}}'"
                                d="M639.449 1074.24L508.46 1074.24L508.46 985.241L546.274 985.241L614.54 1050.31L639.449 1074.24Z" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'sistema-inteligente')}}'"
                                d="M596.969 985.242H743.457V1074.24H689.348L629.807 1016.74L596.969 985.242Z" fill="#1AC7D6" />
                            <rect x="1048.11" y="985.242" width="166.892" height="212.823" fill="#1AC7D6" />
                            <rect x="1048.11" y="1232.89" width="166.892" height="171.473" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'consultoria-fitness')}}'" d="M778.312 1232.96H805.093L984.567 1405.03H778.312V1232.96Z"
                                fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'arquitetos')}}'" d="M1013.28 1383.95L855.531 1232.96L1013.28 1232.96L1013.28 1383.95Z"
                                fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'pisos-e-grama')}}'" d="M1215 1577.56L1073.16 1440.32L1215 1440.32L1215 1577.56Z" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'moveis-e-decoracao')}}'" d="M1048.11 1467.16L1208.95 1620.84H1048.11L1048.11 1467.16Z"
                                fill="#19B2D4" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'brinquedoteca')}}'" x="778.164" y="1439.91" width="235" height="180.927" fill="#19B2D4" />
                            <rect class="area_GYMPASS" x="508.457" y="1232.89" width="235" height="387.946" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'tecnologia')}}'" d="M253.561 1329.63H473.629V1620.84H238.629V1347.51L253.561 1329.63Z"
                                fill="#19B2D4" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'entidades-e-sindicatos')}}'" y="596.354" width="203.569" height="247.649" fill="#E16D7D" />
                            <path class="area_REDE" d="M239.473 790.798H473.628V973.767L239.473 1289.62V790.798Z" fill="#E16D7D" />
                            <path class="area_LION" d="M238.629 755.973L473.629 755.973L473.629 609.011L238.629 318.632L238.629 755.973Z" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'radio-e-tv-online')}}'"
                                d="M473.629 1294.8L278.895 1294.8L342.775 1208.55L473.628 1031.85L473.629 1294.8Z" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'moda-fitness')}}'" d="M473.629 242.293L238.629 242.293V261.955L473.629 553.214L473.629 242.293Z"
                                fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'convenios')}}'" d=" M0 242.293H179.24L203.569 273.633V561.528H0V242.293Z" fill="#E16D7D" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'brindes-e-acessorios')}}'" y="878.83" width="203.569" height="173.958" fill="#E16D7D" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'suplementacao')}}'" y="1093.05" width="203.569" height="201.749" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'franquias')}}'" d="M0 1329.63H203.569V1337.75L0 1620.84V1329.63Z" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'refrigeracao')}}'"
                                d="M203.804 1620.84L38.5157 1619.61L128.155 1498.73L203.805 1396.84L203.804 1620.84Z" fill="#19B2D4" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'comunicacao-visual')}}'" x="1048.11" y="808.211" width="166.892" height="142.205" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'iluminacao')}}'" x="1048.11" y="631.181" width="166.892" height="142.205" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'lojas-esportivas')}}'" d="M1048.11 255.173L1215 29.5391V596.354H1048.11V255.173Z" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'agencia-de-marketing')}}'"
                                d="M956.032 379.447L1013.26 302.193L1013.61 596.354H795.668L956.032 379.447Z" fill="#1AC7D6" />
                            <rect class="area_SCA" x="508.121" y="395.819" width="235.001" height="200.535" fill="#EF9875" />
                            <path d="M536.172 631.181H726.635L656.047 726.58L635.594 754.254L536.172 631.181Z" fill="#EF9875" />
                            <path d="M508.457 925.684L508.457 652.53L582.478 744.155L613.958 783.39L508.457 925.684Z" fill="#E16D7D" />
                            <path d="M778.184 395.078H900.946L844.589 473.197L778.184 560.622V395.078Z" fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'monitoramento')}}'" d="M544.734 935.443L743.458 668.139V950.416H560.489L544.734 935.443Z"
                                fill="#1AC7D6" />
                        </svg>

                        <svg class="mobile-style" style="display:none;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 337 1119" fill="none">
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'equipamento-articulado')}}'" x="106.703" width="104.622" height="92.0645" fill="#EF9875" />
                            <path d="M13.3359 0H91.1978V92.0646H87.2124L13.3359 0Z" fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'orgaos-e-federacoes')}}'"
                                d="M67.4023 92.0644L0.470169 92.0644L0.470169 8.99632L8.29523 18.6269L67.4023 92.0644Z" fill="#E16D7D" />
                            <rect x="226.684" y="69.3574" width="104.622" height="90.7535" fill="#EF9875" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'produtos-naturais')}}'" x="226.684" width="104.622" height="51.7113" fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'uniforme-esportivo')}}'"
                                d="M331.457 533.077L226.835 533.077L226.835 493.455L301.308 493.455L331.457 522.423L331.457 533.077Z" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'corretora-de-seguros')}}'"
                                d="M285.152 477.95L226.836 477.95L226.836 438.328L243.671 438.328L274.063 467.296L285.152 477.95Z" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'sistema-inteligente')}}'"
                                d="M266.238 438.329H331.454V477.951H307.366L280.858 452.353L266.238 438.329Z" fill="#19B2D4" />
                            <rect class="area_GYMPASS" x="226.832" y="548.582" width="104.622" height="172.713" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'tecnologia')}}'" d="M113.355 591.649H211.329V721.295H106.707V599.611L113.355 591.649Z"
                                fill="#19B2D4" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'entidades-e-sindicatos')}}'" x="0.46875" y="265.197" width="90.6285" height="110.253"
                                fill="#E16D7D" />
                            <path class="area_REDE" d="M107.082 351.762H211.328V433.219L107.082 573.838V351.762Z" fill="#E16D7D" />
                            <path class="area_LION" d="M106.703 336.258L211.325 336.258L211.325 270.831L106.703 141.554L106.703 336.258Z" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'radio-e-tv-online')}}'"
                                d="M211.328 576.145L124.633 576.145L153.072 537.746L211.328 459.079L211.328 576.145Z" fill="#19B2D4" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'moda-fitness')}}'" d="M211.328 107.568L106.706 107.568V116.322L211.328 245.99L211.328 107.568Z"
                                fill="#EF9875" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'convenios')}}'" d="M0.46875 107.568H80.2661L91.0972 121.521V249.691H0.46875V107.568Z"
                                fill="#E16D7D" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'brindes-e-acessorios')}}'" x="0.46875" y="390.954" width="90.6285" height="77.4459" fill="#E16D7D" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'suplementacao')}}'" x="0.46875" y="486.325" width="90.6285" height="89.8185" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'franquias')}}'" d="M0.46875 591.649H91.0972V595.263L0.46875 721.295V591.649Z" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'refrigeracao')}}'"
                                d="M91.1989 721.294L17.6128 720.749L57.5199 666.933L91.1992 621.569L91.1989 721.294Z" fill="#19B2D4" />
                            <rect class="area_SCA" x="226.684" y="175.918" width="104.622" height="89.2779" fill="#EF9875" />
                            <path d="M239.168 280.701H323.962L292.536 323.173L283.431 335.493L239.168 280.701Z" fill="#EF9875" />
                            <path d="M226.832 411.813L226.832 290.206L259.786 330.997L273.801 348.465L226.832 411.813Z" fill="#E16D7D" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'monitoramento')}}'" d="M248.438 412.35L336.909 293.347V419.016H255.452L248.438 412.35Z"
                                fill="#EF9875" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'pecas-de-manutencao')}}'" x="0.164062" y="736.822" width="91.1184" height="77.145" fill="#1AC7D6" />
                            <path d="M106.535 736.822H162.963L141.29 765.687L106.535 813.967V736.822Z" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'livros')}}'" d="M0.164062 827.384H91.2824V831.35L57.6637 876.137H0.164062V827.384Z" fill="#1AC7D6" />
                            <rect x="268.426" y="842.314" width="63.0289" height="54.8367" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'limpeza')}}'" x="268.426" y="910.653" width="63.0289" height="54.8367" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'lojas-esportivas')}}'" d="M106.535 835.503L171.245 748.017V967.791H106.535V835.503Z" fill="#1AC7D6" />
                            <path onclick="window.location.href = '{{route('site.feiraEmpresas', 'agencia-de-marketing')}}'"
                                d="M68.9562 883.689L91.1446 853.734L91.2831 967.791H6.77734L68.9562 883.689Z" fill="#1AC7D6" />
                            <path d="M0 889.748H47.5994L25.7478 920.038L0 953.936V889.748Z" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'marcas-esportivas')}}'" x="187.875" y="736.822" width="110.627" height="90.5615" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'comunicacao-visual')}}'" x="187.875" y="910.653" width="64.7099" height="55.1379" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'consultoria-fitness')}}'" x="187.875" y="983.649" width="64.7099" height="55.1379" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'pisos-e-grama')}}'" x="187.875" y="1054.11" width="64.7099" height="64.7051" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'arquitetos')}}'" x="268.57" y="983.649" width="62.8834" height="55.1379" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'moveis-e-decoracao')}}'" x="268.57" y="1054.11" width="62.8834" height="64.7051" fill="#1AC7D6" />
                            <rect x="1.93359" y="983.649" width="89.3479" height="55.1379" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'brinquedoteca')}}'" x="44.0156" y="1053.98" width="127.232" height="64.8349" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', '')}}'" x="106.535" y="983.649" width="64.7099" height="55.1379" fill="#1AC7D6" />
                            <rect onclick="window.location.href = '{{route('site.feiraEmpresas', 'iluminacao')}}'" x="187.875" y="842.013" width="64.7099" height="55.1379" fill="#1AC7D6" />
                        </svg>


                    </div>

                    <div class="_l">
                        <div class="b_a">
                            <div class="_t">
                                <div class="_bubble active" data-type="waiting"></div>
                                <div class="_bubble" data-type="7">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <picture><img src="{{ asset('site/img/feira/char_auditorio3.png') }}" alt="Pessoa" />
                                </picture>
                                <span>Auditório 03</span>

                            </div>

                            <div class="_a">
                                <div class="_r">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                </div>
                                <div class="_r">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                                        <rect x="0.046875" y="0.0908203" width="14.8783" height="14.1526" fill="#60AC49" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="b_d">
                            <span>Bebedouros</span>
                            <div>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                                <picture>
                                    <img src="{{ asset('site/img/feira/icon_bebedouros.svg') }}" alt="Bebedouros" />
                                </picture>
                            </div>
                        </div>
                        <div class="b_c">


                            <div class="_bubble" data-type="3">
                                <picture><img src="{{ asset('site/img/feira/icon_genders.png') }}" alt="Gêneros" />
                                </picture>
                                <h4>Intervalo</h4>
                                <p>Pausa para ir ao banheiro</p>
                            </div>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_wheelchair.svg') }}" alt="Sanitário especial" />
                            </picture>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_man.svg') }}" alt="Sanitário masculino" />
                            </picture>
                            <picture>
                                <img src="{{ asset('site/img/feira/icon_woman.svg') }}" alt="Sanitário Feminino" />
                            </picture>
                        </div>
                        <div class="b_b">
                            <span>Saída de Emergência</span>
                            <picture><img src="{{ asset('site/img/feira/icon_saidadeemergenciaBLUE.svg') }}" alt="" /></picture>
                        </div>
                        <div class="b_v">
                            <div class="_bubble active" data-type="waiting"></div>
                            <div class="_bubble" data-type="7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <span>Sala Vip</span>
                            <picture><img src="{{ asset('site/img/feira/char_salavip2.png') }}" alt="Pessoa" />
                            </picture>
                        </div>
                        <div class="b_p">
                            <span>Praça de alimentação</span>

                            <div class="_za">
                                <div class="_r">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D" style="opacity: 0; pointer-events: none"></rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none" style="opacity: 0; pointer-events: none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg style="opacity: 0; pointer-events: none" xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
                                        <rect x="0.289062" y="0.824219" width="14.8783" height="14.1526" fill="#E16D7D">
                                        </rect>
                                    </svg>
                                </div>
                            </div>
                            <div class="_zb"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- A FEIRA -->





    @include("site.includes.publicidade")
    @include("site.includes.parceiros")
    @include("site.includes.footer-expanded")

    <script>
        const $cursor = document.querySelector('.cursorBubble');

        $('.cursorBubble').hide()




        const onMouseMove = (e) =>{
            $cursor.style.left = e.pageX + 'px';
            $cursor.style.top = e.pageY + 'px';
        }
        document.body.addEventListener('mousemove', onMouseMove);

    </script>