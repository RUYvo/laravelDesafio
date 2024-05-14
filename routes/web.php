<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::get('/login', function(){return view('site.login');})->name('site.login');

//Painel adm
Route::prefix('/app')->group(function() {
    Route::get('/fornecedores', 'App\Http\Controllers\FornecedorController@index')->name('app.fornecedores');
    Route::get('/clientes', 'App\Http\Controllers\ClienteController@index')->name('app.clientes');
    Route::get('/produtos', 'App\Http\Controllers\ProdutoController@index')->name('app.produtos');
});

//Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function() {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">clique aqui</a> para ir para página inicial';
});
