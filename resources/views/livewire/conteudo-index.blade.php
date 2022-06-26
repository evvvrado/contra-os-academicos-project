<div class="niv">
    <div class="top-area">
        <h2 class="--bar">
            Conteúdo
        </h2>

        <div class="filtros">
            <ul>
                <li active data-filter="blogs">Blog</li>
                <li data-filter="revistas">Revista</li>
                <li data-filter="listas">Lista</li>
            </ul>
        </div>

        <a href="javascript: $('#categorias_modal').showModal();" class="button">
            <picture>
                <img src="{{ asset('site/assets/img/icon_chocolate_conteudo.svg') }}" alt="Ícone chocolate">
            </picture>
            Categorias
        </a>
    </div>

    <div class="content-area">
        <div wire:loading>Carregando...</div>

        <div class="scroll" data-filter="blogs" active wire:loading.remove>
            @foreach ($blogs as $key => $blog)
                @if ($key < 9)
                    <a href="{{ route('site.blog_detalhe', ['blog' => $blog]) }}" class="box">
                        <picture>
                            <img src="{{ asset($blog->banner) }}" alt="">
                        </picture>
                        <div class="box-content">
                            <span>{{ $blog->categoria->nome }}</span>
                            <strong>{{ $blog->titulo }}</strong>

                            <hr>

                            <p>{{ Str::limit($blog->resumo, 104) }}</p>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>


        <div class="scroll" data-filter="revistas" wire:loading.remove>

            @foreach ($revistas as $key => $revista)
                @if ($key < 9)
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
                @endif
            @endforeach

        </div>



        <div class="scroll" data-filter="listas" wire:loading.remove>
            @foreach ($listas as $key => $lista)
                @if ($key < 9)
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
                @endif
            @endforeach
        </div>



    </div>

    @php
        use App\Models\Categoria;
    @endphp

    <div id="categorias_modal" class="modal" style="overflow: auto; padding: 20px;">
        <div class="niv" style="overflow: auto;">
            <div class="box" style="overflow: auto;">
                <div class="title-area">
                    <h2>Categorias</h2>

                    <button class="cancel">
                        <img src="{{ asset('site/assets/img/icon_close_modal.svg') }}" alt="Ícone de fechar"
                            title="Fechar caixa">
                    </button>
                </div>

                <div class="content">
                    <form wire:submit.prevent="filtrar()">

                        @php
                            $categorias = Categoria::all();
                            $cc = 1;
                        @endphp
                        @foreach ($categorias as $categoria)
                            <label>
                                <span>{{ $categoria->nome }}</span>
                                <input type="checkbox" wire:model.defer="categoria" value="{{ $categoria->id }}">
                            </label>
                            @php
                                $cc++;
                            @endphp
                        @endforeach
                        <button class="button"> Filtrar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="close-modal"></div>
    </div>

</div>