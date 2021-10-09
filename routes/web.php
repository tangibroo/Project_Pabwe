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

Route::get('visimisi', function(){
    return view('visimisi');
});
Route::get('tujuan-sasaran', function(){
    return view('tujuan-sasaran');
});
Route::get('struktur-organisasi', function(){
    return view('struktur');
});
Route::get('capaian-pembelajaran', function(){
    return view('capaian-pembelajaran');
});
Route::get('profil-lulusan', function(){
    return view('profil-lulusan');
});
Route::get('sitemaps', function(){
    return view('sitemaps');
});
Route::get('contact', function(){
    return view('contact');
});
Route::get('news', function(){
    return view('news');
});