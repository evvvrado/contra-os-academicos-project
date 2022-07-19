<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>{{ $titulo }}</title>

    
    @include('site.includes.head')
    @toastr_css
    
    @yield('styles')
    
    @livewireStyles
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

</body>

</html>
