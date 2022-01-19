<footer>
    <div fluid>
        <div class="niv">
            <div class="niv-row">
                <picture class="logo">
                    <img src="{{ asset('/site/assets/img/footer_logo.svg') }}" alt="Logo do Birittas">
                </picture>

                <nav>
                    <ul>
                        <li><a href="/">HOME</a></li>
                        <li><a href="/">ORÇAMENTO</a></li>
                        <li><a href="/">LOJA BIRITTAS</a></li>
                        <li><a href="/">CURSOS BIRITTAS</a></li>
                        <li><a href="/">CONTATO</a></li>
                        <li><a href="/">BLOG</a></li>
                    </ul>
                </nav>

                <div class="certificate">
                    <img src="{{ asset('/site/assets/img/certifi 1.png') }}" alt="certificado">
                    <img src="{{ asset('/site/assets/img/certifi 2.png') }}" alt="certificado">
                    <img src="{{ asset('/site/assets/img/certifi 3.png') }}" alt="certificado">
                </div>
            </div>

            <div class="niv-row">
                <div class="social">
                    <span>
                        <p>Estamos nas redes sociais:</p>
                    </span>

                    <div class="midias">
                        <a href="{{  Definition::FACEBOOK }}">
                            <img src="{{ asset('/site/assets/img/logo_facebook.svg') }}" alt="logo facebook" title="Acesse nosso facebook">
                        </a>
                        <a href="{{  Definition::INSTAGRAM }}">
                            <img src="{{ asset('/site/assets/img/logo_instagram.svg') }}" alt="logo instagram" title="Acesse nosso instagram">
                        </a>
                        <a href="{{  Definition::YOUTUBE }}">
                            <img src="{{ asset('/site/assets/img/logo_youtube.svg') }}" alt="logo youtube" title="Acesse nosso youtube">
                        </a>
                        <a href="{{  Definition::TWITTER }}">
                            <img src="{{ asset('/site/assets/img/logo_twitter.svg') }}" alt="logo twitter" title="Acesse nosso twitter">
                        </a>
                        <a href="{{  Definition::LINKEDIN }}">
                            <img src="{{ asset('/site/assets/img/logo_linkedin.svg') }}" alt="logo linkedin" title="Acesse nosso linkedin">
                        </a>
                    </div>
                </div>
                <div class="rate">
                    <img src="{{ asset('/site/assets/img/rate.png') }}" alt="Certificado de ReclameAQUI">
                </div>
            </div>
        </div>

        <div class="copyright niv">
            <p>
                Copyright © {{now()->year}} BIRITTAS
            </p>

            <p>
                Birittas – CNPJ: 30.121.426/0001-64
            </p>

            <p>
                Desenvolvido por

                <picture>
                    <a href="www.7seventrends.com.br">
                        <img src="{{ asset('/site/assets/default/_logo7seven_footer.png') }}" alt="Logo 7Seven" title="Acesse o nosso site">
                    </a>
                </picture>
            </p>

        </div>
    </div>
</footer>