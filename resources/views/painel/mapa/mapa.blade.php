@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

{{-- @section('titulo')
    Mapa do sistema
@endsection --}}

@section('conteudo')
<div class="row">
        
    <div class="_mapa card">
        <div class="card-body row pb-5">
                
            <div class="col-2">
                <h4 class="my-3">Sistema</h4>
            
                <a target="_blank" href="{{ route('site.minha-conta') }}">Aluno • Login</a>
                <a target="_blank" href="{{ route('painel.login') }}">Sistema • Login</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
            </div>
            <div class="col-2">
                
                
                <h4 class="my-3">Páginas</h4>
            
                <a target="_blank" href="{{ route('site.index') }}">Início ~ Home</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
                <a target="_blank" href="">Página</a>
            </div>
        </div>


    </div>


    
</div>
@endsection

@section('scripts')
    <!-- Required datatable js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="{{asset('admin/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
  
@endsection