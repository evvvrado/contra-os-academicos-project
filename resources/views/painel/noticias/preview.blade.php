@include('site.includes.head')
<body class="cursos" style="overflow:hidden;">
    @include('site.includes.bodyHeader', [
        "classe" => "blog"    
    ])
    <main class="main">
        <section id="blogItem">
            <article>
                <header>
                    <h2>{{$noticia->titulo}}</h2>
                    <hr>
                    <nav>
                        <address class="author">
                            <a rel="author" title="Enviar email para o autor" href="mailto:">
                                <img width="27" height="27" src="{{asset('site/img/ico_user.svg')}}" alt="Ícone usuário">
                                <span>
                                    {{$noticia->autor}}
                                </span>
                            </a>
                        </address>
                        <div class="direita">
                            <a href="."><img width="20" height="20" src="{{asset('site/img/ico_compart.svg')}}" alt="Icone compartilhar"><span>Share</span></a>
                            <a class="whatsapp" href="https://api.whatsapp.com/send?text=Artigo blog ABS Brasil: {{ url()->current() }}" title="Compartilhar via WhatsApp" target="_blank" rel="nofollow noopener"><img width="27" height="27" src="{{asset('site/img/ico_whats.svg')}}" alt="WhatsApp"></a>
                            <a href="http://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" title="Compartilhar via Facebook" target="_blank" rel="nofollow noopener"><img width="27" height="27" src="{{asset('site/img/ico_face.svg')}}" alt="Facebook"></a>
                            <a href="mailto:?subject=Artigo blog ABS Brasil&amp;body={{ url()->current() }}" title="Compartilhar via Email" target="_blank" rel="nofollow noopener"><img width="25" height="25" src="{{asset('site/img/ico_envelope.svg')}}" alt="Email"></a>
                            <a href="https://twitter.com/home?status={{ url()->current() }}" title="Compartilhar via Twitter" target="_blank" rel="nofollow noopener"><img width="23" height="18" src="{{asset('site/img/ico_twitter.svg')}}" alt="Twitter"></a>
                        </div>
                    </nav>
                    <img style="max-width: 100%;" src="{{asset($noticia->banner)}}" alt="Ilustração blog {{ url()->current() }}">
                </header>
                <main>
                    <h3>{{$noticia->subtitulo}}</h3>
                   {!! $noticia->conteudo !!}
                </main>
            </article>
        </section>
    </main>
    @include('site.includes.footer')
</body>

</html>
