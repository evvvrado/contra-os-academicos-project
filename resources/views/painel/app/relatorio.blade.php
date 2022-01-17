@extends('painel.template.main')

@section('styles')
    
@endsection

@section('titulo')
    Relatório: {{$cliente->nome}}
@endsection

@section('botoes')
<a name="" id="" class="btn btn-primary" href="{{route('painel.app')}}" role="button">Voltar</a>
@endsection

@section('conteudo')
<div class="row">
    <div class="col-12">
        <div class="row">
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Visitantes Únicos</p>
                                <h4 class="mb-0">{{$dados["total_visitantes"]}}</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-male font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Total de Acessos</p>
                                <h4 class="mb-0">{{$dados["total_acessos"]}}</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-up-arrow-circle font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Total de Clicks</p>
                                <h4 class="mb-0">{{$dados["total_clicks"]}}</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx bx-mouse-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Média de Clicks por Acesso</p>
                                <h4 class="mb-0">
                                    @if($dados["total_acessos"] > 0)
                                        {{number_format(($dados["total_clicks"] / $dados["total_acessos"]), 2) }}
                                    @else
                                        0
                                    @endif
                                </h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx bx-mouse-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Média de Acessos por Visitante</p>
                                <h4 class="mb-0">
                                    @if($dados["total_visitantes"] > 0)
                                        {{number_format(($dados["total_acessos"] / $dados["total_visitantes"]), 2) }}
                                    @else
                                        0
                                    @endif
                                </h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-up-arrow-circle font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Clicks em Elementos</p>
                                <h4 class="mb-0">{{$dados["clicks_elementos"]}}</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-up-arrow-circle font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Clicks em Redes Sociais</p>
                                <h4 class="mb-0">{{$dados["clicks_redes"]}}</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-up-arrow-circle font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Acessos</h4>
                        
                        <div id="pie_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div>
            </div>
            {{--  <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Elementos</h4>
                        
                        <div id="column_chart_datalabel" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>  --}}
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Elementos</h4>
                        
                        <div id="bar_chart" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
            <!-- end col -->
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Redes Sociais</h4>
                        
                        <div id="bar_chart2" class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!--end card-->
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('scripts')
<!-- apexcharts -->
<script src="{{asset('admin/libs/apexcharts/apexcharts.min.js')}}"></script>
<script>
    var elementos = new Array();
    var clicks = new Array();

    var redes = new Array();
    var clicks_redes = new Array();
</script>

@foreach($dados["elementos"] as $id => $elemento)
    <script>
        elementos.push("{!! $elemento["text"] !!}");
        clicks.push("{!! $elemento["total_clicks"] !!}");
    </script>
@endforeach

@foreach($dados["redes"] as $codigo => $rede)
    <script>
        redes.push("{!! $rede["text"] !!}");
        clicks_redes.push("{!! $rede["total_clicks"] !!}");
    </script>
@endforeach


<script>
    console.log(clicks);
    options = {
        chart: { height: 381, type: "pie" },
        series: [{!! ($dados["total_acessos"] - $dados["acessos_com_click"]) !!}, {!! $dados["acessos_com_click"] !!}],
        labels: ["Sem Click", "Com Click"],
        colors: ["#f46a6a", "#556ee6"],
        legend: {
            show: !0,
            position: "bottom",
            horizontalAlign: "center",
            verticalAlign: "middle",
            floating: !1,
            fontSize: "14px",
            offsetX: 0,
        },
        responsive: [
            {
                breakpoint: 600,
                options: { chart: { height: 240 }, legend: { show: !1 } },
            },
        ],
    };
    (chart = new ApexCharts(
        document.querySelector("#pie_chart"),
        options
    )).render();

    options = {
        chart: { height: 350, type: "bar", toolbar: { show: !1 } },
        plotOptions: { bar: { horizontal: !0 } },
        dataLabels: { enabled: !1 },
        series: [
            { 
                name: 'Clicks',
                data: clicks 
            }
        ],
        colors: ["#34c38f"],
        grid: { borderColor: "#f1f1f1" },
        xaxis: {
            categories: elementos,
        },
        tooltip: {
            theme: 'dark',
            shared: false,
            x: {
                formatter: function (val) {
                return val
                }
            },
            y: {
                formatter: function (val) {
                    return Math.abs(val)
                }
            }
        }
    };
    (chart = new ApexCharts(
        document.querySelector("#bar_chart"),
        options
    )).render();

    options = {
        chart: { height: 350, type: "bar", toolbar: { show: !1 } },
        plotOptions: { bar: { horizontal: !0 } },
        dataLabels: { enabled: !1 },
        series: [
            { 
                name: 'Clicks',
                data: clicks_redes 
            }
        ],
        colors: ["#34c38f"],
        grid: { borderColor: "#f1f1f1" },
        xaxis: {
            categories: redes,
        },
        tooltip: {
            theme: 'dark',
            shared: false,
            x: {
                formatter: function (val) {
                return val
                }
            },
            y: {
                formatter: function (val) {
                    return Math.abs(val)
                }
            }
        }
    };
    (chart = new ApexCharts(
        document.querySelector("#bar_chart2"),
        options
    )).render();
</script>
@endsection