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

    .card:not(.inicio) {
        display: none;
    }
</style>
@endsection

@section('titulo')
Projeto / <a style="color: unset" href="{{ route('painel.professores') }}">Professores</a> / Hotsite
@endsection


@section('conteudo')


<div class="filters col-12">
    <span data-filter="inicio" class="active">Informações</span>
    {{-- <span data-filter="cursos">Cursos</span> --}}
    <span data-filter="textos">Textos</span>
    <span data-filter="imagens">Imagens</span>
    <span data-filter="depoimentos">Depoimento</span>
    <span data-filter="depoimentosVideo">Depoimento em vídeo</span>
    <span data-filter="duvidas">Dúvidas</span>
</div>


@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card inicio">
            <div class="card-body">
                @if($hotsite)
                <div class="row">
                    <div class="col-12 text-end">
                        <a name="" id="" class="btn btn-primary" target="_blank" href="{{route('site.treinador', ['slug' => $hotsite->slug])}}" role="button">Visualizar Hotsite</a>
                    </div>
                </div>
                @endif
                <h4 class="card-title">Informações</h4>
                <form action="{{route('painel.professores.hotsite.informacoes.salvar', ['professor' => $professor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Nome Visível</label>
                                <input id="productname" name="nome" type="text" @if($hotsite) value="{{$hotsite->nome}}" @endif placeholder="Insira o Nome" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price">Telefone</label>
                                <input class="form-control" name="telefone" type="tel" @if($hotsite) value="{{$hotsite->telefone}}" @endif placeholder="Insira o telefone" id="example-tel-input">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="manufacturername">Slug</label>
                                <input class="form-control" name="slug" type="text" @if($hotsite) value="{{$hotsite->slug}}" @endif placeholder="Insira a slug" id="example-url-input">
                            </div>
                            <div class="mb-3">
                                <label for="manufacturername">E-mail</label>
                                <input class="form-control" name="email" type="email" @if($hotsite) value="{{$hotsite->email}}" @endif placeholder="Insira o e-mail" id="example-email-input">
                            </div>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="manufacturername">Video Principal</label>
                            <input class="form-control" name="video" type="url" @if($hotsite) value="{{$hotsite->video}}" @endif placeholder="Insira a URL" id="example-url-input">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="">Sobre</label>
                            <textarea class="form-control" name="sobre" style="min-height: 200px!important;" rows="6">@if($hotsite){!! $hotsite->sobre !!}@endif</textarea>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                            <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


        {{-- <div class="card cursos">
            <div class="card-body">
                <h4 class="card-title">Cursos Vinculados</h4>



                <form>
                    <div class="row">
                        <div class="mb-3">
                            <label class="control-label">Selecionar Curso</label>
                            <select class="form-control">
                                <option data-select2-id="3">Selecionar Curso</option>
                                <option value="FA">Curso 1</option>
                                <option value="EL">Curso 2</option>
                                <option value="EL">Curso 3</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="manufacturername">Data de Exibição</label>
                            <input class="form-control" type="date" id="example-date-input">
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
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info"
                            style="width: 1185px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Curso</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">
                                        Data</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">Curso 01</td>
                                    <td>31/02/2022</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" style="color: red" href="#">Excluir</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>



            </div>

        </div> --}}


        <div class="card textos">
            <div class="card-body">
                <h4 class="card-title">Textos</h4>
                <form action="{{route('painel.professores.hotsite.textos.salvar', ['professor' => $professor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="productname">Sobre o treinador
                                <i class="fas fa-info-circle info c-pointer" dir="{{ asset('site/img/sistema/hotsite_professor_sobre.png')}}"></i>
                            </label>
                            <input id="productname" name="sessao1_titulo" type="text" @if($hotsite) value="{{$hotsite->sessao1_titulo}}" @endif placeholder="Título da Sessão" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea class="form-control" name="sessao1_texto" placeholder="Paragrafo da Sessão" style="min-height: 200px!important;"
                                rows="6">@if($hotsite){!! $hotsite->sessao1_texto !!}@endif</textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="mb-3">
                            <label for="productname">Sobre os cursos
                                <i class="fas fa-info-circle info c-pointer" dir="{{ asset('site/img/sistema/hotsite_professor_cursos.png')}}"></i>
                            </label>
                            <input id="productname" name="sessao2_titulo" type="text" @if($hotsite) value="{{$hotsite->sessao2_titulo}}" @endif placeholder="Título da Sessão" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea class="form-control" name="sessao2_texto" placeholder="Paragrafo da Sessão" style="min-height: 200px!important;"
                                rows="6">@if($hotsite){!! $hotsite->sessao2_texto !!}@endif</textarea>
                        </div>
                    </div>




                    <div class="row">
                        <div class="mb-3">
                            <label for="productname">Sobre os depoimentos
                                <i class="fas fa-info-circle info c-pointer" dir="{{ asset('site/img/sistema/hotsite_professor_depoimentos.png')}}"></i>
                            </label>
                            <input id="productname" name="sessao3_titulo" type="text" @if($hotsite) value="{{$hotsite->sessao3_titulo}}" @endif placeholder="Título da Sessão" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea class="form-control" name="sessao3_texto" placeholder="Paragrafo da Sesão" style="min-height: 200px!important;"
                                rows="6">@if($hotsite){!! $hotsite->sessao3_texto !!}@endif</textarea>
                        </div>
                    </div>



                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <button type="button" class="btn btn-secondary waves-effect waves-light">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>


        <div class="card depoimentos">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Depoimento <i> *Máximo de 4</i></h4>


                @if(!$hotsite || $hotsite->depoimentos->where("video", false)->count() < 4) <form action="{{route('painel.professores.hotsite.depoimento.salvar', ['professor' => $professor])}}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Nome</label>
                                <input id="productname" name="nome" type="text" class="form-control" placeholder="Insira o nome">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="manufacturerbrand">Depoimento</label>
                                <textarea id="textarea" name="depoimento" class="form-control" maxlength="107" rows="3" placeholder="Limite de 107 Caracteres"></textarea>
                            </div>
                        </div>
                    </div>
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
                                <input name="foto" id="depoimento-upload" style="display: none;" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
                    </div>
                    </form>
                    @else
                    <span style="color: red;">Você atingiu o número de depoimentos. Exclua um para cadastrar um novo.</span>
                    @endif
            </div>
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
                                        aria-label="Name: activate to sort column descending">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">
                                        Depoimento</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                @if($hotsite)
                                @foreach($hotsite->depoimentos->where("video", false) as $depoimento)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{$depoimento->nome}}</td>
                                    <td>{!! $depoimento->depoimento !!}</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" style="color: red" href="{{route('painel.professores.hotsite.depoimento.excluir', ['depoimento' => $depoimento])}}">Excluir</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>


        <div class="card depoimentosVideo">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Depoimento <i> *Máximo de 6</i></h4>


                @if(!$hotsite || $hotsite->depoimentos->where("video", true)->count() < 6) <form action="{{route('painel.professores.hotsite.depoimento.salvar', ['professor' => $professor])}}"
                    method="POST">
                    @csrf
                    <input type="hidden" name="video" value="1">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Nome</label>
                                <input id="productname" name="nome" type="text" class="form-control" placeholder="Insira o nome">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="manufacturerbrand">URL Do Vídeo</label>
                                <input class="form-control" name="url" type="url" placeholder="Insira a URL" id="example-url-input">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Adicionar</button>
                    </div>
                    </form>
                    @else
                    <span style="color: red;">Você atingiu o número de depoimentos com vídeo. Exclua um para cadastrar um novo.</span>
                    @endif
            </div>
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
                                        aria-label="Name: activate to sort column descending">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">URL
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                @if($hotsite)
                                @foreach($hotsite->depoimentos->where("video", true) as $depoimento)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{$depoimento->nome}}</td>
                                    <td>{{ $depoimento->url }}</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" style="color: red" href="{{route('painel.professores.hotsite.depoimento.excluir', ['depoimento' => $depoimento])}}">Excluir</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>


        <div class="card imagens">

            <div class="card-body row">
                <h4 class="card-title">Foto Principal</h4>
                <small>Uma imagem na vertical em alta resolução *SEM FUNDO</small>



                <div class="col-12 mt-3">
                    <div class="row">

                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 464px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="principal-preview" @if(!$hotsite || !$hotsite->foto) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($hotsite->foto) }}" @endif
                                style="width: 100%; object-fit: cover;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <form id="form-foto" action="{{route('painel.professores.hotsite.foto.salvar', ['professor' => $professor])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <label class="btn btn-primary" id="select-principal-upload" for="principal-upload">Escolher</label>
                                <input name="foto" id="principal-upload" style="display: none;" type="file">
                                <img id="ajax_loading" src="{{ asset('site/img/ajax-loading.gif') }}" alt="" style="display:none; margin: 0 auto;" width="50">
                            </form>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-3">
                    <h4 class="card-title mb-3">Foto Principal *SEM FUNDO</h4>
                    <form action="https://themesbrand.com/" method="post" class="dropzone dz-clickable" style="height: 600px !important; display: flex; align-items: center; justify-content: center;">
                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>
                            <h4>Inserir imagem</h4>
                        </div>


                    </form>
                </div> --}}
            </div>
            {{-- <div class="card-body">
                <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info"
                            style="width: 1185px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">
                                        Depoimento</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">Everaldo Júnior</td>
                                    <td>Meu nome é Everaldo e eu moro em alfenas mas queria estar
                                        morando em alfenas onde posso comprar todos os alfenas de toda alfenas</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" style="color: red" href="#">Excluir</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> --}}



        </div>


        <div class="card duvidas">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Dúvidas</h4>



                <form action="{{route('painel.professores.hotsite.duvida.salvar', ['professor' => $professor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Dúvida</label>
                                <input id="productname" name="duvida" type="text" class="form-control" placeholder="Insira o nome">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="manufacturerbrand">Resposta</label>
                                <textarea id="textarea" name="resposta" class="form-control" maxlength="107" rows="3" placeholder="Limite de 107 Caracteres"></textarea>
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
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info"
                            style="width: 1185px;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 68px;" aria-sort="ascending"
                                        aria-label="Name: activate to sort column descending">Módulo</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">
                                        Descrição</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                @if($hotsite)
                                @foreach($hotsite->duvidas as $duvida)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{$duvida->duvida}}</td>
                                    <td>{{ $duvida->resposta }}</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" style="color: red" href="{{route('painel.professores.hotsite.duvida.excluir', ['duvida' => $duvida])}}">Excluir</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>



        </div>




        <div id="modalInfo" class="modal fade" tabindex="-1" aria-labelledby="modalInfoLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title mt-0" id="modalInfoLabel">Posição no site</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="card-body container-fluid">
                            <img id="modalInfoImg" src="" alt="" style="width: 100%">
                        </div>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>

    </div>
</div>

</div>


@endsection




@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script>
    var inp = document.getElementById('principal-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('principal-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);

        var inp = document.getElementById('depoimento-upload');
        if(inp){
            inp.addEventListener('change', function(e) {
                var file = this.files[0];
                var reader = new FileReader();
                reader.onload = function() {
                    document.getElementById('depoimento-preview').src = this.result;
                };
                reader.readAsDataURL(file);
            }, false);
        }

        $('.filters span').click(function() {
            $('.card').hide();
            $(`.${$(this).data('filter')}`).show();
            $('.filters span').removeClass('active');
            $(this).addClass('active');
        })

        $("#principal-upload").change(function() {
            $("#select-principal-upload").hide();
            $("#ajax_loading").show();
            $("#form-foto").submit();
        });

        $(document).ready(function() {
            $('#summernote').summernote({
                height: 600,
            });

            $(".info").click(function(){
                var img = $(this).attr("dir");
                $("#modalInfoImg").attr("src", img);
                $("#modalInfo").modal("show");
            })

            $('#select_tag').select2({});

            $('#select_hashtag').select2({});
        });
</script>
@endsection