<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {   
    return view('index');
});

Route::get('/registration', function(){
    return view('registration');
});

Route::get('/login', function(){
    return view('login');
});


Route::get('/signup', function(){
    return view('signup');
});