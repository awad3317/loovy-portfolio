<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Branch;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function calmyBaby()
    {
        $calmy = Brand::with('products')
            ->where('slug', 'calmy_baby')
            ->firstOrFail();
        return view('calmyBaby', compact('calmy'));
    }

    public function lofyBaby()
    {
        $lofy = Brand::with('products', 'features')
            ->where('slug', 'lofy_baby')
            ->firstOrFail();
        return view('lofyBaby', compact('lofy'));
    }
    public function ALL_product()
    {
        return view('all_product',);
    }

    public function showProduct($type, $id)
    {
        $product = Product::with('brand')
            ->where('type', $type)
            ->where('id', $id)
            ->firstOrFail();

        $similarProducts = Product::where('type', $type)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();

        return view('product_specifc', compact('product', 'similarProducts', 'type', 'id'));
    }

    public function showBranch()
    {
        $branchesByCountry = Branch::with('country')
            ->get()
            ->groupBy('country.name');
        return view('branches', compact('branchesByCountry'));
    }
}
