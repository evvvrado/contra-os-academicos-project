<body>
    @php
        use Dacastro4\LaravelGmail\Facade\LaravelGmail;
    @endphp
    <h1>{{ LaravelGmail::user() }}</h1>
    @if(LaravelGmail::check())
        <a href="{{ url('oauth/gmail/logout') }}">logout</a>
    @else
        <a href="{{ url('oauth/gmail') }}">login</a>
    @endif
    <br>

    {{-- @php
        $messages = LaravelGmail::message()->subject('test')->unread()->preload()->all();
        foreach ( $messages as $message ) {
            $body = $message->getHtmlBody();
            $subject = $message->getSubject();
        }
    @endphp --}}
</body>