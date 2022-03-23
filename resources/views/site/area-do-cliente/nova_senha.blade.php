@extends('site.template.area-do-cliente')

@section('id', 'dados-cliente')

@section('content')
@php
$cliente = \App\Models\Cliente::find(session()->get('lead')['id']);
@endphp

<section class="mA_dados criar_senha">
    <div class="container-fluid">
        <div class="container-fav">
            <div class="col">

                <h2>Criar Senha de Acesso</h2>
                <p>Nesse primeiro acesso precisamos que defina uma senha para seu registro!</p>
                <br>
                <br>
                <form action="{{route('minha-area.cliente-dados.nova_senha_salvar')}}" method="POST">
                    @csrf
                    <label>
                        <input type="password" name="senha" placeholder="Digite sua senha" value="">
                        <picture>
                            <img src="{{ asset('site/assets/sistema/lockData.svg') }}" alt="">
                        </picture>

                    </label>
                    <button class="btn-primary">Salvar</button>
                </form>
            </div>

            <div class="col">

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