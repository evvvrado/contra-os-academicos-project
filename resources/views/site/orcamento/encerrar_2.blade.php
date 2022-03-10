@extends('site.template.main', ['titulo' => Definition::NAME.' | Detalhes do seu carrinho'])

@section("body_attr", "id=orcamento-carrinho")


@section('content')

<section class="carrinho">
    <div class="niv">
        <div class="niv-top">
            <span>
                <h2>Meu Carrinho - Serviços Extras</h2>
            </span>
        </div>


        <div class="niv-table">
            <div class="scroll">
                <form action="{{ route('site.orcamento.salvar_orcamento') }}" method="post">
                    @csrf
                    <div class="next-step">
                        <h2>Leve sua festa <i>além</i></h2>
                        <p>Continue sua jornada indo pra próxima página</p>
                    
                        <input type="submit" value="Solicitar">
                    </div>
                
                    <table>
                        <thead>
                            <tr>
                                <th width="206">Nome dos serviços</th>
                                <th width="456">Descrição</th>
                                <th width="175">Valor</th>
                                <th width="221">Quantidade</th>
                                <th width="210">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if($servicos->count() > 0)
                                @foreach($servicos as $servico)
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
                                            <strong class="total-produto">
                                                R$ {{ $servico->valor }}
                                            </strong>
                                        </td>

                                        <td>
                                            <i onClick="remove()" class="fa fa-window-minimize" style="cursor:pointer; margin: 4px;"></i>
                                            <input value="1" type="number" min="0" step="1" placeholder="250" name="{{ $servico->id }}" id="qtd">
                                            <i onClick="add()" class="fa fa-plus" style="cursor:pointer; "></i>
                                        </td>

                                        <td>
                                            <strong class="total-produto">
                                                R$ {{ $servico->valor }}
                                            </strong>
                                        </td>
                                    </tr>
                                @endforeach
                            @else   
                            <tr>
                                <td>
                                    <strong class="nome-produto">
                                        Não há serviços adicionais
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">-</p>
                                </td>

                                <td>
                                    <strong class="total-produto">
                                        -
                                    </strong>
                                </td>

                                <td>
                                    <input value="0" disabled type="tel" placeholder="250" name="quantidade-produto">
                                </td>

                                <td>
                                    <strong class="total-produto">
                                        -
                                    </strong>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </form>

                <span class="resumo-evento">
                    <strong>Resumo do evento</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Accumsan molestie facilisi nunc, platea. Ut sit mauris sociis imperdiet nulla cras magna. Habitant nulla
                        et
                        hac mattis egestas vulputate mauris lobortis odio. Sed risus, a dui, cras. Nisl eget duis fermentum scelerisque pretium. Arcu vel eget amet arcu in euismod
                        vitae.
                        Amet semper id amet vel purus ut. Eget integer risus in commodo interdum ac nulla. Id in sagittis, sagittis libero.</p>
                </span>

            </div>
        </div>

    </div>
</section>

@endsection


@section('scripts')
<script>
        function add() {
            var qtd = $("#qtd").val();
            $("#qtd").val(parseInt(qtd) + parseInt(1));
        }

        function remove() {
            var qtd = $("#qtd").val();
            if(qtd == 0) {
                $('#qtd').css({border: "1px red solid" });

                setTimeout(() => {
                    $('#qtd').css({border: "1px #cfdbdd solid" });
                }, 2000);
            } else {
                $("#qtd").val(parseInt(qtd) - parseInt(1));
            }
        }

    $('section.carrinho div.niv div.niv-send button').click(() =>{
            window.location.href = '/';
        })
</script>
@endsection