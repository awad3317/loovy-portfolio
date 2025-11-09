<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;

class Productscalmy extends Component
{
    public $calmy;
    public $features;
    public $products;
    public $sizes;
    public $allProducts;
    public $selectedSize = null;

    public function mount($calmy)
    {
        // تحميل بيانات العلامة التجارية من قاعدة البيانات
        $this->calmy = Brand::with('features', 'products')
            ->where('id', $calmy->id)
            ->firstOrFail();

        $this->features = $this->calmy->features;
        $this->allProducts = $this->calmy->products;
        $this->products = $this->allProducts;

        // استخراج المقاسات بدون تكرار
        $this->sizes = $this->calmy->products->pluck('size')->unique()->values();
    }

    public function filterBySize($size)
    {
        $this->selectedSize = $size;
        $this->products = $this->allProducts->where('size', $size);
    }

    public function resetFilter()
    {
        $this->selectedSize = null;
        $this->products = $this->allProducts;
    }

    public function render()
    {
        return view('livewire.productscalmy', [
            'calmy' => $this->calmy,
            'features' => $this->features,
            'sizes' => $this->sizes,
            'products' => $this->products,
            'selectedSize' => $this->selectedSize,
        ]);
    }
}