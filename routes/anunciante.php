<?php

Route::get('/home', 'AnuncianteAuth\LoginController@index');
Route::get('/register_event', 'Anunciantes@novoEvento');
Route::get('/ger_event', 'Anunciantes@novoEvento');
