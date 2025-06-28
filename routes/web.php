<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return "Nose programaraaa";
});

Route::get('/post', function(){
    return "Ahora si sirve";
});
