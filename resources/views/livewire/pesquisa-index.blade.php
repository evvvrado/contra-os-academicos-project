<div class="search-button">

    <style>
        .d-none {
            display: none;
        }

        .d-block {
            display: block;
        }
    </style>

    <input id="input_pesquisa" onClick="muda_classe()" class="input_pesquisa" type="text" wire:model="pesquisas"
        open="open">

    <picture>
        <img src="{{ asset('site/assets/img/icon_search_header.svg') }}" alt="Ícone de pesquisa">
    </picture>

    @if ($blogs_pesquisa->count() > 0 OR $listas_pesquisa->count() > 0 OR $revistas_pesquisa->count() > 0)
        <div id="div_search">
            <ul>
                @foreach ($blogs_pesquisa as $blog_pesquisa)
                    <li>
                        <a href="{{ route('site.blog_detalhe', ['blog' => $blog_pesquisa]) }}">{{ $blog_pesquisa->titulo }}</a>
                    </li>
                @endforeach
                @foreach ($listas_pesquisa as $lista_pesquisa)
                    <li>
                        <a href="{{ route('site.lista_detalhe', ['lista' => $lista_pesquisa]) }}">{{ $lista_pesquisa->titulo }}</a>
                    </li>
                @endforeach
                @foreach ($revistas_pesquisa as $revista_pesquisa)
                    <li>
                        <a href="{{ route('site.revista_detalhe', ['revista' => $revista_pesquisa]) }}">{{ $revista_pesquisa->titulo }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
