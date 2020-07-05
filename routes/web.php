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

Route::get('/p', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@index');

Route::get('/detail/{idjamaah}', 'HomeController@detail');

Route::match(['get', 'post'], '/tambah', 'HomeController@tambah');

Route::match(['get', 'post'], '/ubah/{idjamaah}', 'HomeController@ubah');

Route::get('/hapus/{idjamaah}', 'HomeController@hapus');
