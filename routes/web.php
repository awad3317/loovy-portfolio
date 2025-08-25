<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view(view: 'Home');
});

// Route::get('/loovyBaby', function () {
//     return view(view: 'loovyBaby');
// });

// Route::get('/calmyBaby', function () {
//     return view(view: 'calmyBaby');
// });


// Route::get('/calmy-baby', function () {
//     return view('calmy');
// })->name('calmy');

// Route::get('/lofy-baby', function () {
//     return view('lofy');
// })->name('lofy');
Route::get('calmyBaby', [HomeController::class, 'calmyBaby']);
Route::get('lofyBaby', [HomeController::class, 'lofyBaby']);