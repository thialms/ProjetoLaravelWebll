<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'home']);
Route::get('/home', [AppController::class, 'home']);
Route::get('/sobre', [AppController::class, 'sobre']);
Route::get('/produtos', [AppController::class, 'produtos']);
Route::get('/contato', [AppController::class, 'contato']);
Route::post('/enviarMensagem', [AppController::class, 'enviarMensagem']);

Route::get('/frmlogin', [AppController::class, 'frmlogin']);
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/logout', [AppController::class, 'logout']);
Route::get('/frmusuario', [AppController::class, 'frmusuario']);
Route::post('/addusuario', [AppController::class, 'addusuario']);

Route::group(['middleware' => function ($request, $next) {
    if (!session()->has('usuario_id')) {
        return redirect('/frmlogin')->with('error', 'Faça login para acessar esta página.');
    }
    return $next($request);
}], function () {
    Route::get('/dashboard', [AppController::class, 'dashboard']);
    Route::get('/usuarios', [AppController::class, 'usuarios']);
    Route::get('/frmeditarusuario/{id}', [AppController::class, 'frmeditarusuario']);
    Route::put('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']);
    Route::delete('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);
    Route::get('/frmproduto', [AppController::class, 'frmproduto']);
    Route::post('/addproduto', [AppController::class, 'addproduto']);
    Route::get('/listaProdutos', [AppController::class, 'listaProdutos']);
    Route::get('/frmeditarproduto/{id}', [AppController::class, 'frmeditarproduto']);
    Route::put('/atualizarproduto/{id}', [App\Http\Controllers\AppController::class, 'atualizarproduto']);
    Route::delete('/excluirproduto/{id}', [App\Http\Controllers\AppController::class, 'excluirProduto']);
    Route::get('/listaContatos', [AppController::class, 'listaContatos']);
    Route::delete('/excluirMensagem/{id}', [AppController::class, 'excluirMensagem']);
});
