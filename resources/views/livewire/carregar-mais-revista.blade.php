<div style="display: flex;
align-items: flex-start;
justify-content: flex-start;
flex-direction: row;
gap: 1.5rem;
flex-wrap: wrap;">
    @foreach ($revistas as $revista)
        <a href="{{ route('site.revista_detalhe', ['revista' => $revista]) }}" class="box">
            <picture>
                <img src="{{ asset($revista->banner) }}" alt="">
            </picture>
            <div class="box-content">
                <span>{{ $revista->categoria->nome }}</span>
                <strong>{{ $revista->titulo }}</strong>

                <hr>

                <p>{{ Str::limit($revista->resumo, 104) }}</p>
            </div>
        </a>
    @endforeach
    <div wire:loading>Carregando...</div>

    @if($porpagina <= $revista->count())
        <div class="button-area">
            <button class="button" wire:click="carregarMais()">
                Carregar mais conteúdo
            </button>
        </div>
    @endif
</div>
