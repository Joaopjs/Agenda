<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', 'WelcomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/agenda', 'HomeController@agenda')->name('agenda');
Route::get('/contato', 'HomeController@contato')->name('contato');

Route::post('/cadcompromisso', 'ManipularDadosController@agendarCompromisso')->name('cadcompromisso');
Route::post('/cadcontato', 'ManipularDadosController@cadastraContato')->name('cadcontato');

Route::get('/mostrarcontato', 'ManipularDadosController@mostrarcontato')->name('mostrarcontato');
Route::get('/mostrarcompromisso', 'ManipularDadosController@mostrarcompromisso')
->name('mostrarcompromisso');

//Manipula contato
Route::get('/excluircontato/{page?}', 'ManipularDadosController@excluircontato')
->name('excluircontato');

Route::get('/editarcontato/{page?}', 'ManipularDadosController@editarcontato')
->name('editarcontato');

Route::get('/cadeditarcontato/{page?}', 'ManipularDadosController@cadeditarcontato')
->name('cadeditarcontato');

//manipular compromisso
Route::get('/excluircompromisso/{page?}', 'ManipularDadosController@excluircompromisso')
->name('excluircompromisso');
             
Route::get('/editarcompromisso/{page?}', 'ManipularDadosController@editarcompromisso')
->name('editarcompromisso');

Route::get('/cadeditarcompromisso/{page?}', 'ManipularDadosController@cadeditarcompromisso')
->name('cadeditarcompromisso');
