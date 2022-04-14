<div class="modal fade" wire:ignore.self id="modalCadastroAcessorio" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Acessorio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent='salvar'>
                    <div class="row">
                        <div class="form-group col-6 col-lg-6 mt-3">
                            <label for="nome">Nome</label>
                            <input id="nome" name="nome" type="text" placeholder="Insira o nome do acessorio" class="form-control" wire:model="nome" required maxlength="100">
                        </div>

                        <div class="form-group col-6 col-lg-6 mt-3">
                            <label for="nome">Categoria</label>
                            <select class="form-control" name="acessorio_categoria_id" wire:model='acessorio_categoria_id' required>
                                @foreach(\App\Models\AcessorioCategoria::where("ativo", '=', true)->get() as $categoria)
                                    <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-6 col-lg-6 mt-3">
                            <label for="nome">Validade</label>
                            <select class="form-control" name="validade" wire:model='validade' required>
                                @foreach(config("ingredientes.validades") as $key => $validade)
                                    <option value="{{ $key }}">{{ $validade }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-6 col-lg-6 mt-3">
                            <label>Unidade de Medida</label>
                            <select required name="unidade_medida" type="text" class="form-control" wire:model="unidade_medida">
                                @foreach(config("marcas.unidades_medida") as $key => $unidade)
                                    <option value="{{ $key }}">{{ $unidade }}</option>
                                @endforeach
                            </select>
                        </div>
                    
                        <div class="mt-3" wire:ignore>
                            <label for="nome">Fornecedores</label><br>
                            <select required class="select2 form-control" name="fornecedores[]" style="width: 100%;" id="" multiple="multiple">
                                @foreach(\App\Models\Fornecedor::all() as $fornecedor)
                                    <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary float-end">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('styles')
    <link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push("scripts")
    <script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
    <script>
        window.addEventListener('abreModalCadastroAcessorio', event => {
            $("#modalCadastroAcessorio").modal("show");
            $('select[name="fornecedores[]"]').val(@this.fornecedores);
            $('select[name="fornecedores[]"]').trigger('change');
        });
        window.addEventListener('fechaModalCadastroAcessorio', event => {
            $("#modalCadastroAcessorio").modal("hide");
        });

        $('select[name="fornecedores[]"]').select2({
            tags: true,
            dropdownParent: $('#modalCadastroAcessorio')
        });

        $('select[name="fornecedores[]"]').on("change", function(e) {
            @this.set('fornecedores', $('select[name="fornecedores[]"]').val());
        });
    </script>
@endpush
