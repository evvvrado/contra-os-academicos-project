<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>{{ $titulo }}</title>
    @include('site.includes.head')
    @toastr_css
    @yield('styles')

</head>

<body @yield("body_attr")>
    @include('site.includes.navbar')

    @if (session()->get('erro'))
        <div class="erro_modal modal">
            <div fluid>
                <div class="niv">
                    <div class="box">
                        <h2>Opa!</h2>
                        <h2>Ocorreu um erro!</h2>
                        <p>{{ session()->get('erro') }}</p>
                        <div class="button_list">
                            <button class="alert" onclick="$('div.erro_modal').hideModal()">Entendi</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="close-modal">
            </div>
        </div>
    @endif


    @yield('content')

    @include('site.includes.footer')

    @include('site.includes.scripts')

    @toastr_js
    @toastr_render
    @yield("scripts")




    @if (session()->get('erro'))
        <script>
            $('.erro_modal').showModal();
        </script>
    @endif

</body>

</html>
