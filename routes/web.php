<?php

//Route::resource('users', 'UserController');
Route::get('/', 'DashboardController@index')->name('DashBoard');   

///USERS///
Route::prefix('usuarios')-> group(function(){
    
    Route::get('/crear', 'UserController@create')->name('users.create');
    Route::put('/crear', 'UserController@store')->name('users.store');
    Route::get('/ver/{id?}', 'UserController@show')->name('users.show');
    Route::get('/editar/{id?}', 'UserController@edit')->name('users.edit');
    Route::put('/actualizar/{id?}', 'UserController@update')->name('users.update');
    Route::get('/ingresar', 'Auth\UserLoginController@showLoginForm')->name('usuarios.ingresar');
    Route::get('/', 'UserController@index')->name('users.index');
    
});


/////SITIOS/LUGARES///
Route::get('/sitios/crear', 'SitiosController@create')->name('sitios.create');


////EMPRESAS

Route::prefix('empresas')->group(function(){
    //Hacer dashboard de empresas
    Route::get('/crear', 'EmpresasController@create')->name('empresas.create');
    Route::put('/crear', 'EmpresasController@store')->name('empresas.store');
    Route::get('/ver/{id?}', 'EmpresasController@show')->name('empresas.show');
    Route::get('/editar/{id?}', 'EmpresasController@edit')->name('empresas.edit');
    Route::put('/actualizar/{id?}', 'EmpresasController@update')->name('empresas.update');
    Route::get('/ingresar', 'Auth\EmpresasLoginController@showLoginForm')->name('empresas.ingresar');
    Route::post('/ingresar', 'Auth\EmpresasLoginController@login')->name('empresas.ingresar.submit');
    Route::get('/', 'EmpresasController@index')->name('empresas.index');
});


Route::get('/home', 'HomeController@index')->name('home');
