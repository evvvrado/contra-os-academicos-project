@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    #dados_evento>div {
        width: 33% !important;
    }
</style>
@endsection

@php
use App\Models\Produto;
use App\Models\OrcamentoProdutosIngredientes;
use App\Models\ProdutosIngrediente;
use App\Models\MarcaIngrediente;
use App\Models\OrcamentoServico;
use App\Models\OrcamentoProduto;
@endphp

@section('titulo')
Leads / Orçamentos
@endsection

@section('conteudo')

@php
$parteData = explode("-", $orcamento->data);
$dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
@endphp

<div id="imprimir">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Situação</label>
                        <select name="situacao" class="form-control" id="">
                            <option value="0" selected="">Aguardando Aprovação</option>
                            <option value="1">Aprovado</option>
                            <option value="-1">Reprovado</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15">Orçamento #{{ $orcamento->id }}</h5>
                        </div>
                    </div>

                    <h5 class="font-size-15 mt-4">Dados do Lead:</h5>

                    <div style="display: flex; justify-content:space-between; width:100% !important; flex-wrap: wrap;">
                        <div style="flex: 33%">
                            <strong>Nome</strong>
                            <p class="text-muted">{{ $lead->nome }}</p>
                        </div>

                        <div style="flex: 33%">
                            <strong>E-mail</strong>
                            <p class="text-muted">{{ $lead->email }}</p>
                        </div>

                        <div style="flex: 33%">
                            <strong>Telefone</strong>
                            <p class="text-muted">{{ $lead->telefone }}</p>
                        </div>
                    </div>

                    <hr>

                    <h5 class="font-size-15 mt-4">Dados do Evento:</h5>

                    <div id="dados_evento" style="display: flex; justify-content:space-between; width:100% !important; flex-wrap: wrap;">
                        <div>
                            <strong>Tipo</strong>
                            <p class="text-muted">{{ $orcamento->tipo }}</p>
                        </div>

                        <div>
                            <strong>CEP</strong>
                            <p class="text-muted">{{ $orcamento->cep }}</p>
                        </div>

                        <div>
                            <strong>Data</strong>
                            <p class="text-muted">{{ $dataInvertida }}</p>
                        </div>

                        <div>
                            <strong>Duração</strong>
                            <p class="text-muted">{{ $orcamento->duracao }}</p>
                        </div>

                        <div>
                            <strong>Outras bebidas</strong>
                            <p class="text-muted">
                                @php
                                if($orcamento->outras_bebidas == 1) {
                                $outras_bebidas = "Com Alcool";
                                } else if ($orcamento->duracao == 2){
                                $outras_bebidas = "Sem Alcool";
                                } else {
                                $outras_bebidas = "Não serão servidos";
                                }
                                @endphp
                                {{ $outras_bebidas }}
                            </p>
                        </div>

                        <div>
                            <strong>Quantidade de pessoas</strong>
                            <p class="text-muted">{{ $orcamento->qtd_pessoas }}</p>
                        </div>
                    </div>

                    {{-- <div class="row task-dates">
                        <div class="col-sm-4 col-6">
                            <div class="mt-4">
                                <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Data do Evento</h5>
                                <p class="text-muted mb-0">{{ $dataInvertida }}</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->

    <div class="row">
        {{-- <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Valores do orçamento:</h4>
                    @php
                    $total_servicos = OrcamentoServico::where('orcamento_id', $orcamento->id)
                    ->sum('valor');

                    $total_produtos = OrcamentoProduto::where('orcamento_id', $orcamento->id)
                    ->sum('valor');
                    @endphp

                    <h4>
                        <strong>Total:</strong> R$ {{ number_format($total_servicos + $total_produtos, 2, ",", ".") }}
                    </h4>
                </div>
            </div>
        </div> --}}

        <div class="col-12">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card bg-primary bg-soft">
                        <div>
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Total do Orçamento!</h5>
                                        <p>Valor total gerado pelo orçamento</p>


                                        <div class="text-muted mt-4">
                                            <h4 class="text-primary">R$ COLOCAR VALOR TOTAL</h4>
                                            <div class="d-flex">
                                                <span class="text-truncate">4 Serviços inclusos</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-copy-alt"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Drinks</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4>R$ VALOR</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12"> 25 </span> <span class="ms-2 text-truncate">Drinks</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-archive-in"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Serviços Inclusos</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4>R$ VALOR <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12"> 30 </span> <span class="ms-2 text-truncate">Serviços solicitados</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-purchase-tag-alt"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Serviços Adicionais</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4>R$ VALOR <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                        <div class="d-flex">
                                            <span class="badge badge-soft-warning font-size-12"> 0 </span> <span class="ms-2 text-truncate">Serviços solicitados</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4" onClick="imprimir()">Produtos</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle table-hover mb-0">
                            <tbody>
                                @foreach($orcamentoprodutos as $orcamentoproduto)
                                @php
                                $produto = Produto::where('id', $orcamentoproduto->produto_id)->first();
                                @endphp
                                <tr>
                                    <td style="width: 48px; height: 100px">
                                        <div class="avatar-sm">
                                            <img style="object-fit: cover; width: 100%; height: 100%;" src="{{$produto->imagem_1}}">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{ $orcamentoproduto->qtd }}x {{ $produto->nome }}</h5>
                                        R$ {{ number_format($orcamentoproduto->valor, 2, ",", ".") }}
                                        <br>

                                        @foreach($produto->ingredientes as $ingrediente)
                                        @php
                                        $marca_padrao = MarcaIngrediente::where('ingrediente_id', $ingrediente->id)
                                        ->where('padrao', 'Sim')
                                        ->join('marcas', 'marcas.id', 'marcas_ingredientes.marca_id')
                                        ->first();

                                        $marca = OrcamentoProdutosIngredientes::where('ingrediente_id', $ingrediente->id)
                                        ->where('orcamentoproduto_id', $orcamentoproduto->id)
                                        ->join('marcas', 'marcas.id', 'orcamento_produtos_ingredientes.marca_id')
                                        ->first();
                                        @endphp

                                        @if($marca_padrao->marca_id == $marca->marca_id)
                                        <small><strong>{{ $ingrediente->nome }} </strong> - {{ $marca_padrao->nome }}</small> <br>
                                        @else
                                        <small><strong>{{ $ingrediente->nome }} </strong> <del>- {{ $marca_padrao->nome }} -</del>({{ $marca->nome }}</small> <br>
                                        @endif
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4" onClick="imprimir()">Lista de compras</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle table-hover mb-0">
                            <tbody>
                                @foreach($orcamentoprodutos as $orcamentoproduto)
                                @php
                                $produto = Produto::where('id', $orcamentoproduto->produto_id)->first();
                                @endphp
                                <tr>
                                    <td style="width: 48px; height: 100px">
                                        <div class="avatar-sm">
                                            <img style="object-fit: cover; width: 100%; height: 100%;" src="{{$produto->imagem_1}}">
                                        </div>
                                    </td>
                                    <td>
                                        <h5 class="font-size-14 mb-1">Energético <br> <strong>Fusion</strong> - 15 Garrafas</h5>
                                        <strong>Total: </strong> R$ {{ number_format($orcamentoproduto->valor, 2, ",", ".") }}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- end col -->


        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h5 class="font-size-15 mt-4">Serviços:</h5>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#sim" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Inclusos</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#nao" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                <span class="d-none d-sm-block">Extras</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="sim" role="tabpanel">
                            <div class="text-muted mt-4" style="max-height: 250px; overflow: auto">
                                @foreach($servicos_sim as $servico_sim)
                                <p>
                                    <i class="mdi mdi-chevron-right text-primary me-1"></i>
                                    ({{ $servico_sim->qtd }} x) {{ $servico_sim->nome }} (R$ {{ number_format($servico_sim->valor, 2, ",", ".") }})
                                </p>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" id="nao" role="tabpanel">
                            <div class="text-muted mt-4" style="max-height: 250px; overflow: auto">
                                @foreach($servicos_nao as $servico_nao)
                                <p>
                                    <i class="mdi mdi-chevron-right text-primary me-1"></i>
                                    ({{ $servico_nao->qtd }} x) {{ $servico_nao->nome }} (R$ {{ number_format($servico_nao->valor, 2, ",", ".") }})
                                </p>
                                @endforeach
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- end row -->
</div>

@endsection


@section('scripts')

<script>
    function imprimir() {
        var conteudo = document.getElementById('imprimir').innerHTML;
        var telaImpressao = window.open('about:blank');

        telaImpressao.document.write(conteudo);
        telaImpressao.window.print();
        telaImpressao.window.close();
    }
</script>

@endsection