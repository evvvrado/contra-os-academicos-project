@include('site.includes.aluno.header')



<section class="container-fluid _menu">
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li>
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li>
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
<div class="_menuMax">
    <img src="{{ asset('site/img/arrowright.svg') }}" alt="">
</div>
<section class="container-fluid _menu _mobileMenu">
    <div class="_closeButton">
        <img src="{{ asset('site/img/arrowleft.svg') }}" alt="">
    </div>
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area/">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li>
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li>
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
</div>



<section class="container-fluid _minhasMatriculas">
    <div class="container-fav">
        <div class="_top">
            <h2>Minhas Matrículas</h2>

        </div>
        <div class="_contentList">
            <div class="_matriculasList">
                @if (count($aluno->matriculas) <= 0) <h3>Ainda não há nenhuma matrícula</h3>
                    @else
                    @foreach ($aluno->matriculas as $matricula)
                    <div class="_matricula">
                        <div class="_image">
                            <img src="{{ asset($matricula->curso->thumbnail) }}" alt="">
                        </div>
                        <div class="_content">
                            <h3>{{ $matricula->curso->nome }}</h3>
                            {{-- <p>N. 558893390122</p> --}}
                            <div class="_date">
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/calendar.svg') }}" alt="">
                                </div>
                                <p>{{ date('d.m.Y', strtotime($matricula->created_at)) }}</p>
                            </div>
                            <p>Curso {{config('cursos.tipo_nome')[$matricula->curso->tipo]}}</p>
                            <button class="btn-primary" onclick="window.location.href = '{{ route('site.minha-area-matricula.conteudo', ['matricula' => $matricula]) }}'">
                                Acessar Curso
                                <div class="_svg">
                                    <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="">
                                </div>
                            </button>
                        </div>
                    </div>
                    @endforeach
                    @endif

            </div>
        </div>
    </div>
</section>

@include('site.includes.aluno.footer')
</body>

</html>


</html>