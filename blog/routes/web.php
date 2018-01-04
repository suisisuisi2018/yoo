<?php

Route::get('/','SharedController@index')->name('index');
Route::get('/home','SharedController@index')->name('home');
Route::get('/soft','SharedController@soft')->name('soft');
Route::get('/qr/{id}','SharedController@qr');

Route::get('sitemap', 'GeneratedController@siteMap');
Route::get('sitemap.xml', 'GeneratedController@siteMap');



//Route::get('/shared','SharedController@index');
//Route::get('/shared/view','SharedController@view');
//Route::post('/recaptcha','SharedController@recaptcha');




Auth::routes();



Route::get('/gabe','\App\Http\Controllers\Admin\AdminController@index');
Route::get('/gabe/host/index','\App\Http\Controllers\Admin\HostController@index');
Route::get('/gabe/host/create','\App\Http\Controllers\Admin\HostController@create');

Route::post('/gabe/host/save','\App\Http\Controllers\Admin\HostController@save');
Route::post('/gabe/host/delete','\App\Http\Controllers\Admin\HostController@delete');
Route::get('/gabe/host/test','\App\Http\Controllers\Admin\HostController@test');



