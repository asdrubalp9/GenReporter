<?php

//Route::resource('users', 'UserController');
Route::get('/', 'DashboardController@index')->name('DashBoard');   

///USERS///
Route::prefix('usuarios')-> group(function(){
    
    
    Route::get('/ver/{id?}', 'UserController@show')->name('users.show');
    Route::get('/editar/{id?}', 'UserController@edit')->name('users.edit');
    Route::put('/actualizar/{id?}', 'UserController@update')->name('users.update');
    Route::get('/ingresar', 'Auth\UserLoginController@showLoginForm')->name('usuarios.ingresar');
    Route::get('/', 'UserController@index')->name('users.index');
    
});


/////SITIOS/LUGARES///
Route::prefix('sitios')->group(function(){
    Route::get('/crear', 'SitiosController@create')->name('sitios.create');
    Route::post('/crear', 'SitiosController@store')->name('sitios.store');
    Route::get('/ver/{id?}', 'SitiosController@show')->name('sitios.show');
});




////EMPRESAS
Route::prefix('empresas')->group(function(){
    //Hacer dashboard de 
    Route::get('/crear', 'EmpresasController@create')->name('empresas.create');
    Route::put('/crear', 'EmpresasController@store')->name('empresas.store');
    Route::get('/ver/{id?}', 'EmpresasController@show')->name('empresas.show');
    Route::get('/editar/{id?}', 'EmpresasController@edit')->name('empresas.edit');
    Route::put('/actualizar/{id?}', 'EmpresasController@update')->name('empresas.update');
    Route::get('/ingresar', 'Auth\EmpresasLoginController@showLoginForm')->name('empresas.ingresar');
    Route::post('/ingresar', 'Auth\EmpresasLoginController@login')->name('empresas.ingresar.submit');
    
    //Route::get('/crear', 'EmpresasController@createUser')->name('users.create');
    //Route::post('/crear', 'EmpresasController@storeUser')->name('users.store');

    Route::get('/', 'EmpresasController@index')->name('empresas.index');
});


Route::get('/home', 'HomeController@index')->name('home');

