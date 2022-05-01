<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>{{ TITLE }}</title>
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

</body>

</html>
