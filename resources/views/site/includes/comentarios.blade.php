<style>
    body {
        background: #eee;
    }

    hr {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 0;
        border-top: 1px solid #FFFFFF;
    }

    a {
        color: #82b440;
        text-decoration: none;
    }

    .blog-comment::before,
    .blog-comment::after,
    .blog-comment-form::before,
    .blog-comment-form::after {
        content: "";
        display: table;
        clear: both;
    }

    .blog-comment {
        padding-right: 15%;
    }

    .form-control {
        display: block;
        font-family: "Open Sans";
        width: 100%;
        padding: 0.47rem 0.75rem;
        font-size: 15px;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border-radius: 0.25rem;
    }

    .blog-comment ul {
        list-style-type: none;
        padding: 0;
    }

    .blog-comment img {
        opacity: 1;
        filter: Alpha(opacity=100);
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -o-border-radius: 4px;
        border-radius: 4px;
    }

    .blog-comment img.avatar {
        position: relative;
        float: left;
        margin-left: 0;
        margin-top: 10px;
        width: 40px;
        height: 40px;
        cursor: pointer;
        background: #eaeaea;
        border-radius: 4.4rem;
    }

    .blog-comment .post-comments {
        /* border: 1px solid #eee; */
        margin-bottom: 20px;
        margin-left: 45px;
        margin-right: 0px;
        padding: 10px 20px;
        position: relative;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        -o-border-radius: 4px;
        border-radius: 4px;
        background: #fff;
        color: #6b6e80;
        position: relative;
    }

    .blog-comment .meta {
        font-size: 13px;
        color: #aaaaaa;
        padding-bottom: 4px;
        /* margin-bottom: 5px !important; */
        /* border-bottom: 1px solid #eee; */
    }

    .blog-comment ul.comments ul {
        list-style-type: none;
        padding: 0;
        margin-left: 85px;
    }

    .blog-comment-form {
        padding-right: 15%;
        padding-top: 40px;
    }

    .blog-comment h3,
    .blog-comment-form h3 {
        margin-bottom: 10px;
        margin-top: 20px;
        font-size: 26px;
        line-height: 30px;
        font-weight: 800;
    }

    .pull-right {
        float: right !important;
    }

    .custom_a {
        color: black !important;
        text-decoration: none !important;
        font-size: 16px;
        font-weight: bold;
    }

    div.actions-comment {
        margin-top: 1rem;

        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 1rem;
    }

    div.actions-comment button:not(button:last-child) {
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 100%;
        background: #eaeaea;

        display: flex;
        align-items: center;
        justify-content: center;

        transition: .32s;
    }

    div.actions-comment button:hover {
        opacity: .7;
    }

    small {
        font-size: 10px !important;
    }

    .form-label {
        display: block;
        margin-bottom: 10px;
    }

    .clearfix {}
</style>

<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-md-12">
            <div class="blog-comment">
                <hr style="border-bottom: 1px solid #eee !important;">
                <?php 
                    if (isset(session()->get("usuario_site")["assinante"])) {
                ?>
                <form method="post" action="{{ route('minha_area.comentar', ['blog' => $blog]) }}">
                    @csrf
                    <div class="mb-3">
                        <label for="commentmessage-input" class="form-label">Comentar</label>
                        <textarea name="conteudo" class="form-control" id="commentmessage-input" placeholder="Sua mensagem" rows="3"></textarea>

                        <button class="button" style="margin-top: 10px;">Enviar</button>
                    </div>
                </form>
                <?php
                    }
                ?>
                <h3 class="text-success">Coment??rios</h3>
                <hr />
                <ul class="comments">
                    @if ($comentarios->count() == 0)
                        N??o h?? coment??rios nessa publica????o.
                    @endif
                    @foreach ($comentarios as $comentario)
                        <li class="clearfix">
                            <img src="{{ asset('admin/imagens/usuarios/sem_foto.png') }}" class="avatar"
                                alt="">
                            <div class="post-comments">
                                <p class="meta">
                                    <a class="custom_a" style="margin-right: 1rem" href="#">
                                        {{ $comentario->usuario_site->nome }}</a>
                                    <small>{{ date('d', strtotime($comentario->created_at)) }} de
                                        {{ substr($comentario->created_at->formatLocalized('%B'), 0, 3) }},
                                        {{ date('Y', strtotime($comentario->created_at)) }}</small> &nbsp;

                                </p>
                                <p>
                                    {{ $comentario->conteudo }}
                                </p>


                                <br>
                                <small>Essa avalia????o foi ??til?</small>

                                <div class="actions-comment">
                                    <button>
                                        <img src="{{ asset('site/assets/img/icon_like.svg') }}" alt="">
                                    </button>

                                    <button>
                                        <img src="{{ asset('site/assets/img/icon_dislike.svg') }}" alt="">
                                    </button>
                                    |
                                    <button>
                                        <small>DENUNCIAR</small>
                                    </button>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
