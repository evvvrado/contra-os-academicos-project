@include("site.includes.head")
<title>ENAF - Quem somos</title>

<body id="sobre">

  @include("site.includes.navbar")

  @include('site.includes.sobre')

  <section class="container-fluid _video">
    <div class="container-fav">
      <div class="_text">
        <h4>Vídeo</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vulputate facilisis volutpat ultrices eget faucibus. Ultrices euismod gravida eget adipiscing orci.</p>
      </div>
      <div class="_videoFrame">
        <img src="{{ asset('site/img/banner_video.jpg') }}" alt="Video Institucional" />
      </div>
    </div>
  </section>

  @include('site.includes.galeria')

  @include('site.includes.numeros')

  @include('site.includes.blog-noticias')

  @include('site.includes.publicidade')



  @include("site.includes.parceiros")
  @include("site.includes.footer-expanded")