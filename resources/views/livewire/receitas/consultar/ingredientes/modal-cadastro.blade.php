<div class="modal fade" wire:ignore.self id="modalCadastroIngredientes" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ingredientes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='adicionar'>
                    <div class="row">
                        <div class=" col-8 mb-3" wire:ignore>
                            <label for="nome">Ingrediente</label><br>
                            <select required class="form-control" name="ingrediente" style="width: 100%;" id="">
                                @foreach(\App\Models\Ingrediente::all() as $ingrediente)
                                    <option value="{{ $ingrediente->id }}">{{ $ingrediente->nome }} ({{ config("marcas.unidades_medida")[$ingrediente->unidade_medida] }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class=" col-4 mb-3">
                            <label class="form-label">Quantidade</label>
                            <input type="number" class="form-control" step="0.01" wire:model='quantidade' min="0" required>
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
                                    <th>Ingrediente</th>
                                    <th>Quantidade</th>
                                    <th></th>
                                </tr>
                                <tbody>
                                    @foreach($receita_ingredientes as $receita_ingrediente)
                                        <tr>
                                            <td>{{ $receita_ingrediente->ingrediente->nome }}</td>
                                            <td>{{ $receita_ingrediente->quantidade }}{{ config("marcas.unidades_medida")[$receita_ingrediente->ingrediente->unidade_medida] }}</td>
                                            <td>
                                                <i class="fas fa-times-circle cpointer fa-lg" style="color:red;" wire:click="removeIngredienteReceita({{ $receita_ingrediente->id }})"></i>
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
        window.addEventListener('abreModalCadastroIngredientes', event => {
            $("#modalCadastroIngredientes").modal("show");
        });
        window.addEventListener('fechaModalCadastroIngredientes', event => {
            $("#modalCadastroIngredientes").modal("hide");
        });

        $('select[name="ingrediente"]').select2({
            tags: true,
            dropdownParent: $('#modalCadastroIngredientes')
        });

        $('select[name="ingrediente"]').on("change", function(e) {
            @this.set('ingrediente_id', $('select[name="ingrediente"]').val());
        });
    </script>
@endpush

