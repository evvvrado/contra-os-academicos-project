@extends('site.template.main', ['titulo' => Definition::NAME.' | Nossos serviços'])

@section("body_attr", "id=servicos")


@section('content')

<section class="servicos">
    <div class="niv">
        <div class="niv-top">
            <nav>
                <ul>
                    <li data-nav="corporativos" active>
                        <h2>Corporativos</h2>
                    </li>
                    <li data-nav="casamentos">
                        <h2>Casamentos</h2>
                    </li>
                    <li data-nav="aniversarios">
                        <h2>Aniversários</h2>
                    </li>
                    <li data-nav="formatura">
                        <h2>Formatura</h2>
                    </li>
                </ul>
            </nav>
        </div>


        <div class="niv-content corporativos">
            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Corporativo 1</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>

            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_double_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Corporativo 2</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>


            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Corporativo 3</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>



            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_double_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Corporativo 4</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>
        </div>


        <div class="niv-content casamentos">
            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Casamento</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>

            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_double_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Mini Wedding</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>


            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Destination Wedding</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>



            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_double_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Bodas de casamento</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>
        </div>


        <div class="niv-content aniversarios">
            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Aniversarios</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>

            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_double_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Debutantes</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>


            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Tematicos</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>
        </div>


        <div class="niv-content formatura">
            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Colegial</h2>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>

            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_double_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Universitaria</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>


            <div class="row">
                <picture>
                    <img src="{{ asset('site/assets/img/corporativo_banner.png') }}" alt="imagem representativa">
                </picture>

                <main>
                    <h2>Pós-graduação</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus
                        turpis
                        vitae dolor felis, amet interdum in.

                        <br><br>

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tempus turpis vitae dolor felis, amet interdum in.
                    </p>

                    <button>Saiba mais</button>
                </main>
            </div>
        </div>

    </div>
</section>



@include('site.includes.tempo')

<section class="cadastro">
    <div class="niv">
        <div class="niv-left">
            <h4>Cadastro</h4>
            <h2>Aqui tem tudo pra você. Completo pra dedéu.</h2>

            <p>Você pode começa pra já. Veja como é fácil levar algo diferente para seu evento.</p>

            <span>
                <h2>
                    01
                </h2>

                <div>
                    <strong>Cadastro Inicial</strong>
                    <p>Você pode preencher os dados aí do lado.</p>
                </div>
            </span>


            <span>
                <h2>
                    02
                </h2>

                <div>
                    <strong>A gente te envia um email</strong>
                    <p>Você nos responde com mais dados do seu evento.</p>
                </div>
            </span>


            <span>
                <h2>
                    03
                </h2>

                <div>
                    <strong>Fechamos os detalhes e pronto</strong>
                    <p>Agora é só curtir os diversos driks que iremos preparar para você e seus convidados.</p>
                </div>
            </span>
        </div>

        <div class="niv-right">
            <form action="javascript: void(0)">
                <label>
                    <span>Nome</span>
                    <input type="text" name="nome" placeholder="Nome completo" required>
                </label>
                <label>
                    <span>E-mail</span>
                    <input type="e-mail" name="email" placeholder="e-mail@example.com.br" required>
                </label>
                <label>
                    <span>Telefone</span>
                    <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required>
                </label>

                <button>
                    Quero levar minha festa além
                </button>

            </form>

            <p>Leve o melhor para sua festa com a Birittas</p>
        </div>
    </div>
</section>

@endsection