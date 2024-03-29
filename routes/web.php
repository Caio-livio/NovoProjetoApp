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


Route::get('/', function(){
    return view('login');

});

Route::get('/cadastro', ['uses'=>'Controller@cadastrar']);

Route::get('/login', ['uses'=>'Controller@fazerlogin']);

Route::get('/registro',['uses' => 'Controller@fazerContato']);

Route::get('/documento',['uses' => 'Controller@fazerFormulario']);
