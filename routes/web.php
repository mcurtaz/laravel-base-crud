<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
}) -> name('home');

//  paganti-index e pagamenti-index restituiscono due view che contengono ripettivamente un elenco degli elementi della tabella paganti e della tabella pagamenti
Route::get('/paganti', 'PaganteController@index') -> name('paganti-index');

Route::get('/pagamenti', 'PagamentoController@index') ->name('pagamenti-index');

// questa route serve attraverso l'id a trovare ed eliminare un elemento dalla tabella pagamenti. si poteva fare sia con metodo post che get (che delete). La differenza sostanziale è che in get un utente potrebbe cancellare un elemento della tabella digitando nell'url del browser /pagamenti/delete/{id da cancellare}. In post questo non può succedere
Route::get('/pagamenti/delete/{id}', 'PagamentoController@destroy') ->name('pagamento-destroy');

// Questa route semplicemente manda ad una view in cui si possono modificare i dati di uno specifico elemento della tabella pagamenti. L'elemento è identificato attraverso l'id
Route::get('/pagamenti/edit/{id}', 'PagamentoController@edit') -> name('pagamento-edit');

// questa route fa l'update dell'elemento aggiornado i valori delle colonne. è in post e riceve come argomento l'id dell'elemento da modificare e nella Request i dati compilati dall'utente nel form. 
Route::post('/pagamenti/update/{id}', 'PagamentoController@update') -> name('pagamento-update');

//NOTE: Quando laravel crea in automatico le operazioni di CRUD con controller e metodi già fatti utilizza PUT/PATCH per la update e DELETE per la delete. Dal punto di vista della sicurezza non cambia nulla da POST ma questo permette di avere sempre lo stesso url (ad esempio /pagamenti/{id}) e a seconda del metodo vengono svolte operazioni diverse. Sarebbe una best practice ma nel mondo reale all'atto pratico si usa quasi solo GET e POST.  https://laravel.com/docs/7.x/controllers#resource-controllers
