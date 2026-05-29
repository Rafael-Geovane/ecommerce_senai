<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\AdminController;

// rotas para acessar as paginas principais

Route::get('/', [App\Http\Controllers\WebsiteController::class, 'index']);

Route::get('/carrinho', function () {
    return view('carrinho');
});

Route::get('/catalogo', [WebsiteController::class, 'catalogo'])->name('catalogo');

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/contato', function () {
    return view('contato');
});

Route::get('/produto/{id}', [WebsiteController::class, 'produto'])->name('produto');


// -------------------------------------------------------------------------
// Rotas para acessar o painel de Admin
// -------------------------------------------------------------------------

Route::prefix('admin')->name('admin.')->group(function () {

    // Acessa via: /admin | Nome da rota: admin.index
    Route::get('/', [AdminController::class, 'index'])->name('index');

    // Acessa via: /admin/produtos | Nome da rota: admin.produtos
    Route::get('/produtos', [AdminController::class, 'produtos'])->name('produtos');
    Route::post('/produtos', [AdminController::class, 'storeProduto'])->name('produtos.store');

    // Acessa via: /admin/pedidos | Nome da rota: admin.pedidos
    Route::get('/pedidos', function () {
        return view('admin.pedidos');
    })->name('pedidos');

    // Acessa via: /admin/clientes | Nome da rota: admin.clientes
    Route::get('/clientes', [AdminController::class, 'clientes'])->name('clientes');

    // Acessa via: /admin/configuracoes | Nome da rota: admin.configuracoes
    Route::get('/configuracoes', function () {
        return view('admin.configuracoes');
    })->name('configuracoes');

});