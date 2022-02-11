@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}
@endsection

@php
    use App\Models\IngredienteCat;
    use App\Models\Marca;
    use Illuminate\Support\Facades\DB;
@endphp

@section('titulo')
Produtos / <a style="color: unset" href="{{ route('painel.ingredientes') }}">Ingredientes</a> / Cadastro
@endsection

@section('conteudo')
@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edição do ingrediente:</h4>
                <form id="form-cadastro" action="{{route('painel.ingredientes.salvar')}}" method="POST">
                    @csrf
                    
                    <div class="col-lx-12">
                        <div class="row">
                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" placeholder="Insira o nome do ingrediente" class="form-control" value="{{ $ingrediente->nome }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Categoria</label>
                                <select class="form-control" name="cat_id" required>
                                    <option value="">Selecione</option>
                                    @php
                                        $categorias = IngredienteCat::select(DB::raw("id, nome"))
                                        ->orderBy('nome', 'Asc')
                                        ->get();
                                    @endphp

                                    @foreach($categorias as $categoria)
                                        <option @if ($ingrediente->cat_id == $categoria->id) selected @endif value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Fornecedor</label>
                                <input name="fornecedor" type="text" class="form-control" value="{{ $ingrediente->fornecedor }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label>Telefone do Fornecedor</label>
                                <input name="tel_fornecedor" type="text" class="form-control telefone_ddd" value="{{ $ingrediente->tel_fornecedor }}">
                            </div>

                            <div class="form-group col-6 col-lg-6 mt-3">
                                <label for="nome">Validade</label>
                                <select class="form-control" name="validade" required>
                                    <option value="">Selecione</option>
                                    <option value="dia" @if ($ingrediente->validade == 'dia') selected @endif>1 dia</option>
                                    <option value="semana" @if ($ingrediente->validade == 'semana') selected @endif>1 Semana</option>
                                    <option value="mes" @if ($ingrediente->validade == 'mes') selected @endif>1 Mês</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <button id="btn-submit" type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a href="{{ route('painel.ingredientes') }}" class="btn btn-secondary waves-effect waves-light">Cancelar</a>
                    </div>


                    <input name="id" type="hidden" class="form-control" value="{{ $ingrediente->id }}">
                </form>
            </div>
            
        </div>
    </div>

</div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('admin/libs/dropzone/min/dropzone.min.js') }}"></script>
<script>
</script>
@endsection