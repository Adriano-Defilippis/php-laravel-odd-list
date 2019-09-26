<?php



Route::get('/', function () {
    return view('index');
});

Route::get('laravel', 'laravelController@laravelHome');

Route::get('odd', 'mioController@listNumberPair');
