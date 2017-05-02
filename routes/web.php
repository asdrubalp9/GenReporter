<?php



Route::get('/', 'PagesController@dashboard');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/reportes/crear', 'PagesController@crearReporte');

Route::get('/usuarios/crear', 'PagesController@crearUsuario');