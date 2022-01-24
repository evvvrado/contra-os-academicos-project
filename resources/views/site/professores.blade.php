@include("site.includes.head")

<title>Nosso time de Professores </title>


<body id="professores">

    @include("site.includes.navbar")

    <section class="container-fluid s_hero">
        <div class="container-fav">
            <div class="_h1 fade">
                <h3>PROFESSORES</h3>
            </div>
        </div>
    </section>

    <div class="container-fluid _nossotime">
        <div class="container-fav">
            <div class="_title">
                <h4>Nosso Time de Professores Online</h4>
                <div class="_icons">
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                    <img src="{{ asset('site/img/icon_folder@x2.svg') }}" alt="Íconde de Página" />
                </div>
            </div>

            <div class="_pesquisa">
                <div class="_filter">
                    <span>Atuação</span>
                    <ul>
                        @foreach(config("professores.atuacao_nome") as $codigo => $atuacao)
                        <li>
                            <div data-filter=".{{Illuminate\Support\Str::slug($atuacao)}}" class="_checkbox"></div>
                            <span>{{$atuacao}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="_lista">
                    @foreach($professores as $professor)
                    <div class="_Professor {{Illuminate\Support\Str::slug(config('professores.atuacao_nome')[$professor->atuacao])}}" @if($professor->hotsite && $professor->hotsite->slug)
                        onclick="window.location.href = '{{route('site.treinador', ['slug' => $professor->hotsite->slug])}}'" @endif>
                        <img src="{{ asset($professor->foto) }}" alt="{{$professor->nome}}" title="{{ $professor->nome}}" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @include('site.includes.publicidade')



    @include('site.includes.parceiros')

    @include("site.includes.footer-expanded")


    <script>
        var totalAtuacao =  new Array();

    @foreach(config("professores.atuacao_nome") as $codigo => $atuacao)
        totalAtuacao.push("{!! $atuacao !!}")
    @endforeach

        $("._checkbox").click(function () {
            var allSelected = 0;

            $(this).toggleClass("_checked");

            $(`._Professor`).addClass("off");

            $("._checkbox").each(function () {
                if (!$(this).hasClass("_checked")) {
                    allSelected++;
                    return 0;
                }

                $("._Professor" + $(this).data("filter")).removeClass("off");
            });

            if (allSelected == totalAtuacao.length) {
                $(`._Professor`).removeClass("off");
            }
        });
    </script>