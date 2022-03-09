@extends('painel.template.main')

@section('styles')
<!-- DataTables -->
<link href="{{ asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@php
    use App\Models\Produto;
@endphp

@section('titulo')
Orçamentos
@endsection


@section('conteudo')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Projects Overview</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                    <li class="breadcrumb-item active">Projects Overview</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

@php
    $parteData = explode("-", $orcamento->data);    
    $dataInvertida = $parteData[2] . "-" . $parteData[1] . "-" . $parteData[0];
@endphp

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="media">
                    <div class="media-body overflow-hidden">
                        <h5 class="text-truncate font-size-15">Orçamento #{{ $orcamento->id }}</h5>
                        <p class="text-muted">Desc.</p>
                    </div>
                </div>

                <h5 class="font-size-15 mt-4">Project Details :</h5>

                <p class="text-muted">Desc,</p>

                <div class="text-muted mt-4">
                    <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Serviço 1</p>
                    <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Serviço 2.</p>
                    <p><i class="mdi mdi-chevron-right text-primary me-1"></i> Serviço 3</p>
                </div>
                
                <div class="row task-dates">
                    <div class="col-sm-4 col-6">
                        <div class="mt-4">
                            <h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Data do Evento</h5>
                            <p class="text-muted mb-0">{{ $dataInvertida }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Overview</h4>

                <div id="overview-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Attached Files</h4>
                <div class="table-responsive">
                    <table class="table table-nowrap align-middle table-hover mb-0">
                        <tbody>
                            <tr>
                                <td style="width: 45px;">
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                            <i class="bx bxs-file-doc"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Skote Landing.Zip</a></h5>
                                    <small>Size : 3.25 MB</small>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                            <i class="bx bxs-file-doc"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Skote Admin.Zip</a></h5>
                                    <small>Size : 3.15 MB</small>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                            <i class="bx bxs-file-doc"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">Skote Logo.Zip</a></h5>
                                    <small>Size : 2.02 MB</small>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="avatar-sm">
                                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-24">
                                            <i class="bx bxs-file-doc"></i>
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14"><a href="#" class="text-dark">Veltrix admin.Zip</a></h5>
                                    <small>Size : 2.25 MB</small>
                                </td>
                                <td>
                                    <div class="text-center">
                                        <a href="#" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->

    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Comments</h4>

                <div class="media mb-4">
                    <div class="me-3">
                        <img class="media-object rounded-circle avatar-xs" alt="" src="assets/images/users/avatar-2.jpg">
                    </div>
                    <div class="media-body">
                        <h5 class="font-size-13 mb-1">David Lambert</h5>
                        <p class="text-muted mb-1">
                            Separate existence is a myth.
                        </p>
                    </div>
                    <div class="ms-3">
                        <a href="#" class="text-primary">Reply</a>
                    </div>
                </div>

                <div class="media mb-4">
                    <div class="me-3">
                        <img class="media-object rounded-circle avatar-xs" alt="" src="assets/images/users/avatar-3.jpg">
                    </div>
                    <div class="media-body">
                        <h5 class="font-size-13 mb-1">Steve Foster</h5>
                        <p class="text-muted mb-1">
                            <a href="#" class="text-success">@Henry</a>
                            To an English person it will like simplified
                        </p>
                        <div class="media mt-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                                    J
                                </span>
                            </div>
                            <div class="media-body">
                                <h5 class="font-size-13 mb-1">Jeffrey Walker</h5>
                                <p class="text-muted mb-1">
                                    as a skeptical Cambridge friend
                                </p>
                            </div>
                            <div class="ms-3">
                                <a href="#" class="text-primary">Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="ms-3">
                        <a href="#" class="text-primary">Reply</a>
                    </div>
                </div>

                <div class="media mb-4">
                    <div class="avatar-xs me-3">
                        <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-16">
                            S
                        </span>
                    </div>
                    <div class="media-body">
                        <h5 class="font-size-13 mb-1">Steven Carlson</h5>
                        <p class="text-muted mb-1">
                            Separate existence is a myth.
                        </p>
                    </div>
                    <div class="ms-3">
                        <a href="#" class="text-primary">Reply</a>
                    </div>
                </div>

                <div class="text-center mt-4 pt-2">
                    <a href="#" class="btn btn-primary btn-sm">View more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection


@section('scripts')
@endsection