<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('shop');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/index', function () {
    return view('index');
})->middleware(['auth']);

require __DIR__.'/auth.php';
