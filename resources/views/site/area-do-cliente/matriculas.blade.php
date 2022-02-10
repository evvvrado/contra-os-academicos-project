@extends('site.template.area-do-aluno')

@section('id', 'matriculas-aluno')

@section('content')
@php
$aluno = \App\Models\Aluno::find(session()->get('aluno')['id']);
@endphp



<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <h2>Minhas matrículas</h2>

            <main>
                <div class="boxes">
                    {{-- @if (count($aluno->matriculas) <= 0) <h3>Ainda não há nenhuma matrícula</h3>
                        @else
                        @foreach ($aluno->matriculas as $matricula)

                        <div class="box">

                            <picture class="thumbnail">
                                <img src="{{ asset($matricula->curso->thumbnail) }}" alt="">
                            </picture>

                            <strong>{{ $matricula->curso->nome }}</strong>

                            <div class="info">
                                <div>
                                    <picture>
                                        <img src="{{asset('site/assets/sistema/calendar.svg')}}" alt="">
                                    </picture>
                                    <p>{{ date('d.m.Y', strtotime($matricula->created_at)) }}</p>
                                </div>
                            </div>


                            <button onclick="window.location.href ='{{ route('site.minha-area-matricula.conteudo', ['matricula' => $matricula]) }}'">
                                Acessar Curso
                                <div class="_svg">
                                    <img src="{{asset('site/assets/sistema/buttonArrowRight.svg')}}" alt="">
                                </div>
                            </button>
                        </div>

                        @endforeach
                        @endif --}}
                </div>
            </main>
        </div>
    </div>
</section>


@endsection