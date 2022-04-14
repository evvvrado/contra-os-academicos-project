<form wire:submit.prevent='salvar'>
    <div class="row">
        <div class="form-group col-6 col-lg-6 mt-3">
            <label for="nome">Nome</label>
            <input id="nome" name="nome" type="text" placeholder="Insira o nome do ingrediente" class="form-control"
                wire:model="nome" required maxlength="100">
        </div>

        <div class="form-group col-6 col-lg-6 mt-3">
            <label for="nome">Categoria</label>
            <select class="form-control" name="ingrediente_categoria_id" wire:model='ingrediente_categoria_id'
                required>
                @foreach (\App\Models\IngredienteCategoria::where('ativo', '=', true)->get() as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-lg-4 mt-3">
            <label for="nome">Validade (Dias)</label>
            <input type="number" class="form-control" step="1" min="1" wire:model='validade'
                @if ($this->vitalicio) readonly @endif>
        </div>

        <div class="form-group col-lg-2 mt-3 d-flex flex-row align-items-end">
            <div class="form-check mb-2">
                <input type="checkbox" class="form-check-input" name="" id="" value="1" wire:model="vitalicio">
                <label class="form-check-label" for="">
                    Vitalício
                </label>
            </div>
        </div>



        <div class="form-group col-lg-6 mt-3">
            <label>Unidade de Medida</label>
            <select required name="unidade_medida" type="text" class="form-control" wire:model="unidade_medida">
                @foreach (config('marcas.unidades_medida') as $key => $unidade)
                    <option value="{{ $key }}">{{ $unidade }}</option>
                @endforeach
            </select>
        </div>

        <div class="mt-3" wire:ignore>
            <label for="nome">Fornecedores</label>
            <br>
            <select required class="form-control" name="fornecedores[]" style="width: 100%;" id=""
                multiple="multiple">
                @foreach (\App\Models\Fornecedor::all() as $fornecedor)
                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                @endforeach
            </select>
            {{-- <a name="" id="" class="btn btn-primary ms-2" role="button">+</a> --}}
        </div>
    </div>
    <hr>
    <button type="submit" class="btn btn-primary float-end">Salvar</button>
</form>


@push('styles')
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        window.addEventListener('abreModalCadastroIngrediente', event => {
            $("#modalCadastroIngrediente").modal("show");
            $('select[name="fornecedores[]"]').val(@this.fornecedores);
            $('select[name="fornecedores[]"]').trigger('change');
        });

        window.addEventListener('addSelect2Option', event => {
            var newOption = new Option(event.detail.nome, event.detail.id, false, false);
            $('select[name="fornecedores[]"]').append(newOption).trigger('change');
        });


        window.addEventListener('fechaModalCadastroIngrediente', event => {
            $("#modalCadastroIngrediente").modal("hide");
        });

        $(document).ready(function() {
            // $('select[name="fornecedores[]"]').select2({
            //     tags: true,
            //     dropdownParent: $('#modalCadastroIngrediente')
            // });

            // $('select[name="fornecedores[]"]').on("change", function(e) {
            //     @this.set('fornecedores', $('select[name="fornecedores[]"]').val());
            //     console.log(@this.fornecedores);
            // });

            $('select[name="fornecedores[]"]').select2({
                dropdownParent: $('#modalCadastroIngrediente'),
                tags: true
            });

            $('select[name="fornecedores[]"]').on("change", function(e) {
                @this.set('fornecedores', $('select[name="fornecedores[]"]').val());
            });
        });
    </script>
@endpush
