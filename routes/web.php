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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index');

Route::get('/anggota', 'AnggotaController@index');

Route::get('/kib/kiba', 'KibController@kiba');
Route::get('/kib/kibb', 'KibController@kibb');
Route::get('/kib/kibc', 'KibController@kibc');
Route::get('/kib/kibd', 'KibController@kibd');
Route::get('/kib/kibe', 'KibController@kibe');
Route::get('/kib/kibf', 'KibController@kibf');

Route::get('/aset', 'AsetController@index');
Route::get('/aset/create', 'AsetController@create');
Route::post('/aset', 'AsetController@store');

Route::get('/ruangan', 'RuanganController@index');
Route::get('/ruangan/{ruangan}', 'RuanganController@show');
