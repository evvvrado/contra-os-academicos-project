@include("site.includes.head")
<title>ENAF - @if(session()->get("tipo") == "congresso") Nossas Congressos @else Nossos Eventos @endif</title>

<body id="nossoscursos">

    @include("site.includes.navbar")



    <section class="container-fluid s_search">
        <div class="container-fav">
            <div class="_title">
                <h4>@if(session()->get("tipo") == "congresso") Nossas Congressos @else Nossos Eventos @endif</h4>
            </div>
            <div class="_filters">
                <label>
                    <select name="" id="">
                        <option value="Todos">Todos</option>
                        <option value="Todos">Todos</option>
                    </select>
                </label>

                <label>
                    <input type="text" name="" id="" placeholder="Busca" />
                    <button name="" class="_icon">
                        <img src="{{ asset('site/img/icon_lupa.svg') }}" alt="Ícone de Lupa" />
                    </button>
                </label>
            </div>
        </div>
    </section>
    <section class="container-fluid s_events">
        <div class="container-fav">
            <div class="content">

                <div class="_eventList">
                    @foreach($eventos->sortBy('inicio') as $evento)


                    <script>

                    </script>
                    <div class="_event" @if($evento->clinica) onclick="window.location.href = '{{route('site.clinica', ['slug' => $evento->slug])}}'" @else onclick="window.location.href =
                        '{{route('site.evento', ['slug' => $evento->slug])}}'" @endif>
                        <div class="_pic">
                            <img src="{{ asset($evento->thumbnail) }}" alt="Imagem do {{$evento->nome}}" />
                        </div>
                        <div class="_content">
                            <div class="_top">
                                <h4 class="event_name">{{$evento->nome}}</h4>
                                <p class="event_local">{{$evento->local_endereco}}</p>
                            </div>
                            <div class="_bottom">
                                <span class="event_date">{{date('d/m', strtotime($evento->inicio))}} a {{date('d/m', strtotime($evento->fim))}}</span>
                                <p class="event_time">Horário: {{ $evento->hora_inicio }} às {{ $evento->hora_fim }}</p>
                                <button>Ver mais</button>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @include('site.includes.publicidade')
                </div>
            </div>
        </div>
    </section>


    @include("site.includes.parceiros")
    @include('site.includes.destaque')



    @include("site.includes.footer")