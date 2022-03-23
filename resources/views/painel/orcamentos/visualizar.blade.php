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

@php
use App\Models\Produto;
use App\Models\OrcamentoProdutoIngrediente;
use App\Models\OrcamentoProdutoAcessorio;
use App\Models\ProdutoIngrediente;
use App\Models\MarcaIngrediente;
use App\Models\OrcamentoServico;
use App\Models\OrcamentoProduto;
use App\Models\Parametro;
@endphp

@section('titulo')
    Orçamentos / Orçamento
@endsection

@section('conteudo')
    <div id="imprimir">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Situação</label>
                            <select name="situacao" class="form-control" id="">
                                @foreach (config('situacao') as $key => $situacao)
                                    <option value="{{ $key }}" @if ($orcamento->situacao == $key) selected @endif>
                                        {{ $situacao }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <label>Checkout de Pagamento</label>
                                <input type="url" class="form-control">
                            </div>
                            <div class="col-5">
                                <label>Checkout de Compartilhamento</label>
                                <input type="url" class="form-control">
                            </div>

                            <div class="col-2 p-1">
                                <button class="btn btn-primary mt-4" style="width: 100%;">Salvar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h5 class="font-size-15">Ações</h5>


                        <div class="buttons-row">
                            <button class="btn btn-primary"><i class="fas fa-file-download me-2"></i>Gerar contrato</button>
                            <button class="btn btn-primary"><i class="fas fa-file-download me-2"></i>Imprimir tudo</button>
                            <button class="btn btn-primary"><i class="fas fa-file-download me-2"></i>Imprimir lista de
                                compras</button>
                            <button class="btn btn-primary"><i class="fas fa-file-download me-2"></i>Imprimir
                                Informações</button>
                        </div>
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
                            <p class="text-muted">{{ $orcamento->cliente->nome }}</p>
                        </div>

                        <div style="flex: 33%">
                            <strong>E-mail</strong>
                            <p class="text-muted">{{ $orcamento->cliente->email }}</p>
                        </div>

                        <div style="flex: 33%">
                            <strong>Telefone</strong>
                            <p class="text-muted">{{ $orcamento->cliente->telefone }}</p>
                        </div>
                    </div>

                    <hr>

                    <h5 class="font-size-15 mt-4">Dados do Evento:</h5>

                    <div id="dados_evento"
                        style="display: flex; justify-content:space-between; width:100% !important; flex-wrap: wrap;">
                        <div>
                            <strong>Tipo</strong>
                            <input type="text" class="form-control mb-4" style="max-width: 250px"
                                value="{{ config('orcamentos.tipos')[$orcamento->tipo] }}">
                        </div>

                        <div>
                            <strong>CEP</strong>
                            <input type="tel" name="cep" class="form-control mb-4" style="max-width: 250px"
                                value="{{ $orcamento->cep }}">
                        </div>

                        <div>
                            <strong>Data</strong>
                            <input type="date" name="data" class="form-control mb-4" style="max-width: 250px"
                                value="{{ $orcamento->data }}">
                        </div>

                        <div>
                            <strong>Duração</strong>
                            <input type="tel" name="duracao" class="form-control mb-4" style="max-width: 250px"
                                value="{{ $orcamento->duracao }}">
                        </div>

                        <div>
                            <strong>Outras bebidas</strong>
                            <select name="duracao" class="form-control mb-4" style="max-width: 250px">

                                @foreach (config('orcamentos.bebidas') as $key => $bebida)
                                    <option value="{{ $key }}" @if ($orcamento->outras_bebidas == $key) selected @endif>
                                        {{ $bebida }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <strong>Quantidade de pessoas</strong>
                            <input type=" number" name="qtd_pessoas" class="form-control mb-4" style="max-width: 250px"
                                value="{{ $orcamento->qtd_pessoas }}">
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



        <div class="col-lg-6">
            <div class="card">
                <div class="card-body ">

                    <h5 class="font-size-15">Informações:</h5>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#drinks" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Drinks</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#sim" role="tab">
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
                    <div class="tab-content custom-timeline-2 p-3 text-muted">
                        <div class="tab-pane " id="sim" role="tabpanel">
                            <div class="text-muted mt-4" style="max-height: 250px; overflow: auto">
                                @foreach ($servicos_sim as $servico_sim)
                                    <p>
                                        <i class="mdi mdi-chevron-right text-primary me-1"></i>
                                        ({{ $servico_sim->qtd }} x)
                                        {{ $servico_sim->nome }} (R$
                                        {{ number_format($servico_sim->valor, 2, ',', '.') }})
                                    </p>
                                @endforeach
                            </div>
                            <div class="tab-pane" id="nao" role="tabpanel">
                                <div class="text-muted mt-4" style="max-height: 250px; overflow: auto">
                                    @foreach ($servicos_nao as $servico_nao)
                                        <p>
                                            <i class="mdi mdi-chevron-right text-primary me-1"></i>
                                            ({{ $servico_nao->qtd }} x)
                                            {{ $servico_nao->nome }} (R$
                                            {{ number_format($servico_nao->valor, 2, ',', '.') }})
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane active" id="drinks" role="tabpanel">
                            <button class="btn-atualizar p-2" data-bs-toggle="modal" data-bs-target="#modalDesconto"><i
                                    class="fas fa-plus"></i> Adicionar</button>
                            <table class="table table-nowrap align-middle table-hover mb-0">
                                <tbody>
                                    @foreach ($orcamentoprodutos as $orcamentoproduto)
                                        @php
                                            $produto = Produto::where('id', $orcamentoproduto->produto_id)->first();
                                        @endphp
                                        <tr style="position: relative">
                                            <td style="width: 48px; height: 100px">
                                                <div class="avatar-sm">
                                                    <img style="object-fit: cover; width: 100%; height: 100%;"
                                                        src="{{ asset($produto->imagem_preview) }}">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-1"><a href="#"
                                                        class="text-dark">{{ $orcamentoproduto->qtd }}x
                                                        {{ $produto->nome }}</h5>

                                                @foreach ($produto->ingredientes as $ingrediente)
                                                    @php
                                                        $marca_padrao = $ingrediente->marcas->where('padrao', true)->first();
                                                        
                                                        $marca = OrcamentoProdutoIngrediente::where('orcamento_produto_ingredientes.ingrediente_id', $ingrediente->id)
                                                            ->where('orcamento_produto_id', $orcamentoproduto->id)
                                                            ->join('marcas', 'marcas.id', 'orcamento_produto_ingredientes.marca_id')
                                                            ->first();
                                                    @endphp

                                                    @if ($marca_padrao->marca_id == $marca->marca_id)
                                                        <small><strong>{{ $ingrediente->nome }} >
                                                            </strong>{{ $marca_padrao->nome }}</small>
                                                        <br>
                                                    @else
                                                        <small><strong>{{ $ingrediente->nome }} >
                                                            </strong><del>{{ $marca_padrao->nome }}</del>
                                                            >
                                                            {{ $marca->nome }}</small><br>
                                                    @endif
                                                @endforeach
                                            </td>

                                            <td>
                                                <a href="" class="mx-auto">
                                                    <i class="fas fa-pen-square iS" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="" data-bs-original-title="Editar"
                                                        aria-label="Editar"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>


        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Lista de ingredientes</h4>

                    <button class="btn-atualizar p-2" data-bs-toggle="modal" data-bs-target="#modalDesconto"><i
                            class="fas fa-file-download"></i> Baixar lista</button>
                    <div class="table-responsive custom-timeline">
                        <table class="table table-nowrap align-middle table-hover mb-0">



                            <tbody>
                                @foreach ($orcamentoprodutos as $orcamentoproduto)
                                    @php
                                        $produto = Produto::where('id', $orcamentoproduto->produto_id)->first();
                                    @endphp
                                    <tr>
                                        <td style="width: 48px; height: 100px">
                                            <div class="avatar-sm">
                                                <img style="object-fit: cover; width: 100%; height: 100%;"
                                                    src="{{ asset($produto->imagem_preview) }}">
                                            </div>
                                        </td>
                                        <td>
                                            <h5 class="font-size-14 mb-1">Nome do Ingrediente<br> <strong>Marca</strong> -
                                                15 Garrafas</h5>
                                        </td>

                                        <td>
                                            <strong>Dose: </strong> 50ml<br>
                                            <strong>Garrafa: </strong> 1000ml<br>
                                        </td>

                                        <td>
                                            <strong>Unidade: </strong> R$ 5,00 <br>
                                            <strong>Total: </strong> R$ 25,00
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-12">
            <div class="row">
                <div class="col-xl-4">
                    <div class="card bg-primary bg-soft">
                        <div>

                            <button class="btn-atualizar" data-bs-toggle="modal" data-bs-target="#modalDesconto"><i
                                    class="fas fa-dollar-sign"></i></button>


                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        <h5 class="text-primary">Total do Orçamento!</h5>
                                        <p>Valor total gerado pelo orçamento</p>

                                        @php
                                            $total_servicos = OrcamentoServico::where('orcamento_id', $orcamento->id)->sum('valor');
                                            
                                            $total_produtos = OrcamentoProduto::where('orcamento_id', $orcamento->id)->get();
                                            
                                            $valor_total_orcamento = $total_servicos;
                                            $valor_total_produtos = 0;
                                            
                                            foreach ($total_produtos as $total_produto) {
                                                $valor_total_produtos = $valor_total_produtos + $total_produto->valor * $total_produto->qtd;
                                                $valor_total_orcamento = $valor_total_orcamento + $total_produto->valor * $total_produto->qtd;
                                            }
                                        @endphp

                                        <div class="text-muted mt-4">
                                            <h4 class="text-primary">R$
                                                {{ number_format($valor_total_orcamento, 2, ',', '.') }}</h4>
                                            <div class="d-flex">
                                                <span class="text-truncate">{{ $servicos_sim->count() }} Serviços
                                                    inclusos</span>
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

                                        <button class="btn-atualizar" data-bs-toggle="modal"
                                            data-bs-target="#modalDesconto"><i class="fas fa-dollar-sign"></i></button>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4>R$ {{ number_format($valor_total_produtos, 2, ',', '.') }}</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12">
                                                {{ $total_produtos->count() }} </span> <span
                                                class="ms-2 text-truncate">Drinks com</span>

                                            <span class="badge badge-soft-success font-size-12 mx-1 ">50%</span> de
                                            desconto</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $total_servicos_sim = OrcamentoServico::where('orcamento_id', $orcamento->id)
                                ->join('servicos', 'servico_id', 'servicos.id')
                                ->where('incluso', true)
                                ->sum('orcamento_servicos.valor');
                        @endphp

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <button class="btn-atualizar" data-bs-toggle="modal"
                                        data-bs-target="#modalDesconto"><i class="fas fa-dollar-sign"></i></button>


                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-archive-in"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Serviços Inclusos</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4>R$ {{ number_format($total_servicos_sim, 2, ',', '.') }} <i
                                                class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12">
                                                {{ $servicos_sim->count() }} </span> <span
                                                class="ms-2 text-truncate">Serviços solicitados</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @php
                            $total_servicos_nao = OrcamentoServico::where('orcamento_id', $orcamento->id)
                                ->join('servicos', 'servico_id', 'servicos.id')
                                ->where('incluso', false)
                                ->sum('orcamento_servicos.valor');
                        @endphp

                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <button class="btn-atualizar" data-bs-toggle="modal"
                                        data-bs-target="#modalDesconto"><i class="fas fa-dollar-sign"></i></button>

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-purchase-tag-alt"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Serviços Adicionais</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        <h4>R$ {{ number_format($total_servicos_nao, 2, ',', '.') }} <i
                                                class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                                        <div class="d-flex">
                                            <span class="badge badge-soft-warning font-size-12">
                                                {{ $servicos_nao->count() }} </span> <span
                                                class="ms-2 text-truncate">Serviços solicitados</span>
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
        <!-- end col -->
        {{-- <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4" onClick="imprimir()">Lista de compras</h4>
                    <div class="table-responsive">
                        <table class="table table-nowrap align-middle table-hover mb-0">
                            <tbody>
                                @foreach ($orcamentoprodutos as $orcamentoproduto)
                                    @php
                                        $produto_info = Produto::where('id', $orcamentoproduto->produto_id)->first();
                                        $total_produto = 0;
                                        $ingredientes = OrcamentoProdutosIngredientes::where('orcamentoproduto_id', $orcamentoproduto->id)
                                        ->join('ingredientes', 'ingrediente_id', 'ingredientes.id')
                                        ->get();

                                        $acessorios = OrcamentoProdutosAcessorios::where('orcamentoproduto_id', $orcamentoproduto->id)
                                        ->join('acessorios', 'acessorio_id', 'acessorios.id')
                                        ->get();

                                        foreach($ingredientes as $ingrediente){
                                            $marcas = MarcaIngrediente::where('ingrediente_id', $ingrediente->id)
                                            ->join('marcas', 'marca_id', 'marcas.id')
                                            ->get();



                                            foreach($marcas as $marca){
                                                $qtd_pacote = $marca->qtd_pacote;

                                                if($marca->id == $ingrediente->marca_id) {
                                                    $parametro = Parametro::where('id', 4)->first();
                                                    $qtd_total_drinks = Round(($orcamento->qtd_pessoas * $parametro->valor_2) / $parametro->valor_1);
                                                    $qtd_unica = $qtd_total_drinks / $orcamentoprodutos->count();

                                                    $qtd_produto = $marca->qtd;

                                                    
                                                    if($qtd_produto){
                                                        $qtd_produto_total = $qtd_produto * $qtd_total_drinks;
                                                        $qtd_ingrediente = 1;

                                                        $marca_qtd = $marca->qtd_pacote;


                                                        while ($qtd_produto_total <= $marca_qtd) {
                                                            $marca_qtd = $marca_qtd + $marca->qtd_pacote;
                                                            $qtd_ingrediente++;
                                                        }
                                                    }
                                                    $total_produto = $total_produto + ($qtd_ingrediente * $marca->valor);
                                                }
                                            }
                                    @endphp 
                                            <tr>
                                                <td style="width: 48px; height: 100px">
                                                    <div class="avatar-sm">
                                                        <img style="object-fit: cover; width: 100%; height: 100%;" src="{{$produto->imagem_1}}">
                                                    </div>
                                                </td>
                                                <td>
                                                    <h5 class="font-size-14 mb-1">Energético <br> <strong>Fusion</strong> - {{ $qtd_ingrediente }} Garrafas</h5>
                                                    <strong>Total: </strong> R$ {{ number_format($total_produto, 2, ",", ".") }}
                                                </td>
                                            </tr>
                                    @php
                                        }
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- end col -->



        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Histórico de atualizações</h4>

                    <div data-simplebar="init" style="max-height: 310px;">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: -14.4px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <ul class="verti-timeline list-unstyled">
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="me-3">
                                                            <h5 class="font-size-14">12/06<i
                                                                    class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                                            </h5>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <strong>Everaldo</strong> > Editou a data do evento
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="me-3">
                                                            <h5 class="font-size-14">12/06<i
                                                                    class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                                            </h5>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <strong>Everaldo</strong> > Editou a data do evento
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="me-3">
                                                            <h5 class="font-size-14">12/06<i
                                                                    class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                                            </h5>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <strong>Everaldo</strong> > Editou a data do evento
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="me-3">
                                                            <h5 class="font-size-14">12/06<i
                                                                    class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                                            </h5>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <strong>Everaldo</strong> > Editou a data do evento
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="me-3">
                                                            <h5 class="font-size-14">12/06<i
                                                                    class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                                            </h5>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <strong>Everaldo</strong> > Editou a data do evento
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="event-list">
                                                    <div class="event-timeline-dot">
                                                        <i class="bx bx-right-arrow-circle font-size-18"></i>
                                                    </div>
                                                    <div class="media">
                                                        <div class="me-3">
                                                            <h5 class="font-size-14">12/06<i
                                                                    class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i>
                                                            </h5>
                                                        </div>
                                                        <div class="media-body">
                                                            <div>
                                                                <strong>Everaldo</strong> > Editou a data do evento
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 479px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                            </div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar"
                                style="height: 200px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Local</h4>
                    <p class="card-title-dsec">Endereço do evento</p>

                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe width="752" height="285" id="gmap_canvas"
                                src="https://maps.google.com/maps?q={{ $orcamento->cep }}&t=k&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://123movies-to.org"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 285px;
                                    width: 752px;
                                }

                            </style><a href="https://www.embedgooglemap.net">how to add a google map to my website</a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 285px;
                                    width: 752px;
                                }

                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




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
                    <div class="row">
                        <div class="col-12">
                            <label>Insira a quantidade de desconto desejado</label>

                            <div class="row">
                                <div class="col-6">
                                    <input type="number" class="form-control" min="1">
                                </div>
                                <div class="col-6">
                                    <select name="" id="" class="form-control">
                                        <option value="-1">Porcento</option>
                                        <option value="-1">Reais</option>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn-primary btn p-2">Inserir</button>
                                </div>
                            </div>

                        </div>
                    </div>
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
