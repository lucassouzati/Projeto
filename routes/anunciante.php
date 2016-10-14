<?php
//Anunciante Login
Route::get('/logout', 'AnuncianteAuth\LoginController@logout');
Route::get('/home', 'Anunciantes@index');
Route::get('/register_event', 'Anunciantes@novoEvento');
