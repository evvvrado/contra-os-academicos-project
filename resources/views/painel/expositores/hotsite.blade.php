@extends('painel.template.main')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="{{ asset('\admin\libs\magnific-popup\magnific-popup.css')}}">
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
Catálogo / <a style="color: unset" href="{{ route('painel.expositores') }}">Expositores</a> / Hotsite
@endsection


@section('conteudo')


<div class="filters col-12">
    <span data-filter="inicio" class="active">Informações</span>
    {{-- <span data-filter="cursos">Cursos</span> --}}
    <span data-filter="textos">Textos</span>
    <span data-filter="imagens">Imagens</span>
    <span data-filter="depoimentos">Parceiros</span>
    <span data-filter="galerias">Galerias</span>
    {{-- <span data-filter="depoimentosVideo">Depoimento em vídeo</span> --}}
    <span data-filter="duvidas">Dúvidas</span>
</div>


@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card inicio">
            <div class="card-body">
                <h4 class="card-title">Informações</h4>
                <form action="{{route('painel.expositores.hotsite.informacoes.salvar', ['expositor' => $expositor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Slogan</label>
                                <input id="productname" name="slogan" type="text" @if($hotsite) value="{{$hotsite->slogan}}" @endif placeholder="Insira o Slogan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="price">Telefone</label>
                                <input class="form-control" name="telefone" type="tel" @if($hotsite) value="{{$hotsite->telefone}}" @endif placeholder="Insira o telefone" id="example-tel-input">
                            </div>

                            <div class="mb-3">
                                <label for="manufacturername">Slug</label>
                                <input class="form-control" name="slug" type="text" @if($hotsite) value="{{$hotsite->slug}}" @endif placeholder="Insira o SLUG que ira pra URL" id="example-url-input">
                            </div>

                            <div class="mb-3">
                                <label for="manufacturername">Cor de destaque</label>
                                <input class="form-control form-control-color" name="cor_destaque" @if($hotsite) value="{{$hotsite->cor_destaque}}" @endif style="max-width:100%" type="color"
                                    value="#556ee6" id="example-color-input">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="manufacturername">Site</label>
                                <input class="form-control" name="site" type="url" @if($hotsite) value="{{$hotsite->site}}" @endif placeholder="Insira a URL" id="example-url-input">
                            </div>
                            <div class="mb-3">
                                <label for="manufacturername">E-mail</label>
                                <input class="form-control" type="email" name="email" @if($hotsite) value="{{$hotsite->email}}" @endif placeholder="Insira o e-mail" id="example-email-input">
                            </div>
                            <div class="mb-3">
                                <label for="manufacturername">Endereço</label>
                                <input id="endereco" name="endereco" type="text" name="endereco" @if($hotsite) value="{{$hotsite->endereco}}" @endif placeholder="Insira o endereço"
                                    class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="manufacturername">Cor de Fundo</label>
                                <input class="form-control form-control-color" name="cor_fundo" @if($hotsite) value="{{$hotsite->cor_fundo}}" @endif style="max-width:100%" type="color" value="#556ee6"
                                    id="example-color-input">
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

        <div class="card textos">
            <div class="card-body">
                <h4 class="card-title">Textos</h4>
                <form action="{{route('painel.expositores.hotsite.textos.salvar', ['expositor' => $expositor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="productname">
                                Sessão Lateral na Home
                                <i class="fas fa-info-circle info c-pointer" dir="{{ asset('site/img/sistema/hotsite_expositores_hero.png')}}"></i>

                            </label>
                            <input id="productname" name="sessao1_titulo" @if($hotsite) value="{{$hotsite->sessao1_titulo}}" @endif type="text" placeholder="Texto inicial" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <textarea class="form-control" name="sessao1_texto" placeholder="Paragrafo da Sessão" style="min-height: 200px!important;"
                                rows="6">@if($hotsite){{$hotsite->sessao1_texto}}@endif</textarea>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-6">

                            <div class="mb-3">
                                <label for="productname">Coluna 01
                                    <i class="fas fa-info-circle info c-pointer" dir="{{ asset('site/img/sistema/hotsite_expositores_coluna1.png')}}"></i>
                                </label>
                                <input id="productname" name="coluna1_titulo" type="text" @if($hotsite) value="{{$hotsite->coluna1_titulo}}" @endif placeholder="Título da Coluna" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea class="form-control" name="coluna1_texto" placeholder="Paragrafo da Coluna" style="min-height: 200px!important;"
                                    rows="6">@if($hotsite){{$hotsite->coluna1_texto}}@endif</textarea>
                            </div>
                        </div>
                        <div class="col-6">

                            <div class="mb-3">
                                <label for="productname">Coluna 02
                                    <i class="fas fa-info-circle info c-pointer" dir="{{ asset('site/img/sistema/hotsite_expositores_coluna2.png')}}"></i>

                                </label>
                                <input id="productname" name="coluna2_titulo" @if($hotsite) value="{{$hotsite->coluna2_titulo}}" @endif type="text" placeholder="Título da Coluna" class="form-control">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea class="form-control" name="coluna2_texto" placeholder="Paragrafo da Coluna" style="min-height: 200px!important;"
                                    rows="6">@if($hotsite){{$hotsite->coluna2_texto}}@endif</textarea>
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


        <div class="card depoimentos">
            <div class="card-body">
                <h4 class="card-title">Cadastro de Parceiros</h4>



                <form action="{{route('painel.expositores.hotsite.parceiro.adicionar', ['expositor' => $expositor])}}" method="POST" enctype="multipart/form-data">
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
                                <label for="manufacturerbrand">URL</label>
                                <input class="form-control" type="url" name="url" placeholder="Insira a URL" id="example-url-input">
                            </div>
                        </div>
                        <h4 class="card-title my-3">Logo do Parceiro</h4>
                        <small>Logo sem fundo na horizontal 135px x 61px</small>
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div class="col-12 text-center d-flex align-items-center justify-content-center">
                                    <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                        <img id="parceiro-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="width: 100%; object-fit: cover;" alt="">
                                    </picture>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <label class="btn btn-primary" for="parceiro-upload">Escolher</label>
                                    <input name="logo" id="parceiro-upload" style="display: none;" type="file">
                                </div>
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
                                        aria-label="Name: activate to sort column descending">Nome</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 70px;" aria-label="Position: activate to sort column ascending">
                                        Depoimento</th>
                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 10px;" aria-label="Start date: activate to sort column ascending">
                                    </th>
                                </tr>
                            </thead>


                            <tbody>
                                @if($hotsite)
                                @foreach($hotsite->parceiros as $parceiro)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{$parceiro->nome}}</td>
                                    <td>{{$parceiro->url}}</td>
                                    <td>
                                        <div class="btn-group edit-table-button ">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="height: 34px!important;"><i
                                                    class="bx bx-edit"></i></button>
                                            <div class="dropdown-menu" style="margin: 0px;">
                                                <a class="dropdown-item" style="color: red" href="{{route('painel.expositores.hotsite.parceiro.excluir', ['parceiro' => $parceiro])}}">Excluir</a>
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




        <div class="card galerias">
            <div class="card-body">
                <h4 class="card-title">Primeira Galeria</h4>



                <form action="{{route('painel.expositores.hotsite.galeria1.salvar', ['expositor' => $expositor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Título</label>
                                <input id="productname" name="galeria1_titulo" @if($hotsite) value="{{$hotsite->galeria1_titulo}}" @endif type="text" class="form-control" placeholder="Insira o nome">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Descrição</label>
                                <input id="productname" name="galeria1_descricao" @if($hotsite) value="{{$hotsite->galeria1_descricao}}" @endif type="text" class="form-control"
                                    placeholder="Insira o nome">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a name="" data-bs-toggle="modal" data-bs-target="#modalGaleria1" id="button-add" class="btn btn-success" style="height: 100%;">
                            <i class="bx bx-plus" aria-hidden="true"></i> Adicionar foto à galeria</a>
                    </div>
                </form>
            </div>


            <div class="card-body">

                <h4 class="card-title mb-3">Fotos da Galeria (1)</h4>

                <div class="popup-gallery d-flex flex-wrap">
                    @if($hotsite)
                    @foreach($hotsite->fotos->where("galeria", 1) as $foto)
                    <div class="img-fluid" style="margin-right: 10px">
                        <a href="{{route('painel.expositores.hotsite.galeria.foto.excluir', ['foto' => $foto])}}">
                            <img style="cursor:pointer;" src="{{ asset($foto->foto) }}" alt="" width="120">
                        </a>
                    </div>
                    @endforeach
                    @endif

                </div>

            </div>
        </div>



        <div class="card galerias">
            <div class="card-body">
                <h4 class="card-title">Segunda Galeria</h4>



                <form action="{{route('painel.expositores.hotsite.galeria2.salvar', ['expositor' => $expositor])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Título</label>
                                <input id="productname" name="galeria2_titulo" @if($hotsite) value="{{$hotsite->galeria2_titulo}}" @endif type="text" class="form-control" placeholder="Insira o nome">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="productname">Descrição</label>
                                <input id="productname" name="galeria2_descricao" @if($hotsite) value="{{$hotsite->galeria2_descricao}}" @endif type="text" class="form-control"
                                    placeholder="Insira o nome">
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar</button>
                        <a name="" data-bs-toggle="modal" data-bs-target="#modalGaleria2" id="button-add" class="btn btn-success" style="height: 100%;">
                            <i class="bx bx-plus" aria-hidden="true"></i> Adicionar foto à galeria</a>
                    </div>
                </form>


            </div>



            <div class="card-body">

                <h4 class="card-title mb-3">Fotos da Galeria (2)</h4>

                <div class="popup-gallery d-flex flex-wrap">

                    @if($hotsite)
                    @foreach($hotsite->fotos->where("galeria", 2) as $foto)
                    <div class="img-fluid" style="margin-right: 10px">
                        <a href="{{route('painel.expositores.hotsite.galeria.foto.excluir', ['foto' => $foto])}}">
                            <img style="cursor:pointer;" src="{{ asset($foto->foto) }}" alt="" width="120">
                        </a>
                    </div>
                    @endforeach

                    @endif
                </div>

            </div>

        </div>
    </div>

    <div class="card imagens">

        <div class="card-body">
            <form class="row" action="{{route('painel.expositores.hotsite.foto.salvar', ['expositor' => $expositor])}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12 col-md-4 mt-3 text-center">
                    <h4 class="card-title">Logo</h4>
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="logo-preview" @if(!$hotsite || !$hotsite->logo) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($hotsite->logo) }}" @endif
                                style="width: 100%; object-fit: cover;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="logo-upload">Escolher</label>
                            <input name="logo" id="logo-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3 text-center">
                    <h4 class="card-title">Foto Principal</h4>
                    <div class="row">

                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 464px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="principal-preview" @if(!$hotsite || !$hotsite->foto1) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($hotsite->foto1) }}" @endif
                                style="width: 100%; object-fit: cover;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="principal-upload">Escolher</label>
                            <input name="foto1" id="principal-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-3 text-center">
                    <h4 class="card-title">Foto da segunda sessão</h4>
                    <div class="row">
                        <div class="col-12 text-center d-flex align-items-center justify-content-center">
                            <picture style="height: 281px; max-width: 281px; overflow: hidden; display: flex; align-items:center; justify-content: center;">
                                <img id="secundaria-preview" @if(!$hotsite || !$hotsite->foto2) src="{{ asset('admin/images/thumb-padrao.png') }}" @else src="{{ asset($hotsite->foto2) }}" @endif
                                style="width: 100%; object-fit: cover;" alt="">
                            </picture>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="secundaria-upload">Escolher</label>
                            <input name="foto2" id="secundaria-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
                <hr class="mt-3">
                <div class="col-12 mt-3 text-center">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </form>

        </div>
        <div class="card-body row">


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

                </div>
            </div>
        </div> --}}
    </div>


    <div class="card duvidas">
        <div class="card-body">
            <h4 class="card-title">Cadastro de Dúvidas</h4>



            <form action="{{route('painel.expositores.hotsite.duvida.salvar', ['expositor' => $expositor])}}" method="POST">
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
                    <table id="datatable" class="table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info" style="width: 1185px;">
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
                                            <a class="dropdown-item" style="color: red" href="{{route('painel.expositores.hotsite.duvida.excluir', ['duvida' => $duvida])}}">Excluir</a>
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
</div>
</div>

