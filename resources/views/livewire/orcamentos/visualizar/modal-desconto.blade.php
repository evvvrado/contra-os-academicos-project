<div class="row">
    <div class="col-12">
        <label>Insira a quantidade de desconto desejado</label>

        <div class="row">
            <div class="col-6">
                <input type="number" class="form-control" min="1" wire:model="valor">
            </div>
            <div class="col-6">
                <select name="" id="" class="form-control" wire:model="tipo">
                    <option value="1">Porcento</option>
                    <option value="0">Reais</option>
                </select>
            </div>
            <div class="col-12 mt-3">
                <button class="btn-primary btn p-2" wire:click="salvar">Inserir</button>
                <button class="btn-danger btn p-2" wire:click="remover">Remover Desconto</button>
            </div>
        </div>

    </div>
</div>

@push("scripts")
    <script>
        window.addEventListener('abreModalDesconto', event => {
            $("#modalDesconto").modal("show");
        });
        window.addEventListener('fechaModalDesconto', event => {
            $("#modalDesconto").modal("hide");
        });
    </script>
@endpush