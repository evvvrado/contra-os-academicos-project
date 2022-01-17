@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('titulo')
    Financeiro / <a style="color: unset" href="{{ route('painel.vendas') }}">Vendas</a> / Visualizar
@endsection

@section('conteudo')
    <div class="row">


        <div class=" col-12 mb-3" style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
            <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;" style="padding-left: 0;"
                href="{{ route('painel.categorias.cadastro') }}">
                <i class="bx bx-plus invisible" aria-hidden="true"></i> </a>
        </div>

        <div class="row ">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <style>
                            tr {
                                /* border: 1px solid rgb(196, 196, 196); */
                            }

                            td {
                                padding: 10px !important;
                            }

                            table {
                                width: 100%;
                            }

                            .card-title {
                                padding: 15px;
                                border-radius: 5px;
                                background-color: var(--principal);
                                width: 100%;

                                color: white;
                            }

                            .row {
                                display: flex;
                                align-items: flex-start;
                                justify-content: center;

                                width: 100%;
                            }

                        </style>

                        <div class="col-12 col-md-5">
                            <h4 class="card-title">Detalhes</h4>
                            {{-- <hr> --}}
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Aluno:</b></td>
                                        <td class="px-2">{{ $venda->aluno->nome }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Forma:</b></td>
                                        <td class="px-2">{{ config('pagamento.formas')[$venda->forma] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Gateway:</b></td>
                                        <td class="px-2">{{ config('gateways.nomes')[$venda->gateway] }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Desconto:</b></td>
                                        <td class="px-2">R${{ number_format($venda->desconto, 2, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total:</b></td>
                                        <td class="px-2">R${{ number_format($venda->total, 2, ',', '.') }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Parcelas:</b></td>
                                        <td class="px-2">{{ $venda->parcelas }}</td>
                                    </tr>
                                    <tr>
                                        <td><b>Valor da Parcela:</b></td>
                                        <td class="px-2">
                                            R${{ number_format($venda->valor_parcela, 2, ',', '.') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @if ($venda->forma == 2)
                            <div class="col-12 col-md-7">
                                <h4 class="card-title">Parcelas do Carnê</h4>
                                {{-- <hr> --}}
                                <table class="table">
                                    <thead>
                                        <th>
                                        <td>Valor</td>
                                        <td>Status</td>
                                        <td>Vencimento</td>
                                        <td>Link</td>
                                        </td>
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($venda->carne->parcelas as $parcela)
                                            <tr>
                                                <td><b>{{ $parcela->parcela }}</b></td>
                                                <td>R${{ number_format($parcela->valor, 2, ',', '.') }}</td>
                                                <td>{{ config('gerencianet.status')[$parcela->status] }}</td>
                                                <td>{{ date('d/m/Y', strtotime($parcela->data_expiracao)) }} @if ($parcela->status != 'canceled' && $parcela->status != 'paid')
                                                        - <button class="btn-primary btn"><a style="color: white;"
                                                                class="cpointer" data-bs-toggle="modal"
                                                                data-bs-target="#modalAlterarVencimentoParcela{{ $parcela->id }}">Alterar</a></button>
                                                    @endif
                                                </td>
                                                <td><button class="btn-primary btn"><a style="color:white"
                                                            href="{{ $parcela->link }}">Visualizar</a></button></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @endif
                    </div>

                    <div class="row mt-5">
                        <div class="col-12 col-md-5">
                            <h4 class="card-title">Pagamento</h4>
                            {{-- <hr> --}}
                            <table>
                                <tbody>
                                    @if ($venda->forma == 0)
                                        <tr>
                                            <td><b>Charge id:</b></td>
                                            <td class="px-2">{{ $venda->boleto->charge_id }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Código de Barras:</b></td>
                                            <td class="px-2">{{ $venda->boleto->codigo_barra }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Boleto:</b></td>
                                            <td class="px-2"><button class="btn-primary btn"><a
                                                        style="color: white;" href="{{ $venda->boleto->link }}"
                                                        target="_blank">Visualizar</a></button></td>
                                        </tr>
                                        <tr>
                                            <td><b>Vencimento:</b></td>
                                            <td class="px-2">
                                                {{ date('d/m/Y', strtotime($venda->boleto->expira)) }} @if ($venda->boleto->status != 'canceled' && $venda->boleto->status != 'paid')
                                                    - <button class="btn-primary btn"><a style="color: white;"
                                                            class="cpointer" data-bs-toggle="modal"
                                                            data-bs-target="#modalAlterarVencimento">Alterar</a> </button>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><b>Status:</b></td>
                                            <td class="px-2">
                                                {{ config('gerencianet.status')[$venda->boleto->status] }} @if ($venda->boleto->status != 'canceled' && $venda->boleto->status != 'paid')
                                                    - <button class="btn-primary btn"><a style="color: white;"
                                                            href="{{ route('painel.venda.boleto.cancelar', ['boleto' => $venda->boleto]) }}">Cancelar
                                                            Boleto</a> </button> @endif
                                            </td>
                                        </tr>
                                    @elseif($venda->forma == 1)
                                        <tr>
                                            <td><b>Cartão:</b></td>
                                            <td class="px-2">{{ $venda->cartao->numero }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Status:</b></td>
                                            <td class="px-2">{{ config('cielo.status')[$venda->cartao->status] }}
                                            </td>
                                        </tr>
                                        @if ($venda->cartao->status != 2)
                                            <tr>
                                                <td>
                                                    <button class="btn-primary btn my-4">
                                                        <a style="color: white;"
                                                            href="{{ route('painel.venda.cielo.estornar', ['venda' => $venda]) }}">Estornar
                                                            pagamento</a>
                                                    </button>
                                                </td>
                                                <td>
                                                </td>
                                            </tr>
                                        @endif
                                    @else
                                        <tr>
                                            <td><b>Carnê id:</b></td>
                                            <td class="px-2">{{ $venda->carne->carnet_id }}</td>
                                        </tr>
                                        <tr>
                                            <td><b>Carnê:</b></td>
                                            <td class="px-2"><button class="btn-primary btn"><a
                                                        style="color: white;" href="{{ $venda->carne->link }}"
                                                        target="_blank">Visualizar</a> </button></td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end row -->

        @if ($venda->forma == 0)
            <div class="modal fade" id="modalAlterarVencimento" tabindex="-1" role="dialog"
                aria-labelledby="modalAlterarVencimentoLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form
                                action="{{ route('painel.venda.boleto.vencimento.alterar', ['boleto' => $venda->boleto]) }}"
                                method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-12">
                                        <label for="nome">Nova data</label>
                                        <input type="date" class="form-control" name="data" id="data"
                                            aria-describedby="helpId" min="{{ date(' Y-m-d') }}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-end">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if ($venda->forma == 2)

            @foreach ($venda->carne->parcelas as $parcela)
                <div class="modal fade" id="modalAlterarVencimentoParcela{{ $parcela->id }}" tabindex="-1"
                    role="dialog" aria-labelledby="modalAlterarVencimentoParcela{{ $parcela->id }}Label"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form
                                    action="{{ route('painel.venda.carne.parcela.vencimento.alterar', ['parcela' => $parcela]) }}"
                                    method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="nome">Nova data</label>
                                            <input type="date" class="form-control" name="data" id="data"
                                                aria-describedby="helpId" min="{{ date(' Y-m-d') }}">
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-12 text-end">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        @endif
    @endsection

    @section('scripts')
        <!-- Required datatable js -->
        <script src="{{ asset('admin/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    @endsection
