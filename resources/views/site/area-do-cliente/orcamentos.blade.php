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
                {{--
                <picture>
                    <img src="{{ asset('/site/assets/sistema/capaMatricula.jpg')}}" alt="">
                </picture> --}}

                <h2>
                    Festa {{ $orcamento->tipo }} do dia {{date('d/m/Y', strtotime($orcamento->data))}}
                    <p>Para {{ $orcamento->qtd_pessoas }} convidados</p>
                </h2>
            </div>

            <div class="info">
                <span>
                    <small>Suas informações</small>
                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/userData.svg')}}" alt="">
                        </picture>
                        <h4>
                            Everaldo Júnior
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/mailData.svg')}}" alt="">
                        </picture>
                        <h4>
                            everaldocrj@gmail.com
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/phoneData.svg')}}" alt="">
                        </picture>
                        <h4>
                            (35) 9 8809305
                        </h4>
                    </div>
                </span>


                <span>
                    <small>Informações do evento</small>
                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/flagData.svg')}}" alt="">
                        </picture>
                        <h4>
                            Corporativo
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/atimeData.svg')}}" alt="">
                        </picture>
                        <h4>
                            5 horas
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/pinData.svg')}}" alt="">
                        </picture>
                        <h4>
                            11.111-111
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/calendar.svg')}}" alt="">
                        </picture>
                        <h4>
                            08/04/2022
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/userData.svg')}}" alt="">
                        </picture>
                        <h4>
                            120 Pessoas
                        </h4>
                    </div>

                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/drinkData.svg')}}" alt="">
                        </picture>
                        <h4>
                            Não terá outras bebidas
                        </h4>
                    </div>
                </span>


                <span>
                    <small>Valores</small>
                    <div>
                        <picture>
                            <img src="{{asset('site/assets/sistema/dollar.svg')}}" alt="">
                        </picture>
                        <h4>
                            <strong>Total:</strong> R$ 350,00
                        </h4>
                    </div>
                </span>
            </div>


            <nav>
                <span active>Inclusos</span>
                <span>Não Inclusos</span>
            </nav>

            <main>
                <div class="list" active>
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
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
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
                </div>

                <div class="list" style="padding-top: 20px;">


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
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur
                                                adipiscing
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
                </div>

                <div class="list">

                </div>



                <div class="info --special">
                    <span>
                        <small>Drinks</small>

                        <div>
                            <picture>
                                <img width=251 height=271 src="{{ asset('site/assets/img/drink_1.png') }}" alt="">
                                <h2>3x <i>Nome do drink</i><br>R$ 250,00</h2>
                            </picture>

                        </div>
                    </span>
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