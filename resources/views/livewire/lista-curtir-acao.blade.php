<div style="text-align: center">
    <picture style="cursor:pointer" wire:click="dar_like_lista({{ $lista->id }})">
        <img src="{{ asset('site/assets/img/icon_heart_artigo.svg') }}" alt="Ícone">
    </picture>
    <span>{{ $likes }}</span>
</div>