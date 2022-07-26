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


                    @livewire('pesquisa-index')

                    <div class="socials">
                        <a target="_blank" href="https://www.facebook.com/contraosacademicos/ "><i
                                class="fa-brands fa-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/Contracademicos"><i
                                class="fa-brands fa-twitter"></i></a>
                        <a target="_blank" href="https://www.youtube.com/contraosacademicos"><i
                                class="fa-brands fa-youtube"></i></a>
                        <a target="_blank" href="https://www.instagram.com/contraosacademicos/"><i
                                class="fa-brands fa-instagram"></i></a>
                        <a target="_blank" href="https://open.spotify.com/show/6GsLO1ybRUI53JgiYm5nTR"><i
                                class="fa-brands fa-spotify"></i></a>

                    </div>

                    <div class="buttons">

                        @if (session()->get('usuario_site'))
                            <div class="user-nav">
                                <a href="{{ route('minha_area.index') }}">
                                    <picture>
                                        <img src="{{ asset(App\Models\UsuarioSite::whereId(session()->get('usuario_site')['id'])->first()->foto ? App\Models\UsuarioSite::whereId(session()->get('usuario_site')['id'])->first()->foto : 'admin/imagens/listas/1/sem_foto.png') }}"
                                            alt="">
                                    </picture>
                                </a>

                                <div class="user-item">
                                    <a href="#">
                                        <i class="fa-solid fa-bell"></i>
                                    </a>
                                </div>
                                <div class="user-item">
                                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                </div>
                            </div>
                        @else
                            <a href="{{ route('site.lancamento') }}" class="button">
                                ASSINE
                            </a>

                            <a href="{{ route('minha_area.index') }}" class="button">
                                LOGIN
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
                        <li><a href="{{ route('site.blog') }}">BLOG</a></li>
                        <li><a href="{{ route('site.revistas') }}">REVISTA</a></li>
                        <li><a href="{{ route('site.listas') }}">LISTAS</a></li>
                        <li><a href="https://livrariacontraosacademicos.com.br">LIVRARIA</a></li>
                        <li><a href="{{ route('site.sobre') }}">PROJETO</a></li>
                        <li><a href="{{ route('site.contato') }}">CONTATO</a></li>
                        <li class="mobile-login">
                            <div class="buttons">
                                <a href="{{ route('site.lancamento') }}" class="button">
                                    ASSINE
                                </a>

                                @if (session()->get('usuario_site'))
                                    <a href="{{ route('minha_area.index') }}" class="button">
                                        MINHA ÁREA
                                    </a>
                                @else
                                    <a href="{{ route('minha_area.index') }}" class="button">
                                        LOGIN
                                    </a>
                                @endif
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
