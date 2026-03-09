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
