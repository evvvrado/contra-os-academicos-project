{{-- @php
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
                <form action="javascript: void(0)">

                    @php
                        $categorias = Categoria::all();
                    @endphp
                    @foreach ($categorias as $categoria)
                        <label>
                            <span>{{ $categoria->nome }}</span>
                            <input type="checkbox" name="" id="">
                        </label>
                    @endforeach


                    <button class="button"> Filtrar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="close-modal"></div>
</div> --}}
