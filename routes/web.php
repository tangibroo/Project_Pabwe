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
    return view('welcome');
});

Route::get('halo', function(){
    return "Halo, Selamat datang di Poject Pabwe Tangido Sinaga.. ini adalah bentuk latihan Routing pada laravel :')";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('biodata', 'MahasiswaController@index');

Route::get('home', function(){
    return view('home');
});