<div style="display: flex;
align-items: flex-start;
justify-content: flex-start;
flex-direction: row;
gap: 1.5rem;
flex-wrap: wrap;">
    @foreach($listas as $lista)
        <a href="{{ route('site.lista_detalhe', ['lista' => $lista]) }}" class="box">
            <picture>
                <img src="{{ asset($lista->banner) }}" alt="">
            </picture>
            <div class="box-content">
                <span>{{ $lista->categoria->nome }}</span>
                <strong>{{ $lista->titulo }}</strong>

                <hr>

                <p>{{ Str::limit($lista->resumo, 104) }}</p>
            </div>
        </a>
    @endforeach
    <div wire:loading>Carregando...</div>

    @if($porpagina <= $lista->count())
        <div class="button-area">
            <button class="button" wire:click="carregarMais()">
                Carregar mais conteúdo
            </button>
        </div>
    @endif
</div>
