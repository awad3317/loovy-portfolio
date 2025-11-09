<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class Productspecific extends Component
{
    public $type;
    public $id;
    public $product;
    public $similarProducts;

    public function mount($type, $id)
    {
        $this->type = $type;
        $this->id = $id;

        $this->product = Product::with('brand')
            ->where('type', $type)
            ->where('id', $id)
            ->firstOrFail();

        $this->similarProducts = Product::with('brand')
            ->where('brand_id', $this->product->brand_id)
            ->where('id', '!=', $id)
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.productspecific', [
            'product' => $this->product,
            'similarProducts' => $this->similarProducts,
        ]);
    }
}