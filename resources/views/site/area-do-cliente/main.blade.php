@extends('site.template.area-do-cliente')

@section('id', 'area-aluno')

@section('content')


<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Minha Área</h2>

            <main>
                <div class="boxes">
                    <div class="box">
                        <picture>
                            <img src="{{asset('/site/assets/sistema/Icone (1).png') }}" alt="">
                        </picture>
                        <div class="content">
                            <strong>Orçamentos</strong>
                            <p>0 Orçamentos</p>
                            <a href="{{ route('minha-area.cliente-orcamentos') }}">+ VER ORÇAMENTOS</a>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</section>



@endsection