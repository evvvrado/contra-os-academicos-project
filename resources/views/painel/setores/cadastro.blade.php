@extends('painel.template.main')

@section('titulo')
    Cadastro de Setor
@endsection

@section('conteudo')

@include('painel.includes.errors')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{route('painel.setores.cadastrar')}}" method="POST" >
                    @csrf
                    <div class="row">
                        <div class="col-lg-8 mt-4">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="nome">Nome</label>
                                    <input type="text" class="form-control" name="setor"
                                        id="nome" required>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5" >
                            <button type="submit" class="btn btn-primary px-5">Salvar</button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->
    </div>
    <!-- end col -->
</div>
<!-- end row -->
@endsection

@section('scripts')
@endsection