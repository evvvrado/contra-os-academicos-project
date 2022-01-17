@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Listagem de Cursos
@endsection

@section('botoes')
    <a name="" id="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalNovoDestaque" role="button">Novo Destaque</a>
@endsection