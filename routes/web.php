<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/app', function () {
    return view('layouts.app');
});