@extends('site.template.area-do-cliente')

@section('id', 'area-aluno')

@section('content')


<div class="row">
    <div class="col-9">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <i id="search-icon" class="bx bx-search" aria-hidden="true"></i>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table class="tabela_export table table-bordered dt-responsive nowrap w-100 dataTable no-footer dtr-inline" role="grid" aria-describedby="datatable_info"
                            style="width: 1185px;">
                            <thead>
                                <tr role="row">
                                    <th>Nome</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orcamentos as $orcamento)
                                <tr class="odd">
                                    <td class="sorting_1 dtr-control">{{ $orcamento->id }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 



@endsection