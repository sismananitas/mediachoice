<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
