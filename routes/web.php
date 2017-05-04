<?php


/*

Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');
Route::get('/reportes/crear', 'PagesController@crearReporte');
*/
//Route::resource('users', 'UserController');
Route::get('/', 'DashboardController@index')->name('DashBoard');   

///USERS///
Route::get('/usuarios/', 'UserController@index')->name('users.index');
Route::get( '/usuarios/crear', 'UserController@create')->name('users.create');
Route::put('/usuarios/crear', 'UserController@store')->name('users.store');
Route::get('/usuarios/ver/{id?}', 'UserController@show')->name('users.show');
Route::get('/usuarios/editar/{id?}', 'UserController@edit')->name('users.edit');
Route::put('/usuarios/actualizar/{id?}', 'UserController@update')->name('users.update');

/////SITIOS/LUGARES///
Route::get('/sitios/crear', 'SitiosController@create')->name('sitios.create');

////EMPRESAS
Route::get('/empresas/', 'EmpresasController@index')->name('empresas.index');
Route::get('/empresas/crear', 'EmpresasController@create')->name('empresas.create');
Route::put('/empresas/crear', 'EmpresasController@store')->name('empresas.store');
Route::get('/empresas/ver/{id?}', 'EmpresasController@show')->name('empresas.show');
Route::get('/empresas/editar/{id?}', 'EmpresasController@edit')->name('empresas.edit');
Route::put('/empresas/actualizar/{id?}', 'EmpresasController@update')->name('empresas.update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
