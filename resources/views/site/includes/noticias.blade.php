@php
    use App\Models\Noticia;
    use Illuminate\Support\Facades\DB;
@endphp

<section class="noticias">
    <div class="niv">
        <div class="niv-top">
            <h2>Notícias</h2>

            <a href="/">
                Ver todos

                <picture>
                    <img src="{{ asset('/site/assets/img/icon_arrow_right_black.svg') }}" alt="seta para direita">
                </picture>
            </a>
        </div>

        <div class="niv-content">
            <div class="scroll">

                @php
                    $noticias = Noticia::select(DB::raw("id, preview, titulo, publicacao"))
                    ->orderBy('id', 'Desc')
                    ->limit('3')
                    ->get();
                @endphp

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

                    <a href="{{ route('site.blog-detalhes', ['noticia' => $noticia]) }}">
                        <div class="box" style="background-image: url('{{ $noticia->preview }}')">

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
                    </a>

                @endforeach



            </div>
        </div>


        <div class="niv-controller">
            <picture>
                <img src="{{ asset('/site/assets/img/blog_left.svg') }}" alt="seta esquerda">
            </picture>
            <picture>
                <img src="{{ asset('/site/assets/img/blog_right.svg') }}" alt="seta direita">
            </picture>
        </div>
    </div>
</section>