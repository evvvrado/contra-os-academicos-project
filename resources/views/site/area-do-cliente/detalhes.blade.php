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
                    Festa da Fazenda
                    <p>Para 500 convidados</p>
                </h2>
            </div>


            <nav>
                <span active>Drinks</span>
                <span>Serviços</span>
                <span>Adicionais</span>
            </nav>

            <main>
                <div class="list" active>
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
asdasd
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

@section('scripts')
<script>
    $(document).ready(() =>{
        
    $('.mA_showcase nav span').click(function() {
        $('.mA_showcase nav span').removeAttr('active');
        $(this).attr('active', '');

        $(`.mA_showcase main div.list`).removeAttr('active');
        $($(`.mA_showcase main div.list`)[$(this).index()]).attr('active', '');
    })
    })
</script>
@endsection