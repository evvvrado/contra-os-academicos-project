@include("site.includes.head")
<title>{{ $evento->nome }}</title>

<body id="clinica">

  @include("site.includes.navbar")

  <section class="container-fluid s_hero" style="background-image: url('{{ asset($evento->banner) }}')">
    <div class="container-fav">
      <div class="_h1 fade">
        <h6>{{ date('d/m', strtotime($evento->inicio)) }} a {{ date('d/m', strtotime($evento->fim)) }}</h6>
        <h4>{{ $evento->nome }}</h4>
        <p>
          {!! $evento->descricao !!}
        </p>
      </div>
    </div>
  </section>

  <section class="container-fluid s_eventoVideo">
    <div class="container-fav">
      <div class="_text">
        <h4>{{ $evento->titulo }}</h4>
        <p>
          {!! $evento->sobre !!}
        </p>
      </div>

      <div class="_video">
        {!! \App\Classes\Util::convertYoutube($evento->video) !!}
      </div>
    </div>

    <div class="blackout"></div>
  </section>


  <section class="container-fluid s_destaque" style="background-image: url('/{{ $evento->banner_divulgacao}}');    background-size: cover;">
    <div class="container-fav">
    </div>
  </section>

  <section class="container-fluid s_tabela">
    <div class="container-fav">
      <div class="_title">
        <h4>Temos o pacote ideal para você</h4>
      </div>

      <div class="_table fade">
        @foreach ($evento->pacotes->take(3) as $pacote)
        <div class="_col">
          <div class="_top">{{ $pacote->nome }}</div>
          <main>
            <p>
              {!! $pacote->descricao_pacote !!}
            </p>
            <span>CURSOS INCLUIDOS</span>

            <div class="_meetings">
              @foreach ($pacote->cursos as $curso)
              <strong>{{ $curso->nome }}</strong>
              <span class="_pa">{{ config('cursos.tipo_nome')[$curso->tipo] }}</span>
              <p class="_date"></p>
              @endforeach
            </div>
            {{-- <strong>Meeting de musculação</strong>
            <span class="_pa">Palestras</span>
            <p class="_date">01/10/2020 das 8h as 12h</p> --}}
          </main>

          <div class="_bottom">
            <strong>R$ {{ number_format($pacote->valor, 2, ',', '.') }}</strong>
            <button onclick="window.location.href ='{{ route('site.carrinho-adicionar', ['curso' => $pacote]) }}'">Comprar</button>
          </div>
        </div>
        @endforeach
        {{-- <div class="_col">
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
        </div> --}}
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
            @php
            $cont = 0;
            @endphp
            @foreach ($evento->cursos_ligados->unique('data')->sortBy('data') as $curso)
            <div class="_filterItem @if ($cont == 0) active @endif" data-date="{{ date('dm', strtotime($curso->data)) }}">
              {{ date('d/m', strtotime($curso->data)) }}</div>
            @php
            $cont++;
            @endphp
            @endforeach
          </nav>
        </div>
      </div>
      <div class="_cursosList">
        @foreach ($evento->cursos_ligados as $curso)
        <div class="_curso" data-date="{{ date('dm', strtotime($curso->data)) }}" onclick="window.location.href = '{{route('site.curso', ['slug' => $curso->curso->slug])}}'">
          <div class="_pic">
            <img src="{{ asset($curso->curso->thumbnail) }}" alt="{{ $curso->curso->nome }}" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="curso_name">{{ $curso->curso->nome }}</h4>
              <p class="curso_description">
                {!! $curso->curso->descricao !!}
              </p>
            </div>
            <div class="_bottom">
              <p class="curso_price">R$ {{ number_format($curso->curso->valor, 2, ',', '.') }}</p>
              <button onclick="window.location.href ='{{ route('site.carrinho-adicionar', ['curso' => $curso]) }}'">Comprar</button>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  {{-- <section class=" container-fluid s_cursos">
    <div class="container-fav">
      <div class="_title">
        <h4>Cursos</h4>
      </div>
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
      <div class="_title">
        <h4>Embaixadores e Convidados</h4>
      </div>

      <div class="_pictures">
        @foreach ($evento->participantes as $participante)
        <picture>
          <img src="{{ asset($participante->foto) }}" onclick="window.location.href = '{{ $participante->url }}'" title="{{ $participante->nome }}" alt="{{ $participante->nome }}" />
        </picture>
        @endforeach
        {{-- <img src="{{ asset('site/img/pic_embaixador02.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador03.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador04.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador05.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador06.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador07.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador08.png') }}" onclick="" alt="Embaixador ENAF" />
        <img src="{{ asset('site/img/pic_embaixador09.png') }}" onclick="" alt="Embaixador ENAF" /> --}}
      </div>
    </div>
  </section>

  <section class="container-fluid s_eventLocal">
    <div class="container-fav">
      <div class="_pic fade">
        <img src="{{ asset($evento->local_foto) }}" alt="{{ $evento->local_nome }}" />
      </div>
      <div class="_text">
        <h6>Local</h6>
        <h4>{{ $evento->local_nome }}</h4>
        <p>{{ $evento->local_endereco }}</p>

        <a target="_blank" href="https://maps.google.com/?q={{$evento->local_endereco}}">Ver no maps</a>
      </div>
    </div>
  </section>

  @if (count($evento->hoteis) > 0)
  <section class="container-fluid s_hoteis">
    <div class="container-fav">
      <div class="title">
        <h4>Hoteis conveniados</h4>
      </div>
      <div class="_hoteisList">
        @foreach ($evento->hoteis as $hotel)
        <div class="_hotel">
          <div class="_pic">
            <img src="{{ asset($hotel->foto) }}" alt="{{ $hotel->nome }}" />
          </div>
          <div class="_content">
            <div class="_top">
              <h4 class="hotel_name">{{ $hotel->nome }}</h4>
              <p class="hotel_description">
                {{ $hotel->endereco }}
              </p>
            </div>
            <div class="_bottom">
              <a href="{{ $hotel->url }}">Saiba Mais</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  @endif

  @include('site.includes.publicidade')


  @include("site.includes.parceiros")

  @include("site.includes.footer")

  <script>
    $(`#clinica .s_cursos._atracoes .container-fav ._cursosList ._curso:not( ._curso[data-date="${$("._filter nav ._filterItem.active").data("date")}"])`).hide();

    $("._filter nav ._filterItem").click(function () {
                var filter = $(this).data("date");

                $("._filter nav ._filterItem").removeClass("active");

                $(this).addClass("active");
                $(
                    `#clinica .s_cursos._atracoes .container-fav ._cursosList ._curso`
                ).hide();
                $(
                    `#clinica .s_cursos._atracoes .container-fav ._cursosList ._curso[data-date="${filter}"]`
                ).show();
                // console.log(filter);
            });
  </script>