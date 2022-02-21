@extends('site.template.main', ['titulo' => Definition::NAME.' | Me conte mais '])

@section("body_attr", "id=orcamento-info")

@section('content')

<section class="conte">
    <div class="niv">

        <div class="niv-top">
            <span>
                <h2>Me conte mais<br> sobre se evento</h2>
                <p>Você não está só, vamos ajuda-lo</p>
            </span>

            <p>
                Mas mesmo assim você pode<br>
                alterar mais a frente <i>Aqui tudo dá.</i>
            </p>
        </div>

        <div class="niv-content">
            <div class="niv-picture">
                <picture>
                    <img src="{{ asset('site/assets/img/info-banner.png') }}" alt="imagem presentativa">
                </picture>
            </div>

            <div class="niv-form">
                <form action="{{ route('site.orcamento.lista')}}" method="post">
                    @csrf
                    <label>
                        <strong>Qual o CEP da realização do evento</strong>

                        <input type="tel" name="cep" placeholder="00.000-000" required>
                    </label>


                    <label>
                        <strong>Data de seu evento</strong>

                        <input type="date" name="data" required>
                    </label>

                    <label>
                        <strong>Tempo de serviço de bar</strong>

                        <fieldset required>
                            <label>
                                <span><input type="radio" value="3" name="horas"> 3h</span>
                            </label>
                            <label>
                                <span><input type="radio" value="4" name="horas"> 4h</span>
                            </label>
                            <label>
                                <span><input type="radio" value="5" name="horas"> 5h</span>
                            </label>
                            <label>
                                <span><input type="radio" value="6" name="horas"> 6h</span>
                            </label>
                            <label>
                                <span><input type="radio" value="7" name="horas"> 7h</span>
                            </label>
                            <label>
                                <span><input type="radio" value="8" name="horas"> 8h</span>
                            </label>
                            <label>
                                <span><input type="radio" value="9" name="horas"> 9h</span>
                            </label>
                        </fieldset>


                    </label>



                    <label>
                        <strong>Serão servidas outras bebidas</strong>

                        <fieldset required>
                            <label>
                                <span><input type="radio" value="1" name="alcool"> Com Alcool </span>
                            </label>
                            <label>
                                <span><input type="radio" value="2" name="alcool"> Sem Alcool </span>
                            </label>
                            <label>
                                <span><input type="radio" value="3" name="alcool"> Não serão </span>
                            </label>
                        </fieldset>

                    </label>



                    <label>
                        <strong>Quantas pessoas estaram na festa</strong>

                        <input type="number" name="pessoas" placeholder="Insira um número" required>
                    </label>

                    <button>Selecionas as bebidas</button>

                    <input type="hidden" name="lead" value="{{$_POST[" id"]}}">

                </form>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')
<script>
    $('section.conte div.niv div.niv-content div.niv-form form input[name=cep]').keydown(() =>{
        $('section.conte div.niv div.niv-content div.niv-form').height('300px');
    })

    
    $('section.conte div.niv div.niv-content div.niv-form form input[name=data]').change(() =>{
        $('section.conte div.niv div.niv-content div.niv-form').height('420px');
    })

    
    $('section.conte div.niv div.niv-content div.niv-form form input[name=horas]').change(() =>{
        $('section.conte div.niv div.niv-content div.niv-form').height('580px');
    })

    
    $('section.conte div.niv div.niv-content div.niv-form form input[name=alcool]').change(() =>{
        $('section.conte div.niv div.niv-content div.niv-form').height('820px');
    })




</script>
@endsection