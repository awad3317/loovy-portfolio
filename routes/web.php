<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
Route::get('/', function () {
    return view(view: 'Home');
});

Route::get('/productspecific', function () {
    return view(view: 'product_specifc');
});
// Route::get('/branches', function () {
//     return view(view: 'branches');
// });
Route::get('/contact', function () {
    return view(view: 'contact');
});
Route::get('/about', function () {
    return view(view: 'about');
});

Route::get('/products/{type}/{id}', [HomeController::class, 'showProduct'])->name('products.show');
Route::get('/calmyBaby', [HomeController::class, 'calmyBaby']); 
Route::get('/branches', [HomeController::class, 'ShowBranch']);
Route::get('/lofyBaby', [HomeController::class, 'lofyBaby']);
Route::get('/all_product', [HomeController::class, 'ALL_product']);