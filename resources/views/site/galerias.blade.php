@include("site.includes.head")
<title>ENAF - Galerias</title>

<body id="galerias">

    @include("site.includes.navbar")

    <section class="container-fluid s_hero">
        <div class="container-fav">
            <div class="_h1">
            </div>
        </div>
    </section>


    <script src="{{ asset('site/js/jquery.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery-ui.js') }}"></script>




    @foreach (\App\Models\Galeria::where('ativo', 1)->orderBy('created_at', 'DESC')->get() as $galeria)


    <div class="container-fluid s_galeria galeria{{$galeria->id}}">
        <div class="container-fav">
            <div class="_content">
                <div class="_galeriaList">

                    @php
                    $fotos = \App\Models\GaleriaFoto::where('galeria_id', $galeria->id)->get();
                    @endphp

                    @foreach ($fotos as $foto)

                    <div class="_picture">
                        <img src="{{ asset($foto->imagem) }}" alt="Foto presente na galeria ENAF" />
                    </div>

                    @endforeach

                </div>
            </div>

            <div class="_menu">
                <strong>{{ $galeria->nome }}</strong>
                <div class="_buttons">
                    <div class="_previous _button">
                        <img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" />
                    </div>

                    <div class="_indicator">
                        <img class="active" alt="Indicador da lista" />
                        <img alt="Indicador da lista" />
                        <img alt="Indicador da lista" />
                    </div>

                    <div class="_next _button">
                        <img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" />
                    </div>
                </div>
            </div>
        </div>
    </div>




    @endforeach




    <section class="fullscreen-image">
        <div>
            <button><img src="{{ asset('site/img/halfarrowleft.svg') }}" alt="Seta indicando a esquerda" /></button>
            <button><img src="{{ asset('site/img/halfarrowright.svg') }}" alt="Seta indicando a direita" /> </button>
        </div>
        <picture>
            <img src="{{ asset('site/img/galeria_Pic (1).jpg')}} " alt="">
        </picture>

        <span></span>
    </section>






    @include('site.includes.publicidade')



    @include("site.includes.parceiros")


    @include("site.includes.footer")

    <script>
        function getImage(image) {
            $('.fullscreen-image').toggleClass("showed")
            $('.fullscreen-image picture img').attr('src', $(image).attr('src'));

            

            var gallery_images = $(image).closest('._galeriaList').find('div._picture');
            var imageindex = $(image).closest('div._picture').index();

            

            $(".fullscreen-image div button:nth-child(2)").click(() => {
                if(imageindex >= gallery_images.length - 1) return false;

                imageindex++;
                var source =  gallery_images.find('img')[imageindex];


                $('.fullscreen-image picture img').attr('src', source.src);
            })

            

            

            $(".fullscreen-image div button:first-child").click(() => {
                if(imageindex == 0) return false;

                imageindex--
                var source =  gallery_images.find('img')[imageindex];


                $('.fullscreen-image picture img').attr('src', source.src);
            })

        }

        
        $(".s_galeria .container-fav ._content ._galeriaList ._picture img").click(function() {
            getImage(this)
        })
        

    </script>