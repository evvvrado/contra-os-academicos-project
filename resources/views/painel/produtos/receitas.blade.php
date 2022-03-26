@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css" />
@endsection

@section('titulo')
    <a style="color: unset" href="{{ route('painel.produtos') }}">Produtos</a> / {{ $produto->nome }} / Receitas
@endsection

@section('conteudo')
    <div class="row">
        <div class="col-12">
            <div class="row" style="padding: 0 15px">
                <div class=" col-sm-12 col-md-6 mb-3"
                    style=" border-radius: 5px; background-color:var(--principal); width: 100%;">
                    <a name="" id="button-add" class="btn" style="height: 100%; padding-left: 0;"
                        style="padding-left: 0;" onclick="Livewire.emit('carregaModalCadastroReceita')">
                        <i class="bx bx-plus" aria-hidden="true"></i> Adicionar
                    </a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatable"
                                    class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline"
                                    role="grid" aria-describedby="datatable_info" style="width: 1185px;">
                                    <thead>
                                        <tr role="row">
                                            <th style="width: 70%">Nome</th>
                                            <th style="width: 10%;">Custo Adicional</th>
                                            <th style="width: 10%;">Qtd. Ingredientes</th>
                                            <th style="width: 10%" class="text-center"></th>
                                        </tr>
                                    </thead>
                                    @livewire('receitas.consultar.datatable', ['produto' => $produto])
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('receitas.consultar.modal-cadastro', ['produto_id' => $produto->id])
    @livewire('receitas.consultar.ingredientes.modal-cadastro', ['produto_id' => $produto->id])
@endsection


@section('scripts')

@endsection
