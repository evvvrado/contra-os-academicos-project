@extends('site.template.main', ['titulo' => Definition::NAME.' | Serviços Inclusos'])

@section('body_attr', 'id=orcamento-carrinho')


@section('styles')
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
@endsection


@section('content')

    <div class="next-step">
        <h2>Leve sua festa <i>além</i></h2>
        <p>Continue sua jornada indo pra próxima página</p>

        <a class="cpointer" onclick="submitForm()">Solicitar</a>
    </div>

    <section class="carrinho">
        <div class="niv">
            <div class="niv-top">
                <span>
                    <h2>Meu Carrinho - Serviços Inclusos</h2>
                </span>
            </div>


            <div class="niv-table">
                <div class="scroll">
                    <form id="formServicos" action="{{ route('site.orcamento.servicos.salvar') }}" method="POST">
                        @csrf
                        <table>
                            <thead>
                                <tr>
                                    <th width="206">Nome dos serviços</th>
                                    <th width="456">Descrição</th>
                                    {{-- <th width="175">Valor</th> --}}
                                    <th width="200">Quantidade Ideal</th>
                                    <th width="200">Quantidade Mínima</th>
                                    <th width="200"></th>
                                </tr>
                            </thead>
    
                            <tbody>
    
                                @foreach ($servicos as $servico)
                                    @if($servico->parametros->count() > 0)
                                        <tr>
                                            <td>
                                                <strong class="nome-produto">
                                                    {{ $servico->nome }}
                                                </strong>
                                            </td>
        
                                            <td>
                                                <p class="descricao-produto">{{ $servico->descricao }}</p>
                                            </td>
                                            <td>
                                                <input value="{{ \App\Classes\Orcamento::qtdIdealServicos($servico, $orcamento->qtd_pessoas) }}" readonly type="tel" name="servicos[{{ $servico->id }}][ideal]">
                                            </td>

                                            <td>
                                                <input value="{{ \App\Classes\Orcamento::qtdMinimaServicos($servico, $orcamento->qtd_pessoas) }}" readonly type="tel" name="servicos[{{ $servico->id }}][minimo]">
                                            </td>
        
                                            <td>
                                                <input type="checkbox" class="reduced" name="servicos[{{ $servico->id }}][check_minimo]"id="">
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
    
                            </tbody>
                        </table>
                    </form>
                    <span class="resumo-evento">
                        <strong>Mensagem de aviso</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi nunc, platea.
                            Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                            et
                            hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget duis
                            fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                            vitae.
                            Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla. Id in
                            sagittis, sagittis libero.</p>
                    </span>

                    <span class="resumo-evento">
                        <strong>Resumo do evento</strong>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi nunc, platea.
                            Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                            et
                            hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget duis
                            fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                            vitae.
                            Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla. Id in
                            sagittis, sagittis libero.</p>
                    </span>

                </div>
            </div>

        </div>
    </section>

@endsection


@section('scripts')
    <script>
        $('section.carrinho div.niv div.niv-send button').click(() => {
            window.location.href = '/';
        })

        function submitForm(){
            $("#formServicos").submit();
        }
    </script>
@endsection
