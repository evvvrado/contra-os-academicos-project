@extends('site.template.main', ['titulo' => Definition::NAME.' | Nosso blog'])

@section("body_attr", "id=blog")


@section('content')

<section class="destaque-blog">

    <div class="niv">
        <div class="banner" style="background-image: url('/site/assets/img/blog_example.jpg')">
            <div>
                <span>
                    <picture>
                        <img src="{{ asset('site/assets/img/icon_calendar_white.svg') }}" alt="calendário ícone">
                    </picture>

                    19 jul 2021

                </span>

                <h2>Fique por dentro das tendências de driks universitário.</h2>
                <p>Autor: Tiago Borges</p>
            </div>
        </div>
    </div>
</section>

<section class="lista-blog">
    <div class="niv">
        <div class="niv-top">
            <div>
                <strong>Categorias</strong>
                <select name="categorias" id="categorias">
                    <option value="box">Selecionar categoria</option>
                    <option value="drinks">Drinks</option>
                    <option value="variedade">Variedade</option>
                    <select>
            </div>
        </div>

        <div class="niv-content">

            @foreach($noticias as $noticia)

                @php
                    $parteData = explode("-", $noticia->publicacao);

                    switch ($parteData[1]) {
                        case 1:
                            $mes = "Jan";
                            break;
                        case 2:
                            $mes = "Fev";
                            break;
                        case 3:
                            $mes = "Mar";
                            break;
                        case 4:
                            $mes = "Abr";
                            break;
                        case 5:
                            $mes = "Mai";
                            break;
                        case 6:
                            $mes = "Jun";
                            break;
                        case 7:
                            $mes = "Jul";
                            break;
                        case 8:
                            $mes = "Ago";
                            break;
                        case 9:
                            $mes = "Set";
                            break;
                        case 10:
                            $mes = "Out";
                            break;
                        case 11:
                            $mes = "Nov";
                            break;
                        case 12:
                            $mes = "Dez";
                            break;
                    }
                @endphp

                <div class="box drinks" style="background-image: url('{{ $noticia->preview }}')">

                    <div>
                        <span>
                            <picture>
                                <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                            </picture>
                            <small>{{$parteData[2]}} {{$mes}} {{$parteData[0]}}</small>
                        </span>

                        <strong>{{ $noticia->titulo }}</strong>
                    </div>


                </div>

            @endforeach

        </div>
    </div>
</section>

@endsection