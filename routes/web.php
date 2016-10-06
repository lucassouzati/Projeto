<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'UserController@Profile');
Route::get('/change', 'UserController@Alterar');
Route::get('/user', function(){
  return view('usuario');
});
Route::get('/anunc', function(){
  return view('anunc');
});
Route::get('/about', function(){
return view('about');});
Route::get('/contact', function(){
  return view('contact');
});
Route::get('/logout', 'UserController@sair');
Route::get('/confirmed', 'UserController@Confirmed');
Route::get('/home', 'HomeController@index');

//Anunciante Login
Route::get('anunciante/logout', 'AnuncianteAuth\LoginController@logout');
Route::post('anunciante/home', 'Anunciantes@login');

//Anunciante Register
Route::get('anunciante/register', 'AnuncianteAuth\RegisterController@showRegistrationForm');
Route::post('anunciante/register', 'AnuncianteAuth\RegisterController@register');

//Anunciante Passwords
Route::post('anunciante/password/email', 'AnuncianteAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('anunciante/password/reset', 'AnuncianteAuth\ResetPasswordController@reset');
Route::get('anunciante/password/reset', 'AnuncianteAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('anunciante/password/reset/{token}', 'AnuncianteAuth\ResetPasswordController@showResetForm');


//User Login
Route::get('user/login', 'UserAuth\LoginController@showLoginForm');
Route::post('user/login', 'UserAuth\LoginController@login');
Route::get('user/logout', 'UserAuth\LoginController@logout');
Route::get('user/home', function(){
  return view('user.home');
});
//User Register
Route::get('user/register', 'UserAuth\RegisterController@showRegistrationForm');
Route::post('user/register', 'UserAuth\RegisterController@register');

//User Passwords
Route::post('user/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('user/password/reset', 'UserAuth\ResetPasswordController@reset');
Route::get('user/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('user/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
