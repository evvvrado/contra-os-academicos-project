<?php

use Illuminate\Support\Facades\Route;


Route::get('/mapa', [\App\Http\Controllers\SiteController::class, 'mapa'])->name("site.mapa");
Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name("site.index");
Route::get('/sobre', [\App\Http\Controllers\SiteController::class, 'sobre'])->name("site.sobre");
Route::get('/servicos', [\App\Http\Controllers\SiteController::class, 'servicos'])->name("site.servicos");
Route::get('/blog', [\App\Http\Controllers\SiteController::class, 'blog'])->name("site.blog");
Route::get('/blog/detalhes/{noticia}', [\App\Http\Controllers\SiteController::class, 'blogDetalhes'])->name("site.blog-detalhes");
Route::get('/contato', [\App\Http\Controllers\SiteController::class, 'contato'])->name("site.contato");
Route::get('/coqueteis', [\App\Http\Controllers\SiteController::class, 'coqueteis'])->name("site.coqueteis");
Route::get('/coqueteis/detalhes/{produto}', [\App\Http\Controllers\SiteController::class, 'coquetel'])->name("site.coquetel");

Route::get('/orcamento/identificacao', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoID'])->name("site.orcamento.id");
Route::post('/orcamento/evento', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoEVENTO'])->name("site.orcamento.evento");
Route::post('/orcamento/informacoes', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoINFO'])->name("site.orcamento.informacoes");
Route::post('/orcamento/cadastro_lead', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoCadastroLead'])->name("site.orcamento.cadastro");

Route::middleware(['orcamento'])->group(function () {
    Route::match(['get', 'post'], '/orcamento/lista', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoLISTA'])->name("site.orcamento.lista");
    Route::get('/orcamento/confirmacao', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoCONFIRM'])->name("site.orcamento.confirmacao");
    Route::get('/orcamento/carrinho', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoCAR'])->name("site.orcamento.carrinho");

    Route::get('/orcamento/carrinho/qtd_altera/{orcamento}/{produto}/{qtd}', [\App\Http\Controllers\OrcamentoProdutosController::class, 'alteraQTD'])->name("site.orcamento.altera_qtd");

    Route::get('/orcamento/encerrar', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoENCERRAR'])->name("site.orcamento.encerrar");
    Route::get('/orcamento/encerrar_2', [\App\Http\Controllers\OrcamentoController::class, 'orcamentoENCERRAR2'])->name("site.orcamento.encerrar_2");


    Route::get('/orcamento/ingrediente/{marca}/{ingrediente}/{orcamentoproduto}', [\App\Http\Controllers\OrcamentoProdutosIngredientesController::class, 'ingredienteTROCAR'])->name("site.orcamento-ingrediente-marca-trocar");


    //ROTAS DE ORÇAMENTO
    Route::get('/orcamento/escolher_produto/{produto}', [\App\Http\Controllers\OrcamentoController::class, 'escolher_produto'])->name("site.orcamento-escolher");
    Route::get('/orcamento/remover_todos_produtos', [\App\Http\Controllers\OrcamentoController::class, 'remover_produtos'])->name("site.orcamento-remover-todos");
});


// SISTEMA JOÃO
Route::get('/sistema/login', [\App\Http\Controllers\PainelController::class, 'login'])->name("painel.login");
Route::post('/sistema/logar', [\App\Http\Controllers\PainelController::class, 'logar'])->name("painel.logar");

Route::middleware(['admin'])->group(function () {
    Route::get('/sair', [\App\Http\Controllers\PainelController::class, 'sair'])->name("painel.sair");
    Route::get('/sistema', [\App\Http\Controllers\PainelController::class, 'index'])->name("painel.index");
    Route::get('/sistema/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->name("painel.logs");

    // ROTAS DE NOTÍCIAS
    Route::get('/sistema/artigos', [\App\Http\Controllers\ArtigosController::class, 'consultar'])->name("painel.artigos");
    Route::get('/sistema/artigos/cadastro', [\App\Http\Controllers\ArtigosController::class, 'cadastro'])->name("painel.artigo.cadastro");
    Route::get('/sistema/artigos/leads/{noticia}', [\App\Http\Controllers\ArtigosController::class, 'visitas'])->name("painel.artigo.visitas");
    Route::post('/sistema/artigos/cadastrar', [\App\Http\Controllers\ArtigosController::class, 'cadastrar'])->name("painel.artigo.cadastrar");
    Route::get('/sistema/artigos/editar/{noticia}', [\App\Http\Controllers\ArtigosController::class, 'editar'])->name("painel.artigo.editar");
    Route::post('/sistema/artigos/salvar/{noticia}', [\App\Http\Controllers\ArtigosController::class, 'salvar'])->name("painel.artigo.salvar");
    Route::get('/sistema/artigos/deletar/{noticia}', [\App\Http\Controllers\ArtigosController::class, 'deletar'])->name("painel.artigo.deletar");
    Route::get('/sistema/artigos/publicar/{noticia}', [\App\Http\Controllers\ArtigosController::class, 'publicar'])->name("painel.artigo.publicar");
    Route::get('/sistema/artigos/preview/{noticia}', [\App\Http\Controllers\ArtigosController::class, 'preview'])->name("painel.artigo.preview");

    // ROTAS DE NOTICIAS
    Route::match(['get', 'post'], '/sistema/noticias', [\App\Http\Controllers\NoticiasController::class, 'consultar'])->name("painel.noticias");
    Route::get('/sistema/noticias/cadastro', [\App\Http\Controllers\NoticiasController::class, 'cadastro'])->name("painel.noticia.cadastro");
    Route::get('/sistema/noticias/leads/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'visitas'])->name("painel.noticia.visitas");
    Route::post('/sistema/noticias/cadastrar', [\App\Http\Controllers\NoticiasController::class, 'cadastrar'])->name("painel.noticia.cadastrar");
    Route::get('/sistema/noticias/editar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'editar'])->name("painel.noticia.editar");
    Route::post('/sistema/noticias/salvar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'salvar'])->name("painel.noticia.salvar");
    Route::get('/sistema/noticias/deletar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'deletar'])->name("painel.noticia.deletar");
    Route::get('/sistema/noticias/publicar/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'publicar'])->name("painel.noticia.publicar");
    Route::get('/sistema/noticias/preview/{noticia}', [\App\Http\Controllers\NoticiasController::class, 'preview'])->name("painel.noticia.preview");

    // ROTAS DE DEPOIMENTOS
    Route::match(['get', 'post'], '/sistema/depoimentos', [\App\Http\Controllers\DepoimentoController::class, 'consultar'])->name("painel.depoimento");
    Route::get('/sistema/depoimento/cadastro', [\App\Http\Controllers\DepoimentoController::class, 'cadastrar'])->name("painel.depoimento.cadastro");
    Route::post('/sistema/depoimento/salvar', [\App\Http\Controllers\DepoimentoController::class, 'salvar'])->name("painel.depoimento.salvar");
    Route::get('/sistema/depoimento/editar/{depoimento}', [\App\Http\Controllers\DepoimentoController::class, 'editar'])->name("painel.depoimento.editar");
    Route::get('/sistema/depoimento/deletar/{depoimento}', [\App\Http\Controllers\DepoimentoController::class, 'deletar'])->name("painel.depoimento.deletar");

    // ROTA DE DUVIDAS
    Route::match(['get', 'post'], '/sistema/duvidas', [\App\Http\Controllers\DuvidasController::class, 'consultar'])->name("painel.duvidas");
    Route::get('/sistema/duvidas/cadastro', [\App\Http\Controllers\DuvidasController::class, 'cadastrar'])->name("painel.duvidas.cadastro");
    Route::get('/sistema/duvidas/editar/{duvida}', [\App\Http\Controllers\DuvidasController::class, 'editar'])->name("painel.duvidas.editar");
    Route::post('/sistema/duvidas/salvar', [\App\Http\Controllers\DuvidasController::class, 'salvar'])->name("painel.duvidas.salvar");
    Route::get('/sistema/duvidas/deletar/{duvida}', [\App\Http\Controllers\DuvidasController::class, 'deletar'])->name("painel.duvidas.deletar");

    // ROTAS DE USUÁRIOS
    Route::get('/sistema/usuarios', [\App\Http\Controllers\UsuariosController::class, 'consultar'])->name("painel.usuarios");
    Route::get('/sistema/usuarios/inativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_inativos'])->name("painel.usuarios.inativos");
    Route::get('/sistema/usuarios/ativos', [\App\Http\Controllers\UsuariosController::class, 'consultar_ativos'])->name("painel.usuarios.ativos");
    Route::get('/sistema/usuarios/cadastro', [\App\Http\Controllers\UsuariosController::class, 'cadastro'])->name("painel.usuario.cadastro");
    Route::post('/sistema/usuarios/cadastrar', [\App\Http\Controllers\UsuariosController::class, 'cadastrar'])->name("painel.usuario.cadastrar");
    Route::get('/sistema/usuarios/editar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'editar'])->name("painel.usuario.editar");
    Route::post('/sistema/usuarios/salvar/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'salvar'])->name("painel.usuario.salvar");
    Route::get('/sistema/usuarios/bloqueio/{usuario}', [\App\Http\Controllers\UsuariosController::class, 'bloqueio'])->name("painel.usuario.bloqueio");

    // ROTAS DE INGREDIENTES
    Route::get('/sistema/ingredientes', [\App\Http\Controllers\IngredientesController::class, 'consultar'])->name("painel.ingredientes");
    Route::get('/sistema/ingredientes/editar/{ingrediente}', [\App\Http\Controllers\IngredientesController::class, 'editar'])->name("painel.ingredientes.editar");
    Route::get('/sistema/ingredientes/cadastro', [\App\Http\Controllers\IngredientesController::class, 'cadastro'])->name("painel.ingredientes.cadastro");
    Route::post('/sistema/ingredientes/cadastrar', [\App\Http\Controllers\IngredientesController::class, 'cadastrar'])->name("painel.ingredientes.cadastrar");
    Route::post('/sistema/ingredientes/salvar', [\App\Http\Controllers\IngredientesController::class, 'salvar'])->name("painel.ingredientes.salvar");
    Route::get('/sistema/ingredientes/deletar/{ingrediente}', [\App\Http\Controllers\IngredientesController::class, 'deletar'])->name("painel.ingredientes.deletar");

    // ROTAS DE PRODUTOS
    Route::get('/sistema/produtos', [\App\Http\Controllers\ProdutosController::class, 'consultar'])->name("painel.produtos");
    Route::get('/sistema/produtos/cadastro', [\App\Http\Controllers\ProdutosController::class, 'cadastro'])->name("painel.produtos.cadastro");
    Route::get('/sistema/produtos/editar/{produto}', [\App\Http\Controllers\ProdutosController::class, 'editar'])->name("painel.produtos.editar");
    Route::post('/sistema/produtos/salvar', [\App\Http\Controllers\ProdutosController::class, 'salvar'])->name("painel.produtos.salvar");
    Route::post('/sistema/produtos/cadastrar', [\App\Http\Controllers\ProdutosController::class, 'cadastrar'])->name("painel.produtos.cadastrar");
    Route::get('/sistema/produtos/deletar/{produto}', [\App\Http\Controllers\ProdutosController::class, 'deletar'])->name("painel.produtos.deletar");

    // ROTAS DE CATEGORIAS DE INGREDIENTE
    Route::post('/sistema/ingredientecats/cadastrar', [\App\Http\Controllers\IngredienteCatsController::class, 'cadastrar'])->name("painel.ingredientecats.cadastrar");
    Route::post('/sistema/ingredientecats/editar', [\App\Http\Controllers\IngredienteCatsController::class, 'editar'])->name("painel.ingredientecats.editar");
    Route::get('/sistema/ingredientecats/status/{ingredientecat}', [\App\Http\Controllers\IngredienteCatsController::class, 'status'])->name('cat.ingrediente.status');

    // ROTAS DE ACESSÓRIOS
    Route::get('/sistema/acessorios', [\App\Http\Controllers\AcessoriosController::class, 'consultar'])->name("painel.acessorios");
    Route::get('/sistema/acessorios/cadastro', [\App\Http\Controllers\AcessoriosController::class, 'cadastro'])->name("painel.acessorios.cadastro");
    Route::get('/sistema/acessorios/editar/{acessorio}', [\App\Http\Controllers\AcessoriosController::class, 'editar'])->name("painel.acessorios.editar");
    Route::post('/sistema/acessorios/cadastrar', [\App\Http\Controllers\AcessoriosController::class, 'cadastrar'])->name("painel.acessorios.cadastrar");
    Route::post('/sistema/acessorios/salvar', [\App\Http\Controllers\AcessoriosController::class, 'salvar'])->name("painel.acessorios.salvar");
    Route::get('/sistema/acessorios/deletar/{acessorio}', [\App\Http\Controllers\AcessoriosController::class, 'deletar'])->name("painel.acessorios.deletar");

    // ROTAS DE CATEGORIA DE ACESSÓRIOS
    Route::post('/sistema/acessoriocats/cadastrar', [\App\Http\Controllers\AcessorioCatsController::class, 'cadastrar'])->name("painel.acessoriocats.cadastrar");
    Route::post('/sistema/acessoriocats/editar', [\App\Http\Controllers\AcessorioCatsController::class, 'editar'])->name("painel.acessoriocats.editar");
    Route::get('/sistema/acessoriocats/status/{acessoriocat}', [\App\Http\Controllers\AcessorioCatsController::class, 'status'])->name('cat.acessorio.status');

    // ROTAS DE SERVIÇOS
    Route::get('/sistema/servicos', [\App\Http\Controllers\ServicosController::class, 'consultar'])->name("painel.servicos");
    Route::get('/sistema/servicos/cadastro', [\App\Http\Controllers\ServicosController::class, 'cadastro'])->name("painel.servicos.cadastro");
    Route::post('/sistema/servicos/cadastrar', [\App\Http\Controllers\ServicosController::class, 'cadastrar'])->name("painel.servicos.cadastrar");
    Route::get('/sistema/servicos/editar/{servico}', [\App\Http\Controllers\ServicosController::class, 'editar'])->name("painel.servicos.editar");
    Route::post('/sistema/servicos/salvar', [\App\Http\Controllers\ServicosController::class, 'salvar'])->name("painel.servicos.salvar");
    Route::get('/sistema/servicos/deletar/{servico}', [\App\Http\Controllers\ServicosController::class, 'deletar'])->name("painel.servicos.deletar");

    // ROTAS DE MARCAS

    Route::get('/sistema/marcas_ingredientes/{ingrediente}', [\App\Http\Controllers\MarcasController::class, 'consultar_ingrediente'])->name("painel.marcas.ingredientes");
    Route::get('/sistema/marcas_acessorios/{acessorio}', [\App\Http\Controllers\MarcasController::class, 'consultar_acessorio'])->name("painel.marcas.acessorios");

    Route::get('/sistema/marcas/cadastro', [\App\Http\Controllers\MarcasController::class, 'cadastro'])->name("painel.marcas.cadastro");
    Route::post('/sistema/marcas/cadastrar', [\App\Http\Controllers\MarcasController::class, 'cadastrar'])->name("painel.marcas.cadastrar");
    Route::post('/sistema/marcas/salvar', [\App\Http\Controllers\MarcasController::class, 'salvar'])->name("painel.marcas.salvar");
    Route::get('/sistema/marcas/padrao_ingr/{marca}/{ingrediente}', [\App\Http\Controllers\MarcasController::class, 'altera_padrao_ingr'])->name("painel.marcas.padrao_ingr");
    Route::get('/sistema/marcas/padrao_aces/{marca}/{acessorio}', [\App\Http\Controllers\MarcasController::class, 'altera_padrao_aces'])->name("painel.marcas.padrao_aces");
    

    // ROTAS DE MARCAS HISTORICO
    Route::get('/sistema/marcas_historico/precos', [\App\Http\Controllers\MarcasHistoricosController::class, 'consultar_precos'])->name("painel.marcas.historicos");

    // ROTAS DE LEADS
    Route::get('/sistema/leads', [\App\Http\Controllers\LeadsController::class, 'consultar_leads'])->name("painel.leads");
    Route::get('/sistema/orcamentos', [\App\Http\Controllers\LeadsController::class, 'consultar_orcamentos'])->name("painel.orcamentos");
    Route::get('/sistema/leads/orcamentos/{lead}', [\App\Http\Controllers\LeadsController::class, 'listar_orcamentos'])->name("painel.leads.orcamentos");

    // ROTAS DE ATIVIDADE DAS PARAMETROS
    Route::get('/parametros', [\App\Http\Controllers\ParametrosController::class, 'consultar'])->name("painel.parametros");
    Route::post('/parametros/salvar', [\App\Http\Controllers\ParametrosController::class, 'salvar'])->name("painel.parametros.salvar");

    // ROTA DE PUBLICIDADE
    Route::match(['get', 'post'], '/sistema/anuncios', [\App\Http\Controllers\AnunciosController::class, 'consultar'])->name("painel.anuncios");
    Route::get('/sistema/anuncios/cadastro', [\App\Http\Controllers\AnunciosController::class, 'cadastrar'])->name("painel.anuncios.cadastro");
    Route::post('/sistema/anuncios/salvar', [\App\Http\Controllers\AnunciosController::class, 'salvar'])->name("painel.anuncios.salvar");
    Route::get('/sistema/anuncios/editar/{anuncio}', [\App\Http\Controllers\AnunciosController::class, 'editar'])->name("painel.anuncios.editar");
    Route::get('/sistema/anuncios/deletar/{anuncio}', [\App\Http\Controllers\AnunciosController::class, 'deletar'])->name("painel.anuncios.deletar");
});



Route::get('/minha-area/acessar', [\App\Http\Controllers\SiteController::class, 'acessarCliente'])->name("site.acessar-cliente");
Route::post('/minha-area/logar', [\App\Http\Controllers\SiteController::class, 'logarCliente'])->name("site.logar-cliente");

Route::middleware(['cliente'])->group(function () {
    Route::get('/minha-area', [\App\Http\Controllers\AreaClientesController::class, 'clienteArea'])->name("minha-area.cliente");
    Route::get('/minha-area/orcamento/detalhe/{orcamento}', [\App\Http\Controllers\AreaClientesController::class, 'clienteOrcamentos'])->name("minha-area.cliente-orcamentos");
    Route::get('/minha-area/pedidos', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaPedidos'])->name("minha-area.cliente-pedidos");
    Route::get('/minha-area/pedidos/detalhes', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaPedidosDetalhes'])->name("minha-area.cliente-pedidos-detalhes");
    Route::get('/minha-area/matriculas', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaMatriculas'])->name("minha-area.cliente-matriculas");
    Route::get('/minha-area/matriculas/detalhes', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaMatriculasDetalhes'])->name("minha-area.cliente-matriculas-detalhes");
    Route::get('/minha-area/dados', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaDados'])->name("minha-area.cliente-dados");
    Route::post('/minha-area/dados/salvar', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaDadosSalvar'])->name("minha-area.cliente-dados.salvar");
    Route::post('/minha-area/dados/avatar/alterar', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaDadosAvatarAlterar'])->name("minha-area.cliente-dados.avatar.alterar");
    Route::post('/minha-area/dados/senha/alterar', [\App\Http\Controllers\AreaClientesController::class, 'clienteAreaDadosSenhaAlterar'])->name("minha-area.cliente-dados.senha.alterar");
    Route::get('/minha-area/deslogar', [\App\Http\Controllers\AreaClientesController::class, 'deslogar'])->name("clienteDeslogar");
});
