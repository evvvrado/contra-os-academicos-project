@extends('site.template.main', ['titulo' => Definition::NAME.' | Qual é o tipo do seu evento?'])

@section("body_attr", "id=orcamento-evento")

@section('content')

<section class="tipo">
    <div class="niv">

        <div class="niv-top">
            <span>
                <h2>Qual é o tipo do seu evento?</h2>
                <p>No que podemos ajudar</p>
            </span>

            <p>
                Criar experiencias que levam além?<br>
                Monte seu orçamento online? <i>Aqui tudo dá.</i>
            </p>
        </div>

        <div class="niv-content">
            <div class="scroll">
                <div class="box" niv-fade>
                    <strong>CASAMENTO</strong>
                    <p>Seu evento sob medida em cada detalhe</p>

                    <a href="{{ route('site.orcamento.informacoes', ["lead" => $lead, "tipo" => "casamento"] ) }}">Quero este</a>
                </div>


                <div class="box" niv-fade>
                    <strong>CORPORATIVO</strong>
                    <p>Eternizando momentos únicos da sua vida</p>

                    <a href="{{ route('site.orcamento.informacoes', ["lead" => $lead, "tipo" => "corporativo"]) }}">Quero este</a>
                </div>


                <div class="box" niv-fade>
                    <strong>Aniversário</strong>
                    <p>
                        Comemorações especiais com
                        o diferencial que você merece
                    </p>

                    <a href="{{ route('site.orcamento.informacoes', ["lead" => $lead, "tipo" => "aniversario"]) }}">Quero este</a>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('section.tipo div.niv div.niv-content div.scroll div.box[niv-fade]').removeAttr('niv-fade');
    })
</script>
@endsection