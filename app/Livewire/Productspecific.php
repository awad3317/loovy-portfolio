<?php

namespace App\Livewire;

use Livewire\Component;

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

        $products = config('products.' . $type . '.products', []);
        $this->product = collect($products)->firstWhere('id', $id);

        $this->similarProducts = collect($products)->filter(function($p) use ($id) {
            return $p['id'] != $id;
        })->take(4)
        ->values();
    }

    public function render()
    {
        return view('livewire.productspecific', [
            'similarProducts' => $this->similarProducts
        ]);
    }
}