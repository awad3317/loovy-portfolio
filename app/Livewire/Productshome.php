<?php

namespace App\Livewire;

use Livewire\Component;

class Productshome extends Component
{
    public $title = "منتجاتنا";
    public $sizes = [];
    public $products = [];
    public $allProducts = [];
    public $selectedType = null;
    public $selectedSizes = [];

    public function mount($types = [])
    {
        $this->allProducts = [];
        $this->sizes = [];

        foreach ($types as $type) {
            $data = config('products.' . $type);

            if (!$data) continue;

            $this->allProducts = array_merge($this->allProducts, $data['products'] ?? []);
            $this->sizes = array_unique(array_merge($this->sizes, $data['sizes'] ?? []));
        }

        shuffle($this->allProducts);
        $this->products = $this->allProducts;
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
        shuffle($this->products);
    }

    private function applyFilters()
    {
        $this->products = array_filter($this->allProducts, function ($p) {
            $matchType = !$this->selectedType || ($p['type'] ?? null) === $this->selectedType;
            $matchSize = empty($this->selectedSizes) || in_array($p['size'] ?? null, $this->selectedSizes);
            return $matchType && $matchSize;
        });

        $this->products = array_values($this->products);
        shuffle($this->products);
    }

    public function render()
    {
        return view('livewire.productshome');
    }
}