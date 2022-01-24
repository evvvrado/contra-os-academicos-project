@include("site.includes.head")
<title>Nossos Cursos </title>


<body id="nossoscursos">

    @include("site.includes.navbar")


    <section class="container-fluid s_search">
        <div class="container-fav">
            <div class="_title">
                <h4>Nossos Cursos</h4>
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

    <section class="container-fluid s_cursos">
        <div class="container-fav">
            <div class="_cursosList">
                @php
                $cont = 0;
                @endphp
                @foreach($cursos->where('destaque', 1) as $curso)
                <div class="_curso" onclick="window.location.href = '{{route('site.curso', ['slug' => $curso->slug])}}'">
                    <div class="_pic">
                        <img src="{{ asset($curso->thumbnail) }}" alt="{{$curso->nome}}" />
                    </div>
                    <div class="_content">
                        <div class="_top">
                            <h4 class="curso_name">{{$curso->nome}}</h4>
                            <p class="curso_description">
                                {!! $curso->descricao !!}
                            </p>
                        </div>
                        <div class="_bottom">
                            <p class="curso_price">R$ {{number_format($curso->valor, 2, ",", ".")}}</p>
                            <button>Ver mais</button>
                        </div>
                    </div>
                </div>
                @php
                $cont++;
                @endphp
                @endforeach
                @include('site.includes.publicidade')
            </div>
        </div>
    </section>



    @include("site.includes.parceiros")


    @include('site.includes.destaque')


    @include("site.includes.footer")