<div class="row">
    <div class="col-4" wire:click="favoritos">
        <div class="text-center card">
            <div class="card-body c-pointer">
                <div class="avatar-sm mx-auto mb-4"><span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                        <i class="bx bx-star"></i>
                    </span>
                </div>
                <h5 class="font-size-15 mb-1"><a class="text-dark">Favoritos</a></h5>
                <p class="text-muted">Acesse seus favoritos</p>
            </div>
        </div>
    </div>
    <div class="col-4" wire:click="ultimas_leituras">
        <div class="text-center card">
            <div class="card-body c-pointer">
                <div class="avatar-sm mx-auto mb-4"><span class="avatar-title rounded-circle bg-primary text-white font-size-16">
                        <i class="bx bx-show"></i>
                    </span>
                </div>
                <h5 class="font-size-15 mb-1"><a class="text-dark">Últimas leituras</a></h5>
                <p class="text-muted">Acesse seus leituras</p>
            </div>
        </div>
    </div>

    @if($favoritos) 
        <div class="row" style="padding-right: 0;">
            <div class="col-12" style="padding-right: 0;">
                @if($blog_favoritos->count() > 0) 
                    <div class="text-center card">
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 410px;">
                                <h2>Blog</h2>
                                <hr>
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($blog_favoritos as $favorito)
                                            <tr>
                                                <th scope="row">{{ $favorito->blog->id }}</th>
                                                <td>{{ $favorito->blog->titulo }}</td>
                                                <td>
                                                    <a target="_blank" class="btn btn-light btn-sm" href="{{ route('site.blog_detalhe', ['blog' => $favorito->blog]) }}">
                                                        Acessar
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
                
                        

                @if($revista_favoritos->count() > 0) 
                    <div class="text-center card">
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 410px;">
                                <h2>Revistas</h2>
                                <hr>
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($revista_favoritos as $favorito)
                                            <tr>
                                                <th scope="row">{{ $favorito->revista->id }}</th>
                                                <td>{{ $favorito->revista->titulo }}</td>
                                                <td>
                                                    <a target="_blank" class="btn btn-light btn-sm" href="{{ route('site.revista_detalhe', ['revista' => $favorito->revista]) }}">
                                                        Acessar
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif

                @if($lista_favoritos->count() > 0) 
                    <div class="text-center card">
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 410px;">
                                <h2>Listas</h2>
                                <hr>
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($lista_favoritos as $favorito)
                                            <tr>
                                                <th scope="row">{{ $favorito->lista->id }}</th>
                                                <td>{{ $favorito->lista->titulo }}</td>
                                                <td>
                                                    <a target="_blank" class="btn btn-light btn-sm" href="{{ route('site.lista_detalhe', ['lista' => $favorito->lista]) }}">
                                                        Acessar
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif

    @if($ultimas_leituras) 
        <div class="row" style="padding-right: 0;">
            <div class="col-12" style="padding-right: 0;">
                @if($ultimas_leituras_bloco->count() > 0) 
                    <div class="text-center card">
                        <div class="card-body">
                            <div class="table-responsive" style="max-height: 410px;">
                                <h2>Últimas leituras</h2>
                                <hr>
                                <table class="table align-middle mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Título</th>
                                            <th>Data</th>
                                            <th></th>
                                            <th>Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($ultimas_leituras_bloco as $ultimas_leituras)
                                            <?php
                                                // Force locale
                                                date_default_timezone_set('America/Sao_Paulo');
                                                setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
                                                setlocale(LC_TIME, 'pt_BR.utf-8', 'ptb', 'pt_BR', 'portuguese-brazil', 'portuguese-brazilian', 'bra', 'brazil', 'br');
                                            ?>
                                            @if($ultimas_leituras->tipo == 'blog')
                                                <tr>
                                                    <th scope="row">{{ $ultimas_leituras->blog->id }}</th>
                                                    <td>{{ $ultimas_leituras->blog->titulo }}</td>
                                                    <td>
                                                        {{ date('d', strtotime($ultimas_leituras->created_at)) }} de {{ $ultimas_leituras->created_at->formatLocalized('%B') }} de
                                                        {{ date('Y', strtotime($ultimas_leituras->created_at)) }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-primary font-size-11">Blog</span>
                                                    </td>
                                                    <td>
                                                        <a target="_blank" class="btn btn-light btn-sm" href="{{ route('site.blog_detalhe', ['blog' => $ultimas_leituras->blog]) }}">
                                                            Acessar
                                                        </a>
                                                    </td>
                                                </tr>
                                            @elseif ($ultimas_leituras->tipo == 'revista')
                                                <tr>
                                                    <th scope="row">{{ $ultimas_leituras->revista->id }}</th>
                                                    <td>{{ $ultimas_leituras->revista->titulo }}</td>
                                                    <td>
                                                        {{ date('d', strtotime($ultimas_leituras->created_at)) }} de {{ $ultimas_leituras->created_at->formatLocalized('%B') }} de
                                                        {{ date('Y', strtotime($ultimas_leituras->created_at)) }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-warning font-size-11">Revista</span>
                                                    </td>
                                                    <td>
                                                        <a target="_blank" class="btn btn-light btn-sm" href="{{ route('site.revista_detalhe', ['revista' => $ultimas_leituras->revista]) }}">
                                                            Acessar
                                                        </a>
                                                    </td>
                                                </tr>
                                            @elseif ($ultimas_leituras->tipo == 'lista')
                                                <tr>
                                                    <th scope="row">{{ $ultimas_leituras->lista->id }}</th>
                                                    <td>{{ $ultimas_leituras->lista->titulo }}</td>
                                                    <td>
                                                        {{ date('d', strtotime($ultimas_leituras->created_at)) }} de {{ $ultimas_leituras->created_at->formatLocalized('%B') }} de
                                                        {{ date('Y', strtotime($ultimas_leituras->created_at)) }}
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-pill badge-soft-info font-size-11">Lista</span>
                                                    </td>
                                                    <td>
                                                        <a target="_blank" class="btn btn-light btn-sm" href="{{ route('site.lista_detalhe', ['lista' => $ultimas_leituras->lista]) }}">
                                                            Acessar
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else 
                    <div class="text-center card">
                        <div class="card-body">
                            Você ainda não leu nada em nosso site 😿
                        </div>
                    </div>
                @endif
            </div>
        </div>
    @endif
</div>
