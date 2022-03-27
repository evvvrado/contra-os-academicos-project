<div class="modal fade" wire:ignore.self id="modalCadastroAcessorios" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Acessorios</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='adicionar'>
                    <div class="row">
                        <div class=" col-8 mb-3" wire:ignore>
                            <label for="nome">Acessorio</label><br>
                            <select required class="form-control" name="acessorio" style="width: 100%;" id="">
                                @foreach(\App\Models\Acessorio::all() as $acessorio)
                                    <option value="{{ $acessorio->id }}">{{ $acessorio->nome }} ({{ config("marcas.unidades_medida")[$acessorio->unidade_medida] }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" col-4 mb-3">
                            <label class="form-label">Quantidade</label>
                            <input type="number" class="form-control" step="0.01" wire:model='quantidade' min="1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="submit" class="btn btn-primary">Adicionar</button>
                        </div>
                    </div>
                </form>
                <hr>
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Acessorio</th>
                                    <th>Quantidade</th>
                                    <th></th>
                                </tr>
                                <tbody>
                                    @foreach($receita_acessorios as $receita_acessorio)
                                        <tr>
                                            <td>{{ $receita_acessorio->acessorio->nome }}</td>
                                            <td>{{ $receita_acessorio->quantidade }}{{ config("marcas.unidades_medida")[$receita_acessorio->acessorio->unidade_medida] }}</td>
                                            <td>
                                                <i class="fas fa-times-circle cpointer fa-lg" style="color:red;" wire:click="removeAcessorioReceita({{ $receita_acessorio->id }})"></i>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        .select2-selection {
            height: 36px !important;
        }

    </style>
@endpush

@push("scripts")
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        window.addEventListener('abreModalCadastroAcessorios', event => {
            $("#modalCadastroAcessorios").modal("show");
        });
        window.addEventListener('fechaModalCadastroAcessorios', event => {
            $("#modalCadastroAcessorios").modal("hide");
        });

        $('select[name="acessorio"]').select2({
            tags: true,
            dropdownParent: $('#modalCadastroAcessorios')
        });

        $('select[name="acessorio"]').on("change", function(e) {
            @this.set('acessorio_id', $('select[name="acessorio"]').val());
        });
    </script>
@endpush

