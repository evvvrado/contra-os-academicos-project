<div style="display: flex;
align-items: flex-start;
justify-content: flex-start;
flex-direction: row;
gap: 1.5rem;
flex-wrap: wrap;">
    @foreach ($blogs as $blog)
        <a href="{{ route('site.blog_detalhe', ['blog' => $blog]) }}" class="box">
            <picture>
                <img src="{{ asset($blog->banner) }}" alt="">
            </picture>
            <div class="box-content">
                <span>{{ $blog->categoria->nome }}</span>
                <strong>{{ $blog->titulo }}</strong>

                <hr>

                <p>{!! Str::limit($blog->resumo, 104) !!}</p>
            </div>
        </a>
    @endforeach

    <div wire:loading>Carregando...</div>


    <div class="button-area">
        <button class="button" wire:click="carregarMais()">
            Carregar mais conteúdo
        </button>
    </div>
</div>
