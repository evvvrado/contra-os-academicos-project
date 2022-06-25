{{-- <div style="height:2000px"></div> --}}

<footer>
    <div fluid>
        <div class="niv">
            <div class="logo-content">
                <a href="#" class="logo">
                    <img src="{{ asset('site/assets/img/logo_branca_footer.png') }}" alt="Logo {{ NAME }}">
                </a>

                <p>Surgiu com o objetivo de melhorar o acesso aos estudos de Filosofia para todos aqueles que desejam
                    aprofundar-se na busca pelo conhecimento e, principalmente, pela verdade.</p>

                <a href="#" class="button">
                    Quero apoiar
                </a>

                <ul class="social">
                    <li>
                        <a href="{{ FACEBOOK }}">
                            <img src="{{ asset('site/assets/img/icon_facebook_footer.svg') }}" alt="Ícone rede social"
                                title="Acessar Facebook">

                        </a>
                    </li>
                    <li>
                        <a href="{{ INSTAGRAM }}">
                            <img src="{{ asset('site/assets/img/icon_instagram_footer.svg') }}"
                                alt="Ícone rede social" title="Acessar Instagram">

                        </a>
                    </li>
                    <li>
                        <a href="{{ TWITTER }}">
                            <img src="{{ asset('site/assets/img/icon_twiter_footer.svg') }}" alt="Ícone rede social"
                                title="Acessar Twitter">

                        </a>
                    </li>
                    <li>
                        <a href="{{ YOUTUBE }}">
                            <img src="{{ asset('site/assets/img/icon_youtube_footer.svg') }}" alt="Ícone rede social"
                                title="Acessar Youtube">

                        </a>
                    </li>
                </ul>

                <p>© Contra os Acadêmicos {{ date('Y') }} All Rights Reserved</p>
            </div>

            <div class="categorias-content">
                <h2>Categorias</h2>

                <ul>
                    <li><a href="{{ route('site.blog') }}">Blog</a></li>
                    <li><a href="{{ route('site.contato') }}">Contato</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Podcast</a></li>
                </ul>
                <ul>
                    <li><a href="#">Fórum</a></li>
                    <li><a href="#">Listas</a></li>
                    <li><a href="#">Sobre</a></li>
                    <li><a href="#">Vídeos</a></li>
                </ul>
            </div>

            <div class="newsletter-content">
                <form action="javascript:void(0)" method="POST">
                    <picture class="selo">
                        <img src="{{ asset('site/assets/img/selo_footer.png') }}" alt="Selo do {{ NAME }}">
                    </picture>

                    <h3>Assine nossa News</h3>

                    <label>
                        <input type="e-mail" maxlength="60" placeholder="Qual seu e-mail?">
                    </label>

                    <label>
                        <input type="checkbox" name="aceitar-termos" id="aceitar-termos">

                        <span>Li e aceito os <a href="#" class="--blue">termos de uso</a></span>
                    </label>

                    <button type="submit" class="button">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</footer>
