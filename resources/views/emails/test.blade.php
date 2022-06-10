<html>
    <body>
        <img src="{{ $message->embed(public_path('site/assets/img/logo_preta_header.png')) }}" alt="Logo">
        <p>Olá {{ $usuario_site->nome }}!</p>
        <p>Estamos quase finalizando seu cadastro.</p>
        <p></p>
        <p>Seu pin de acesso é {{ $usuario_site->pin }}.</p>
        <p></p>
        <p></p>
        <p>Att, <br>
        Contra os Acadêmicos!</p>
    </body>
</html>