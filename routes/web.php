<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(view: 'Home');
});

Route::get('/loovyBaby', function () {
    return view(view: 'loovyBaby');
});

Route::get('/calmyBaby', function () {
    return view(view: 'calmyBaby');
});

