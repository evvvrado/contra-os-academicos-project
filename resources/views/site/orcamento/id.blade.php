@extends('site.template.main', ['titulo' => Definition::NAME.' | Quem é você?'])

@section("body_attr", "id=orcamento-id")

@section('content')

<section class="identificacao">
    <div class="niv">
        <div class="niv-top">
            <span>
                <h2>Quem é você?</h2>
                <p>No que podemos ajudar</p>
            </span>

            <p>
                Criar experiencias que levam além?<br>
                Monte seu orçamento online? <i>Aqui tudo dá.</i>
            </p>
        </div>

        <div class="niv-form">
            <form action="{{ route('site.orcamento.evento')}}">
                <label>
                    <span>Nome *</span>
                    <input type="text" name="nome" placeholder="Nome completo" required>
                </label>
                <label>
                    <span>E-mail *</span>
                    <input type="e-mail" name="email" placeholder="e-mail@example.com.br" required>
                </label>
                <label>
                    <span>Whatsapp *</span>
                    <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required>
                </label>

                <button>
                    Quero levar minha festa além
                </button>

                <p>Leve o melhor para sua festa com a Birittas</p>
            </form>

        </div>
    </div>
</section>

@endsection