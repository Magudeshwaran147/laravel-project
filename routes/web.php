<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/index2', function(){
    return view('index_two');
})->name('index2');

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/registration', function(){
    return view('registration');
})->name('registration');
