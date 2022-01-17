@extends('painel.template.main')


@section('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<link href="{{ asset('admin/libs/select2/css/select2.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
{{--
<link href="{{asset('admin/libs/select2/css/select2-bootstrap4.css')}}" id="app-style" rel="stylesheet" type="text/css" /> --}}

<style>
    .abas {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .abas div {
        cursor: pointer;
        display: flex;
        flex-direction: column;
        gap: 20px;

        align-items: center;
        justify-content: center;

        border-radius: 8px;

        padding: 40px;
        opacity: 0.4;
    }

    .abas div.active {
        background: white;
        opacity: 1;

        box-shadow: 10px 20px 40px rgba(19, 51, 113, 0.05);
    }
</style>

@endsection

@section('titulo')
Dashboard / <a style="color: unset" href="{{ route('painel.eventos') }}">Início</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')

<nav class="abas">
    <div class="active">
        <picture>
            <img src="{{ asset('/site/img/icon_form.svg') }}" alt="">
        </picture>
        <span>Projeto</span>
    </div>
    <div>
        <picture>
            <img src="{{ asset('/site/img/icon_folder.svg') }}" alt="">
        </picture>
        <span>Catálogo</span>
    </div>
    <div>
        <picture>
            <img src="{{ asset('/site/img/icon_persons.svg') }}" alt="">
        </picture>
        <span>Financeiro</span>
    </div>
    <div>
        <picture>
            <img src="{{ asset('/site/img/icon_screen.svg') }}" alt="">
        </picture>
        <span>Institucional</span>
    </div>
</nav>



<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-primary bg-soft">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Skote Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="assets/images/users/avatar-1.jpg" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate">Henry Price</h5>
                        <p class="text-muted mb-0 text-truncate">UI/UX Designer</p>
                    </div>

                    <div class="col-sm-8">
                        <div class="pt-4">

                            <div class="row">
                                <div class="col-6">
                                    <h5 class="font-size-15">125</h5>
                                    <p class="text-muted mb-0">Projects</p>
                                </div>
                                <div class="col-6">
                                    <h5 class="font-size-15">$1245</h5>
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Profile <i class="mdi mdi-arrow-right ms-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earning</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-muted">This month</p>
                        <h3>$34,252</h3>
                        <p class="text-muted"><span class="text-success me-2"> 12% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>

                        <div class="mt-4">
                            <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mt-4 mt-sm-0">
                            <div id="radialBar-chart" class="apex-charts"></div>
                        </div>
                    </div>
                </div>
                <p class="text-muted mb-0">We craft digital, graphic and dimensional thinking.</p>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Orders</p>
                                <h4 class="mb-0">1,235</h4>
                            </div>

                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-copy-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Revenue</p>
                                <h4 class="mb-0">$35, 723</h4>
                            </div>

                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-archive-in font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted fw-medium">Average Price</p>
                                <h4 class="mb-0">$16.2</h4>
                            </div>

                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="card">
            <div class="card-body">
                <div class="d-sm-flex flex-wrap">
                    <h4 class="card-title mb-4">Email Sent</h4>
                    <div class="ms-auto">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Week</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Month</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div id="stacked-column-chart" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Social Source</h4>
                <div class="text-center">
                    <div class="avatar-sm mx-auto mb-4">
                        <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                            <i class="mdi mdi-facebook text-primary"></i>
                        </span>
                    </div>
                    <p class="font-16 text-muted mb-2"></p>
                    <h5><a href="#" class="text-dark">Facebook - <span class="text-muted font-16">125 sales</span> </a></h5>
                    <p class="text-muted">Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus tincidunt.</p>
                    <a href="#" class="text-primary font-16">Learn more <i class="mdi mdi-chevron-right"></i></a>
                </div>
                <div class="row mt-4">
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-primary font-size-16">
                                    <i class="mdi mdi-facebook text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Facebook</h5>
                            <p class="text-muted mb-0">125 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-info font-size-16">
                                    <i class="mdi mdi-twitter text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Twitter</h5>
                            <p class="text-muted mb-0">112 sales</p>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="social-source text-center mt-3">
                            <div class="avatar-xs mx-auto mb-3">
                                <span class="avatar-title rounded-circle bg-pink font-size-16">
                                    <i class="mdi mdi-instagram text-white"></i>
                                </span>
                            </div>
                            <h5 class="font-size-15">Instagram</h5>
                            <p class="text-muted mb-0">104 sales</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-5">Activity</h4>
                <ul class="verti-timeline list-unstyled">
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="media">
                            <div class="me-3">
                                <h5 class="font-size-14">22 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="media-body">
                                <div>
                                    Responded to need “Volunteer Activities
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="media">
                            <div class="me-3">
                                <h5 class="font-size-14">17 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="media-body">
                                <div>
                                    Everyone realizes why a new common language would be desirable... <a href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list active">
                        <div class="event-timeline-dot">
                            <i class="bx bxs-right-arrow-circle font-size-18 bx-fade-right"></i>
                        </div>
                        <div class="media">
                            <div class="me-3">
                                <h5 class="font-size-14">15 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="media-body">
                                <div>
                                    Joined the group “Boardsmanship Forum”
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="event-list">
                        <div class="event-timeline-dot">
                            <i class="bx bx-right-arrow-circle font-size-18"></i>
                        </div>
                        <div class="media">
                            <div class="me-3">
                                <h5 class="font-size-14">12 Nov <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                            </div>
                            <div class="media-body">
                                <div>
                                    Responded to need “In-Kind Opportunity”
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="text-center mt-4"><a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Top Cities Selling Product</h4>

                <div class="text-center">
                    <div class="mb-4">
                        <i class="bx bx-map-pin text-primary display-4"></i>
                    </div>
                    <h3>1,456</h3>
                    <p>San Francisco</p>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table align-middle table-nowrap">
                        <tbody>
                            <tr>
                                <td style="width: 30%">
                                    <p class="mb-0">San Francisco</p>
                                </td>
                                <td style="width: 25%">
                                    <h5 class="mb-0">1,456</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-primary rounded" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">Los Angeles</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">1,123</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="mb-0">San Diego</p>
                                </td>
                                <td>
                                    <h5 class="mb-0">1,026</h5>
                                </td>
                                <td>
                                    <div class="progress bg-transparent progress-sm">
                                        <div class="progress-bar bg-warning rounded" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                    <table class="table align-middle table-nowrap mb-0">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check font-size-16 align-middle">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck01">
                                        <label class="form-check-label" for="transactionCheck01"></label>
                                    </div>
                                </th>
                                <th class="align-middle">Order ID</th>
                                <th class="align-middle">Billing Name</th>
                                <th class="align-middle">Date</th>
                                <th class="align-middle">Total</th>
                                <th class="align-middle">Payment Status</th>
                                <th class="align-middle">Payment Method</th>
                                <th class="align-middle">View Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck02">
                                        <label class="form-check-label" for="transactionCheck02"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2540</a> </td>
                                <td>Neal Matthews</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $400
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck03">
                                        <label class="form-check-label" for="transactionCheck03"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2541</a> </td>
                                <td>Jamal Burnett</td>
                                <td>
                                    07 Oct, 2019
                                </td>
                                <td>
                                    $380
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-danger font-size-11">Chargeback</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck04">
                                        <label class="form-check-label" for="transactionCheck04"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2542</a> </td>
                                <td>Juan Mitchell</td>
                                <td>
                                    06 Oct, 2019
                                </td>
                                <td>
                                    $384
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck05">
                                        <label class="form-check-label" for="transactionCheck05"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2543</a> </td>
                                <td>Barry Dick</td>
                                <td>
                                    05 Oct, 2019
                                </td>
                                <td>
                                    $412
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-mastercard me-1"></i> Mastercard
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck06">
                                        <label class="form-check-label" for="transactionCheck06"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2544</a> </td>
                                <td>Ronald Taylor</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $404
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-warning font-size-11">Refund</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-visa me-1"></i> Visa
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="transactionCheck07">
                                        <label class="form-check-label" for="transactionCheck07"></label>
                                    </div>
                                </td>
                                <td><a href="javascript: void(0);" class="text-body fw-bold">#SK2545</a> </td>
                                <td>Jacob Hunter</td>
                                <td>
                                    04 Oct, 2019
                                </td>
                                <td>
                                    $392
                                </td>
                                <td>
                                    <span class="badge badge-pill badge-soft-success font-size-11">Paid</span>
                                </td>
                                <td>
                                    <i class="fab fa-cc-paypal me-1"></i> Paypal
                                </td>
                                <td>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm btn-rounded waves-effect waves-light" data-bs-toggle="modal" data-bs-target=".transaction-detailModal">
                                        View Details
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->


<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">Saas</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboards</a></li>
                    <li class="breadcrumb-item active">Saas</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="media">
                            <div class="me-3">
                                <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-md rounded-circle img-thumbnail">
                            </div>
                            <div class="media-body align-self-center">
                                <div class="text-muted">
                                    <p class="mb-2">Welcome to Skote Dashboard</p>
                                    <h5 class="mb-1">Henry wells</h5>
                                    <p class="mb-0">UI / UX Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 align-self-center">
                        <div class="text-lg-center mt-4 mt-lg-0">
                            <div class="row">
                                <div class="col-4">
                                    <div>
                                        <p class="text-muted text-truncate mb-2">Total Projects</p>
                                        <h5 class="mb-0">48</h5>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <p class="text-muted text-truncate mb-2">Projects</p>
                                        <h5 class="mb-0">40</h5>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div>
                                        <p class="text-muted text-truncate mb-2">Clients</p>
                                        <h5 class="mb-0">18</h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="clearfix mt-4 mt-lg-0">
                            <div class="dropdown float-end">
                                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bxs-cog align-middle me-1"></i> Setting
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card bg-primary bg-soft">
            <div>
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Skote Saas Dashboard</p>

                            <ul class="ps-3 mb-0">
                                <li class="py-1">7 + Layouts</li>
                                <li class="py-1">Multiple apps</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-copy-alt"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Orders</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>1,452 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            <div class="d-flex">
                                <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-archive-in"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Revenue</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>$ 28,452 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>
                            <div class="d-flex">
                                <span class="badge badge-soft-success font-size-12"> + 0.2% </span> <span class="ms-2 text-truncate">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs me-3">
                                <span class="avatar-title rounded-circle bg-primary bg-soft text-primary font-size-18">
                                    <i class="bx bx-purchase-tag-alt"></i>
                                </span>
                            </div>
                            <h5 class="font-size-14 mb-0">Average Price</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>$ 16.2 <i class="mdi mdi-chevron-up ms-1 text-success"></i></h4>

                            <div class="d-flex">
                                <span class="badge badge-soft-warning font-size-12"> 0% </span> <span class="ms-2 text-truncate">From previous period</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>

<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-end">
                        <div class="input-group input-group-sm">
                            <select class="form-select form-select-sm">
                                <option value="JA" selected="">Jan</option>
                                <option value="DE">Dec</option>
                                <option value="NO">Nov</option>
                                <option value="OC">Oct</option>
                            </select>
                            <label class="input-group-text">Month</label>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Earning</h4>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="text-muted">
                            <div class="mb-4">
                                <p>This month</p>
                                <h4>$2453.35</h4>
                                <div><span class="badge badge-soft-success font-size-12 me-1"> + 0.2% </span> From previous period</div>
                            </div>

                            <div>
                                <a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View Details <i class="mdi mdi-chevron-right ms-1"></i></a>
                            </div>

                            <div class="mt-4">
                                <p class="mb-2">Last month</p>
                                <h5>$2281.04</h5>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div id="line-chart" class="apex-charts" dir="ltr" style="min-height: 335px;">
                            <div id="apexchartswpwxhw3v" class="apexcharts-canvas apexchartswpwxhw3v apexcharts-theme-light" style="width: 674px; height: 320px;"><svg id="SvgjsSvg1001" width="674"
                                    height="320" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                    <g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(40.9375, 30)">
                                        <defs id="SvgjsDefs1002">
                                            <clipPath id="gridRectMaskwpwxhw3v">
                                                <rect id="SvgjsRect1009" width="630.0625" height="250.49400000000003" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="gridRectMarkerMaskwpwxhw3v">
                                                <rect id="SvgjsRect1010" width="627.0625" height="251.49400000000003" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none"
                                                    stroke-dasharray="0" fill="#fff"></rect>
                                            </clipPath>
                                            <filter id="SvgjsFilter1016" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                                <feFlood id="SvgjsFeFlood1017" flood-color="#000000" flood-opacity="0.2" result="SvgjsFeFlood1017Out" in="SourceGraphic"></feFlood>
                                                <feComposite id="SvgjsFeComposite1018" in="SvgjsFeFlood1017Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1018Out"></feComposite>
                                                <feOffset id="SvgjsFeOffset1019" dx="7" dy="18" result="SvgjsFeOffset1019Out" in="SvgjsFeComposite1018Out"></feOffset>
                                                <feGaussianBlur id="SvgjsFeGaussianBlur1020" stdDeviation="8 " result="SvgjsFeGaussianBlur1020Out" in="SvgjsFeOffset1019Out"></feGaussianBlur>
                                                <feMerge id="SvgjsFeMerge1021" result="SvgjsFeMerge1021Out" in="SourceGraphic">
                                                    <feMergeNode id="SvgjsFeMergeNode1022" in="SvgjsFeGaussianBlur1020Out"></feMergeNode>
                                                    <feMergeNode id="SvgjsFeMergeNode1023" in="[object Arguments]"></feMergeNode>
                                                </feMerge>
                                                <feBlend id="SvgjsFeBlend1024" in="SourceGraphic" in2="SvgjsFeMerge1021Out" mode="normal" result="SvgjsFeBlend1024Out"></feBlend>
                                            </filter>
                                        </defs>
                                        <line id="SvgjsLine1008" x1="0" y1="0" x2="0" y2="247.49400000000003" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                            height="247.49400000000003" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                        <g id="SvgjsG1025" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG1026" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1028" font-family="Helvetica, Arial, sans-serif" x="0"
                                                    y="276.494" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f"
                                                    class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1029">1</tspan>
                                                    <title>1</title>
                                                </text><text id="SvgjsText1031" font-family="Helvetica, Arial, sans-serif" x="56.64204545454546" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1032">2</tspan>
                                                    <title>2</title>
                                                </text><text id="SvgjsText1034" font-family="Helvetica, Arial, sans-serif" x="113.2840909090909" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1035">3</tspan>
                                                    <title>3</title>
                                                </text><text id="SvgjsText1037" font-family="Helvetica, Arial, sans-serif" x="169.92613636363635" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1038">4</tspan>
                                                    <title>4</title>
                                                </text><text id="SvgjsText1040" font-family="Helvetica, Arial, sans-serif" x="226.56818181818178" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1041">5</tspan>
                                                    <title>5</title>
                                                </text><text id="SvgjsText1043" font-family="Helvetica, Arial, sans-serif" x="283.2102272727272" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1044">6</tspan>
                                                    <title>6</title>
                                                </text><text id="SvgjsText1046" font-family="Helvetica, Arial, sans-serif" x="339.85227272727263" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1047">7</tspan>
                                                    <title>7</title>
                                                </text><text id="SvgjsText1049" font-family="Helvetica, Arial, sans-serif" x="396.4943181818181" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1050">8</tspan>
                                                    <title>8</title>
                                                </text><text id="SvgjsText1052" font-family="Helvetica, Arial, sans-serif" x="453.1363636363635" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1053">9</tspan>
                                                    <title>9</title>
                                                </text><text id="SvgjsText1055" font-family="Helvetica, Arial, sans-serif" x="509.778409090909" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1056">10</tspan>
                                                    <title>10</title>
                                                </text><text id="SvgjsText1058" font-family="Helvetica, Arial, sans-serif" x="566.4204545454545" y="276.494" text-anchor="middle"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1059">11</tspan>
                                                    <title>11</title>
                                                </text><text id="SvgjsText1061" font-family="Helvetica, Arial, sans-serif" x="623.0625" y="276.494" text-anchor="middle" dominant-baseline="auto"
                                                    font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                    <tspan id="SvgjsTspan1062">12</tspan>
                                                    <title>12</title>
                                                </text></g>
                                            <line id="SvgjsLine1063" x1="0" y1="248.49400000000003" x2="623.0625" y2="248.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line>
                                        </g>
                                        <g id="SvgjsG1082" class="apexcharts-grid">
                                            <g id="SvgjsG1083" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine1097" x1="0" y1="0" x2="623.0625" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1098" x1="0" y1="35.35628571428572" x2="623.0625" y2="35.35628571428572" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1099" x1="0" y1="70.71257142857144" x2="623.0625" y2="70.71257142857144" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1100" x1="0" y1="106.06885714285715" x2="623.0625" y2="106.06885714285715" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1101" x1="0" y1="141.42514285714287" x2="623.0625" y2="141.42514285714287" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1102" x1="0" y1="176.7814285714286" x2="623.0625" y2="176.7814285714286" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1103" x1="0" y1="212.1377142857143" x2="623.0625" y2="212.1377142857143" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine1104" x1="0" y1="247.49400000000003" x2="623.0625" y2="247.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG1084" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine1085" x1="0" y1="248.49400000000003" x2="0" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick">
                                            </line>
                                            <line id="SvgjsLine1086" x1="56.64204545454545" y1="248.49400000000003" x2="56.64204545454545" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1087" x1="113.2840909090909" y1="248.49400000000003" x2="113.2840909090909" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1088" x1="169.92613636363637" y1="248.49400000000003" x2="169.92613636363637" y2="254.49400000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1089" x1="226.5681818181818" y1="248.49400000000003" x2="226.5681818181818" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1090" x1="283.21022727272725" y1="248.49400000000003" x2="283.21022727272725" y2="254.49400000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1091" x1="339.8522727272727" y1="248.49400000000003" x2="339.8522727272727" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1092" x1="396.49431818181813" y1="248.49400000000003" x2="396.49431818181813" y2="254.49400000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1093" x1="453.13636363636357" y1="248.49400000000003" x2="453.13636363636357" y2="254.49400000000003" stroke="#e0e0e0"
                                                stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1094" x1="509.778409090909" y1="248.49400000000003" x2="509.778409090909" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1095" x1="566.4204545454545" y1="248.49400000000003" x2="566.4204545454545" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1096" x1="623.0625" y1="248.49400000000003" x2="623.0625" y2="254.49400000000003" stroke="#e0e0e0" stroke-dasharray="0"
                                                class="apexcharts-xaxis-tick"></line>
                                            <line id="SvgjsLine1106" x1="0" y1="247.49400000000003" x2="623.0625" y2="247.49400000000003" stroke="transparent" stroke-dasharray="0"></line>
                                            <line id="SvgjsLine1105" x1="0" y1="1" x2="0" y2="247.49400000000003" stroke="transparent" stroke-dasharray="0"></line>
                                        </g>
                                        <g id="SvgjsG1011" class="apexcharts-line-series apexcharts-plot-series">
                                            <g id="SvgjsG1012" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                                <path id="SvgjsPath1015"
                                                    d="M0 208.60208571428575C19.82471590909091 208.60208571428575 36.817329545454555 176.7814285714286 56.64204545454546 176.7814285714286C76.46676136363637 176.7814285714286 93.45937500000001 190.9239428571429 113.28409090909092 190.9239428571429C133.10880681818182 190.9239428571429 150.10142045454546 137.88951428571428 169.92613636363637 137.88951428571428C189.7508522727273 137.88951428571428 206.74346590909093 144.96077142857143 226.56818181818184 144.96077142857143C246.39289772727275 144.96077142857143 263.3855113636364 63.64131428571429 283.2102272727273 63.64131428571429C303.0349431818182 63.64131428571429 320.02755681818184 74.2482 339.85227272727275 74.2482C359.67698863636366 74.2482 376.66960227272733 120.21137142857143 396.49431818181824 120.21137142857143C416.31903409090916 120.21137142857143 433.31164772727277 77.78382857142859 453.1363636363637 77.78382857142859C472.9610795454546 77.78382857142859 489.9536931818182 28.28502857142854 509.7784090909091 28.28502857142854C529.6031250000001 28.28502857142854 546.5957386363636 77.78382857142859 566.4204545454546 77.78382857142859C586.2451704545456 77.78382857142859 603.2377840909091 49.49880000000002 623.0625000000001 49.49880000000002C623.0625000000001 49.49880000000002 623.0625000000001 49.49880000000002 623.0625000000001 49.49880000000002 "
                                                    fill="none" fill-opacity="1" stroke="rgba(85,110,230,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0"
                                                    class="apexcharts-line" index="0" clip-path="url(#gridRectMaskwpwxhw3v)" filter="url(#SvgjsFilter1016)"
                                                    pathTo="M 0 208.60208571428575C 19.82471590909091 208.60208571428575 36.817329545454555 176.7814285714286 56.64204545454546 176.7814285714286C 76.46676136363637 176.7814285714286 93.45937500000001 190.9239428571429 113.28409090909092 190.9239428571429C 133.10880681818182 190.9239428571429 150.10142045454546 137.88951428571428 169.92613636363637 137.88951428571428C 189.7508522727273 137.88951428571428 206.74346590909093 144.96077142857143 226.56818181818184 144.96077142857143C 246.39289772727275 144.96077142857143 263.3855113636364 63.64131428571429 283.2102272727273 63.64131428571429C 303.0349431818182 63.64131428571429 320.02755681818184 74.2482 339.85227272727275 74.2482C 359.67698863636366 74.2482 376.66960227272733 120.21137142857143 396.49431818181824 120.21137142857143C 416.31903409090916 120.21137142857143 433.31164772727277 77.78382857142859 453.1363636363637 77.78382857142859C 472.9610795454546 77.78382857142859 489.9536931818182 28.28502857142854 509.7784090909091 28.28502857142854C 529.6031250000001 28.28502857142854 546.5957386363636 77.78382857142859 566.4204545454546 77.78382857142859C 586.2451704545456 77.78382857142859 603.2377840909091 49.49880000000002 623.0625000000001 49.49880000000002"
                                                    pathFrom="M -1 318.20657142857146L -1 318.20657142857146L 56.64204545454546 318.20657142857146L 113.28409090909092 318.20657142857146L 169.92613636363637 318.20657142857146L 226.56818181818184 318.20657142857146L 283.2102272727273 318.20657142857146L 339.85227272727275 318.20657142857146L 396.49431818181824 318.20657142857146L 453.1363636363637 318.20657142857146L 509.7784090909091 318.20657142857146L 566.4204545454546 318.20657142857146L 623.0625000000001 318.20657142857146">
                                                </path>
                                                <g id="SvgjsG1013" class="apexcharts-series-markers-wrap" data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle1112" r="0" cx="0" cy="0" class="apexcharts-marker wmsflqs7vi no-pointer-events" stroke="#ffffff" fill="#556ee6"
                                                            fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG1014" class="apexcharts-datalabels" data:realIndex="0"></g>
                                        </g>
                                        <line id="SvgjsLine1107" x1="0" y1="0" x2="623.0625" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine1108" x1="0" y1="0" x2="623.0625" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG1109" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG1110" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG1111" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect1113" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect1114" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                    <rect id="SvgjsRect1007" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG1064" class="apexcharts-yaxis" rel="0" transform="translate(10.9375, 0)">
                                        <g id="SvgjsG1065" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1066" font-family="Helvetica, Arial, sans-serif" x="20" y="31.7" text-anchor="end"
                                                dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1067">90</tspan>
                                            </text><text id="SvgjsText1068" font-family="Helvetica, Arial, sans-serif" x="20" y="67.05628571428572" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1069">80</tspan>
                                            </text><text id="SvgjsText1070" font-family="Helvetica, Arial, sans-serif" x="20" y="102.41257142857144" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1071">70</tspan>
                                            </text><text id="SvgjsText1072" font-family="Helvetica, Arial, sans-serif" x="20" y="137.76885714285714" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1073">60</tspan>
                                            </text><text id="SvgjsText1074" font-family="Helvetica, Arial, sans-serif" x="20" y="173.12514285714286" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1075">50</tspan>
                                            </text><text id="SvgjsText1076" font-family="Helvetica, Arial, sans-serif" x="20" y="208.48142857142858" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1077">40</tspan>
                                            </text><text id="SvgjsText1078" font-family="Helvetica, Arial, sans-serif" x="20" y="243.8377142857143" text-anchor="end" dominant-baseline="auto"
                                                font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1079">30</tspan>
                                            </text><text id="SvgjsText1080" font-family="Helvetica, Arial, sans-serif" x="20" y="279.194" text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;">
                                                <tspan id="SvgjsTspan1081">20</tspan>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG1004" class="apexcharts-annotations"></g>
                                </svg>
                                <div class="apexcharts-legend" style="max-height: 160px;"></div>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 110, 230);"></span>
                                        <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                </div>
                                <div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="resize-triggers">
                            <div class="expand-trigger">
                                <div style="width: 699px; height: 321px;"></div>
                            </div>
                            <div class="contract-trigger"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Sales Analytics</h4>

                <div style="position: relative;">
                    <div id="donut-chart" class="apex-charts" style="min-height: 240.7px;">
                        <div id="apexchartscdzqdtzw" class="apexcharts-canvas apexchartscdzqdtzw apexcharts-theme-light" style="width: 480px; height: 240.7px;"><svg id="SvgjsSvg1115" width="480"
                                height="240.7" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                <g id="SvgjsG1117" class="apexcharts-inner apexcharts-graphical" transform="translate(122, 0)">
                                    <defs id="SvgjsDefs1116">
                                        <clipPath id="gridRectMaskcdzqdtzw">
                                            <rect id="SvgjsRect1119" width="244" height="262" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <clipPath id="gridRectMarkerMaskcdzqdtzw">
                                            <rect id="SvgjsRect1120" width="242" height="264" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
                                            </rect>
                                        </clipPath>
                                        <filter id="SvgjsFilter1129" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood1130" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1130Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite1131" in="SvgjsFeFlood1130Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1131Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset1132" dx="1" dy="1" result="SvgjsFeOffset1132Out" in="SvgjsFeComposite1131Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur1133" stdDeviation="1 " result="SvgjsFeGaussianBlur1133Out" in="SvgjsFeOffset1132Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge1134" result="SvgjsFeMerge1134Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode1135" in="SvgjsFeGaussianBlur1133Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode1136" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend1137" in="SourceGraphic" in2="SvgjsFeMerge1134Out" mode="normal" result="SvgjsFeBlend1137Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter1142" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood1143" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1143Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite1144" in="SvgjsFeFlood1143Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1144Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset1145" dx="1" dy="1" result="SvgjsFeOffset1145Out" in="SvgjsFeComposite1144Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur1146" stdDeviation="1 " result="SvgjsFeGaussianBlur1146Out" in="SvgjsFeOffset1145Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge1147" result="SvgjsFeMerge1147Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode1148" in="SvgjsFeGaussianBlur1146Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode1149" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend1150" in="SourceGraphic" in2="SvgjsFeMerge1147Out" mode="normal" result="SvgjsFeBlend1150Out"></feBlend>
                                        </filter>
                                        <filter id="SvgjsFilter1155" filterUnits="userSpaceOnUse" width="200%" height="200%" x="-50%" y="-50%">
                                            <feFlood id="SvgjsFeFlood1156" flood-color="#000000" flood-opacity="0.45" result="SvgjsFeFlood1156Out" in="SourceGraphic"></feFlood>
                                            <feComposite id="SvgjsFeComposite1157" in="SvgjsFeFlood1156Out" in2="SourceAlpha" operator="in" result="SvgjsFeComposite1157Out"></feComposite>
                                            <feOffset id="SvgjsFeOffset1158" dx="1" dy="1" result="SvgjsFeOffset1158Out" in="SvgjsFeComposite1157Out"></feOffset>
                                            <feGaussianBlur id="SvgjsFeGaussianBlur1159" stdDeviation="1 " result="SvgjsFeGaussianBlur1159Out" in="SvgjsFeOffset1158Out"></feGaussianBlur>
                                            <feMerge id="SvgjsFeMerge1160" result="SvgjsFeMerge1160Out" in="SourceGraphic">
                                                <feMergeNode id="SvgjsFeMergeNode1161" in="SvgjsFeGaussianBlur1159Out"></feMergeNode>
                                                <feMergeNode id="SvgjsFeMergeNode1162" in="[object Arguments]"></feMergeNode>
                                            </feMerge>
                                            <feBlend id="SvgjsFeBlend1163" in="SourceGraphic" in2="SvgjsFeMerge1160Out" mode="normal" result="SvgjsFeBlend1163Out"></feBlend>
                                        </filter>
                                    </defs>
                                    <g id="SvgjsG1121" class="apexcharts-pie">
                                        <g id="SvgjsG1122" transform="translate(0, 0) scale(1)">
                                            <circle id="SvgjsCircle1123" r="77.06829268292684" cx="119" cy="119" fill="transparent"></circle>
                                            <g id="SvgjsG1124" class="apexcharts-slices">
                                                <g id="SvgjsG1125" class="apexcharts-series apexcharts-pie-series" seriesName="SeriesxA" rel="1" data:realIndex="0">
                                                    <path id="SvgjsPath1126"
                                                        d="M 119 8.902439024390233 A 110.09756097560977 110.09756097560977 0 0 1 141.8905700573504 226.69166511493654 L 135.02339904014528 194.3841655804556 A 77.06829268292684 77.06829268292684 0 0 0 119 41.93170731707316 L 119 8.902439024390233 z"
                                                        fill="rgba(85,110,230,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="168" data:startAngle="0" data:strokeWidth="2" data:value="56"
                                                        data:pathOrig="M 119 8.902439024390233 A 110.09756097560977 110.09756097560977 0 0 1 141.8905700573504 226.69166511493654 L 135.02339904014528 194.3841655804556 A 77.06829268292684 77.06829268292684 0 0 0 119 41.93170731707316 L 119 8.902439024390233 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG1138" class="apexcharts-series apexcharts-pie-series" seriesName="SeriesxB" rel="2" data:realIndex="1">
                                                    <path id="SvgjsPath1139"
                                                        d="M 141.8905700573504 226.69166511493654 A 110.09756097560977 110.09756097560977 0 0 1 11.30833488506343 96.10942994264965 L 43.6158344195444 102.97660095985475 A 77.06829268292684 77.06829268292684 0 0 0 135.02339904014528 194.3841655804556 L 141.8905700573504 226.69166511493654 z"
                                                        fill="rgba(52,195,143,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-1" index="0" j="1" data:angle="114" data:startAngle="168" data:strokeWidth="2" data:value="38"
                                                        data:pathOrig="M 141.8905700573504 226.69166511493654 A 110.09756097560977 110.09756097560977 0 0 1 11.30833488506343 96.10942994264965 L 43.6158344195444 102.97660095985475 A 77.06829268292684 77.06829268292684 0 0 0 135.02339904014528 194.3841655804556 L 141.8905700573504 226.69166511493654 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG1151" class="apexcharts-series apexcharts-pie-series" seriesName="SeriesxC" rel="3" data:realIndex="2">
                                                    <path id="SvgjsPath1152"
                                                        d="M 11.30833488506343 96.10942994264965 A 110.09756097560977 110.09756097560977 0 0 1 118.98078435072314 8.90244070127197 L 118.9865490455062 41.93170849089037 A 77.06829268292684 77.06829268292684 0 0 0 43.6158344195444 102.97660095985475 L 11.30833488506343 96.10942994264965 z"
                                                        fill="rgba(244,106,106,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0"
                                                        class="apexcharts-pie-area apexcharts-donut-slice-2" index="0" j="2" data:angle="78" data:startAngle="282" data:strokeWidth="2" data:value="26"
                                                        data:pathOrig="M 11.30833488506343 96.10942994264965 A 110.09756097560977 110.09756097560977 0 0 1 118.98078435072314 8.90244070127197 L 118.9865490455062 41.93170849089037 A 77.06829268292684 77.06829268292684 0 0 0 43.6158344195444 102.97660095985475 L 11.30833488506343 96.10942994264965 z"
                                                        stroke="#ffffff"></path>
                                                </g>
                                                <g id="SvgjsG1127" class="apexcharts-datalabels"><text id="SvgjsText1128" font-family="Helvetica, Arial, sans-serif" x="212.07026976435435"
                                                        y="109.21792047044732" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff"
                                                        class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1129)" style="font-family: Helvetica, Arial, sans-serif;">46.7%</text></g>
                                                <g id="SvgjsG1140" class="apexcharts-datalabels"><text id="SvgjsText1141" font-family="Helvetica, Arial, sans-serif" x="52.82687783573989"
                                                        y="185.17312216426012" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff"
                                                        class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1142)" style="font-family: Helvetica, Arial, sans-serif;">31.7%</text></g>
                                                <g id="SvgjsG1153" class="apexcharts-datalabels"><text id="SvgjsText1154" font-family="Helvetica, Arial, sans-serif" x="60.106355892216584"
                                                        y="46.27240635331091" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff"
                                                        class="apexcharts-text apexcharts-pie-label" filter="url(#SvgjsFilter1155)" style="font-family: Helvetica, Arial, sans-serif;">21.7%</text></g>
                                            </g>
                                        </g>
                                    </g>
                                    <line id="SvgjsLine1164" x1="0" y1="0" x2="238" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1165" x1="0" y1="0" x2="238" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                </g>
                                <g id="SvgjsG1118" class="apexcharts-annotations"></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(85, 110, 230);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 195, 143);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                                <div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(244, 106, 106);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                        <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                        <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="resize-triggers">
                        <div class="expand-trigger">
                            <div style="width: 481px; height: 242px;"></div>
                        </div>
                        <div class="contract-trigger"></div>
                    </div>
                </div>

                <div class="text-center text-muted">
                    <div class="row">
                        <div class="col-4">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary me-1"></i> Product A</p>
                                <h5>$ 2,132</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success me-1"></i> Product B</p>
                                <h5>$ 1,763</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger me-1"></i> Product C</p>
                                <h5>$ 973</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <div class="clearfix">
                    <div class="float-end">
                        <div class="input-group input-group-sm">
                            <select class="form-select form-select-sm">
                                <option value="JA" selected="">Jan</option>
                                <option value="DE">Dec</option>
                                <option value="NO">Nov</option>
                                <option value="OC">Oct</option>
                            </select>
                            <label class="input-group-text">Month</label>
                        </div>
                    </div>
                    <h4 class="card-title mb-4">Top Selling product</h4>
                </div>

                <div class="text-muted text-center">
                    <p class="mb-2">Product A</p>
                    <h4>$ 6385</h4>
                    <p class="mt-4 mb-0"><span class="badge badge-soft-success font-size-11 me-2"> 0.6% <i class="mdi mdi-arrow-up"></i> </span> From previous period</p>
                </div>

                <div class="table-responsive mt-4">
                    <table class="table align-middle mb-0">
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="font-size-14 mb-1">Product A</h5>
                                    <p class="text-muted mb-0">Neque quis est</p>
                                </td>

                                <td style="position: relative;">
                                    <div id="radialchart-1" class="apex-charts" style="min-height: 61px;">
                                        <div id="apexcharts9np4gxmm" class="apexcharts-canvas apexcharts9np4gxmm apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1166"
                                                width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1168" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1167">
                                                        <clipPath id="gridRectMask9np4gxmm">
                                                            <rect id="SvgjsRect1170" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask9np4gxmm">
                                                            <rect id="SvgjsRect1171" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1172" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1173">
                                                            <g id="SvgjsG1174" class="apexcharts-tracks">
                                                                <g id="SvgjsG1175" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none"
                                                                        fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805"
                                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1177">
                                                                <g id="SvgjsG1179" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath1180"
                                                                        d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 0 1 44.98383193561228 43.972649328109725" fill="none"
                                                                        fill-opacity="0.85" stroke="rgba(85,110,230,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366"
                                                                        stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="133" data:value="37" index="0"
                                                                        j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 0 1 44.98383193561228 43.972649328109725">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1178" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1181" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1182" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1169" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 134px; height: 86px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-muted mb-1">Sales</p>
                                    <h5 class="mb-0">37 %</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-size-14 mb-1">Product B</h5>
                                    <p class="text-muted mb-0">Quis autem iure</p>
                                </td>

                                <td style="position: relative;">
                                    <div id="radialchart-2" class="apex-charts" style="min-height: 61px;">
                                        <div id="apexcharts2vxxfkai" class="apexcharts-canvas apexcharts2vxxfkai apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1183"
                                                width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1185" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1184">
                                                        <clipPath id="gridRectMask2vxxfkai">
                                                            <rect id="SvgjsRect1187" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask2vxxfkai">
                                                            <rect id="SvgjsRect1188" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1189" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1190">
                                                            <g id="SvgjsG1191" class="apexcharts-tracks">
                                                                <g id="SvgjsG1192" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none"
                                                                        fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805"
                                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1194">
                                                                <g id="SvgjsG1196" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath1197"
                                                                        d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 9.888613802535662 33.90925746625116" fill="none"
                                                                        fill-opacity="0.85" stroke="rgba(52,195,143,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366"
                                                                        stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="259" data:value="72" index="0"
                                                                        j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 9.888613802535662 33.90925746625116">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1195" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1198" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1199" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1186" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 134px; height: 86px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-muted mb-1">Sales</p>
                                    <h5 class="mb-0">72 %</h5>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5 class="font-size-14 mb-1">Product C</h5>
                                    <p class="text-muted mb-0">Sed aliquam mauris.</p>
                                </td>

                                <td style="position: relative;">
                                    <div id="radialchart-3" class="apex-charts" style="min-height: 61px;">
                                        <div id="apexchartsu6ypcfr3" class="apexcharts-canvas apexchartsu6ypcfr3 apexcharts-theme-light" style="width: 60px; height: 61px;"><svg id="SvgjsSvg1200"
                                                width="60" height="61" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1202" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)">
                                                    <defs id="SvgjsDefs1201">
                                                        <clipPath id="gridRectMasku6ypcfr3">
                                                            <rect id="SvgjsRect1204" width="66" height="62" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMasku6ypcfr3">
                                                            <rect id="SvgjsRect1205" width="64" height="64" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <g id="SvgjsG1206" class="apexcharts-radialbar">
                                                        <g id="SvgjsG1207">
                                                            <g id="SvgjsG1208" class="apexcharts-tracks">
                                                                <g id="SvgjsG1209" class="apexcharts-radialbar-track apexcharts-track" rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                        d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325" fill="none"
                                                                        fill-opacity="1" stroke="rgba(242,242,242,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.678048780487805"
                                                                        stroke-dasharray="0" class="apexcharts-radialbar-area"
                                                                        data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 29.99642420350187 9.512195433998325"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG1211">
                                                                <g id="SvgjsG1213" class="apexcharts-series apexcharts-radial-series" seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath1214"
                                                                        d="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 25.043551407226317 49.87922951394725" fill="none"
                                                                        fill-opacity="0.85" stroke="rgba(244,106,106,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5.853658536585366"
                                                                        stroke-dasharray="0" class="apexcharts-radialbar-area apexcharts-radialbar-slice-0" data:angle="194" data:value="54" index="0"
                                                                        j="0" data:pathOrig="M 30 9.512195121951216 A 20.487804878048784 20.487804878048784 0 1 1 25.043551407226317 49.87922951394725">
                                                                    </path>
                                                                </g>
                                                                <circle id="SvgjsCircle1212" r="17.64878048780488" cx="30" cy="30" class="apexcharts-radialbar-hollow" fill="transparent"></circle>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1215" x1="0" y1="0" x2="60" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1216" x1="0" y1="0" x2="60" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                                <g id="SvgjsG1203" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 134px; height: 86px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-muted mb-1">Sales</p>
                                    <h5 class="mb-0">54 %</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tasks</h4>

                <ul class="nav nav-pills bg-light rounded">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">In Process</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Upcoming</a>
                    </li>
                </ul>

                <div class="mt-4">
                    <div data-simplebar="init" style="max-height: 250px;">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 0px;">

                                            <div class="table-responsive">
                                                <table class="table table-nowrap align-middle table-hover mb-0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="width: 50px;">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck01">
                                                                    <label class="form-check-label" for="tasklistCheck01"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">Skote Saas Dashboard</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Mark</p>
                                                            </td>
                                                            <td style="width: 90px;">
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                                    <label class="form-check-label" for="tasklistCheck02"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">New Landing UI</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Team A</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck02">
                                                                    <label class="form-check-label" for="tasklistCheck02"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">Brand logo design</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Janis</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck04">
                                                                    <label class="form-check-label" for="tasklistCheck04"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">Blog Template UI</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Dianna</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>

                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck05">
                                                                    <label class="form-check-label" for="tasklistCheck05"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">Multipurpose Landing</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Team B</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck06">
                                                                    <label class="form-check-label" for="tasklistCheck06"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">Redesign - Landing page</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Jerry</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" id="tasklistCheck07">
                                                                    <label class="form-check-label" for="tasklistCheck07"></label>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <h5 class="text-truncate font-size-14 mb-1"><a href="#" class="text-dark">Skote Crypto Dashboard</a></h5>
                                                                <p class="text-muted mb-0">Assigned to Eric</p>
                                                            </td>
                                                            <td>
                                                                <div>
                                                                    <ul class="list-inline mb-0 font-size-16">
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-success p-1"><i class="bx bxs-edit-alt"></i></a>
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <a href="#" class="text-danger p-1"><i class="bx bxs-trash"></i></a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 448px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar" style="height: 139px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer bg-transparent border-top">
                <div class="text-center">
                    <a href="javascript: void(0);" class="btn btn-primary waves-effect waves-light"> Add new Task</a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4">
        <div class="card">
            <div class="card-body border-bottom">
                <div class="row">
                    <div class="col-md-4 col-9">
                        <h5 class="font-size-15 mb-1">Steven Franklin</h5>
                        <p class="text-muted mb-0"><i class="mdi mdi-circle text-success align-middle me-1"></i> Active now</p>
                    </div>
                    <div class="col-md-8 col-3">
                        <ul class="list-inline user-chat-nav text-end mb-0">
                            <li class="list-inline-item d-none d-sm-inline-block">
                                <div class="dropdown">
                                    <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-search-alt-2"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end py-0 dropdown-menu-md">
                                        <form class="p-3">
                                            <div class="form-group m-0">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">

                                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                            <li class="list-inline-item  d-none d-sm-inline-block">
                                <div class="dropdown">
                                    <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-cog"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">View Profile</a>
                                        <a class="dropdown-item" href="#">Clear chat</a>
                                        <a class="dropdown-item" href="#">Muted</a>
                                        <a class="dropdown-item" href="#">Delete</a>
                                    </div>
                                </div>
                            </li>

                            <li class="list-inline-item">
                                <div class="dropdown">
                                    <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else</a>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body pb-0">
                <div>
                    <div class="chat-conversation">
                        <ul class="list-unstyled" data-simplebar="init" style="max-height: 260px;">
                            <div class="simplebar-wrapper" style="margin: 0px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px;">
                                                <li>
                                                    <div class="chat-day-title">
                                                        <span class="title">Today</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="conversation-list">
                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="ctext-wrap">
                                                            <div class="conversation-name">Steven Franklin</div>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:00</p>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="right">
                                                    <div class="conversation-list">
                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="ctext-wrap">
                                                            <div class="conversation-name">Henry Wells</div>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>

                                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:02</p>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li>
                                                    <div class="conversation-list">
                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="ctext-wrap">
                                                            <div class="conversation-name">Steven Franklin</div>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>

                                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="last-chat">
                                                    <div class="conversation-list">
                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="ctext-wrap">
                                                            <div class="conversation-name">Steven Franklin</div>
                                                            <p>&amp; Next meeting tomorrow 10.00AM</p>
                                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:06</p>
                                                        </div>

                                                    </div>
                                                </li>

                                                <li class="right">
                                                    <div class="conversation-list">
                                                        <div class="dropdown">

                                                            <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a class="dropdown-item" href="#">Copy</a>
                                                                <a class="dropdown-item" href="#">Save</a>
                                                                <a class="dropdown-item" href="#">Forward</a>
                                                                <a class="dropdown-item" href="#">Delete</a>
                                                            </div>
                                                        </div>
                                                        <div class="ctext-wrap">
                                                            <div class="conversation-name">Henry Wells</div>
                                                            <p>
                                                                Wow that's great
                                                            </p>

                                                            <p class="chat-time mb-0"><i class="bx bx-time-five align-middle me-1"></i> 10:07</p>
                                                        </div>
                                                    </div>
                                                </li>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 639px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar" style="height: 105px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="p-3 chat-input-section">
                <div class="row">
                    <div class="col">
                        <div class="position-relative">
                            <input type="text" class="form-control rounded chat-input" placeholder="Enter Message...">
                            <div class="chat-input-links">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-emoticon-happy-outline"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-file-image-outline"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="mdi mdi-file-document-outline"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span class="d-none d-sm-inline-block me-2">Send</span> <i
                                class="mdi mdi-send"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- end row -->

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>

@endsection