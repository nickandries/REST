<?php

Route::resource("evenement", "EvenementController", []);

Route::get('evenement/{id}', 'EvenementController@show');
Route::post('evenement/create', 'EvenementController@store');
Route::delete('evenement/{id}', 'EvenementController@destroy');
Route::put('evenement/{id}', 'EvenementController@update');
