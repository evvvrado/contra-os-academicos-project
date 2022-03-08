@extends('site.template.main', ['titulo' => Definition::NAME.' | Confirmar drinks!'])

@section("body_attr", "id=orcamento-confirm")


@section('content')

<div class="modal_confirm modal">
    <div fluid>

        <div class="niv">
            <div class="box">
                <h2>Opa!</h2>
                <h2>Você tem certeza?</h2>

                <p>Realmente quer remover TODOS os drinks da sua lista?</p>

                <p>Clique na ação que deseja seguir</p>

                <div class="button_list">
                    <button class="alert" onclick="remover_todos_produtos()">Remover</button>
                    <button class="cancel">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="close-modal">
    </div>
</div>

<div class="modal_delete modal">
    <div fluid>

        <div class="niv">
            <div class="box">

                <picture>
                    <img src="{{ asset('site/assets/img/drink_modal.png') }}" alt="imagem de um drink">
                </picture>

                <h2>Vimos que excluiu um drink, bora escolher outro?</h2>

                <div class="button_list">
                    <button class="alert" onclick="location.href='{{ route('site.orcamento.lista') }}'">Bora!</button>
                    <button class="cancel">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="close-modal">
    </div>
</div>

<div class="next-step">

    <div>
        <h2>Leve sua festa <i>além</i></h2>
        <p>{{ $produtos->count() }} drinks selecionados</p>
    </div>

    <a href="{{ route('site.orcamento.carrinho')}}">Solicitar orçamento</a>

</div>

<section class="coqueteis-filtro">
    <div class="niv">
        <div class="filtro">
            <strong>Excluir todos</strong>
        </div>


        <div class="filtros">
            {{-- <span>
                <input type="checkbox" name="selectALL">
                <p>Selecionar todos</p>
            </span> --}}
        </div>
    </div>
</section>

<section class="coqueteis-drinks">
    <div class="niv">
        <div class="niv-top">
            <h4>Bora surpreender</h4>
            <h2>
                Veja a sua seleção de bebidas<br>
                para sua festa ir além
            </h2>
        </div>

        <div class="niv-content">

            @foreach($produtos as $produto)
            <div class="box">
                <button class="remove" onclick="escolher_produto({{ $produto->id }})">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.0928 5.85938L3.90527 5.85938" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M10.1562 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M14.8438 10.1562V16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M8.59375 1.95312H16.4062" stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M19.5303 5.85938V20.3125C19.5303 20.5197 19.448 20.7184 19.3014 20.8649C19.1549 21.0114 18.9562 21.0938 18.749 21.0938H6.24902C6.04182 21.0938 5.84311 21.0114 5.6966 20.8649C5.55008 20.7184 5.46777 20.5197 5.46777 20.3125V5.85938"
                            stroke="#985394" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </button>

                <picture>
                    <img src="{{$produto->imagem_1}}" alt="imagem representativa">
                </picture>



                <span>
                    <strong>{{$produto->nome}}</strong>
                    <p>{{mb_strimwidth($produto->descricao, 0, 75, "...")}}</p>

                    <main>
                        <div>
                            <strong>Teor alcóolico</strong>
                            <p>{{$produto->teor_alcoolico}}%</p>
                        </div>

                        <div>
                            <strong>Valor Calórico</strong>
                            <p>{{$produto->calorias}} cal.</p>
                        </div>

                        <div>
                            <strong>Nota</strong>

                            <div class="stars">
                                @for ($i = 0; $i < $produto->nota; $i++)
                                    <img src="{{ asset('site/assets/img/icon_star.svg') }}" alt="estrela de nota">
                                    @endfor
                            </div>
                        </div>
                    </main>
                </span>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    $('body#orcamento-confirm section.coqueteis-filtro div.niv div.filtro strong').click(() => {
        $('.modal_confirm').showModal()
    })

    $('body#orcamento-confirm section.coqueteis-drinks div.niv div.niv-content div.box button.remove').click(() => {
        $('.modal_delete').showModal()
    })

    function escolher_produto(idproduto){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: "GET",
            url: "/orcamento/escolher_produto/"+idproduto,
            success: function(ret) {
                console.log(ret)
            },
            error: function(ret) {
                console.log("Deu muito ruim");
                console.log(ret);
            }
        });
    }

    function remover_todos_produtos() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            type: "GET",
            url: "/orcamento/remover_todos_produtos",
            success: function(ret) {
                window.location.href = '{{ route('site.orcamento.lista') }}';
            },
            error: function(ret) {
                console.log("Deu muito ruim");
                console.log(ret);
            }
        });
    }   
</script>
@endsection