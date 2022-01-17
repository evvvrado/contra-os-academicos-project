<form class="py-2" id="form-edicao" action="{{route('painel.turma.cadastrar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="turma_id" id="turma_id" value="">
    <input type="hidden" name="curso_id" id="curso_id" value="">
    <div class="row">
        <div class="form-group col-12 col-lg-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="nome"
                id="nome" aria-describedby="helpId" maxlength="255" value="" required 
            >
        </div>
        <div class="form-group col-12 col-lg-6">
            <label for="local">Local</label>
            <input type="text" class="form-control" name="local"
                id="local" aria-describedby="helpId" maxlength="255" value="" required 
            >
        </div>
    </div>
    <div class="row mt-3">
        <div class="form-group col-12">
            <label for="texto_turma">Subtitulo</label>
            <input type="text" class="form-control" name="texto_turma"
                id="texto_turma" aria-describedby="helpId" maxlength="255" value="" required 
            >
        </div>
    </div>
    <div class="row mt-3">
        <div class="form-group col-12 col-lg-4">
            <label for="periodo">Período</label>
            <select class="form-select" name="periodo" id="periodo">
                @foreach(config("globals.periodos") as $key => $periodo)
                    <option value="{{$key}}">{{$periodo}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-12 col-lg-4">
            <label for="horario">Horário</label>
            <div class="input-group" id="timepicker-horario">
                <input id="horario" type="text" name="horario" class="form-control" data-provide="timepicker">
                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
            </div>
        </div>
        <div class="form-group col-12 col-lg-4">
            <label for="data">Data</label>
            <input type="date" class="form-control" name="data"
                id="data" aria-describedby="helpId" value="" required 
            >
        </div>
    </div>
    <div class="row mt-3">
        <div class="form-group col-12 col-lg-4">
            <label for="preco">Preço (R$)</label>
            <input type="number" class="form-control" name="preco"
                id="preco" aria-describedby="helpId" min="0" step="0.01" value="" required 
            >
        </div>
        <div class="form-group col-12 col-lg-4">
            <label for="parcelas">Max. Parcelas</label>
            <input type="number" class="form-control" name="parcelas"
                id="parcelas" aria-describedby="helpId" min="0" step="1" value="" required 
            >
        </div>
        <div class="form-group col-12 col-lg-4">
            <label for="vagas">Vagas</label>
            <input type="number" class="form-control" name="vagas"
                id="vagas" aria-describedby="helpId" min="0" step="1" value="" required 
            >
        </div>
    </div>
    <div class="row mt-3">
        <div class="form-group col-12 col-lg-12">
            <label for="botao_comprar">Botão de Pagamento</label>
            <input type="text" class="form-control" name="botao_comprar"
                id="botao_comprar" value="" required 
            >
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 text-end">
            <button type="submit"
                class="btn btn-primary">Salvar</button>
        </div>
    </div>

</form>

<script>
    $(document).ready(function(){
        $("#horario").timepicker({
            showMeridian: !1,
            icons: {
                up: "mdi mdi-chevron-up",
                down: "mdi mdi-chevron-down",
            },
            minuteStep: 1,
        })
    })
</script>