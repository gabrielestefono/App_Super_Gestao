<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PedidoProdutoController;
use App\Http\Middleware\LogAcessoMiddleware;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return "Olá! Seja bem vindo ao curso!";
});
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'salvar'])->name('site.contato');
Route::get('/login/{erro?}', [\App\Http\Controllers\LoginController::class, 'index'])->name('site.login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'autenticar'])->name('site.login');

// Rotas restritas /app
Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('app.home');
    Route::get('/sair', [\App\Http\Controllers\LoginController::class, 'sair'])->name('app.sair');
    Route::get('/fornecedor', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedor');
    Route::post('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/listar', [\App\Http\Controllers\FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
    Route::get('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::post('/fornecedor/adicionar', [\App\Http\Controllers\FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');
    Route::get('/fornecedor/editar/{id}/{msg?}', [\App\Http\Controllers\FornecedorController::class, 'editar'])->name('app.fornecedor.editar');
    Route::get('/fornecedor/excluir/{id}', [\App\Http\Controllers\FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');

    // Produtos
    Route::resource('/produto', \App\Http\Controllers\ProdutoController::class);

    // Produtos Detalhes
    Route::resource('/produto-detalhe', \App\Http\Controllers\ProdutoDetalheController::class);

    Route::resource('cliente', ClienteController::class);
    Route::resource('pedido', PedidoController::class);
    // Route::resource('pedido-produto', PedidoProdutoController::class);
    Route::get('pedido-produto/create/{pedido}', [PedidoProdutoController::class, 'create'])->name('pedido-produto.create');
    Route::post('pedido-produto/store/{pedido}', [PedidoProdutoController::class, 'store'])->name('pedido_produto.store');
    Route::delete('pedido-produto/destroy/{pedidoProduto}/{pedido_id}', [PedidoProdutoController::class, 'destroy'])->name('pedido_produto.destroy');
});

Route::get('/teste', [\App\Http\Controllers\TesteController::class, 'teste'])->name('site.teste');

Route::fallback(function(){
    echo 'A rota acessada não existe, <a href="' . route('site.index') . '">clique</a> aqui para ir para a página inicial';
});
