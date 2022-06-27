<div class="search-button">

    <style>
        .d-none {
            display:none;
        }

        .d-block {
            display: block;
        }
    </style>

    <input id="input_pesquisa" onClick="muda_classe()" class="input_pesquisa" type="text" wire:model="pesquisas" open="open">

    <picture>
        <img src="{{ asset('site/assets/img/icon_search_header.svg') }}" alt="Ícone de pesquisa">
    </picture>

    @if($blogs_pesquisa->count() > 0)
        <div id="div_search" style="position: absolute; border: 1px rgb(57, 41, 41) solid; width: 100px; top: 34px; width: 100%; background-color: white; padding: 5px; border-radius: 10px;">
            <ul>
                @foreach($blogs_pesquisa as $blog_pesquisa)
                    <li style="border-bottom: 1px rgb(57, 41, 41) solid;">
                        <a href="{{ route('site.blog_detalhe', ['blog' => $blog_pesquisa]) }}" style="display: block; width: 100%;">{{ $blog_pesquisa->titulo }}</a>
                    </li>
                @endforeach
            </ul>
        </div>    
    @endif
</div>
