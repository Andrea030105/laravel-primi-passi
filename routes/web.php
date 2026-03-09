<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $data = [
        'home' => 'Home',
        'docs' => 'Docs',
        'example' => 'Example',
    ];


    return view('index', $data);
});


Route::get('/docs', function () {

    return view('docs');
})->name('docs');

Route::get('/example', function () {

    return view('example');
})->name('example');
