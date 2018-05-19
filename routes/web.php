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

Route::get('/category', function(){
    return view('category');
});

Route::get('/product', function(){
    return view('product');
});

Route::get('/pago', function(){
    return view('pago');
});

Route::get('/factura', function(){
    return view('factura');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/registro', function(){
    return view('registro');
});