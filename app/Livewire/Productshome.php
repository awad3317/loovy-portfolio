<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;



class Productshome extends Component
{
   public $title = "منتجاتنا";
    public $sizes = [];
    public $products = [];
    public $allProducts = [];
    public $selectedType = null;
    public $selectedSizes = [];

    public function mount()
    {
        $this->allProducts = Product::with('brand')->get();
        $this->products = $this->allProducts;

        $this->sizes = $this->allProducts->pluck('size')->unique()->values()->toArray();
    }

    public function filterByType($type)
    {
        $this->selectedType = $type;
        $this->applyFilters();
    }

    public function toggleSize($size)
    {
        if (in_array($size, $this->selectedSizes)) {
            $this->selectedSizes = array_diff($this->selectedSizes, [$size]);
        } else {
            $this->selectedSizes[] = $size;
        }
        $this->applyFilters();
    }

    public function resetFilters()
    {
        $this->selectedType = null;
        $this->selectedSizes = [];
        $this->products = $this->allProducts;
    }

    private function applyFilters(): void
{
    $filtered = $this->allProducts;

    if ($this->selectedType) {
        $filtered = $filtered->where('type', $this->selectedType);
    }

    if (!empty($this->selectedSizes)) {
        $filtered = $filtered->whereIn('size', $this->selectedSizes);
    }

    $this->products = $filtered->values();
}

    public function render()
    {
        return view('livewire.productshome', [
            'products' => $this->products,
            'sizes' => $this->sizes,
            'selectedType' => $this->selectedType,
            'selectedSizes' => $this->selectedSizes,
        ]);
    }
}