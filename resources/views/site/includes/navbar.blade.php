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
                            <a href="javascript: void(0)" title="menu">
                                <img src="{{ asset('site/assets/img/icon_hamburguer_header.svg') }}"
                                    alt="Ícone do menu">
                            </a>
                        </li>
                    </ul>
                </nav>

                <div>


                    <div class="search-button">
                        <input type="text">

                        <picture>
                            <img src="{{ asset('site/assets/img/icon_search_header.svg') }}" alt="Ícone de pesquisa">
                        </picture>
                    </div>

                    <div class="socials">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-soundcloud"></i></a>

                    </div>

                    <div class="buttons">
                        <a href="#" class="button">
                            Assinar
                        </a>

                        @if(session()->get("usuario_site"))
                            <a href="{{ route('minha_area.index') }}" class="button">
                                Minha Área
                            </a>
                        @else 
                            <a href="{{ route('minha_area.index') }}" class="button">
                                Login
                            </a>
                        @endif
                    </div>
                </div>

            </div>
            {{-- <div class="user-circle">
                <a href="{{ route('minha_area.index') }}" title="Acessar área">
                    <img src="{{ asset('site/assets/img/icon_user_header.svg') }}" alt="Ícone de usuário">
                </a>
            </div> --}}
        </div>

        <div fluid class="sub-menu">
            <div class="niv">
                <nav>
                    <ul>
                        <li><a href="#">BLOG</a></li>
                        <li><a href="#">REVISTA</a></li>
                        <li><a href="#">LISTAS</a></li>
                        <li><a href="#">LIVRARIA</a></li>
                        <li><a href="#">PROJETO</a></li>
                        <li><a href="#">CONTATO</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
