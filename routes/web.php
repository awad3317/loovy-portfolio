<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
// use App\Http\Livewire\Productspecific; // Commented out because the class does not exist or is misspelled
// Route::get('/', function () {
//     return view(view: 'homebaby');
// });
Route::get('/', function () {
    return view(view: 'Home');
});

Route::get('/productspecific', function () {
    return view(view: 'product_specifc');
});
// Route::get('/products/{type}/{id}', Productspecific::class)->name('products.show');
Route::get('/products/{type}/{id}', [HomeController::class, 'showProduct'])->name('products.show');
Route::get('/calmyBaby', [HomeController::class, 'calmyBaby']);
Route::get('/lofyBaby', [HomeController::class, 'lofyBaby']);
Route::get('/all_product', [HomeController::class, 'ALL_product']);