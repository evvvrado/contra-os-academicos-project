@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}


<style>
    .filters {
        cursor: default;
        border-radius: 5px 5px 0 0;
        width: 100%;
        color: white;
        font-size: .8125rem;
        display: flex;
        max-width: max-content;
        /* border: solid white 1px; */
    }

    .filters span {
        cursor: pointer;
        transition: 0.32s;
        padding: .84rem 1rem;

        /* border: solid white 1px; */
        border-radius: 5px 5px 0 0;

        color: #495057;

        font-weight: 600;
    }

    .filters span:hover {
        opacity: 0.7;
    }

    .filters span.active {
        color: var(--principal);
        background: white;
    }

    .card:not(.curso) {
        display: none;
    }
</style>
@endsection

@section('titulo')
Projetos / <a style="color: unset" href="{{ route('painel.cursos') }}">Cursos</a> / Editar
@endsection

@section('conteudo')


<div class="filters">
    <span data-filter="curso" @if (!session()->get('aba')) class="active" @endif>Curso</span>
    <span data-filter="modulos" @if (session()->get('aba') && session()->get('aba') == 'modulo') class="active" @endif>Modulos</span>
    <span data-filter="depoimentos">Depoimentos</span>
</div>


@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card curso">
            <div class="card-body">
                <h4 class="card-title">Editar Cursos</h4>
                <form action="{{ route('painel.cursos.salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Nome</label>
                                <input id="productname" name="nome" type="text" class="form-control" placeholder="Insira o nome" value="{{ $curso->nome }}">
                            </div>
                            <div class="mb-3">
                                <label for="valor">Valor do Curso (R$)</label>
                                <input id="valor" name="valor" type="number" class="form-control" min="0" step="0.01" value="{{ $curso->valor }}">
                            </div>
                            <div class="mb-3">
                                <label for="total_horas">Total de Horas</label>
                                <input id="total_horas" name="total_horas" type="number" class="form-control" step="1" min="0" value="{{ $curso->total_horas }}">
                            </div>
                            <div class="mb-3">
                                <label for="titulo">Título do paragrafo</label>
                                <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Insira o titulo" value="{{$curso->titulo}}" maxlength="250">
                            </div>
                            <div class="mb-3">
                                <label for="video">URL Do Vídeo</label>
                                <input id="video" name="video" type="text" class="form-control" placeholder="youtu.be/linkdovideo" maxlength="255" value="{{ $curso->video }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">Professores</label>
                                <select class="js-example-basic-multiple js-states form-control" multiple="multiple" name="professores[]" id="select_professores" multiple required>
                                    @foreach (App\Models\Professor::all() as $professor)
                                    <option value="{{ $professor->id }}" @if ($curso->professores->contains($professor)) selected @endif>
                                        {{ $professor->nome }}</option>
                                    @endforeach
                                </select>
                            </div>



                            <div class="mb-3">
                                <label class="control-label">Tipo de Curso</label>
                                <select class="form-control" name="tipo">
                                    @foreach (config('cursos.tipo_nome') as $codigo => $tipo)
                                    <option value="{{ $codigo }}" @if ($curso->tipo == $codigo) selected @endif>
                                        {{ $tipo }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="descricao">Descrição</label>
                                <textarea id="textarea" name="descricao" class="form-control" maxlength="250" rows="3" placeholder="Limite de 107 Caracteres"
                                    required>{!! $curso->descricao !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="sobre">Sobre o curso</label>
                                <textarea id="textarea" name="sobre" class="form-control" rows="3" placeholder="Descrição breve sobre o curso" required>{!! $curso->sobre !!}</textarea>
                            </div>

                            <div class="mb-3 row">
                                <div class="col">
                                    <label for="productdesc">Certificado</label>
                                    <div class="form-check form-switch form-switch-lg pt-3 ">
                                        <input class="form-check-input form-control" name="certificacao" type="checkbox" id="SwitchCheckSizelg" @if($curso->certificacao) checked="" @endif>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="productdesc">Pagamento Por Boleto</label>
                                    <div class="form-check form-switch form-switch-lg pt-3 ">
                                        <input class="form-check-input form-control" name="gerencianet" type="checkbox" id="SwitchCheckSizelg" @if($curso->gerencianet) checked="" @endif>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="productdesc">Pagamento Por Cartão</label>
                                    <div class="form-check form-switch form-switch-lg pt-3 ">
                                        <input class="form-check-input form-control" name="cielo" type="checkbox" id="SwitchCheckSizelg" @if($curso->cielo) checked="" @endif>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row flex-row">
                        <div class="card-body col-4">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center flex-column">
                                        Thumbnail

                                        <picture style="height: 350px; max-width: 350px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="thumbnail-preview" @if (!$curso->thumbnail) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($curso->thumbnail) }}" @endif
                                            style="width: 100%; object-fit: cover;"
                                            alt="">
                                        </picture>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-center">
                                        <label class="btn btn-primary" for="thumbnail-upload">Escolher</label>
                                        <input name="thumbnail" id="thumbnail-upload" style="display: none;" type="file">
                                    </div>
                                </div>
                            </div>
                </form>
            </div>

            <div class="card-body col-8">
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">
                            Banner
                            <picture style="height: 350px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="banner-preview" @if (!$curso->banner) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($curso->banner) }}" @endif style="height: 100%;
                                width: 100%; object-fit: cover;"
                                alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="banner-upload">Escolher</label>
                            <input name="banner" id="banner-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
            </div>
        </div>
        </form>
    </div>
</div>

<div class="card modulos">
    <div class="card-body">
        <h4 class="card-title">Cadastro de Módulo</h4>



        <form action="{{ route('painel.cursos.modulo.salvar', ['curso' => $curso]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="nome">Nome do Módulo</label>
                        <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome" maxlength="255" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="descricao">Descrição</label>
                        <textarea id="textarea" name="descricao" class="form-control" rows="3" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
            </div>
        </form>
    </div>
    <div class="card-body">
        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1185px;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">Módulo</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Descrição
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending"></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($curso->modulos as $modulo)
                        <tr class="odd">
                            <td class="sorting_1 dtr-control">{{ $modulo->nome }}</td>
                            <td>{!! $modulo->descricao !!}</td>
                            <td>
                                <div class="btn-group edit-table-button ">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                            class="bx bx-edit"></i></button>
                                    <div class="dropdown-menu" style="margin: 0px;">
                                        <a class="dropdown-item" href="{{ route('painel.cursos.modulo.deletar', ['modulo' => $modulo]) }}" style="color: red" href="#">Excluir</a>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

<div class="card depoimentos">
    <div class="card-body">
        <h4 class="card-title">Cadastro de Depoimento</h4>



        <form action="{{ route('painel.cursos.depoimento.salvar', ['curso' => $curso]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="nome">Nome</label>
                        <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="depoimento">Depoimento</label>
                        <textarea id="textarea" name="depoimento" class="form-control" maxlength="107" rows="3" placeholder="Limite de 107 Caracteres" required></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary waves-effect waves-light" @if ($curso->depoimentos->count() == 3) disabled @endif>Adicionar</button>
                @if ($curso->depoimentos->count() == 3)<small class="mt-2" style="color:red;">Este curso já possui 3 depoimentos. Exclua algum para cadastrar um novo.</small> @endif
            </div>
            <h4 class="card-title my-3">Foto do depoimento</h4>
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-12 text-center d-flex align-items-center justify-content-center">
                        <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                            <img id="depoimento-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                        </picture>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <label class="btn btn-primary" for="depoimento-upload">Escolher</label>
                        <input name="foto" id="depoimento-upload" style="display: none;" type="file" required>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="card-body">
        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
        </div>
        <div class="row">
            <div class="col-sm-12">
                <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1185px;">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending"
                                aria-label="Name: activate to sort column descending">Nome</th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Depoimento
                            </th>
                            <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending"></th>
                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($curso->depoimentos as $depoimento)
                        <tr class="odd">
                            <td class="sorting_1 dtr-control">{{ $depoimento->nome }}</td>
                            <td>{!! $depoimento->depoimento !!}</td>
                            <td>
                                <div class="btn-group edit-table-button ">
                                    <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                            class="bx bx-edit"></i></button>
                                    <div class="dropdown-menu" style="margin: 0px;">
                                        <a class="dropdown-item" href="{{ route('painel.cursos.depoimento.deletar', ['depoimento' => $depoimento]) }}" style="color: red" href="#">Excluir</a>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>
</div>
</div>





<!-- end card-->
{{-- <div class="card">
    <div class="card-body">
        <h4 class="card-title">Meta Data</h4>
        <p class="card-title-desc">Fill all information below</p>
        <form>
            <div class="row">
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="metatitle">Meta title</label>
                        <input id="metatitle" name="productname" type="text" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="metakeywords">Meta Keywords</label>
                        <input id="metakeywords" name="manufacturername" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                        <label for="metadescription">Meta Description</label>
                        <textarea class="form-control" id="metadescription" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-wrap gap-2">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                <button type="submit" class="btn btn-secondary waves-effect waves-light">Cencelar</button>
            </div>
        </form>
    </div>
</div> --}}


</div>

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script>
    var inp = document.getElementById('depoimento-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('depoimento-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);


        var inp = document.getElementById('thumbnail-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('thumbnail-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        var inp = document.getElementById('banner-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('banner-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);


        $(document).ready(function() {
            $('#summernote').summernote({
                height: 600,
            });

            $('#select_professores').select2({});


            $('.select2-selection.select2-selection--multiple').addClass('form-control');
        });


        $('.filters span').click(function() {
            $('.card').hide();
            $(`.${$(this).data('filter')}`).show();
            $('.filters span').removeClass('active');
            $(this).addClass('active');
        })
</script>
@endsection