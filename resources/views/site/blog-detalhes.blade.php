@extends('site.template.main', ['titulo' => Definition::NAME.' | Nosso blog'])

@section("body_attr", "id=blog")


@section('content')

<section class="destaque-blog">

    <div class="niv">
        <div class="banner" style="background-image: url('/site/assets/img/blog_example.jpg')">
            <div>
                <span>
                    <picture>
                        <img src="{{ asset('site/assets/img/icon_calendar_white.svg') }}" alt="calendário ícone">
                    </picture>

                    19 jul 2021

                </span>

                <h2>Fique por dentro das tendências de driks universitário.</h2>
                <p>Autor: Tiago Borges</p>
            </div>
        </div>
    </div>
</section>

<section class="lista-blog">
    <div class="niv">
        <div class="niv-top">
            <div>
                <strong>Categorias</strong>
                <select name="categorias" id="categorias">
                    <option value="box">Selecionar categoria</option>
                    <option value="drinks">Drinks</option>
                    <option value="variedade">Variedade</option>
                    <select>
            </div>
        </div>

        <div class="niv-content">

            <div class="box drinks" style="background-image: url('{{ asset('/site/assets/img/blog_image 1.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>
            <div class="box drinks" style="background-image: url('{{ asset('/site/assets/img/blog_image 2.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>
            <div class="box drinks" style="background-image: url('{{ asset('/site/assets/img/blog_image 3.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>


            <div class="box variedade" style="background-image: url('{{ asset('/site/assets/img/blog_image 1.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>
            <div class="box variedade" style="background-image: url('{{ asset('/site/assets/img/blog_image 2.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>
            <div class="box variedade" style="background-image: url('{{ asset('/site/assets/img/blog_image 3.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>



            <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 1.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>
            <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 2.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>
            <div class="box" style="background-image: url('{{ asset('/site/assets/img/blog_image 3.jpg')}}')">

                <div>
                    <span>
                        <picture>
                            <img src="{{ asset('/site/assets/img/icon_calendar.svg') }}" alt="ícone de calendário">
                        </picture>
                        <small>19 jul 2021</small>
                    </span>

                    <strong>Como fazer os melhores drinks com Rum?</strong>
                </div>


            </div>

        </div>
    </div>
</section>

@endsection