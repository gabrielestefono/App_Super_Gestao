<?php

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

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato']);
// Nome, categoria, assunto, mensagem

Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id = 1){
    echo 'estamos aqui: ' . $nome . '<br>Veio falar sobre: ' . $categoria_id;
    // Parâmetros opcionais devem ser passados da direita para a esquerda!!!
})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');