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

    .card:not(.evento) {
        display: none;
    }
</style>

@endsection

@section('titulo')
Projetos / <a style="color: unset" href="{{ route('painel.eventos') }}">Eventos</a> / Editar
@endsection

@section('conteudo')



<div class="filters">
    <span data-filter="evento" class="active">Evento</span>
    <span data-filter="banner">Banner</span>
    <span data-filter="local">Local</span>
    <span data-filter="cursos">Cursos</span>
    <span data-filter="pacotes  ">Pacotes</span>
    <span data-filter="embaixadores">Embaixadores e Convidados</span>
    <span data-filter="hoteis">Hoteis</span>
</div>

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card evento">
            <div class="card-body">
                <h4 class="card-title">Editar Evento</h4>
                <form action="{{ route('painel.eventos.salvar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="evento_id" value="{{ $evento->id }}">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="nome">Nome</label>
                                <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome" maxlength="255" value="{{ $evento->nome }}">
                            </div>
                            <div class="mb-3">
                                <label for="titulo">Subtítulo</label>
                                <input id="titulo" name="titulo" type="text" class="form-control" placeholder="Insira o subtítulo" maxlength="255" value="{{ $evento->titulo }}">
                            </div>


                            <div class="mb-3">
                                <label for="inicio">Data de Início</label>
                                <input class="form-control" name="inicio" type="date" id="example-date-input" value="{{ $evento->inicio }}">
                            </div>
                            <div class="mb-3">
                                <label for="inicio">Hora de Início</label>

                                <input class="form-control" name="hora_inicio" type="time" id="example-date-input" value="{{$evento->hora_inicio}}">

                            </div>

                            <div class="mb-3">
                                <label for="video">URL Do Vídeo</label>
                                <input id="video" name="video" type="text" class="form-control" placeholder="youtu.be/linkdovideo" maxlength="255" value="{{ $evento->video }}">
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="mb-3">
                                <label for="descricao">Descrição</label>
                                <input id="descricao" name="descricao" type="text" class="form-control" placeholder="Insira a decrição da clínica" maxlength="255" value="{{ $evento->descricao }}">
                            </div>

                            <div class="mb-3">
                                <label for="sobre">Parágrafo</label>
                                <textarea id="sobre" name="sobre" class="form-control" placeholder="Insira o conteúdo do paragrafo">{!! $evento->sobre !!}</textarea>
                            </div>


                            <div class="mb-3">
                                <label for="fim">Data de encerramento</label>
                                <input class="form-control" name="fim" type="date" id="example-date-input" value="{{ $evento->fim }}">
                            </div>
                            <div class="mb-3">
                                <label for="fim">Hora de encerramento</label>
                                <input class="form-control" name="hora_fim" type="time" id="example-date-input" value="{{$evento->hora_fim}}">
                            </div>



                        </div>
                    </div>
                    <div class="row flex-row">
                        <div class="card-body col-2">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center flex-column">
                                        Thumbnail
                                        <small>Uma imagem quadrada em uma alta resolução</small>

                                        <picture style="height: 350px; max-width: 350px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="thumbnail-preview" @if (!$evento->thumbnail) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($evento->thumbnail) }}" @endif
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
                        </div>

                        <div class="card-body col-8">
                            <div class="col-12 mt-3">
                                <div class="row">
                                    <div class="col-12 text-center d-flex align-items-center justify-content-center  flex-column">
                                        Banner
                                        <small>Uma imagem escura em uma alta resolução</small>
                                        <picture style="height: 350px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                            <img id="banner-preview" @if (!$evento->banner) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($evento->banner) }}" @endif
                                            style="width: 100%; object-fit: cover;"
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
    </div>

    <div class="card banner">
        <div class="card-body">
            <h4 class="card-title">Banner de divulgação</h4>
            <form action="{{ route('painel.eventos.divulgacao.salvar', ['evento' => $evento]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 525px; width: 100%; max-width: 756px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="banner-divulgacao-preview" @if (!$evento->banner_divulgacao) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($evento->banner_divulgacao)
                                }}" @endif style="height:
                                100%;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="banner-divulgacao-upload">Escolher</label>
                            <input name="banner_divulgacao" id="banner-divulgacao-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="card local">
        <div class="card-body">
            <h4 class="card-title">Local do Evento</h4>
            <form action="{{ route('painel.eventos.local.salvar', ['evento' => $evento]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="local_nome">Nome</label>
                            <input id="local_nome" name="local_nome" type="text" class="form-control" placeholder="Insira o nome do local" value="{{ $evento->local_nome }}">
                        </div>

                    </div>
                    <div class="col-sm-6">

                        <div class="mb-3">
                            <label for="local_endereco">Endereço</label>
                            <input id="local_endereco" name="local_endereco" type="text" class="form-control" placeholder="Insira a endereço do local" value="{{ $evento->local_endereco }}">
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 525px; width: 100%; max-width: 756px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="local-preview" @if (!$evento->local_foto) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($evento->local_foto) }}" @endif style="height:
                                100%;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="local-upload">Escolher</label>
                            <input name="local_foto" id="local-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                    <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                </div>
            </form>
        </div>
    </div>


    <div class="card cursos">
        <div class="card-body">
            <h4 class="card-title">Cursos Vinculados</h4>



            <form action="{{ route('painel.eventos.curso.adicionar', ['evento' => $evento]) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="mb-3">
                        <label class="control-label">Selecionar Curso</label>
                        <select class="form-control" name="curso_id">
                            @foreach (App\Models\Curso::all() as $curso)
                            <option value="{{ $curso->id }}">{{ $curso->nome }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="manufacturername">Data de Exibição</label>
                        <input class="form-control" type="date" name="data" id="example-date-input" required>
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
                                    aria-label="Name: activate to sort column descending">Curso</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Data
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending"></th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($evento->cursos_ligados as $curso_ligado)
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">{{ $curso_ligado->curso->nome }}</td>
                                <td>{{ date('d/m/Y', strtotime($curso_ligado->data)) }}</td>
                                <td>
                                    <div class="btn-group edit-table-button ">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                class="bx bx-edit"></i></button>
                                        <div class="dropdown-menu" style="margin: 0px;">
                                            <a class="dropdown-item" href="{{ route('painel.eventos.curso.deletar', ['evento_curso' => $curso_ligado]) }}" style="color: red" href="#">Excluir</a>
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

    <div class="card pacotes">
        <div class="card-body">
            <h4 class="card-title">Pacotes dos Eventos</h4>



            <form action="{{ route('painel.eventos.pacote.adicionar', ['evento' => $evento]) }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nome">Nome</label>
                            <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome do local" required>
                        </div>


                        <div class="mb-3">
                            <label class="control-label">Cursos</label>
                            <select class="js-example-basic-multiple js-states form-control" multiple="multiple" name="cursos[]" id="select_cursospacote" multiple required>
                                @foreach (App\Models\Curso::where('pacote', false)->get() as $curso)
                                <option value="{{ $curso->id }}">
                                    {{ $curso->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="valor">Valor do Pacote (R$)</label>
                            <input class="form-control" id="valor" name="valor" type="number" value="0" min="0" step="0.01">
                        </div>
                    </div>

                    <div class="col-sm-6">

                        <div class="mb-3" style="height: 100%">
                            <label for="descricao_pacote">Descrição</label>
                            <textarea id="descricao_pacote" name="descricao_pacote" class="form-control" style="height: 246px" placeholder="Insira o conteúdo da descrição"></textarea>
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
                                    aria-label="Name: activate to sort column descending">Nome</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Valor
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">Cursos
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending"></th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($evento->pacotes as $pacote)
                            <tr class="odd">
                                <td class="sorting_1 dtr-control">{{ $pacote->nome }}</td>
                                <td>R$ {{ number_format($pacote->valor, 2, ',', '.') }}</td>
                                <td>
                                    @foreach ($pacote->cursos as $curso)
                                    <span class="badge bg-secondary mx-1">{{ $curso->nome }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="btn-group edit-table-button ">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                class="bx bx-edit"></i></button>
                                        <div class="dropdown-menu" style="margin: 0px;">
                                            <a class="dropdown-item" href="{{ route('painel.eventos.pacote.deletar', ['pacote' => $pacote]) }}" style="color: red" href="#">Excluir</a>
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


    <div class="card hoteis">
        <div class="card-body">
            <h4 class="card-title">Hoteis Conveniados</h4>
            <form action="{{ route('painel.eventos.hotel.adicionar', ['evento' => $evento]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="mb-3">
                        <label for="nome">Nome do Local</label>
                        <input id="nome" name="nome" type="text" class="form-control" maxlength="255" placeholder="Insira o nome">
                    </div>
                    <div class="mb-3">
                        <label for="endereco">Endereço do Local</label>
                        <input id="endereco" name="endereco" type="text" class="form-control" placeholder="Insira o endereco" maxlength="255">
                    </div>
                    <div class="mb-3">
                        <label for="url">URL de Redirecionamento</label>
                        <input id="url" name="url" type="url" class="form-control" placeholder="goog.gl/exemplo" maxlength="255">
                    </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
                </div>

                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-start flex-column">
                            <span class="my-3">Imagem do Hotel</span>
                            <picture style="height: 350px; width: 100%; background-color: #f3f4f6;overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="hoteis-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="hoteis-upload">Escolher</label>
                            <input name="foto" id="hoteis-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
            </form>

            <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info"
                            style="width: 1185px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Hotel</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">
                                        Endereço</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                @foreach ($evento->hoteis as $hotel)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{ $hotel->nome }}</td>
                                    <td>{{ $hotel->endereco }}</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" href="{{ route('painel.eventos.hotel.deletar', ['hotel' => $hotel]) }}" style="color: red" href="#">Excluir</a>
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


    <div class="card embaixadores">
        <div class="card-body">
            <h4 class="card-title">Cadastro de Convidados</h4>



            <form action="{{ route('painel.eventos.participante.adicionar', ['evento' => $evento]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nome">Nome</label>
                            <input id="nome" name="nome" type="text" class="form-control" placeholder="Insira o nome" required>
                        </div>



                        <div class="mb-3">
                            <label class="control-label">Embaixador ou Convidado</label>
                            <select class="form-control" name="tipo">
                                @foreach (config('eventos.participantes') as $codigo => $funcao)
                                <option value="{{ $codigo }}">{{ $funcao }}</option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="mb-3">
                            <label for="nome">URL para redirecionar</label>
                            <input class="form-control" type="url" name="url" placeholder="Insira a URL" id="example-url-input" maxlength="255">
                        </div>


                    </div>
                </div>
                <div class="d-flex flex-wrap gap-2">
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>

                </div>
                <h4 class="card-title my-3">Foto</h4>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="participante-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                            </picture>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="participante-upload">Escolher</label>
                            <input name="foto" id="participante-upload" style="display: none;" type="file" required>
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
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 15%;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending"></th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 35%;" aria-sort="ascending"
                                    aria-label="Name: activate to sort column descending">Nome</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 35%;" aria-label="Position: activate to sort column ascending">Função
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 15%;" aria-label="Start date: activate to sort column ascending"></th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($evento->participantes as $participante)
                            <tr>
                                <td style="display: flex; align-items: center; justify-content:center;"><img src="{{ asset($participante->foto) }}" style="width: 100px;" alt=""></td>
                                <td>{{ $participante->nome }}</td>
                                <td>
                                    {{ config('eventos.participantes')[$participante->tipo] }}
                                </td>
                                <td>
                                    <div class="btn-group edit-table-button ">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                class="bx bx-edit"></i></button>
                                        <div class="dropdown-menu" style="margin: 0px;">
                                            <a class="dropdown-item" href="{{ route('painel.eventos.participante.deletar', ['participante' => $participante]) }}" style="color: red"
                                                href="#">Excluir</a>
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

@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script>
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

        var inp = document.getElementById('local-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('local-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        var inp = document.getElementById('banner-divulgacao-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('banner-divulgacao-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        var inp = document.getElementById('hoteis-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('hoteis-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        var inp = document.getElementById('participante-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('participante-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);



        $('.filters span').click(function() {
            $('.card').hide();
            $(`.${$(this).data('filter')}`).show();
            $('.filters span').removeClass('active');
            $(this).addClass('active');
        })

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 600,
            });

            $('#select_tag').select2({});

            $('#select_hashtag').select2({});
            $('#select_cursospacote').select2({});
            $('.select2-selection.select2-selection--multiple').addClass('form-control');
            $('.select2-container').css('display', 'block');
        });
</script>
@endsection