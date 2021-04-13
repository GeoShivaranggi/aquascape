<?php

Route::get('/', function(){
    return view ('halaman-admin.index');
})->name('dashboard');

Route::get('/request', 'Admin\AdminController@request')->name('request');

Route::get('/repair', 'Admin\AdminController@repair')->name('repair');

Route::get('/konsultasi', 'Admin\AdminController@konsultasi')->name('konsultasi');

Route::get('/jenis', 'Admin\AdminController@jenis')->name('jenis');
Route::post('/jenis', 'Admin\AdminController@jenispost')->name('jenispost');

Route::get('/jenisedit/{data}', 'Admin\AdminController@jenisedit')->name('jenisedit');
Route::patch('/jenisedit/{data}', 'Admin\AdminController@jenisupdate')->name('jenisupdate');
Route::get('/deletejenis/{data}', 'Admin\AdminController@deletejenis')->name('deletejenis');


Route::get('/testimoni', 'Admin\AdminController@testimoni')->name('testimoni');
Route::post('/testimoni', 'Admin\AdminController@testimonipost')->name('testimonipost');
Route::get('/testimoniedit/{data}', 'Admin\AdminController@testimoniedit')->name('testimoniedit');
Route::patch('/testimoniedit/{data}', 'Admin\AdminController@testiupdate')->name('testiupdate');
Route::get('/testimonidelete/{data}', 'Admin\AdminController@testimonidelete')->name('testimonidelete');

