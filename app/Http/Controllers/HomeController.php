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

public function showProduct($type, $id)
{
    $configType = config("products.$type");

    if (!$configType || !isset($configType['products']) || !is_array($configType['products'])) {
        abort(404, "النوع $type غير موجود");
    }

    $product = collect($configType['products'])->firstWhere('id', $id);

    if (!$product) {
        abort(404, "المنتج غير موجود");
    }

    $similarProducts = collect($configType['products'])->filter(function($p) use ($id) {
        return $p['id'] != $id;
        })->take(4)
    ->values();

    return view('product_specifc', [
        'product' => $product,
        'type' => $type,
        'id' => $id,
        'similarProducts' => $similarProducts,
    ]);
}

}