</div>



@endsection



<div id="modalGaleria1" class="modal fade" tabindex="-1" aria-labelledby="modalGaleria1Label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modalGaleria1Label">Insira uma imagem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="card-body container-fluid">
                    <form action="{{route('painel.expositores.hotsite.galeria.foto.adicionar', ['expositor' => $expositor])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="galeria" value="1">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img id="galeria1-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="height: 200px; max-width: 100%;" alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="galeria1-upload">Escolher</label>
                                <button type="submit" class="btn btn-success waves-effect" style="margin-bottom: 0.5rem;">Salvar</button>
                                <input name="foto" id="galeria1-upload" style="display: none;" type="file">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

</div>

<div id="modalGaleria2" class="modal fade" tabindex="-1" aria-labelledby="modalGaleria2Label" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="modalGaleria2Label">Insira uma imagem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="card-body container-fluid">
                    <form action="{{route('painel.expositores.hotsite.galeria.foto.adicionar', ['expositor' => $expositor])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="galeria" value="2">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img id="galeria2-preview" src="{{ asset('admin/images/thumb-padrao.png') }}" style="height: 200px; max-width: 100%;" alt="">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <label class="btn btn-primary" for="galeria2-upload">Escolher</label>
                                <button type="submit" class="btn btn-success waves-effect" style="margin-bottom: 0.5rem;">Salvar</button>
                                <input name="foto" id="galeria2-upload" style="display: none;" type="file">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
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


@section('scripts')


<script src="{{ asset('\admin\libs\magnific-popup\jquery.magnific-popup.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>
<script>
    var inp = document.getElementById('logo-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('logo-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);
        var inp = document.getElementById('principal-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('principal-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);
        var inp = document.getElementById('secundaria-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('secundaria-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);
        var inp = document.getElementById('parceiro-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('parceiro-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);
        var inp = document.getElementById('galeria1-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('galeria1-preview').src = this.result;
            };
            reader.readAsDataURL(file);
        }, false);
        var inp = document.getElementById('galeria2-upload');
        inp.addEventListener('change', function(e) {
            var file = this.files[0];
            var reader = new FileReader();
            reader.onload = function() {
                document.getElementById('galeria2-preview').src = this.result;
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