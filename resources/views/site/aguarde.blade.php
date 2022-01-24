<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Congresso e Feira Fitness. Cursos, Palestras e Workshops de atualização profissional" />
    <meta name="keywords" content="Congresso, Feira, Fitness, Cursos, Palestras, Workshops" />
    <meta name="author" content="7Seven Trends" />

    <meta property="og:title" content="ENAF, - Esporte, Fitness e Saúde" />
    <meta property="og:url" content="https://enafdigital.com.br" />
    <meta property="og:description" content="Congresso e Feira Fitness. Cursos, Palestras e Workshops de atualização profissional" />
    <meta property="og:image" content="{{ asset('site/img/_og140.png') }} " />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css" />

    <link href="{{ asset('admin/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />


    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}" />

    <link rel="preload" href="{{ asset('site/css/aguarde.css') }}" as="style" />

    <link rel="stylesheet" href="{{ asset('site/css/aguarde.css') }}" />

    <title>ENAF - Esporte, Fitness e Saúde</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-5W4HSERN8S"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-5W4HSERN8S');
    </script>
</head>

<body id="aguarde">

    <div class="container-fluid">
        <div class="container-fav">
            <h1>
                ESTÁ CURIOSO<br />
                NO QUE ESTÁ POR VIR? 🤔
            </h1>

            <button class="discover">
                VOLTAR <u>PARA O INÍCIO</u> <img src="{{ asset('site/img/aguarde/setapracima.svg') }}" alt="Seta para cima" />
            </button>




            <div class="_form">
                <h4>Vem descobrir!</h4>
                <p>Coloque seus dados para deixarmos você informado das novidades</p>
                <div class="_close"><img src="{{ asset('site/img/feira/icon_close.svg') }}" alt="Fechar" />
                </div>

                <form action="{{ route('site.precadastro.salvar') }}" method="POST">
                    @csrf
                    <label>
                        <span>Filiação</span>
                        <select name="filiacao" required>
                            <option value="-1">Escolher</option>
                            @foreach (config('filiacoes.nomes') as $key => $filiacao)
                            <option value="{{ $key }}">{{ $filiacao }}</option>
                            @endforeach
                        </select>
                        <div class="_icon">
                            <img src="{{ asset('site/img/feira/icon_form_building.svg') }}" alt="Ícone de Prédios" />
                        </div>
                    </label>
                    <label id="empresaLabel">
                        <span>Empresa</span>
                        <input type="text" name="empresa" placeholder="Sua empresa" />
                        <div class="_icon">
                            <img src="{{ asset('site/img/feira/icon_form_building.svg') }}" alt="Ícone de Prédios" />
                        </div>
                    </label>
                    <label>
                        <span>Nome Completo</span>
                        <input type="text" name="nome" placeholder="Seu nome" required />
                        <div class="_icon">
                            <img src="{{ asset('site/img/feira/icon_form_persons.svg') }}" alt="Ícone de Pessoas" />
                        </div>
                    </label>
                    <label>
                        <span>E-mail</span>
                        <input type="email" name="email" placeholder="email@exemplo.com.br" required />
                        <div class="_icon">
                            <img src="{{ asset('site/img/feira/icon_form_envelop.svg') }}" alt="Ícone de Envelope" />
                        </div>
                    </label>
                    <label>
                        <span>Whatsapp</span>
                        <input type="tel" name="telefone" placeholder="(99) 9 9999-9999" required />
                        <div class="_icon">
                            <img src="{{ asset('site/img/feira/icon_form_cellphone.svg') }}" alt="Ícone de Telefone" />
                        </div>
                    </label>

                    <button>Enviar</button>
                </form>

                <button id="expand">Continuar</button>
            </div>
        </div>

    </div>

    <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="width: 100%; max-width: 500px;" role="document">
            <div class="modal-content" style="padding: 0px 0 30px 0; border-radius: 20px;">

                <div class="modal-body px-5 py-0">
                    <button type="button" id="close-modal" class="close cpointer" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; z-index: 9;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="mt-5">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="{{ asset('site/img/icone_cadastro.png') }}" style="width: 100px;" alt="Ícone de Cadastro">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center modal-precadastro-text">
                                <h1>Tudo certo !</h1>
                            </div>
                        </div>
                        <div class="row mt-5 mb-4">
                            <div class="col-12 text-center modal-precadastro-text">
                                <h2>Suas informações foram enviadas com sucesso!</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


    {{-- <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('admin/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('admin/libs/node-waves/waves.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js"
        integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

@if (session()->get('precadastro_realizado'))
<script>
    $(document).ready(function() {
            $("#modalCadastro").modal("show");
        });
</script>
@endif

<script>
    $(document).ready(() => {
        $("h1").addClass("show");


        $('input[type="tel"]').mask('(99) 9 9999-9999')

    });

    $('button.discover, ._form ._close').click(() => {
        window.location.href = '/'; 
    })

    $('select').change(() => {
        if ($('select').val() == 2 || $('select').val() == 3) {
            $('#empresaLabel').hide()
            $('select').removeClass('error')
        } else if ($('select').val() == -1) {
            $('select').addClass('error')
            $('form').css('max-height', `11.5rem`)
            $('form').css('overflow', `hidden`)
            $('#expand').show()

        } else {
            $('select').removeClass('error')
            $('#empresaLabel').show()
        }

    })
    $('button#expand').click(() => {



        if ($('select').val() == -1) {
            $('select').addClass('error')

            return false;
        }

        $('select').removeClass('error')
        $('form').css('max-height', `${($('form').height()) / 10 + 10.5}rem`)
        if ($('form').height() > 400) {
            $('button#expand').hide();
            $('form').css('max-height', '900px');
            $('form').css('overflow', 'visible');

        }

    })
</script>

</html>