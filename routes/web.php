<?php

use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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


Route::get('/', 'PagesController@index')->name('route');

Auth::routes(['verify' => true]);


Route::get('/home', 'PagesController@index')->name('home')->middleware('verified');

Route::get('/request', 'PagesController@request')->name('request');
Route::post('/request', 'PagesController@requestpost')->name('requestpost');

Route::get('/repair', 'PagesController@repair')->name('repair');
Route::post('/repair', 'PagesController@repairpost')->name('repairpost');


Route::get('/konsultasi', 'PagesController@konsultasi')->name('konsultasi');
Route::post('/konsultasi', 'PagesController@konsultasipost')->name('konsultasipost');

Route::get('/jenis', 'PagesController@jenis')->name('jenis');
Route::post('/jenis', 'PagesController@jenispost')->name('jenispost');

Route::get('/testimoni', 'PagesController@testimoni')->name('testimoni');
Route::post('/testimoni', 'PagesController@testimonipost')->name('testimonipost');



