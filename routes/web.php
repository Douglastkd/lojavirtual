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


Route::get('/produto', function(){
    return view('produto');
});


Route::get('/conta', function(){
    return view('login');
});


Route::get('/criarconta', function(){
    return view('criarconta');
});

Route::get('/concluido', function(){
    return view('concluido');
});

Route::any('/checkout', function(){
    return view('checkout');
});

Route::get('/painel', function(){
    return view('painel.produto');
});

Route::get('/painelCategoria', function(){
    return view('painel.categoria');
});




Route::get('/carrinho', function(){
    return view('carrinho');
});

Route::get('/corpo', function(){
    return view('corpo');
});