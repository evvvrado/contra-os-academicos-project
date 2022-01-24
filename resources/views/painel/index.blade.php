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
Dashboard / <a style="color: unset" href="{{ route('painel.index') }}">Início</a>
@endsection

@section('conteudo')
@include('painel.includes.errors')

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
</div>
<!-- end row -->

<div class="row">
</div>
<!-- end row -->

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Transaction</h4>
                <div class="table-responsive">
                </div>
                <!-- end table-responsive -->
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

@endsection

@section('scripts')

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script src="{{ asset('admin/libs/select2/js/select2.min.js') }}"></script>

@endsection