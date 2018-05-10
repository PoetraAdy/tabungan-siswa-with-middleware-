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
    return redirect('/masuk');
});

Route::get('/masuk','UserController@index');
Route::post('/masuk/check','UserController@check');
Route::get('/masuk/logout','UserController@logout');

Route::get('/dashboard','DashboardController@index')->middleware('CheckSession','Admin');
Route::get('/dashboard/profile','DashboardController@profile')->middleware('CheckSession');
Route::post('/dashboard/store','DashboardController@store')->middleware('CheckSession','Admin');
Route::get('/dashboard/edit/{id}','DashboardController@edit')->middleware('CheckSession','Admin');
Route::put('/dashboard/update/{id}','DashboardController@update')->middleware('CheckSession','Admin');
Route::delete('/dashboard/delete/{id}','DashboardController@delete')->middleware('CheckSession','Admin');
Route::put('/dashboard/profup/{id}','DashboardController@profileUpdate')->middleware('CheckSession');
Route::get('/dashboard/statistic','DashboardController@statistic')->middleware('CheckSession');

Route::get('/petugas','PetugasController@index')->middleware('CheckSession','Petugas');
Route::post('/petugas/store','PetugasController@store')->middleware('CheckSession','Petugas');
Route::get('/petugas/transaksi','PetugasController@transaksi')->middleware('CheckSession','Petugas');

Route::get('/siswa','SiswaController@index')->middleware('CheckSession','Siswa');
