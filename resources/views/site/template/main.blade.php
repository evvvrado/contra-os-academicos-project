<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>{{$titulo}}</title>
    @include('site.includes.head')
    @yield('styles')

</head>

<body @yield("body_attr")>
    @include('site.includes.navbar')

    @yield('content')

    @include('site.includes.footer')

    @include('site.includes.scripts')

    @yield("scripts")
</body>

</html>