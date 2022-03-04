@extends('site.template.area-do-cliente')

@section('id', 'matriculas-aluno-detalhes')

@section('content')

@php
    use App\Models\Produto;
    use App\Models\OrcamentoServico;
@endphp



<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <div class="top">

                <picture>
                    <img src="{{ asset('/site/assets/sistema/capaMatricula.jpg')}}" alt="">
                </picture>

                <h2>
                    Festa em {{ $orcamento->cidade }}
                    <p>Para {{ $orcamento->qtd_pessoas }} convidados</p>
                </h2>
            </div>


            <nav>
                <span active>Drinks</span>
                <span>Serviços</span>
                <span>Adicionais</span>
            </nav>

            <main>
                <div class="list" active>
                    @php
                        $produtos = Produto::whereIn("id", $orcamento->produtos->pluck("id"))->get();
                    @endphp
    
                    @foreach($produtos as $produto)
                        <div class="box" niv-fade style="width: 20%; text-align: center; padding-top: 20px;">
                            <picture style="width: 100%">
                                <img style="width: 60%; height: auto; margin:auto" src="{{ $produto->imagem_1 }}" alt="imagem representativa">
                            </picture>
    
                            <p><strong>{{ $produto->nome }}</strong></p>
                        </div>
                    @endforeach 
                </div>

                <div class="list" style="padding-top: 20px;">
                    @php
                        $servicos = OrcamentoServico::where("orcamento_id", $orcamento->id)
                        ->join("servicos", "servico_id", "servicos.id")
                        ->get();
                    @endphp
    
                    @if($servicos->count() > 0)
                        <table class="tabela_export table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info">
                            <thead>
                                <tr role="row">
                                    <th>Título</th>
                                    <th>Telefone</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($leads as $lead)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{ $lead->nome }}</td>
                                    <td class="sorting_1 dtr-control">{{ $lead->telefone }}</td>
                                    <td class="sorting_1 dtr-control">{{ $lead->email }}</td>
                                    @if($lead->orcamento == true)
                                        <td>
                                            <a class="btn btn-success" href="{{route('painel.leads.orcamentos', ['lead' => $lead])}}" role="button">Orçamentos</a>
                                        </td>
                                    @else 
                                        <td>
                                            <a class="btn btn-success" href="{{route('painel.leads.orcamentos', ['lead' => $lead])}}" role="button">Jornada</a>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @foreach($servicos as $servico)
                            <div class="box" niv-fade style="width: 20%; text-align: center; padding-top: 20px;">
                                <picture style="width: 100%">
                                    <h3>{{ $servico->nome }}</h3>
                                </picture>
        
                                <p><strong>{{ $servico->descricao }}</strong></p>
                            </div>
                        @endforeach 
                    @else
                        Nenhum serviço encontrado
                    @endif
                </div>

                <div class="list">
                </div>
            </main>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    $('.mA_showcase nav span').click(function() {
        $('.mA_showcase nav span').removeAttr('active');
        $(this).attr('active', '');

        $(`.mA_showcase main div.list`).removeAttr('active');
        $($(`.mA_showcase main div.list`)[$(this).index()]).attr('active', '');
    })
</script>
@endsection