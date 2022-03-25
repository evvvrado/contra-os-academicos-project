@extends('site.template.main', ['titulo' => Definition::NAME.' | Meu carrinho!'])

@section('body_attr', 'id=orcamento-carrinho')

@php
use App\Models\OrcamentoProdutosIngredientes;
use App\Models\OrcamentoProdutosAcessorios;
use App\Models\OrcamentoProduto;
use App\Models\MarcaIngrediente;
use App\Models\MarcaAcessorio;
use App\Models\Produto;
use App\Models\Parametro;
@endphp

@section('content')

@livewire('orcamento.carrinho.pagina')

@endsection

@section('scripts')
    <script>
        function escolher_produto(idproduto) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/orcamento/escolher_produto/" + idproduto,
                success: function(ret) {
                    console.log(ret)
                },
                error: function(ret) {
                    console.log("Deu muito ruim");
                    console.log(ret);
                }
            });
        }

        // $('div.up [fluid] div.close, div.up [fluid] div.niv button').click(function() {
        //     if (!$('div.up').is('[hide]')) {
        //         window.location.href = '{{ route('site.orcamento.carrinho') }}';
        //     }
        //     $('div.up').fadeOut()
        // })


        $('section.carrinho div.niv div.niv-send button').click(() => {
            window.location.href = '{{ route('site.orcamento.encerrar') }}';
        })

        function altera_ingrediente(idmarca, idingrediente, orcamentoproduto, ingrediente, nome) {

            var elem = $(".marca[mid='" + idmarca + "']");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/orcamento/ingrediente/" + idmarca + "/" + idingrediente + "/" + orcamentoproduto,
                success: function(ret) {
                    $(".caixa" + idingrediente + " .marca").each(function() {
                        if ($(this).attr("mid") != idmarca) {
                            $(this).prop("checked", false);
                        } else {
                            $(this).prop("checked", true);
                        }
                    });
                },
                error: function(ret) {
                    console.log("Deu muito ruim");
                    console.log(ret);
                }
            });
        }

        function alterar_qtd_produto(idproduto, idorcamento, qtd) {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "/orcamento/carrinho/qtd_altera/" + idorcamento + "/" + idproduto + "/" + qtd,
                success: function(ret) {
                    console.log(ret)
                    document.location.reload(true);
                },
                error: function(ret) {
                    console.log("Deu muito ruim");
                    console.log(ret);
                }
            });
        }
    </script>
@endsection
