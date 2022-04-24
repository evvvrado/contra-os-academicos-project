@extends('site.template.main', ['titulo' => Definition::NAME.' | Surpreenda-se'])

@section('body_attr', 'id=orcamento-lista')

@section('content')

    @livewire('orcamento.produtos.pagina')

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
    </script>

@endsection
