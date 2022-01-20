@extends('site.template.main', ['titulo' => Definition::NAME.' | Fale conosco.'])

@section("body_attr", "id=contato")


@section('content')

<section class="contato">
    <div class="niv">
        <div class="niv-nav">
            <nav>
                <h2 active>CONTATO</h2>
                <h2>FAQ</h2>
            </nav>
        </div>

        <div class="niv-content contato">
            <div class="title">
                <h2>Envie sua mensagem</h2>
                <p>A sua opinião é muito importante para nós.</p>
            </div>

            <main>
                <div class="form">
                    <form action="javascript: void(0)">
                        <label>
                            <input type="text" name="nome" placeholder="Nome completo" required>
                        </label>
                        <label>
                            <input type="e-mail" name="email" placeholder="e-mail@example.com.br" required>
                        </label>
                        <label>
                            <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required>
                        </label>
                        <label>
                            <input type="text" name="cidade" placeholder="Cidade">
                        </label>

                        <label>
                            <textarea name="mensagem" placeholder="Escreva uma mensagem *" required></textarea>
                        </label>

                        <button>
                            Quero levar minha festa além
                        </button>

                    </form>
                </div>

                <div class="atendimento">
                    <span>
                        <picture>
                            <img src="{{ asset('site/assets/img/icon_phone.svg') }}" alt="ícone telefone">
                        </picture>

                        <p>{{ Definition::TELEFONE }}</p>
                    </span>

                    <span>
                        <picture>
                            <img src="{{ asset('site/assets/img/icon_email.svg') }}" alt="ícone email">
                        </picture>

                        <p>{{ Definition::EMAIL }}</p>
                    </span>

                    <span>
                        <picture>
                            <img src="{{ asset('site/assets/img/icon_pin.svg') }}" alt="ícone pin">
                        </picture>

                        <p>{{ Definition::ENDERECO }}</p>
                    </span>

                    <div>
                        <h2>Atendimento</h2>

                        <p>Terça a Sábado das 16h às 22h</p>
                        <p>
                            Curta nossas redes sociais e fique por dentro de tudo o que acontece.
                        </p>
                    </div>


                </div>
            </main>
        </div>

        <div class="niv-content faq">
            <div class="top">
                <h2>Tem dúvidas sobre nosso orçamento?</h2>
                <p>Pode deixar que a gente te expica</p>
            </div>

            <div class="content">
                <details>
                    <summary>Como funciona o orçamento online</summary>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id amet, ultrices aliquam et gravida. In libero natoque dolor donec pellentesque neque, dui in. Tristique aliquam vitae
                        proin pharetra, neque sed sit nullam ullamcorper. Eu sed ipsum tortor amet, mi ut quisque quisque.
                    </p>
                </details>


                <details>
                    <summary>Como funciona o orçamento online</summary>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id amet, ultrices aliquam et gravida. In libero natoque dolor donec pellentesque neque, dui in. Tristique aliquam vitae
                        proin pharetra, neque sed sit nullam ullamcorper. Eu sed ipsum tortor amet, mi ut quisque quisque.
                    </p>
                </details>


                <details>
                    <summary>Como funciona o orçamento online</summary>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id amet, ultrices aliquam et gravida. In libero natoque dolor donec pellentesque neque, dui in. Tristique aliquam vitae
                        proin pharetra, neque sed sit nullam ullamcorper. Eu sed ipsum tortor amet, mi ut quisque quisque.
                    </p>
                </details>


                <details>
                    <summary>Como funciona o orçamento online</summary>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id amet, ultrices aliquam et gravida. In libero natoque dolor donec pellentesque neque, dui in. Tristique aliquam vitae
                        proin pharetra, neque sed sit nullam ullamcorper. Eu sed ipsum tortor amet, mi ut quisque quisque.
                    </p>
                </details>


                <details>
                    <summary>Como funciona o orçamento online</summary>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id amet, ultrices aliquam et gravida. In libero natoque dolor donec pellentesque neque, dui in. Tristique aliquam vitae
                        proin pharetra, neque sed sit nullam ullamcorper. Eu sed ipsum tortor amet, mi ut quisque quisque.
                    </p>
                </details>


                <details>
                    <summary>Como funciona o orçamento online</summary>

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Id amet, ultrices aliquam et gravida. In libero natoque dolor donec pellentesque neque, dui in. Tristique aliquam vitae
                        proin pharetra, neque sed sit nullam ullamcorper. Eu sed ipsum tortor amet, mi ut quisque quisque.
                    </p>
                </details>
            </div>
        </div>
    </div>
</section>

<section class="mapa">
    <div class="niv">
        <iframe src="https://www.google.com/maps?q=[{{ Definition::ENDERECO}}]&output=embed" height="400" style="width: 100%; max-width: 100%; border: 0" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection