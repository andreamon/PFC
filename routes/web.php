<?php

Route::get('/', 'HomeController@index');

Route::get('peticiones/create/{id}', 'PeticionesController@createByType');

Route::resource('/peticiones','PeticionesController');

# Autenticación de usuarios
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login','Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

# Registro de usuarios
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

#Reseteo de contraseña
Route::get('password/reset','Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

Route::get('password/reset/{token}','Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset','Auth\ResetPasswordController@reset')->name('password.send');