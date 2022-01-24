<!doctype html>
<html lang="pt-br">

<head>
    <title>{{$cliente->nome}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap');
        body{
            background-color: #E5E5E5;
            background-image: url({{asset($cliente->fundo)}});
            font-family: 'Montserrat', sans-serif;
            background-size: cover;
            background-repeat: no-repeat;
            min-height: 100vh;
        }

        svg{
            height: 25px; 
            color: white; 
            margin: 10px 10px;
        }

        .titulo{
            color: {{$cliente->cor_titulo}};
            font-size: 1.75rem; 
            font-weight: 500; 
            line-height: 1.2;
        }

        .subtitulo{
            color: {{$cliente->cor_subtitulo}};
        }

        .card-content{
            box-sizing: border-box;
            border-radius: 30px;
            background-color: transparent;
            width: 550px;
            margin: 0 auto;
            background-color: {{$cliente->cor_fundo_cartao}};
            color: {{$cliente->cor_letra_cartao}};
            transition: 0.5s;
            padding: 0 15px;
        }

        .card-content:hover{
            background-color: {{$cliente->cor_fundo_cartao_hover}};
            color: {{$cliente->cor_letra_cartao_hover}};
        }

        @media (max-width:530px){
            .card-content{
                width: 100%;
            }
        }

        a, a:focus, a:visited, a:hover{
            color: inherit;
            text-decoration: none;
        }

        .youtube > svg:hover{
            color: #FF0000;
        }

        .whatsapp > svg:hover{
            color: #4AC959;
        }

        .twitter > svg:hover{
            color: #1DA1F2;
        }

        .tiktok > svg:hover{
            color: black;
        }

        .pinterest > svg:hover{
            color: #BD081C;
        }

        .linkedin > svg:hover{
            color: #2867B2;
        }

        .instagram > svg:hover{
            color: #C13584;
        }

        .facebook > svg:hover{
            color: #4267B2;
        }

        .email > svg:hover{
            color: #fbbc05;
        }
    </style>
</head>
<?php
?>
<body>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-4">
                <div class="row">
                    <div class="col-12 text-center">
                        <img src="{{asset($cliente->logo)}}" style="width: 150px; height: 150px; border-radius: 50%;" alt="Logo Cliente">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <h1 class="titulo">{{$cliente->titulo}}</h1>                    
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <span class="subtitulo">{{$cliente->subtitulo}}</span>                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-xl-5 text-center">
                @if($cliente->email)
                    <a class="email link-rede" rede="9" target="_blank" href="mailto:{{$cliente->email}}"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" class="svg-inline--fa fa-envelope fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg></a>
                @endif
                @if($cliente->facebook_ativo)    
                    <a class="facebook link-rede" rede="2" target="_blank" href="{{$cliente->facebook}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" class="svg-inline--fa fa-facebook-f fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg></a>
                @endif
                @if($cliente->instagram_ativo)
                    <a class="instagram link-rede" rede="4" target="_blank" href="{{$cliente->instagram}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a>
                @endif
                @if($cliente->linkedin_ativo)
                    <a class="linkedin link-rede" rede="3" target="_blank" href="{{$cliente->linkedin}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg></a>
                @endif
                @if($cliente->pinterest_ativo)
                    <a class="pinterest link-rede" rede="5" target="_blank" href="{{$cliente->pinterest}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="pinterest-p" class="svg-inline--fa fa-pinterest-p fa-w-12" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path fill="currentColor" d="M204 6.5C101.4 6.5 0 74.9 0 185.6 0 256 39.6 296 63.6 296c9.9 0 15.6-27.6 15.6-35.4 0-9.3-23.7-29.1-23.7-67.8 0-80.4 61.2-137.4 140.4-137.4 68.1 0 118.5 38.7 118.5 109.8 0 53.1-21.3 152.7-90.3 152.7-24.9 0-46.2-18-46.2-43.8 0-37.8 26.4-74.4 26.4-113.4 0-66.2-93.9-54.2-93.9 25.8 0 16.8 2.1 35.4 9.6 50.7-13.8 59.4-42 147.9-42 209.1 0 18.9 2.7 37.5 4.5 56.4 3.4 3.8 1.7 3.4 6.9 1.5 50.4-69 48.6-82.5 71.4-172.8 12.3 23.4 44.1 36 69.3 36 106.2 0 153.9-103.5 153.9-196.8C384 71.3 298.2 6.5 204 6.5z"></path></svg></a>
                @endif
                @if($cliente->url)
                    <a class="url link-rede" rede="0" target="_blank" href="{{$cliente->url}}"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="window-maximize" class="svg-inline--fa fa-window-maximize fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V192h416v234z"></path></svg></a>
                @endif
                @if($cliente->tiktok_ativo)
                    <a class="tiktok link-rede" rede="8" target="_blank" href="{{$cliente->tiktok}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="tiktok" class="svg-inline--fa fa-tiktok fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"></path></svg></a>
                @endif
                @if($cliente->twitter_ativo)
                    <a class="twitter link-rede" rede="6" target="_blank" href="{{$cliente->twitter}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" class="svg-inline--fa fa-twitter fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path></svg></a>
                @endif
                @if($cliente->whatsapp)
                    <a class="whatsapp link-rede" rede="1" target="_blank" href="https://api.whatsapp.com/send?phone=55{{$cliente->whatsapp}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="whatsapp" class="svg-inline--fa fa-whatsapp fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg></a>
                @endif
                @if($cliente->youtube_ativo)
                    <a class="youtube link-rede" rede="7" target="_blank" href="{{$cliente->youtube}}"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" class="svg-inline--fa fa-youtube fa-w-18" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg></a>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-12">
                @foreach($cliente->elementos as $elemento)
                    <div class="card-content mt-3">
                        <a href="{{$elemento->link}}" eid="{{$elemento->id}}" target="_blank" class="card-link">
                            <div class="row">
                                @if(!empty($elemento->imagem))
                                    <div class="col-12 col-md-3 text-center text-md-left py-3 pl-2 pr-0 d-flex align-items-center justify-content-center">
                                        <img style="width: 70px; height: 70px; border-radius: 50%;" src="{{asset($elemento->imagem)}}" alt="">
                                    </div>
                                    <div class="col-12 col-md-9 text-center text-md-left pr-4 py-3 d-flex align-items-center justify-content-center justify-content-md-start">
                                        <span>{{$elemento->titulo}}</span>
                                    </div>
                                @else
                                    <div class="col-12 text-center pr-4 py-3">
                                        <span>{{$elemento->titulo}}</span>
                                    </div>
                                @endif
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>

        var cliente = {!! $cliente->id !!};
        var visitante = {!! $visitante->id !!};
        var acesso = {!! $acesso->id !!};

        $(document).ready(function(){
            $(".card-link").click(function(){
                var eid = $(this).attr("eid");
                var _token = $('meta[name="_token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': _token
                    }
                });  

                $.ajax({
                    url: '/api/click',
                    type: 'POST',
                    data: {
                        visitante: visitante,
                        acesso: acesso,
                        elemento: eid,
                        is_elemento: true,
                        is_rede: false
                    },
                    dataType: 'JSON',
                    success: function(data) {
                        console.log(data);
                    },
                    error: function(err){
                        console.log(err);
                    }
                });
            });

            $(".link-rede").click(function(){
                var rede = $(this).attr("rede");
                var _token = $('meta[name="_token"]').attr('content');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': _token
                    }
                });  

                $.ajax({
                    url: '/api/click',
                    type: 'POST',
                    data: {
                        visitante: visitante,
                        acesso: acesso,
                        tipo_rede: rede,
                        is_elemento: false,
                        is_rede: true
                    },
                    dataType: 'JSON',
                    success: function(data) {
                    },
                    error: function(err){
                    }
                });
            });
        });
    </script>

</body>

</html>
