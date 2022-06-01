    <div class="backdrop" show>
        <div class="card">
            <img src="{{ asset('site/assets/img/logo_branca_footer.png') }}" alt="Logo {{ NAME }}">
        </div>
    </div>

    <header>
        <div fluid>
            <div class="niv">
                <a href="/" title="Voltar para home" class="logo-header">
                    <img src="{{ asset('site/assets/img/logo_preta_header.png') }}" alt="Logo Contras os Acadêmicos">
                </a>

                <nav>
                    <ul>
                        <li>
                            <a href="#" title="menu">
                                <img src="{{ asset('site/assets/img/icon_hamburguer_header.svg') }}"
                                    alt="Ícone do menu">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Livraria
                            </a>
                        </li>
                    </ul>
                </nav>

                <div>
                    <div class="search-button">
                        <img src="{{ asset('site/assets/img/icon_search_header.svg') }}" alt="Ícone de pesquisa">
                    </div>


                    <a href="#" class="button">
                        Assine
                    </a>
                </div>

            </div>

            <div class="user-circle">
                <a href="{{ route('minha_area.login') }}" title="Acessar área">
                    <img src="{{ asset('site/assets/img/icon_user_header.svg') }}" alt="Ícone de usuário">
                </a>
            </div>
        </div>
    </header>
