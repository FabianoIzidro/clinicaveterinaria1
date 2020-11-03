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

    Route::get('/', function () {
    return view('login');
});

    //LOGIN
    Route::get('/login', 'LoginController@login');

    Route::post('/acessar', 'LoginController@acessar')->name('acessar');

    Route::get('/menu', 'LoginController@menu')->name('menu');


    //CLIENTE
    Route::get('/clientecadastro', 'clienteController@clientecadastro')->name('clientecadastro');

    Route::get('/clientevoltar', 'clienteController@clientevoltar')->name('clientevoltar');

    Route::get('/clientetelalogin', 'clienteController@clientetelalogin')->name('clientelogin');

    Route::post('/clientecadastrar', 'clienteController@clientecadastrar')->name('clientecadastrar');

    Route::get('/clientelistar', 'clienteController@clientelistar')->name('clientelistar'); 


    //ANIMAL
    Route::get('/animalcadastro', 'animalController@animalcadastro')->name('animalcadastro'); 

    Route::get('/animalvoltar', 'animalController@animalvoltar')->name('animalvoltar');  

    Route::get('/animaltelalogin', 'animalController@animaltelalogin')->name('animaltelalogin'); 

    Route::post('/animalcadastrar', 'animalController@animalcadastrar')->name('animalcadastrar'); 

    Route::get('/animallistar', 'animalController@animallistar')->name('animallistar');  








