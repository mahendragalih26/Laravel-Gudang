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

//Index or gudang
Route::get('/gudang','GudangController@index');

//Index or jenis
Route::get('/jenis','GudangController@indexjenis');

//Auth
Auth::routes();

//Index
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'GudangController@index')->name('home');

//tambah data
Route::post('/gudang/create', 'GudangController@create');

//tambah Jenis
Route::post('/gudang/cjenis', 'GudangController@cjenis');

//edit data
Route::get('/gudang/{id}/edit', 'GudangController@edit');

//update data
Route::post('/gudang/{id}/update', 'GudangController@update');

//edit data
Route::get('/jenis/{id}/edit', 'GudangController@ejenis');

//update data
Route::post('/jenis/{id}/update', 'GudangController@ujenis');

//Delete data
Route::get('/gudang/{id}/delete', 'GudangController@delete');

//Delete Jenis
Route::get('/jenis/{id_jenis}/delete', 'GudangController@djenis');

//tester
Route::get('/tes', 'GudangController@tes');
