@extends('site.template.main', ['titulo' => Definition::NAME.' | Detalhes do seu carrinho'])

@section("body_attr", "id=orcamento-carrinho")


@section('content')

<div class="next-step">
    <h2>Leve sua festa <i>além</i></h2>
    <p>Continue sua jornada indo pra próxima página</p>

    <a href="/">Solicitar</a>
</div>

<section class="carrinho">
    <div class="niv">
        <div class="niv-top">
            <span>
                <h2>Detalhes do seu carrinho</h2>
            </span>
        </div>


        <div class="niv-table">
            <div class="scroll">
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
                        <tr>
                            <td>
                                <strong class="nome-produto">
                                    Lorem ipsum dolor adipiscing elit.
                                </strong>
                            </td>

                            <td>
                                <p class="descricao-produto">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                </p>
                            </td>

                            <td>
                                <strong class="total-produto">
                                    R$ 350,00
                                </strong>
                            </td>

                            <td>
                                <input type="tel" placeholder="250" name="quantidade-produto">
                            </td>

                            <td>
                                <strong class="total-produto">
                                    R$ 350,00
                                </strong>
                            </td>
                        </tr>
                    </tbody>
                </table>

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

        <div class="niv-send">
            <div class="top">
                <span>Totais do carrinho</span>
            </div>
            <div class="content">
                <div>
                    <p>Subtotal</p>
                    <strong>R$ 350,00</strong>
                </div>
                <div>
                    <p>Total</p>
                    <strong>R$ 350,00</strong>
                </div>
            </div>

            <button>
                SOLICITAR ORÇAMENTO
            </button>
        </div>

    </div>
</section>

@endsection


@section('scripts')
<script>
    $('section.carrinho div.niv div.niv-send button').click(() =>{
            window.location.href = '/';
        })
</script>
@endsection