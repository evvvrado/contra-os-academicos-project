<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>{{ $titulo }}</title>

    @livewireStyles

    @include('site.includes.head')
    @toastr_css
    
    @yield('styles')

</head>

<body @yield('body_attr')>

    @include('site.includes.navbar')

    @include('site.includes.categorias')

    @yield('content')

    @include('site.includes.footer')

    @livewireScripts

    @include('site.includes.scripts')
    @toastr_js
    @toastr_render
    
    

    @yield('scripts')

    @php
        $protocolo = 'http';
        $url = '://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . '?' . $_SERVER['QUERY_STRING'];
    @endphp

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">

        jQuery(document).ready(function(){
            jQuery.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ url('/contabiliza_views/{url}') }}",
                method: 'get',
                data: {
                    url: window.location.pathname
                },
                success: function(result){
                    console.log(result);
                },
                error: function(){
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>

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
            // message = "Link copiado para sua área de transferência!";
            // toastr.success(event.detail.message);
            alert('Link copiado para sua área de transferência!')
        });
    </script>

</body>

</html>
