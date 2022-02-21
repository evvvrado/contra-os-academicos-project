@extends('site.template.main', ['titulo' => Definition::NAME.' | Entrar'])

@section("body_attr", "id=orcamento-id")

@section('content')

<section class="identificacao">
    <div class="niv">
        <div class="niv-top">
            <span>
                <h2>Entrar na área de orçamentos</h2>
            </span>
            <p>
                Criar experiencias que levam além?<br>
                Monte seu orçamento online? <i>Aqui tudo dá.</i>
            </p>
        </div>

        <div class="niv-form">
            <form method="post" action="{{ route('site.logar-cliente')}}">
                @csrf
                <label>
                    <span>Email</span>
                    <input type="text" name="email" placeholder="Insira seu usuário" required value="@if(session()->get('email_lead'))  {{ session()->get('email_lead') }} @endif">
                </label>
                <label>
                    <span>Senha</span>
                    <input type="password" name="senha" placeholder="Insira sua senha" required>
                </label>

                <button>
                    Acessar
                </button>

                <p>Leve o melhor para sua festa com a Birittas</p>
            </form>

        </div>
    </div>
</section>

@endsection