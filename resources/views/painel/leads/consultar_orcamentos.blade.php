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
                @if($orcamentos->count() > 0)
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
                                <span class="d-none d-sm-block">Orçamento #{{ $orcamento->id }} - ({{ $dataInvertida }})</span> 
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
                        <div class="tab-pane {{ $ativo }}" id="home-{{ $orcamento->id }}" role="tabpanel">
                            <br>
                            <h5>Dados do Lead</h5>
                            <hr>
                            <div style="display: flex; justify-content:space-between; width:90% !important; font-size: 15px; flex-wrap: wrap;">
                                <div style="width: 100%; display: flex; justify-content:space-between; border-bottom: 1px #e5e5e5 solid; margin-bottom: 10px; padding-bottom: 10px;">
                                    <div style="width: 32%;">
                                        <strong>Nome</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">{{ $lead->nome }}</p>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <strong>E-mail</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">{{ $lead->email }}</p>
                                    </div>
                                </div>
                                <div style="width: 100%; display: flex; justify-content:space-between;">
                                    <div style="width: 32%;">
                                        <strong>Telefone</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">{{ $lead->telefone }}</p>
                                    </div>
    
                                    <div style="width: 32%;">
                                    </div>
    
                                    <div style="width: 32%;">
                                    </div>
                                </div>
                            </div>

                            <br><br><br><br>

                            <h5>Dados do Evento</h5>
                            <hr>
                            <div style="display: flex; justify-content:space-between; width:90% !important; font-size: 15px; flex-wrap: wrap;">
                                <div style="width: 100%; display: flex; justify-content:space-between; border-bottom: 1px #e5e5e5 solid; margin-bottom: 10px; padding-bottom: 10px;">
                                    <div style="width: 32%;">
                                        <strong>Tipo</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">{{ $orcamento->tipo }}</p>
                                    </div>

                                    <div style="width: 32%;">
                                        <strong>CEP</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">{{ $orcamento->cep }}</p>
                                    </div>
                                </div>
                                <div style="width: 100%; display: flex; justify-content:space-between; border-bottom: 1px #e5e5e5 solid; margin-bottom: 10px; padding-bottom: 10px;">
                                    <div style="width: 32%;">
                                        <strong>Data</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">
                                            @php
                                                $parteData = explode("-", $orcamento->data);    
                                                $dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
                                            @endphp
                                            {{ $dataInvertida }}    
                                        </p>
                                    </div>

                                    <div style="width: 32%;">
                                        <strong>Duração</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">{{ $orcamento->duracao }} horas</p>
                                    </div>                                    
                                </div>
                                <div style="width: 100%; display: flex; justify-content:space-between;">
                                    <div style="width: 32%;">
                                        <strong>Outras bebidas</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">@php
                                            if($orcamento->outras_bebidas == 1) {
                                                $outras_bebidas = "Com Alcool";
                                            }else if ($orcamento->duracao == 2){
                                                $outras_bebidas = "Sem Alcool";
                                            } else {
                                                $outras_bebidas = "Não serão servidos";
                                            }
                                        @endphp
                                        {{ $outras_bebidas }} </p>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <strong>Quantidade de pessoas</strong>
                                    </div>
    
                                    <div style="width: 32%;">
                                        <p style="margin: 0;">
                                            {{ $orcamento->qtd_pessoas }}    
                                        </p>
                                    </div>
                                </div>  
                            </div>

                            <br><br><br><br> 

                            <h5>Lista de Drinks</h5>
                            <hr>
                            <div style="display: flex; justify-content: space-between; flex-wrap: wrap;">

                                @php
                                    $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();
                                @endphp
                
                                @foreach($produtos as $produto)
                                    <div class="box" niv-fade style="width: 20%; text-align: center">
                                        <picture style="width: 100%">
                                            <img style="width: 60%; height: auto;" src="{{ $produto->imagem_1 }}" alt="imagem representativa">
                                        </picture>
                
                                        <p><strong>{{ $produto->nome }}</strong></p>
                                    </div>
                                @endforeach 
                
                            </div>
                        </div>
                        @php
                            $ativo = ""
                        @endphp
                    @endforeach
                </div>
                @else 
                    Não há orçamentos para esse lead.
                @endif 
            </div>
        </div>
    </div>
</div>
@endsection


@section('scripts')
@endsection