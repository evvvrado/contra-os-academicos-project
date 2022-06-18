<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>{{ $titulo }}</title>

    @include('site.includes.head')
    @toastr_css
    @livewireStyles()
    @yield('styles')

</head>

<body @yield("body_attr")>
    @include('site.includes.navbar')

    @yield('content')

    @include('site.includes.footer')

    @include('site.includes.scripts')

    @toastr_js
    @toastr_render
    @livewireScripts()
    @yield("scripts")

    @php
        $protocolo = 'http';
        $url = '://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME'].'?'.$_SERVER['QUERY_STRING'];
    @endphp

    <script>
        function copyTextToClipboard(text) {
            var textArea = document.createElement("textarea");

            textArea.style.position = 'fixed';
            textArea.style.top = 0;
            textArea.style.left = 0;
            textArea.style.width = '2em';
            textArea.style.height = '2em';
            textArea.style.padding = 0;
            textArea.style.border = 'none';
            textArea.style.outline = 'none';
            textArea.style.boxShadow = 'none';
            textArea.style.background = 'transparent';
            textArea.value = text;

            document.body.appendChild(textArea);
            textArea.select();

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successful' : 'unsuccessful';
                console.log('Copying text command was ' + msg);
            } catch (err) {
                console.log('Oops, unable to copy');
                window.prompt("Copie para área de transferência: Ctrl+C e tecle Enter", text);
            }

            document.body.removeChild(textArea);
        }

            // Teste
            var copyurl = document.querySelector('.copyurl');
            copyurl.addEventListener('click', function(event) {
            copyTextToClipboard(window.location.protocol + "//" + window.location.host + window.location.pathname);

            alert('Link copiado para sua área de transferência!')
        });
    </script>

</body>

</html>
