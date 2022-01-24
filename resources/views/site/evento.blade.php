@include("site.includes.head")


<body id="clinica">

@include("site.includes.navbar")

    <section class="container-fluid s_hero">
      <div class="container-fav">
        <div class="_h1 fade">
          <h6>03 Á 05 DE AGOSTO</h6>
          <h4>Day Strong</h4>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
    </section>

    <section class="container-fluid s_eventoVideo">
      <div class="container-fav">
        <div class="_text">
          <h4>O maior Evento fitness do Brasil em 2020</h4>
          <p>
            A vantagem de usar Lorem Ipsum é que ele tem uma distribuição normal de letras, ao
            contrário de "Conteúdo aqui, conteúdo aqui", fazendo com que ele tenha uma aparência
            similar a de um texto legível. A vantagem de usar
          </p>
          <p>
            Lorem Ipsum é que ele tem uma distribuição normal de letras, ao contrário de "Conteúdo
            aqui, conteúdo aqui", fazendo com que ele tenha uma aparência similar a de um texto
            legível.
          </p>
        </div>

        <div class="_video">
          <img src="{{asset('site/img/banner_video_evento.jpg')}}" alt="Vídeo do Evento" />
        </div>
      </div>

      <div class="blackout"></div>
    </section>

    
    <section class="container-fluid s_destaque">
      <div class="container-fav">
      </div>
    </section>

    <section class="container-fluid s_tabela">
      <div class="container-fav">
        <div class="_title">
          <h4>Temos o pacote ideal para você</h4>
        </div>

        <div class="_table fade">
          <div class="_col">
            <div class="_top">1 DAY PASS</div>
            <main>
              <p>
                Esse Pacote dá direito a participação integral ao evento do dia 01/10 e a entrada
                VIP para as palestras que acontecem nos espaço do evento.
              </p>
              <span>CURSOS INCLUIDOS</span>

              <strong>Meeting de musculação</strong>
              <span class="_pa">Palestras</span>
              <p class="_date">01/10/2020 das 8h as 12h</p>

              <strong>Meeting de musculação</strong>
              <span class="_pa">Palestras</span>
              <p class="_date">01/10/2020 das 8h as 12h</p>
            </main>

            <div class="_bottom">
              <strong>R$ 150,00</strong>
              <button>Comprar</button>
            </div>
          </div>
          <div class="_col">
            <div class="_top">2 DAY PASS</div>
            <main>
              <p>
                Esse Pacote dá direito a participação integral ao evento do dia 01/10 e a entrada
                VIP para as palestras que acontecem nos espaço do evento.
              </p>
              <span>CURSOS INCLUIDOS</span>

              <strong>Meeting de musculação</strong>
              <span class="_pa">Palestras</span>
              <p class="_date">01/10/2020 das 8h as 12h</p>

              <strong>Meeting de musculação</strong>
              <span class="_pa">Palestras</span>
              <p class="_date">01/10/2020 das 8h as 12h</p>
            </main>

            <div class="_bottom">
              <strong>R$ 220,00</strong>
              <button>Comprar</button>
            </div>
          </div>
          <div class="_col">
            <div class="_top">3 DAY PASS</div>
            <main>
              <p>
                Esse Pacote dá direito a participação integral ao evento do dia 01/10 e a entrada
                VIP para as palestras que acontecem nos espaço do evento.
              </p>
              <span>CURSOS INCLUIDOS</span>

              <div class="_meetings">
                <strong>Meeting de musculação</strong>
                <span class="_pa">Palestras</span>
                <p class="_date">01/10/2020 das 8h as 12h</p>

                <strong>Meeting de musculação</strong>
                <span class="_pa">Palestras</span>
                <p class="_date">01/10/2020 das 8h as 12h</p>

                <strong>Meeting de musculação</strong>
                <span class="_pa">Palestras</span>
                <p class="_date">01/10/2020 das 8h as 12h</p>

                <strong>Meeting de musculação</strong>
                <span class="_pa">Palestras</span>
                <p class="_date">01/10/2020 das 8h as 12h</p>
              </div>
            </main>

            <div class="_bottom">
              <strong>R$ 260,00</strong>
              <button>Comprar</button>
            </div>
          </div>
        </div>
      </div>
    </section>

        
    <section class="container-fluid s_destaque reduzido">
      <div class="container-fav">
        <div class="_content fade">
          <div class="_line">
            <button>
              <img src="{{ asset('site/img/arrowright.svg') }}" alt="Seta para direita" />
            </button>
          </div>
          <h6></h6>
          <div class="_svg">
            <img src="{{ asset('site/img/svg_poweroflife_white.svg') }}" alt="Power of Life" />
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          </p>
        </div>
      </div>
    </section>

    <section class="container-fluid s_cursos _atracoes">
      <div class="container-fav">
        <div class="title">
          <h4>Cursos</h4>
          <div class="_filter">
            <nav>
              <div class="_filterItem active" data-date="03Ago">03 Ago.</div>
              <div class="_filterItem" data-date="04Ago">04 Ago.</div>
              <div class="_filterItem" data-date="05Ago">05 Ago.</div>
            </nav>
          </div>
        </div>
        <div class="_cursosList">
        
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="03Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        
        
          <div class="_curso" data-date="04Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="04Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="04Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="04Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        
        
          <div class="_curso" data-date="05Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="05Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="05Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso" data-date="05Ago">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- <section class="container-fluid s_cursos">
      <div class="container-fav">
        <div class="_title"><h4>Cursos</h4></div>
        <div class="_cursosList">
          <div class="_curso">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (1).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Meeting de musculação</h4>
                <p class="curso_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (2).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Treinamento Multifuncional</h4>
                <p class="curso_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (3).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Cross Training</h4>
                <p class="curso_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
          <div class="_curso">
            <div class="_pic">
              <img src="{{asset('site/img/curso_Pic (4).jpg')}}" alt="Imagem deste curso" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="curso_name">Musculação Feminina</h4>
                <p class="curso_description">Programa para maximizar os resultados</p>
              </div>
              <div class="_bottom">
                <p class="curso_price">R$ 38,00</p>
                <button>Comprar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <section class="container-fluid s_embaixadores">
      <div class="container-fav">
        <div class="_title"><h4>Embaixadores e Convidados</h4></div>

        <div class="_pictures">
          <img src="{{asset('site/img/pic_embaixador01.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador02.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador03.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador04.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador05.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador06.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador07.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador08.png')}}" onclick="" alt="Embaixador ENAF" />
          <img src="{{asset('site/img/pic_embaixador09.png')}}" onclick="" alt="Embaixador ENAF" />
        </div>
      </div>
    </section>

    <section class="container-fluid s_eventLocal">
      <div class="container-fav">
        <div class="_pic fade">
          <img src="{{asset('site/img/banner_local_pic.jpg')}}" alt="Local onde será realizado o evento." />
        </div>
        <div class="_text">
          <h6>Local</h6>
          <h4>Credicard Hall</h4>
          <p>Avenida das Nações Unidas, 17955 - Vila Almeida - São Paulo - SP</p>

          <a href="#">Ver no maps</a>
        </div>
      </div>
    </section>

    <section class="container-fluid s_hoteis">
      <div class="container-fav">
        <div class="title">
          <h4>Hoteis conveniados</h4>
        </div>
        <div class="_hoteisList">
          <div class="_hotel">
            <div class="_pic">
              <img src="{{asset('site/img/hotel_Pic (1).jpg')}}" alt="Imagem deste hotel" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="hotel_name">Hotel Belo Monte</h4>
                <p class="hotel_description">
                  Treinamentos para hipertrofia muscular e suplementação combinada
                </p>
              </div>
              <div class="_bottom">
                <a href="/">Saiba Mais</a>
              </div>
            </div>
          </div>
          <div class="_hotel">
            <div class="_pic">
              <img src="{{asset('site/img/hotel_Pic (2).jpg')}}" alt="Imagem deste hotel" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="hotel_name">Hotel Belo Monte</h4>
                <p class="hotel_description">& Longevidade Saudável Aplicação Prática</p>
              </div>
              <div class="_bottom">
                <a href="/">Saiba Mais</a>
              </div>
            </div>
          </div>
          <div class="_hotel">
            <div class="_pic">
              <img src="{{asset('site/img/hotel_Pic (3).jpg')}}" alt="Imagem deste hotel" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="hotel_name">Hotel Belo Monte</h4>
                <p class="hotel_description">Baseado na metodologia do CrossFit</p>
              </div>
              <div class="_bottom">
                <a href="/">Saiba Mais</a>
              </div>
            </div>
          </div>
          <div class="_hotel">
            <div class="_pic">
              <img src="{{asset('site/img/hotel_Pic (4).jpg')}}" alt="Imagem deste hotel" />
            </div>
            <div class="_content">
              <div class="_top">
                <h4 class="hotel_name">Hotel Belo Monte</h4>
                <p class="hotel_description">Programa para maximizar os resultados</p>
              </div>
              <div class="_bottom">
                <a href="/">Saiba Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('site.includes.publicidade')

 
@include("site.includes.parceiros")

@include("site.includes.footer")