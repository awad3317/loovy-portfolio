<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view(view: 'homebaby');
// });
Route::get('/', function () {
    return view(view: 'Home');
});

Route::get('/calmyBaby', [HomeController::class, 'calmyBaby']);
Route::get('/lofyBaby', [HomeController::class, 'lofyBaby']);
Route::get('/all_product', [HomeController::class, 'ALL_product']);