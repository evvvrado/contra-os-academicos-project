<div class="container-fluid">
    @php
        use App\Classes\Orcamento as FuncoesOrcamento;
    @endphp

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
                                        {{ $servico_sim->servico->nome }} (R$
                                        {{ number_format($servico_sim->valor, 2, ',', '.') }})
                                    </p>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane active" id="drinks" role="tabpanel">
                            <button class="btn-atualizar p-2" onclick="Livewire.emit('carregaModalAdicionaProduto')"><i
                                    class="fas fa-plus"></i> Adicionar</button>
                            <table class="table table-nowrap align-middle table-hover mb-0">
                                <tbody>
                                    @foreach ($orcamento->orcamento_produtos as $orcamento_produto)
                                        <tr style="position: relative">
                                            <td style="width: 48px; height: 100px">
                                                <div class="avatar-sm">
                                                    <img style="object-fit: cover; width: 100%; height: 100%;"
                                                        src="{{ asset($orcamento_produto->produto->imagem_preview) }}">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-1"><a href="#"
                                                        class="text-dark">{{ $orcamento_produto->qtd }}x
                                                        {{ $orcamento_produto->produto->nome }}</h5>

                                                @foreach ($orcamento_produto->produto->ingredientes as $ingrediente)
                                                    @php
                                                        $marca_padrao = $ingrediente->marcas->where('padrao', true)->first();
                                                        
                                                        $marca = $orcamento_produto->orcamento_produto_ingredientes->where("ingrediente_id", $ingrediente->id)->first()->marca;
                                                    @endphp

                                                    @if ($marca_padrao->id == $marca->id)
                                                        <small>
                                                            <strong>
                                                                {{ $ingrediente->nome }} >
                                                            </strong>
                                                            {{ $marca_padrao->nome }}
                                                        </small>
                                                        <br>
                                                    @else
                                                        <small>
                                                            <strong>
                                                                {{ $ingrediente->nome }} >
                                                            </strong>
                                                            <del>
                                                                {{ $marca_padrao->nome }}
                                                            </del>
                                                            >
                                                            {{ $marca->nome }}</small><br>
                                                    @endif
                                                @endforeach
                                            </td>

                                            <td>
                                                <a class="mx-auto cpointer" onclick="Livewire.emit('carregaModalEditaProduto', {{ $orcamento_produto }})">
                                                    <i class="fas fa-pen-square iS" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="" data-bs-original-title="Editar"
                                                        aria-label="Editar"></i>
                                                </a>
                                                <a class="ms-3 cpointer" wire:click='removeOrcamentoProduto({{ $orcamento_produto->id }})'>
                                                    <i class="fas fa-times iS" data-bs-toggle="tooltip"
                                                        data-bs-placement="top" title="" data-bs-original-title="Editar"
                                                        aria-label="Editar" style="color: red;"></i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="nao" role="tabpanel">
                            <div class="text-muted mt-4" style="max-height: 250px; overflow: auto">
                                @foreach ($servicos_nao as $servico_nao)
                                    <p>
                                        <i class="mdi mdi-chevron-right text-primary me-1"></i>
                                        ({{ $servico_nao->qtd }} x)
                                        {{ $servico_nao->servico->nome }} (R$
                                        {{ number_format($servico_nao->valor, 2, ',', '.') }})
                                    </p>
                                @endforeach
                            </div>
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
                                @php
                                    $orcamento_produtos = $orcamento->orcamento_produtos;
                                    $ingredientes = [];
                                    foreach($orcamento_produtos as $orcamento_produto){
                                        foreach($orcamento_produto->orcamento_produto_ingredientes as $orcamento_produto_ingrediente){
                                            if(isset($ingredientes[$orcamento_produto_ingrediente->ingrediente_id]) && isset($ingredientes[$orcamento_produto_ingrediente->ingrediente_id][$orcamento_produto_ingrediente->marca_id])){
                                                $ingredientes[$orcamento_produto_ingrediente->ingrediente_id][$orcamento_produto_ingrediente->marca_id] += $orcamento_produto->qtd;
                                            }else{
                                                $ingredientes[$orcamento_produto_ingrediente->ingrediente_id][$orcamento_produto_ingrediente->marca_id] = $orcamento_produto->qtd;
                                            }
                                        }
                                    }
                                @endphp
                                @foreach ($ingredientes as $ingrediente_id => $marcas)
                                    @php
                                        $ingrediente = \App\Models\Ingrediente::find($ingrediente_id);
                                    @endphp
                                    @foreach($marcas as $marca_id => $quantidade)
                                        @php
                                            $marca = \App\Models\Marca::find($marca_id);
                                        @endphp
                                        <tr>
                                            <td style="width: 48px; height: 100px">
                                                <div class="avatar-sm">
                                                    <img style="object-fit: cover; width: 100%; height: 100%;"
                                                        src="{{ asset($marca->imagem) }}">
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class="font-size-14 mb-1">{{ $ingrediente->nome }}<br> <strong>{{ $marca->nome }}</strong> -
                                                    {{ FuncoesOrcamento::qtdEmbalagensUsadas($marca, $quantidade) }} {{ $marca->embalagem }}</h5>
                                            </td>

                                            <td>
                                                <strong>{{ $marca->nome_unidade }}: </strong> {{ $marca->quantidade_ingrediente_unidade }}{{ config("marcas.unidades_medida")[$marca->unidade_medida]}}<br>
                                                <strong>{{ $marca->embalagem }}: </strong> {{ $marca->quantidade_embalagem }}{{ config("marcas.unidades_medida")[$marca->unidade_medida] }}<br>
                                            </td>

                                            <td>
                                                <strong>Unidade: </strong> R$ {{ number_format($marca->valor_embalagem, 2, ",", ".") }}<br>
                                                <strong>Total: </strong> R$ {{ number_format(FuncoesOrcamento::qtdEmbalagensUsadas($marca, $quantidade) * $marca->valor_embalagem, 2, ",", ".") }}
                                            </td>
                                        </tr>
                                    @endforeach
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

                            <button class="btn-atualizar" onclick="Livewire.emit('carregaModalDesconto', 3)"><i
                                    class="fas fa-dollar-sign"></i></button>


                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-3">
                                        @php
                                            $desconto_total = $orcamento->descontos->where("alvo", 3)->first();
                                        @endphp
                                        <h5 class="text-primary">Total do Orçamento!</h5>
                                        <p>Valor total gerado pelo orçamento</p>

                                        <div class="text-muted mt-4">
                                            <h4 class="text-primary">R$ {{ FuncoesOrcamento::totalOrcamento($orcamento) }}</h4>
                                            <div class="d-flex">
                                                @if($desconto_total)
                                                    <span class="badge badge-soft-success font-size-12 mx-1 ">{{ number_format($desconto_total->valor) }}({{ config("descontos.tipos")[$desconto_total->tipo] }})</span> de
                                                    desconto no valor total</span>
                                                @endif
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

                                        <button class="btn-atualizar" onclick="Livewire.emit('carregaModalDesconto', 0)"><i class="fas fa-dollar-sign"></i></button>
                                    </div>
                                    <div class="text-muted mt-4">
                                        @php
                                            $desconto = $orcamento->descontos->where("alvo", 0)->first();
                                        @endphp
                                        <h4>R$ {{ number_format(FuncoesOrcamento::aplicaDesconto($desconto, $orcamento->orcamento_produtos->sum("valor")), 2, ',', '.') }}</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12">
                                                {{ $orcamento->orcamento_produtos->count() }} </span> <span
                                                class="ms-2 text-truncate">Drinks com</span>
                                            @if($desconto)
                                                <span class="badge badge-soft-success font-size-12 mx-1 ">{{ number_format($desconto->valor) }}({{ config("descontos.tipos")[$desconto->tipo] }})</span> de
                                                desconto</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <button class="btn-atualizar" onclick="Livewire.emit('carregaModalDesconto', 1)"><i class="fas fa-dollar-sign"></i></button>


                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-archive-in"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Serviços Inclusos</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        @php
                                            $desconto = $orcamento->descontos->where("alvo", 1)->first();
                                        @endphp
                                        <h4>R$ {{ number_format(FuncoesOrcamento::aplicaDesconto($desconto, $servicos_sim->sum("valor")), 2, ',', '.') }}</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12">
                                                {{ $servicos_sim->count() }} 
                                            </span> 
                                            <span class="ms-2 text-truncate">Serviços com</span>
                                            @if($desconto)
                                                <span class="badge badge-soft-success font-size-12 mx-1 ">{{ number_format($desconto->valor) }}({{ config("descontos.tipos")[$desconto->tipo] }})</span> de
                                                desconto</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">

                                    <button class="btn-atualizar" onclick="Livewire.emit('carregaModalDesconto', 2)"><i class="fas fa-dollar-sign"></i></button>

                                    <div class="d-flex align-items-center mb-3">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title rounded-circle bg-primary  text-white font-size-18">
                                                <i class="bx bx-purchase-tag-alt"></i>
                                            </span>
                                        </div>
                                        <h5 class="font-size-14 mb-0">Serviços Adicionais</h5>
                                    </div>
                                    <div class="text-muted mt-4">
                                        @php
                                            $desconto = $orcamento->descontos->where("alvo", 2)->first();
                                        @endphp
                                        <h4>R$ {{ number_format(FuncoesOrcamento::aplicaDesconto($desconto, $servicos_nao->sum("valor")), 2, ',', '.') }}</h4>
                                        <div class="d-flex">
                                            <span class="badge badge-soft-success font-size-12">
                                                {{ $servicos_nao->count() }} 
                                            </span> 
                                            <span class="ms-2 text-truncate">Serviços com</span>
                                            @if($desconto)
                                                <span class="badge badge-soft-success font-size-12 mx-1 ">{{ number_format($desconto->valor) }}({{ config("descontos.tipos")[$desconto->tipo] }})</span> de
                                                desconto</span>
                                            @endif
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
</div>