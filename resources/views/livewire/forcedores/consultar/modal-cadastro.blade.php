<div class="modal fade" wire:ignore.self id="modalCadastroFornecedor" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Fornecedor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='salvar'>
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" maxlength="100" wire:model='nome' required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" maxlength="15" wire:model='telefone'>
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push("scripts")
    <script>
        window.addEventListener('abreModalCadastroFornecedor', event => {
            $("#modalCadastroFornecedor").modal("show");
        });
        window.addEventListener('fechaModalCadastroFornecedor', event => {
            $("#modalCadastroFornecedor").modal("hide");
        });
    </script>
@endpush
