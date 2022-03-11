@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

<style>
    #dados_evento > div {
        width: 33% !important;
    }
</style>
@endsection

@php
    use App\Models\Produto;
    use App\Models\OrcamentoProdutosIngredientes;
    use App\Models\ProdutosIngrediente;
    use App\Models\MarcaIngrediente;
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
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="media">
                        <div class="media-body overflow-hidden">
                            <h5 class="text-truncate font-size-15">Orçamento #{{ $orcamento->id }}</h5>
                        </div>
                    </div>
    
                    <h5 class="font-size-15 mt-4">Dados do Lead:</h5>
    
                    <div style="display: flex; justify-content:space-between; width:75% !important; flex-wrap: wrap;">
                        <div>
                            <strong>Nome</strong>
                            <p class="text-muted">{{ $lead->nome }}</p>
                        </div>
    
                        <div>
                            <strong>E-mail</strong>
                            <p class="text-muted">{{ $lead->email }}</p>
                        </div>
    
                        <div>
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
    
                    <hr>
    
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
        {{-- <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Overview</h4>
    
                    <div id="overview-chart" class="apex-charts" dir="ltr"></div>
                </div>
            </div>
        </div> --}}
        <!-- end col -->
    
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
                                        <td style="width: 45px; height: auto">
                                            <div class="avatar-sm">
                                                <span>
                                                    <img style="width: 48px;" src="{{$produto->imagem_1}}">
                                                </span>
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{  $produto->nome }} ({{  $orcamentoproduto->qtd }}x)</h5>
    
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
                                                    <small>- {{ $ingrediente->nome }} ({{ $marca_padrao->nome }})</small> <br>
                                                @else 
                                                    <small>- {{ $ingrediente->nome }} <del>({{ $marca_padrao->nome }})</del> ({{ $marca->nome }})</small> <br>
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
        <!-- end col -->
    
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">-</h4>
                </div>
            </div>
        </div>
        <!-- end col -->
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