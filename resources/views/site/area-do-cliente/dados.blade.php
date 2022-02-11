@extends('site.template.area-do-cliente')

@section('id', 'dados-cliente')

@section('content')
@php
$cliente = \App\Models\Lead::find(session()->get('cliente')['id']);
@endphp

<section class="mA_dados">
    <div class="container-fluid">
        <div class="container-fav">
            <div class="col">

                <h2>Meus Dados</h2>


                <form action="{{ route('minha-area.cliente-dados.salvar') }}" method="POST">
                    @csrf

                    <div class="dados">
                        <label>
                            <input type="text" name="nome" placeholder="Nome Completo" value="{{ $cliente->nome }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/userData.svg') }}" alt="">
                            </picture>


                        </label>

                        <label>
                            <input type="email" name="email" placeholder="email@example.com.br" value="{{ $cliente->email }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/mailData.svg') }}" alt="">
                            </picture>

                        </label>

                        <label>
                            <input type="tel" name="cpf" placeholder="000.000.000-00" value="{{ $cliente->cpf }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/userData.svg') }}" alt="">
                            </picture>

                        </label>

                        <label>
                            <input type="tel" name="telefone" placeholder="(00) 0 0000 0000" value="{{ $cliente->telefone }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/phoneData.svg') }}" alt="">
                            </picture>

                        </label>

                    </div>

                    <div class="dados">

                        <label>
                            <input type="text" name="rua" placeholder="Rua, 180" value="{{ $cliente->rua }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/doorData.svg') }}" alt="">
                            </picture>

                        </label>

                        <label>
                            <input type="text" name="cidade" placeholder="Cidade" value="{{ $cliente->cidade }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/pinData.svg') }}" alt="">
                            </picture>

                        </label>

                        <label>
                            <input type="text" name="estado" placeholder="Estado" value="{{ $cliente->estado }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/pinData.svg') }}" alt="">
                            </picture>

                        </label>

                        <label>
                            <input type="text" name="pais" placeholder="Brasil" value="{{ $cliente->pais }}">

                            <picture>
                                <img src="{{ asset('site/assets/sistema/flagData.svg') }}" alt="">
                            </picture>

                        </label>

                        <button>Salvar</button>
                    </div>

                </form>

                <h2>Alterar Senha de Acesso</h2>


                <form action="{{route('minha-area.cliente-dados.senha.alterar')}}" method="POST">
                    @csrf
                    <label>
                        <input type="password" name="senha_antiga" placeholder="Senha Antiga" value="">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/lockData.svg') }}" alt="">
                        </picture>

                    </label>
                    <label>
                        <input type="password" name="senha_nova" value="" placeholder="Senha Nova">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/lockData.svg') }}" alt="">
                        </picture>

                    </label>

                    <button class="btn-primary">Salvar</button>
                </form>
            </div>




            <div class="col">
                <picture>
                    @if (!$cliente->avatar)
                    <img src="{{ asset('site/assets/sistema/userBig.svg') }}" alt="">
                    @else
                    <img src="{{ asset($cliente->avatar) }}" alt="">
                    @endif
                </picture>

                <a href="" id="select_avatar">Alterar Imagem</a>
                <a style="display:none;     margin-left: 8.7rem;" id="ajax_loading"><img src="{{ asset('site/assets/sistema/ajax-loading.gif') }}" alt="" width="50"></a>
                <form id="form-avatar" action="{{ route('minha-area.cliente-dados.avatar.alterar') }}" method="post" enctype="multipart/form-data" style="display: none;">
                    @csrf
                    <input type="file" id="avatar" name="avatar">
                </form>
            </div>

        </div>
</section>

</html>
@endsection



@section('scripts')
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
            $('form label input[name = "cpf"]').mask("000.000.000-00", {
                reverse: true,
            });
            $('form label input[name = "telefone"]').mask("(00) 00000-0000");
            $('form label input[name = "expiracao"]').mask("00/0000");
            $('form label input[name= "numero"]').mask("0000 0000 0000 0000");
        });
</script>
@endsection