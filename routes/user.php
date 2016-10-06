<?php

Route::get('/home',  'UserController@preferences');

Route::get('/confirmed', 'UserController@confirmed');

Route::get('/details/{idevento}', 'UserController@details');

Route::get('/profile', 'UserController@profile');

Route::get('/confirm/{id}&{idevento}&{idanunciante}', 'UserController@confirmPresence');
