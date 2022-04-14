@extends('site.template.main', ['titulo' => Definition::NAME.' | Orçamento Concluído!'])

@section('body_attr', 'id=orcamento-carrinho class=concluido')

@section('styles')
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
@endsection



@section('content')

    <section class="carrinho">
        <div class="niv">
            <div class="niv-content">

                <h2>SEU ORÇAMENTO FOI CONCLUÍDO COM SUCESSO!</h2>


                <picture>
                    <img src="{{ asset('site/assets/img/drink_modal.png') }}" alt="">
                </picture>


                <p>Complete seu cadastro registrando uma senha para a sua conta.</p>

                <div class="button_list">
                    <button class="sucess"
                        onclick="window.location.href = '{{ route('site.orcamento.finalizado') }}'">Completar</button>
                    <button class="alert"
                        onclick="window.location.href = '{{ route('site.index') }}'">Sair</button>
                </div>
            </div>

        </div>
    </section>



@endsection


@section('scripts')
    <script>
        function add(valor) {
            var qtd = $("#qtd").val();
            $("#qtd").val(parseInt(qtd) + parseInt(1));

            console.log(valor * (parseInt(qtd) + parseInt(1)))

            document.getElementById("valor_total").innerHTML = "R$ " + (valor * (parseInt(qtd) + parseInt(1)));
        }

        function remove(valor) {
            var qtd = $("#qtd").val();

            if (qtd == 0) {
                $('#qtd').css({
                    border: "1px red solid"
                });

                setTimeout(() => {
                    $('#qtd').css({
                        border: "1px #cfdbdd solid"
                    });
                }, 1000);
            } else {
                $("#qtd").val(parseInt(qtd) - parseInt(1));

                document.getElementById("valor_total").innerHTML = "R$ " + (valor * (parseInt(qtd) - parseInt(1)));
            }
        }

        $('section.carrinho div.niv div.niv-send button').click(() => {
            window.location.href = '/';
        })
    </script>
@endsection
