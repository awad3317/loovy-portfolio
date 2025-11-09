<?php

namespace App\Livewire;

use App\Models\Branch;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $branches = [];
    public $products = [];

    public function mount()
    {
        // جلب منتجات عشوائية
        $this->products = Product::inRandomOrder()->take(10)->get();

        // تجميع الفروع حسب الدولة
        $this->branches = Branch::all()->groupBy('country');
    }

    public function render()
    {
        return view('livewire.home');
    }
}