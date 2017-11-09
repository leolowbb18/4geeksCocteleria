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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Crud Productos 
Route::resource('products', 'ProductsController');

Route::resource('tienda', 'buyController');
//Crud Usuario
Route::resource('usuarios', 'UsersController');


//Route::get('vistas', 'vistaController@destacados')->name('vistas');
//Route::get('vistas/{vis}', 'vistaController@vistaDinamica')->name('vistaDina');

Route::get('/', 'vistaController@destacados')->name('vistas');
Route::get('/{vis}', 'vistaController@vistaDinamica')->name('vistaDina');



Route::resource('buy', 'buyController');

Route::get('vistas/{id}', 'ProductsController@createBuy');


//logout
Route::get('/logout', 'LoginController@logout')->name('salir');

//LOGIN
Route::post('/login/custom', [ 
    'uses' => 'LoginController@login',
    'as' => 'login.custom'
]);

Route::group(['middleware' => 'auth'], function(){
    
    Route::get('/logeado', function(){
        return view('productos.destacados');
    })->name('logeado');
    
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

});

