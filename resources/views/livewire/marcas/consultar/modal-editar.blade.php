<form wire:submit.prevent="salvar" enctype="multipart/form-data">

    @csrf
    <div class="col-lx-12">
        <div class="row">
            <div class="form-group col-6 col-lg-6 mt-3">
                <label>Nome</label>
                <input required name="nome" type="text" class="form-control" wire:model="nome" maxlength="100">
            </div>

            <div class="form-group col-6 col-lg-6 mt-3">
                <label>Padrão</label>
                <select class="form-control" required name="padrao" id="padrao_cadastro" readonly required wire:model="padrao">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            <div class="form-group col-6 col-lg-3 mt-3">
                <label>Nome da unidade</label>
                <input required name="nome_unidade" type="text" class="form-control" wire:model="nome_unidade" maxlength="50">
                <small>Ex: Dose</small>
            </div>

            <div class="form-group col-6 col-lg-3 mt-3">
                <label>Unidade de Medida</label>
                <select required name="unidade_medida" type="text" class="form-control" wire:model="unidade_medida">
                    <option value="">Selecione</option>
                    @foreach(config("marcas.unidades_medida") as $key => $unidade)
                        <option value="{{ $key }}">{{ $unidade }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-6 col-lg-6 mt-3">
                <label>Quantidade do ingrediente por unidade</label>
                <input required name="quantidade_ingrediente_unidade" type="number" step="0.01" min="0" class="form-control" wire:model="quantidade_ingrediente_unidade">
                <small>Ex: O valor 50 significaria que 1 dose possui 50ml </small>
            </div>

            <div class="form-group col-6 col-lg-4 mt-3">
                <label>Nome da Embalagem</label>
                <input required name="embalagem" type="text" class="form-control" wire:model="embalagem" maxlength="50">
                <small>Ex: Garrafa</small>
            </div>

            <div class="form-group col-6 col-lg-4 mt-3">
                <label>Quantidade por Embalagem</label>
                <input required name="quantidade_embalagem" type="number" step="1" min="0" class="form-control" wire:model="quantidade_embalagem">
                <small>Ex: 1000 (unidade de medida selecionada)</small>
            </div>

            <div class="form-group col-6 col-lg-4 mt-3">
                <label>Preço da Embalagem</label></label>
                <input required class="form-control" name="valor_embalagem" type="number" step="0.01" min="0" wire:model="valor_embalagem">
            </div>

            <div class="form-group col-6 col-lg-6 mt-3">
                <label class="form-label">Imagem</label>
                <input name="imagem" type="file" class="form-control" style="height: 36px !important" wire:model="imagem">
                <small>Escolha apenas caso deseje alterar</small>
            </div>
        </div>

    </div>
    <div class="d-flex flex-wrap gap-2 mt-3">
        <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
    </div>
</form>