<div>
    <picture style="cursor:pointer;" wire:click="favoritar({{ $blog->id }})">
        <img src="{{ asset('site/assets/img/icon_estrela.svg') }}" alt="Ícone" style="{{ $cor_fav  }}">
    </picture>
</div>