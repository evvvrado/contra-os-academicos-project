@extends('site.template.main', ['titulo' => 'Lista | ' . $lista->titulo])

@section('body_attr', 'id=lista')

@section('content')

    <section class="artigo">
        <div class="niv --row">
            <main>
                <div class="title-area">
                    <div class="roadmap">
                        <a href="#">Listas</a>
                        /
                        <a href="#">{{ $lista->categoria->nome }}</a>
                        /
                        <a href="#">{{ Str::limit($lista->titulo, 9) }}</a>
                    </div>
                    <div class="info">

                        <h1>{{ $lista->titulo }}</h1>

                        <div class="author">
                            <picture>
                                <img src="{{ asset($lista->usuario->foto) }}" alt="Foto do colunista">
                            </picture>

                            <div>
                                <span>Por {{ $lista->usuario->nome }}</span>
                                <span>{{ date('d', strtotime($lista->created_at)) }} de {{ $mes }} de
                                    {{ date('Y', strtotime($lista->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-content block-style">
                    <p>
                        {!! $lista->conteudo !!}
                    </p>
                </div>

                <div class="apoie-projeto --alternative">

                    <div class="content-side">
                        <strong>MENSAGEM DA EQUIPE</strong>

                        <strong>
                            Seu apoio é mais importante do que nunca.
                        </strong>

                        <p>
                            Desde 2014 o Contra os Acadêmicos trabalha para divulgar a boa filosofia e incentivar a
                            autoeducação. Apoiando nosso projeto, você assegura a continuidade do nosso trabalho.
                        </p>


                    <div class="buttons">
                        {{-- <button class="button">Quero apoiar</button> --}}
                        <button class="button" style="width: 100%; padding: 15px;"><a href="https://www.paypal.com/donate/?hosted_button_id=SG3AY5GSPXAHN" target="_blank">Quero apoiar</a></b>
                    </div>
                    </div>
                </div>

                <div class="actions">
                    <div class="social-buttons">
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_eye_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>{{ $lista->visitas }}</span>
                        </div>
                        {{-- <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_chat_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>{{ $comentarios->count() }}</span>
                        </div> --}}
                        <div class="icon">
                            <picture>
                                <img src="{{ asset('site/assets/img/icon_share_artigo.svg') }}" alt="Ícone">
                            </picture>
                            <span>{{ $lista->compartilhamentos }}</span>
                        </div>
                        <div class="icon" active>
                            @livewire('lista-curtir-acao', ['lista' => $lista])
                        </div>

                    </div>
                    <div class="buttons">
                        <button class="button copyurl">Quero compartilhar</button>
                    </div>
                </div>
            </main>

            <picture class="artigo-banner">
                <img src="{{ asset($lista->banner) }}" alt="Imagem principal do artigo">
            </picture>

            <aside>
                <div class="mais-autor">
                    <strong>Mais do autor</strong>
                    <picture>
                        <img src="{{ asset($lista->usuario->foto) }}" alt="">
                    </picture>

                    <ul>
                        @foreach ($mais_do_autors as $mais_do_autor)
                            <li>
                                <a
                                    href="{{ route('site.blog_detalhe', ['blog' => $mais_do_autor]) }}">{{ $mais_do_autor->titulo }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relacionados">
                    <h3>Relacionados</h3>

                    <ul>
                        @foreach ($lista_randomicos as $lista_randomico)
                            <li>
                                <a href="{{ route('site.lista_detalhe', ['lista' => $lista_randomico]) }}" class="box">
                                    <picture>
                                        <img src="{{ asset($lista_randomico->banner) }}" alt="Banner relacionados">
                                    </picture>
                                    <div class="content">
                                        <span>{{ date_format($lista_randomico->created_at, 'd/m/Y') }}</span>
                                        <strong>{{ $lista_randomico->titulo }}</strong>
                                        <p>Por {{ $lista_randomico->usuario->nome }}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>

        <div class="niv">
            <div class="cursos">
                <div class="title-area">
                    <picture><img src="{{ asset('site/assets/img/logos_fade_artigo.png') }}" alt="Logo sumindo efeito">
                    </picture>

                    <h3 class="--hr-bar">Cursos em destaque</h3>

                    <div>
                        <button class="scroll-left">
                            <img src="{{ asset('site/assets/img/arrow_left_biblioteca.svg') }}" alt="">
                        </button>
                        <button class="scroll-right">
                            <img src="{{ asset('site/assets/img/arrow_right_biblioteca.svg') }}" alt="">
                        </button>
                    </div>
                </div>

                <div class="card-area">
                    <div class="scroll">
                        @foreach ($cursos as $curso)
                            <a href="#" class="box-destaque"
                                style="background-image: url('{{ asset($curso->banner) }}')">
                                <div class="tags">
                                    {{-- <span class="--filled">Novo</span> --}}
                                    <span>{{ $curso->categoria->nome }}</span>
                                </div>
                                <h2>{{ $curso->titulo }}</h2>
                            </a>
                        @endforeach
                    </div>
                </div>

                <a href="#" class="--plus">Acessar todos os cursos</a>
            </div>
        </div>
    </section>
    </section>
@endsection


@section('scripts')
    <script>
        $('section.artigo div.niv div.cursos div.title-area div button.scroll-left').click(() => {
            $('section.artigo div.niv div.cursos div.card-area').scrollLeft($(
                'section.artigo div.niv div.cursos div.card-area div.scroll').scrollLeft() - $(
                'section.artigo div.niv div.cursos div.card-area div.scroll a.box-destaque').width());
        })
        $('section.artigo div.niv div.cursos div.title-area div button.scroll-right').click(() => {
            $('section.artigo div.niv div.cursos div.card-area').scrollLeft($(
                'section.artigo div.niv div.cursos div.card-area div.scroll').scrollLeft() + $(
                'section.artigo div.niv div.cursos div.card-area div.scroll a.box-destaque').width());
        })

        $('button.--references').click(() => {
            $('#referencias_modal').showModal();
        })

        window.addEventListener('toastr:error', event => {
            toastr.error(event.detail.message);
        });

        window.addEventListener('toastr:success', event => {
            toastr.success(event.detail.message);
        });
    </script>

@endsection
