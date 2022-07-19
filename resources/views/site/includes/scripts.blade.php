<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/js/all.min.js "></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.11.2/jquery.mask.min.js" integrity="sha512-Y/GIYsd+LaQm6bGysIClyez2HGCIN1yrs94wUrHoRAD5RSURkqqVQEU6mM51O90hqS80ABFTGtiDpSXd2O05nw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<script src="{{ asset('/site/js/main.js') }}"></script>

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
                console.log('Ajax não funcionou');
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
        toastr.success("Link copiado para a área de transferência",
        {
            closeButton: false
        });
        jQuery.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{ url('/contabiliza_compartilhamento/{url}') }}",
            method: 'get',
            data: {
                url: window.location.pathname
            },
            success: function(result){
                console.log(result);
            },
            error: function(){
                console.log('Ajax não funcionou');
            }
        });
    });
</script>