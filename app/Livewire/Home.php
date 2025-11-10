<?php

namespace App\Livewire;

use App\Models\Branch;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $products = [];

    public function mount()
    {
        // جلب منتجات عشوائية
        $this->products = Product::inRandomOrder()->take(10)->get();
    }

    public function render()
    {
        $branchesByCountry = Branch::with('country')
            ->get()
            ->groupBy('country.name');

        return view('livewire.home', compact('branchesByCountry'));
    }
}
