<form id="form-edicao" class="dropzone" action="{{route('painel.curso.cadastrar')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="curso_id" id="curso_id" value="">
    <div class="row">
        <div class="col-12 col-lg-6">
            <div class="card">
                <h5 class="card-header bg-transparent border-bottom text-uppercase">Banner</h5>
                <div class="card-body container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img id="banner-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="height: 200px; max-width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="banner-upload">Escolher</label>
                            <input name="banner" id="banner-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-6">
            <div class="card">
                <h5 class="card-header bg-transparent border-bottom text-uppercase">Miniatura</h5>
                <div class="card-body container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img id="miniatura-preview" src="{{asset('admin/images/thumb-padrao.png')}}" style="height: 200px; max-width: 100%;" alt="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <label class="btn btn-primary" for="miniatura-upload">Escolher</label>
                            <input name="miniatura" id="miniatura-upload" style="display: none;" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-12">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" name="titulo"
                id="titulo" aria-describedby="helpId" maxlength="255" value="" required 
            >
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-12">
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#Detalhes" role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                        <span class="d-none d-sm-block">Detalhes</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#Programacao" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                        <span class="d-none d-sm-block">Programação</span> 
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#Instrutores" role="tab">
                        <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                        <span class="d-none d-sm-block">Instrutores</span>   
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#Local" role="tab">
                        <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                        <span class="d-none d-sm-block">Local</span>    
                    </a>
                </li>
            </ul>

            <div class="tab-content p-3 text-muted">
                <div class="tab-pane active" id="Detalhes" role="tabpanel">
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="detalhes_resumo" id="detalhes_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="detalhes_conteudo" id="detalhes_conteudo" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Programacao" role="tabpanel">
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="programacao_resumo" id="programacao_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="programacao_conteudo" id="programacao_conteudo" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Instrutores" role="tabpanel">
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="instrutores_resumo" id="instrutores_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="instrutores_conteudo" id="instrutores_conteudo" rows="10"></textarea>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="Local" role="tabpanel">
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Resumo</label>
                            <textarea class="form-control" name="local_resumo" id="local_resumo" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-12">
                            <label for="">Conteúdo</label>
                            <textarea class="form-control" name="local_conteudo" id="local_conteudo" rows="10"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row mt-3">
        <div class="col-12 text-end">
            <button type="submit"
                class="btn btn-primary">Salvar</button>
        </div>
    </div>

</form>

<script>
    var inp = document.getElementById('banner-upload');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('banner-preview').src = this.result;
            };
        reader.readAsDataURL(file);
    },false);

    var inp = document.getElementById('miniatura-upload');
    inp.addEventListener('change', function(e){
        var file = this.files[0];
        var reader = new FileReader();
        reader.onload = function(){
            document.getElementById('miniatura-preview').src = this.result;
            };
        reader.readAsDataURL(file);
    },false);
</script>