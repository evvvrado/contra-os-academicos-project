@extends('site.template.main', ['titulo' => Definition::NAME.' | Serviços Inclusos'])

@section('body_attr', 'id=orcamento-carrinho')


@section('styles')
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
@endsection


@section('content')

    <div class="next-step">
        <h2>Leve sua festa <i>além</i></h2>
        <p>Continue sua jornada indo pra próxima página</p>

        <a href="{{ route('site.orcamento.encerrar_2') }}">Solicitar</a>
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
                    <table>
                        <thead>
                            <tr>
                                <th width="206">Nome dos serviços</th>
                                <th width="456">Descrição</th>
                                {{-- <th width="175">Valor</th> --}}
                                <th width="200">Quantidade</th>
                                <th width="200"></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>
                                    <strong class="nome-produto">
                                        Servico de Drink
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">Orçamento de Drinks</p>
                                </td>

                                {{-- <td>
                                <strong class="total-produto">
                                    R$ {{ number_format(session()->get("total_orcamento_produtos"), 2, ",", ".") }}
                                </strong>
                                   </td> --}}

                                <td>
                                    <input value="1" disabled type="tel" placeholder="250" name="quantidade-produto">
                                </td>
                                {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format(session()->get('total_orcamento_produtos'), 2, ',', '.') }}
                                    </strong>
                                </td> --}}


                                <td>
                                    <input type="checkbox" class="reduced" name="" id="">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong class="nome-produto">
                                        Servico de Bartender
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">O uso de 5 bartenders por pessoa</p>
                                </td>


                                {{-- <td>
                                <strong class="total-produto">
                                    R$ {{ number_format(session()->get("total_orcamento_produtos"), 2, ",", ".") }}
                                </strong>
                                   </td> --}}

                                <td>
                                    <input value="1" disabled type="tel" placeholder="250" name="quantidade-produto">
                                </td>
                                {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format(session()->get('total_orcamento_produtos'), 2, ',', '.') }}
                                    </strong>
                                </td> --}}


                                <td>
                                    <input type="checkbox" class="reduced" name="" id="">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong class="nome-produto">
                                        Servico de Barback
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">O uso de 5 Barback por pessoa</p>
                                </td>


                                {{-- <td>
                                <strong class="total-produto">
                                    R$ {{ number_format(session()->get("total_orcamento_produtos"), 2, ",", ".") }}
                                </strong>
                                   </td> --}}

                                <td>
                                    <input value="1" disabled type="tel" placeholder="250" name="quantidade-produto">
                                </td>
                                {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format(session()->get('total_orcamento_produtos'), 2, ',', '.') }}
                                    </strong>
                                </td> --}}


                                <td>
                                    <input type="checkbox" class="reduced" name="" id="">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong class="nome-produto">
                                        Servico de Copeira
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">O uso de 5 Copeiras por pessoa</p>
                                </td>


                                {{-- <td>
                                <strong class="total-produto">
                                    R$ {{ number_format(session()->get("total_orcamento_produtos"), 2, ",", ".") }}
                                </strong>
                                   </td> --}}

                                <td>
                                    <input value="1" disabled type="tel" placeholder="250" name="quantidade-produto">
                                </td>
                                {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format(session()->get('total_orcamento_produtos'), 2, ',', '.') }}
                                    </strong>
                                </td> --}}


                                <td>
                                    <input type="checkbox" class="reduced" name="" id="">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong class="nome-produto">
                                        Servico de Estrutura
                                    </strong>
                                </td>

                                <td>
                                    <p class="descricao-produto">O uso de 5 Estruturas por pessoa</p>
                                </td>


                                {{-- <td>
                                <strong class="total-produto">
                                    R$ {{ number_format(session()->get("total_orcamento_produtos"), 2, ",", ".") }}
                                </strong>
                                   </td> --}}

                                <td>
                                    <input value="1" disabled type="tel" placeholder="250" name="quantidade-produto">
                                </td>
                                {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format(session()->get('total_orcamento_produtos'), 2, ',', '.') }}
                                    </strong>
                                </td> --}}


                                <td>
                                    <input type="checkbox" class="reduced" name="" id="">
                                </td>
                            </tr>


                            @foreach ($servicos as $servico)
                                <tr>
                                    <td>
                                        <strong class="nome-produto">
                                            {{ $servico->nome }}
                                        </strong>
                                    </td>

                                    <td>
                                        <p class="descricao-produto">{{ $servico->descricao }}</p>
                                    </td>

                                    {{-- <td>
                                    <strong class="total-produto">
                                        R$ {{ number_format($servico->valor, 2, ",", ".") }}
                                    </strong>
                                </td> --}}

                                    <td>
                                        <input value="1" disabled type="tel" placeholder="250" name="quantidade-produto">
                                    </td>

                                    <td>
                                        <strong class="total-produto">
                                            R$ {{ number_format($servico->valor, 2, ',', '.') }}
                                        </strong>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

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
    </script>
@endsection
