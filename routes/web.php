<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
}) -> name('home');

Route::get('/paganti', 'PaganteController@index') -> name('paganti-index');

Route::get('/pagamenti', 'PagamentoController@index') ->name('pagamenti-index');

Route::get('/pagamenti/delete/{id}', 'PagamentoController@destroy') ->name('pagamento-destroy');
