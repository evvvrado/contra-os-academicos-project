@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />

    <style>
        #dados_evento>div {
            width: 33% !important;
        }

    </style>
@endsection

@section('titulo')
    Orçamentos / Orçamento
@endsection

@section('conteudo')
    
    @livewire('orcamentos.visualizar.pagina', ['orcamento' => $orcamento])
    <!-- Modal -->
    <div class="modal fade" id="modalDesconto" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Configuração de desconto</h5>
                    <i data-bs-dismiss="modal" aria-label="Close" class="fas fa-times cpointer"></i>
                </div>
                <div class="modal-body bg-modal">
                    @livewire('orcamentos.visualizar.modal-desconto', ["orcamento" => $orcamento])
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('admin/js/jquery.mask.min.js') }}"></script>
    <script>
        function imprimir() {
            var conteudo = document.getElementById('imprimir').innerHTML;
            var telaImpressao = window.open('about:blank');

            telaImpressao.document.write(conteudo);
            telaImpressao.window.print();
            telaImpressao.window.close();
        }



        $('input[name = "telefone"]').mask("(00) 00000-0000");
        $('input[name = "expiracao"]').mask("00/0000");
        $('input[name= "numero"]').mask("0000 0000 0000 0000");
        $('input[name= "cep"]').mask("00.000-000");
    </script>
@endsection
