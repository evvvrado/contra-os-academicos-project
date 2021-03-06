<!-- EXTRA SCRIPT SPACE -->
{!! HEAD_EXTRASCRIPT !!}
<!-- EXTRA SCRIPT SPACE -->


<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

<meta name="description" content="{{ DESCRIPTION }}" />
<meta property="og:description" content="{{ DESCRIPTION }}" />
<meta name="keywords" content="{{ KEYWORDS }}" />
<meta name="author" content="Contra os Acadêmicos" />

<meta property="og:title" content="{{ TITLE }}" />
<meta property='og:site_name' content='{{ TITLE }}'>
{{-- <meta property="og:image" content="{{ asset('/site/img/_og140.jpg') }}" /> --}}
{{-- <meta property='og:image:secure_url' content='{{ asset('/site/img/_og140.jpg') }}'> --}}
<meta property='og:image:type' content='png'>
<meta property='og:image:alt' content='{{ IMGALT }}'>
<meta property="og:url" content="{{ URL }}" />
<meta property='og:locale' content='pt_BR' />
<meta property='og:type' content='website'>

<meta name='twitter:title' content='{{ TITLE }}'>
<meta name='twitter:description' content='{{ DESCRIPTION }}'>
<meta name='twitter:card' content='summary'>
{{-- <meta name='twitter:image' content='{{ asset('/site/img/_og140.jpg') }}'> --}}
<meta name='twitter:image:alt' content='{{ IMGALT }}'>


<meta name='theme-color' content='{{ THEME }}'>
<meta name='msapplication-navbutton-color' content='{{ THEME }}'>
<meta name='apple-mobile-web-app-status-bar-style' content='{{ THEME }}'>


<meta name='mobile-web-app-capable' content='yes'>
<meta name='apple-mobile-web-app-capable' content='yes'>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<link rel="shortcut icon" href="/favicon.ico" />
<link rel='icon' type='image/vnd.microsoft.icon'
    sizes='16x16 32x32 48x48 64x64 96x96 128x128 144x144 180x180 192x192 256x256' href='/favicon.ico' />

<link rel="preload" type='text/css' href="{{ asset('/site/css/style.css') }}" as="style" />
<link rel="preload" type='application/javascript' href="{{ asset('/site/js/main.js') }}" as="script" />

<link rel="stylesheet" href="{{ asset('/site/css/style.css') }}" />


<!-- Fontes -->

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="{{ FONTS }}" rel="stylesheet">
<link href="http://fonts.cdnfonts.com/css/palatino-linotype" rel="stylesheet">

<!-- Fontes -->

<script src="https://kit.fontawesome.com/8b74899bef.js" crossorigin="anonymous"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-6KQ3CMT5GS"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'G-6KQ3CMT5GS');
</script>