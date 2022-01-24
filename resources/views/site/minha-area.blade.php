@include('site.includes.aluno.header')


<section class="container-fluid _menu">
    <div class="container-fav">
        <nav>
            <ul>
                <li class="_active">
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
                <li>
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
                <li class="_active">
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
                <li>
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
                <img src="{{ asset($aluno->avatar) }}" style="max-width: 100%;" alt="">
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
            <h2>Minha Área</h2>
        </div>
        <div class="_scrollMatriculas">

            <div class="_matriculasList _expanded">
                <div class="_matricula">
                    <div class="_image">
                        <img src="{{ asset('site/img/sistema/Icone (2).png') }}" alt="">
                    </div>
                    <div class="_content">
                        <h3>Cursos</h3>
                        <p>{{count($aluno->matriculas)}} Matrícula</p>
                        <button class="btn-primary" onclick="window.location.href = '/minha-area/matriculas'">
                            + VER CURSOS
                            <div class="_svg">
                                <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="">
                            </div>
                        </button>
                    </div>

                </div>
                <div class="_matricula">
                    <div class="_image">
                        <img src="{{ asset('site/img/sistema/Icone (3).png') }}" alt="">
                    </div>
                    <div class="_content">
                        <h3>Clube de Experiências</h3>
                        <p>Em breve...</p>
                        {{-- <button class="btn-primary" style="background-color: orange;" onclick="window.location.href = '/minha-area/compras'">
                            + VER EVENTOS
                            <div class="_svg">
                                <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="">
                            </div>
                        </button> --}}
                    </div>

                </div>
                <div class="_matricula">
                    <div class="_image">
                        <img src="{{ asset('site/img/sistema/Icone (1).png') }}" alt="">
                    </div>
                    <div class="_content">
                        <h3>Treinamento</h3>
                        <p>Em breve...</p>
                        {{-- <button class="btn-primary" style="background-color: green;" onclick="window.location.href = '/minha-area/compras'">
                            QUERO ME ASSOCIAR
                            <div class="_svg">
                                <img src="{{ asset('site/img/sistema/buttonArrowRight.svg') }}" alt="">
                            </div>
                        </button> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@include('site.includes.aluno.footer')
</body>

</html>