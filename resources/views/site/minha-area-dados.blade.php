@include('site.includes.aluno.header')


<section class="container-fluid _menu">
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li>
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li>
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>
    </div>

</section>
<div class="_menuMax">
    <img src="{{ asset('site/img/arrowright.svg') }}" alt="">
</div>
<section class="container-fluid _menu _mobileMenu">
    <div class="_closeButton">
        <img src="{{ asset('site/img/arrowleft.svg') }}" alt="">
    </div>
    <div class="container-fav">
        <nav>
            <ul>
                <li>
                    <a href="/minha-area/">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/user.svg') }}" alt="">
                        </div>
                        Minha Área
                    </a>
                </li>
                <li>
                    <a href="/minha-area/compras">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/bag.svg') }}" alt="">
                        </div>
                        Meus Pedidos
                    </a>
                </li>
                <li>
                    <a href="/minha-area/matriculas">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/page.svg') }}" alt="">
                        </div>
                        Minhas Matrículas
                    </a>
                </li>
                <li class="_active">
                    <a href="/minha-area/dados">
                        <div class="svg">
                            <img src="{{ asset('site/img/sistema/clipboard.svg') }}" alt="">
                        </div>
                        Meus Dados
                    </a>
                </li>
            </ul>
        </nav>
        <div class="_user">
            <div class="_img">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/user.svg') }}" style="max-width: 100%;
                            min-height: unset;
                            min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <div class="_text">
                Olá <span class="_username">{{ explode(' ', session()->get('aluno')['nome'])[0] }}</span>
                <a href="{{ route('site.aluno.deslogar') }}" class="_sair">
                    Sair
                </a>
            </div>
        </div>

</section>
</div>

<section class="container-fluid _meusDados">
    <div class="container-fav">
        <div class="_right">
            <div class="_top">
                <h2>Meus Dados</h2>
            </div>
            <form action="{{ route('site.minha-area-dados.salvar') }}" method="POST" class="_dados">
                @csrf
                <div class="dados-div">
                    <label>
                        <input type="text" name="nome" value="{{ $aluno->nome }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/userData.svg') }}" alt="">
                        </div>

                    </label>

                    <label>
                        <input type="email" name="email" value="{{ $aluno->email }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/mailData.svg') }}" alt="">
                        </div>
                    </label>

                    <label>
                        <input type="tel" name="cpf" value="{{ $aluno->cpf }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/userData.svg') }}" alt="">
                        </div>
                    </label>

                    <label>
                        <input type="tel" name="telefone" value="{{ $aluno->telefone }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/phoneData.svg') }}" alt="">
                        </div>
                    </label>
                </div>

                <div class="dados-div">

                    <label>
                        <input type="text" name="rua" placeholder="Rua, 180" value="{{ $aluno->rua }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/doorData.svg') }}" alt="">
                        </div>
                    </label>

                    <label>
                        <input type="text" name="cidade" placeholder="Cidade" value="{{ $aluno->cidade }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/pinData.svg') }}" alt="">
                        </div>
                    </label>

                    <label>
                        <input type="text" name="estado" placeholder="Estado" value="{{ $aluno->estado }}" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/pinData.svg') }}" alt="">
                        </div>
                    </label>

                    <label>
                        <input type="text" name="pais" value="Brasil" class="_dadosComponent">
                        <div class="_icon">
                            <img src="{{ asset('site/img/sistema/flagData.svg') }}" alt="">
                        </div>
                    </label>

                    <button class="btn-primary">Salvar</button>
                </div>

            </form>
            <div class="_top">
                <h2>Alterar Senha de Acesso</h2>
            </div>
            <form class="_dados">
                <label>
                    <input type="password" name="senha_antiga" placeholder="Senha Antiga" value="" class="_dadosComponent">
                    <div class="_icon">
                        <img src="{{ asset('site/img/sistema/lockData.svg') }}" alt="">
                    </div>
                </label>
                <label>
                    <input type="password" name="senha_nova" value="" placeholder="Senha Nova" class="_dadosComponent">
                    <div class="_icon">
                        <img src="{{ asset('site/img/sistema/lockData.svg') }}" alt="">
                    </div>
                </label>

                <button class="btn-primary">Salvar</button>
            </form>

        </div>
        <div class="_left">
            <div class="userImg">
                @if (!$aluno->avatar)
                <img src="{{ asset('site/img/sistema/userBig.svg') }}" style="max-width: 100%;
                        min-height: unset;
                        min-width: unset;" alt="">
                @else
                <img src="{{ asset($aluno->avatar) }}" style="width: 100%; height: 100%; object-fit: cover;" alt="">
                @endif
            </div>
            <a href="" id="select_avatar">Alterar Imagem</a>
            <a style="display:none;     margin-left: 8.7rem;" id="ajax_loading"><img src="{{ asset('site/img/ajax-loading.gif') }}" alt="" width="50"></a>
            <form id="form-avatar" action="{{ route('site.minha-area-dados.avatar.alterar') }}" method="post" enctype="multipart/form-data" style="display: none;">
                @csrf
                <input type="file" id="avatar" name="avatar">
            </form>
        </div>
    </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@include('site.includes.aluno.footer')
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
<script>
    $(document).ready(function() {
            $("#select_avatar").click(function(e) {
                e.preventDefault();
                $("#avatar").trigger('click');
            });
            $("#avatar").change(function() {
                $("#select_avatar").hide();
                $("#ajax_loading").show();
                $("#form-avatar").submit();
            });
        });
        $("._menuMax").click(() => {
            $("._mobileMenu").css("display", "flex");
            $("._mobileMenu").animate({
                    left: "0",
                    top: "0",
                },
                500
            );
        });
            // MASCARAS PARA OS FORMULARIOS
        $(document).ready(function () {
            $('form label input[name = "cpf"]').mask("000.000.000-00", {
                reverse: true,
            });
            $('form label input[name = "telefone"]').mask("(00) 00000-0000");
            $('form label input[name = "expiracao"]').mask("00/0000");
            $('form label input[name= "numero"]').mask("0000 0000 0000 0000");
        });


</script>

</html>