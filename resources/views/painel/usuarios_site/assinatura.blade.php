@extends('painel.template.main')

@section('styles')
    <!-- DataTables -->
    <link href="{{asset('admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('titulo')
    Liberar Assinatura @if(isset($tipo)) {{$tipo}}  @endif
@endsection

@section('conteudo')
<div class="row mt-3">
    <div class="col-6 m-auto">
        <div class="card">
            <div class="card-body">

                @php
                    use App\Models\Assinatura;

                    $verifica = Assinatura::select(DB::raw("*"))
                    ->whereUsuarioSiteId($usuario_site->id)
                    ->whereStatus(1)
                    ->first();

                    $data = date_create($verifica->data_termino);
                    $data_termino = date_format($data, 'd/m/Y');
                @endphp

                @if($verifica)
                    <h2>Gerenciar Assinatura</h2>
                    <p>A assinatura de {{ $usuario_site->nome }} termina em <label class="alert alert-primary">{{ $data_termino }}</label></p>
                    <a class="btn btn-danger" href="{{ route('painel.usuarios_site.encerrar_assinatura', ['assinatura' => $verifica]) }}">Encerrar Assinatura</a>
                @else
                    <h2>Liberar Assinatura</h2>
                    <form action="{{ route('painel.usuarios_site.assinar', ['usuario_site' => $usuario_site]) }}" method="post">
                        @csrf
                        <div class="form-group col-lg-12">
                            <label class="mt-3" for="data_termino" class="form-label">Término da assinatura</label>
                            <select required id="data_termino" name="data_termino" class="form-select">
                                <option value="">Selecione</option>
                                    <option value="vitalicio">Vitalicio</option>
                                    <option value="mes">1 Mês</option>
                            </select>

                            <div class="col-lg-12 mt-2 mb-2 text-center" >
                                <button type="submit" class="btn btn-primary px-5">Salvar</button>
                            </div>
                        </div>
                    </form>
                @endif
                    
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

@endsection

@section('scripts')
@endsection