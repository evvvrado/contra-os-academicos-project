@include('site.includes.head')
<body class="form" style="overflow:hidden;">
    <main class="main">
        <section id="form">
            <div class="base">
                <div class="roxo">
                    <div>
                        <div class="logos">
                            <a title="Home" href="/"><img src="{{asset('site/img/logoABS.png')}}" width="115" height="115" alt="Logomarca Associação Brasileira de Sommeliers - Brasil"></a>
                            <a target="_blank" rel="noopener" title="Navegar para ASI" href="https://www.asi.info/"><img src="{{asset('site/img/logoASI.png')}}" width="115" height="115" alt="Logomarca ASI"></a>
                        </div>
                        <button class="voltar" onclick="history.back()">Voltar</button>
                        <p class="texto">Utilize os mesmos dados informados no momento do cadastro.</p>
                        <div class="links">
<!--								<a target="_blank" rel="noopener" title="Telefone" href="tel:"><img src="{{asset('site/img/ico_fone.svg')}}" width="25" height="25" alt="Ícone Telefone"></a>
                            <a class="whatsapp" target="_blank" rel="noopener" title="WhatsApp" href="https://api.whatsapp.com/send?phone=55"><img src="{{asset('site/img/ico_whats.svg')}}" width="27" height="27" alt="Ícone WhatsApp"></a>-->
                            <a target="_blank" rel="noopener" title="Email" href="mailto:{{$configuracoes->email}}"><img src="{{asset('site/img/ico_envelope.svg')}}" width="25" height="25" alt="Ícone envelope">{{$configuracoes->email}}</a>
                        </div>
                        <p class="dev">Desenvolvido por <a href="https://7seventrends.com" title="Clique para visitar o site da 7 Seven Trends" target="_blank" rel="nofollow noopener"><img width="68" height="16" src="{{asset('site/img/logo_7seven.svg')}}" alt="7Seven Trends"></a></p>
                    </div>
                </div>
                <div class="form">
                    <form method="post" action="javascript:void(0);" novalidate="novalidate">
                        <h2 class="id">Recuperação de senha</h2>
                        <span class="aviso"></span>
                        <label>
                            <span>E-mail</span>
                            <input class="input" type="email" name="email" placeholder="seuemail@seuemail.com">
                        </label>
                        <label>
                            <span>Telefone (com DDD)</span>
                            <input class="input" type="tel" name="celular" placeholder="(00) 0 0000-0000">
                        </label>
                        <button class="botao">Recuperar</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="{{ asset('site/js/script.js') }}"></script>
    <script src="/_ifl1/ifl1formatador.js"></script>
    <script src="/_ifl1/ifl1validador.js"></script>
</body>

</html>
