@extends('site.template.area-do-cliente')

@section('id', 'matriculas-aluno-detalhes')

@section('content')


<section class="mA_showcase">
    <div class="container-fluid">
        <div class="container-fav">
            <div class="top">

                <picture>
                    <img src="{{ asset('/site/assets/sistema/capaMatricula.jpg')}}" alt="">
                </picture>

                <h2>
                    Festa em {{ $orcamento->cidade }}
                    <p>Para {{ $orcamento->qtd_pessoas }} convidados</p>
                </h2>
            </div>


            <nav>
                <span active>Drinks</span>
                <span>Serviços</span>
                <span>Adicionais</span>
            </nav>

            <main>
                <div class="list">
                    <article>
                        <div class="date">
                            20/01/2021

                            <picture>
                                <img src="{{ asset('site/assets/sistema/calendar white.svg') }}" alt="Aprovado">
                            </picture>
                        </div>


                        <div class="content">
                            <strong>Título</strong>
                            <p>Descrição</p>

                            <div class="files">
                                <a class="pdf" href="/">documentoinicial.pdf</a>


                                <a class="video" href="/">documentoinicial.video</a>
                            </div>
                        </div>
                    </article>
                </div>
            </main>
        </div>
    </div>
</section>
@endsection