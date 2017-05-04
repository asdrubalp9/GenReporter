<?php


/*

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/reportes/crear', 'PagesController@crearReporte');
*/
//Route::resource('users', 'UserController');
Route::get('/', 'DashboardController@index')->name('DashBoard');   
Route::get( '/usuarios/crear', 'UserController@create')->name('users.create');

Route::get('/usuarios/', 'UserController@index');
Route::get('/usuarios/ver/{id?}', 'UserController@show')->name('users.show');
Route::get('/usuarios/editar/{id?}', 'UserController@edit')->name('users.editar');
Route::put('/usuarios/actualizar/{id?}', 'UserController@update')->name('users.update');
