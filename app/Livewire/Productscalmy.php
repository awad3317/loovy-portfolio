<?php

namespace App\Livewire;

use Livewire\Component;

class Productscalmy extends Component
{
    public $title, $description, $features, $sizes, $products, $allProducts;
    public $selectedSize = null;

    public function mount($type)
    {
        $data = config('products.' . $type);

        if (!$data) {
            abort(404, 'المنتج غير موجود');
        }

        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->features = $data['features'];
        $this->sizes = $data['sizes'];
        $this->allProducts = $data['products'];
        $this->products = $this->allProducts;
    }

   public function filterBySize($size)
{
    $this->selectedSize = $size;

    $this->products = array_filter($this->allProducts, function ($product) use ($size) {
        return isset($product['size']) && $product['size'] === $size;
    });
}

    public function resetFilter()
    {
        $this->selectedSize = null;
        $this->products = $this->allProducts;
    }

    public function render()
    {
        return view('livewire.productscalmy');
    }
}