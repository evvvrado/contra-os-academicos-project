@extends('site.template.main', ['titulo' => 'Revista | ' . $revista->titulo])

@section('body_attr', 'id=artigo')

@section('content')

    <div id="referencias_modal" class="modal">
        <div class="niv">
            <div class="box">
                <div class="title-area">
                    <h2>Referências</h2>

                    <button class="cancel">
                        <img src="{{ asset('site/assets/img/icon_close_modal.svg') }}" alt="Ícone de fechar"
                            title="Fechar caixa">
                    </button>
                </div>

                <div class="content">
                    <div class="scroll">
                        {!! $revista->referencias !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="close-modal"></div>
    </div>

    <section class="artigo">
        <div class="niv --row">
            <main>
                <div class="main-content">
                    <div class="title-area">
                        <div class="roadmap">
                            <a href="#">Revistas</a>
                            /
                            <a href="#">{{ $revista->categoria->nome }}</a>
                            /
                            <a href="#">{{ Str::limit($revista->titulo, 9) }}</a>
                        </div>
                        <div class="info">

                            <h1>{{ $revista->titulo }}</h1>

                            <div class="author">
                                <picture>
                                    <img src="{{ asset($revista->autor->foto) }}" alt="Foto do colunista">
                                </picture>

                                <div>
                                    <span>Por {{ $revista->autor->nome }}</span>
                                    <div>
                                        <span>{{ date('d', strtotime($revista->created_at)) }} de {{ $mes }} de
                                            {{ date('Y', strtotime($revista->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                    if (isset(session()->get("usuario_site")["assinante"])) {
                        if(session()->get("usuario_site")["assinante"] == 0 OR session()->get("usuario_site")["assinante"] == ""){
                ?>
                    <div class="text-content block-style">
                        <p>
                            {!! Str::limit($revista->conteudo, 800) !!}
                        </p>
                    </div>

                    <?php
                        }  else {
                ?>
                    <div class="text-content block-style">
                        <p>
                            {!! $revista->conteudo !!}
                        </p>
                    </div>
                    <?php 
                        }
                    } else {
                ?>
                    <div class="text-content block-style">
                        <p>
                            {!! Str::limit($revista->conteudo, 800) !!}
                        </p>
                    </div>
                    <?php
                    }
                ?>

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
                                <button class="button">Assinar</button>
                                <button class="button"><a
                                        href="https://www.paypal.com/donate/?hosted_button_id=SG3AY5GSPXAHN"
                                        target="_blank">Quero apoiar</a></b>
                            </div>
                        </div>


                    </div>

                    <div class="actions">
                        <div class="social-buttons">
                            <div class="icon">
                                <picture>
                                    <img src="{{ asset('site/assets/img/icon_eye_artigo.svg') }}" alt="Ícone">
                                </picture>
                                <span>{{ $revista->visitas }}</span>
                            </div>
                            <div class="icon">
                                <picture>
                                    <img src="{{ asset('site/assets/img/icon_chat_artigo.svg') }}" alt="Ícone">
                                </picture>
                                <span>{{ $revista->comentario->count() }}</span>
                            </div>
                            <div class="icon">
                                <picture>
                                    <img src="{{ asset('site/assets/img/icon_share_artigo.svg') }}" alt="Ícone">
                                </picture>
                                <span>{{ $revista->compartilhamentos }}</span>
                            </div>
                            <div class="icon" active>
                                @livewire('revista-curtir-acao', ['revista' => $revista])
                            </div>

                            <div class="icon" active style="margin-top: -23px;">
                                @livewire('site.revista.favoritar', ['revista' => $revista])
                            </div>

                        </div>
                        <div class="buttons">
                            <button class="button --references">Referências</button>
                            <button class="button copyurl">Quero compartilhar</button>
                        </div>
                    </div>

                    @livewire('site.revista.comentarios', ['revista' => $revista])
                </div>


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
            </main>

            <picture class="artigo-banner">
                <img src="{{ asset($revista->banner) }}" alt="Imagem principal do artigo">
            </picture>

            <aside>
                <div class="mais-autor">
                    <strong>Mais do autor</strong>
                    <picture>
                        <img src="{{ asset($revista->autor->foto) }}" alt="">
                    </picture>

                    <ul>
                        @foreach ($mais_do_autors as $mais_do_autor)
                            <li>
                                <a
                                    href="{{ route('site.revista_detalhe', ['revista' => $mais_do_autor]) }}">{{ $mais_do_autor->titulo }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="relacionados">
                    <h3>Relacionados</h3>

                    <ul>
                        @foreach ($revista_randomicos as $revista_randomico)
                            <li>
                                <a href="{{ route('site.revista_detalhe', ['revista' => $revista_randomico]) }}"
                                    class="box">
                                    <picture>
                                        <img src="{{ asset($revista_randomico->banner) }}" alt="Banner relacionados">
                                    </picture>
                                    <div class="content">
                                        <span>{{ date_format($revista_randomico->created_at, 'd/m/Y') }}</span>
                                        <strong>{{ $revista_randomico->titulo }}</strong>
                                        <p>Por {{ $revista_randomico->autor->nome }}</p>
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
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
