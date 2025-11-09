<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Brand;

class Productslofy extends Component
{
    public $lofy;
    public $features;
    public $products;
    public $sizes;
    public $allProducts;
    public $selectedSize = null;

    public function mount($lofy)
    {
        // تحميل العلاقات المطلوبة
        $this->lofy = Brand::with('features', 'products')
            ->where('id', $lofy->id)
            ->firstOrFail();

        $this->features = $this->lofy->features;
        $this->allProducts = $this->lofy->products;
        $this->products = $this->allProducts;

        // استخراج المقاسات بدون تكرار
        $this->sizes = $this->lofy->products->pluck('size')->unique()->values();
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
        return view('livewire.productslofy', [
            'lofy' => $this->lofy,
            'features' => $this->features,
            'sizes' => $this->sizes,
            'products' => $this->products,
            'selectedSize' => $this->selectedSize,
        ]);
    }
}