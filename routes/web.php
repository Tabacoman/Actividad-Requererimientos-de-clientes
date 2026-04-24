<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
}) -> name ('home');

Route::get('/template', function () {
    return view('base');
}) -> name ('base');

Route::get('/enviar', function () {
    return view('enviar');
}) -> name ('enviar');

Route::get('/contacto', function () {
    return view('contacto');
}) -> name ('contacto');