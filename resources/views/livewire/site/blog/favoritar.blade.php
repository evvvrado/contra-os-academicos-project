<div class="icon" style="margin-top: -23px;">
    <picture style="cursor:pointer; background-color: transparent;" wire:click="favoritar({{ $blog->id }})">
        <img src="{{ asset('site/assets/img/icon_estrela.svg') }}" alt="Ícone" style="{{ $cor_fav }}">
    </picture>
</div>