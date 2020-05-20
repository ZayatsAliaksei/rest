<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    $data = [];
    return view('welcome',['data'=>$data]);
});

Route::post('/processing','HomeController@jsonProcessing');

Route::get('/rest','HomeController@show');


