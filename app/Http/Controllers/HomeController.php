<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public function calmyBaby()
    {
        $data = config('products.calmy_baby');
        return view('calmyBaby', compact('data'));
    }

    public function lofyBaby()
    {
        $data = config('products.lofy_baby');
        return view('lofyBaby', compact('data'));
    }
    public function ALL_product()
    {
        return view('all_product',);
    }
}