<div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <div class="card-body" style="overflow-x: scroll;">
                    <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                        <thead>
                            <tr>
                                <th>Título</th>
                                <th>Categoria</th>
                                <th class="text-center"><i class="bx bx-show-alt"></i></th>
                                <th class="text-center"><i class="bx bx-comment-dots"></i></th>
                                <th class="text-center"><i class="bx bx-share-alt"></i></th>
                                <th>Publicado</th>
                                <th class="text-center"></th>
                            </tr>
                        </thead>
    
    
                        <tbody>
    
                            @foreach($revistas as $revista)
                                @php
                                    $date = new DateTime($revista->created_at);
                                    $data = $date->format('d/m/Y');
                                @endphp
                                <tr>
                                    <td style="position: relative;">{{ Str::limit($revista->titulo, 32 ) }}
                                        @if($revista->status == 1)
                                            <i style="position: absolute; right: 10px; top: 2px; color: green" class="bx bx-check"></i>
                                        @elseif($revista->status == 2)
                                            <i style="position: absolute; right: 10px; top: 2px; color: blue" class="bx bx-file"></i>
                                        @elseif($revista->status == 3)
                                            <i style="position: absolute; right: 10px; top: 2px; color: red" class="bx bx-x"></i>
                                        @endif
                                    </td>
                                    <td>{{$revista->categoria->nome}}</td>
                                    <td class="text-center">{{$revista->visitas}}</td>
                                    <td class="text-center">0</td>
                                    <td class="text-center">0</td>
                                    <td>{{ $data }}</td>
                                    <td >
                                        <a href="{{ route('painel.revista.editar', ['revista' => $revista]) }}" class="btn btn-sm btn-success" role="button"><i class="bx bx bx-edit-alt"></i></a>
                                        <a class="btn btn-sm btn-danger" wire:click="$emit('del',{{ $revista->id }})" role="button"><i class="bx bx bx bx-window-close"></i></a>
                                    </td>
                                </tr>
                            @endforeach
    
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

</div>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            @this.on('del', id => {
                Swal.fire({
                title: 'Tem certeza?',
                text: "Essa ação é irreversível!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sim, deletar!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        @this.call('deletar_revista', id)

                        Swal.fire(
                        'Deletada!',
                        'Revista deletada com sucesso.',
                        'success'
                        )
                    }
                })
            });
        })
    </script>
@endpush
