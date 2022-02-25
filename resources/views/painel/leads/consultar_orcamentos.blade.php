@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@php
    use App\Models\Produto;
@endphp

@section('titulo')
Orçamentos
@endsection


@section('conteudo')
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills nav-justified" role="tablist">
                    @php
                        $ativo = "active"
                    @endphp
                    @foreach($orcamentos as $orcamento)
                        @php
                            $parteData = explode("-", $orcamento->data);    
                            $dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
                        @endphp
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link {{ $ativo }}" data-bs-toggle="tab" href="#home-{{ $orcamento->id }}" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">{{ $orcamento->tipo }} ({{ $dataInvertida }})</span> 
                            </a>
                        </li>
                        @php
                            $ativo = ""
                        @endphp
                    @endforeach
                </ul>

                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    @php
                        $ativo = "active"
                    @endphp
                    @foreach($orcamentos as $orcamento)
                        <div class="tab-pane active" id="home-{{ $orcamento->id }}" role="tabpanel">
                            <br>
                            <h5>Informações</h5>
                            <div style="display: flex; justify-content:space-between">
                                <div>
                                    <strong>CEP</strong>
                                    <p>{{ $orcamento->cep }}</p>
                                </div>
                                <div>
                                    <strong>Duração</strong>
                                    <p>{{ $orcamento->duracao }} horas</p>
                                </div>
                                @php
                                    if($orcamento->outras_bebidas == 1) {
                                        $outras_bebidas = "Com Alcool";
                                    }else if ($orcamento->duracao == 2){
                                        $outras_bebidas = "Sem Alcool";
                                    } else {
                                        $outras_bebidas = "Não serão servidos";
                                    }
                                @endphp
                                <div>
                                    <strong>Outras Bebidas</strong>
                                    <p>{{ $outras_bebidas }}</p>
                                </div>
                                <div>
                                    <strong>Quantidade de pessoas</strong>
                                    <p>{{ $orcamento->qtd_pessoas }}</p>
                                </div>
                            </div>

                            <br>
                            <h5>Bebidas</h5>
                            <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">

                                @php
                                    $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();
                                @endphp
                
                                @foreach($produtos as $produto)
                                    <div class="box" niv-fade style="width: 20%; text-align: center">
                                        <picture style="width: 100%">
                                            <img style="width: 100%; height: auto;" src="{{ $produto->imagem_1 }}" alt="imagem representativa">
                                        </picture>
                
                                        <strong>{{ $produto->nome }}</strong>
                                        <p>{{mb_strimwidth($produto->descricao, 0, 75, "...")}}</p>
                                    </div>
                                @endforeach 
                
                            </div>
                        </div>
                        @php
                            $ativo = ""
                        @endphp
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
@endsection