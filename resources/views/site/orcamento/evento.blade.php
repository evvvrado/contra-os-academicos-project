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

                    <form action="{{ route('site.orcamento.informacoes') }}" method="post">
                        @csrf
                        <input type="hidden" name="tipo" value="casamento">

                        <input type="hidden" name="id" value="{{ $lead->id }}">

                        <input type="submit" value="Quero este" style="z-index: 1000;">
                    </form>
                </div>


                <div class="box" niv-fade>
                    <strong>CORPORATIVO</strong>
                    <p>Eternizando momentos únicos da sua vida</p>

                    <form action="{{ route('site.orcamento.informacoes') }}" method="post">
                        @csrf
                        <input type="hidden" name="tipo" value="corporativo">

                        <input type="hidden" name="id" value="{{ $lead->id }}">

                        <input type="submit" value="Quero este" style="z-index: 1000;">
                    </form>
                </div>


                <div class="box" niv-fade>
                    <strong>Aniversário</strong>
                    <p>
                        Comemorações especiais com
                        o diferencial que você merece
                    </p>

                    <form action="{{ route('site.orcamento.informacoes') }}" method="post">
                        @csrf
                        <input type="hidden" name="tipo" value="aniversario">

                        <input type="hidden" name="id" value="{{ $lead->id }}">

                        <input type="submit" value="Quero este" style="z-index: 1000;">
                    </form>
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