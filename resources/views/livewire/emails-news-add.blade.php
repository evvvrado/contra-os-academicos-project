<div>
    <h2>Nossa Newsletter</h2>
    <h3>O melhor do Contra os Acadêmicos no seu inbox</h3>

    <form wire:submit.prevent="save()">
        <label>
            <span>Inscreva-se para receber o nosso conteúdo</span>

            <input type="email" wire:model="email" name="email" id="email-news" placeholder="Qual seu e-mail?">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </label>

        {{-- <label class="checkbox">
            <input type="checkbox" name="aceitar-termos" id="aceitar-termos">

            <span>Li e aceito os <a href="#" class="--blue">termos de uso</a></span>
        </label> --}}

        <div>

            <button class="button">Cadastrar</button>

            <div class="pictures">
                <picture><img src="{{ asset('site/assets/img/picture_news.png') }}" alt="">
                </picture>
                <picture><img src="{{ asset('site/assets/img/picture_news-1.png') }}" alt="">
                </picture>
                <picture><img src="{{ asset('site/assets/img/picture_news-2.png') }}" alt="">
                </picture>
            </div>
        </div>
    </form>
</div>
