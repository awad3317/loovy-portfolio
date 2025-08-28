<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Products extends Component
{
    public $allProducts = [];
    public $products = [];
    public $brands = ['lofy_baby' => 'لوفي بيبي', 'calmy_baby' => 'كالمي بيبي'];
    public $selectedBrand = null;
    public $selectedSizes = [];

    public function mount()
    {
        // جلب المنتجات من config (أو DB لو أردت)
        $this->allProducts = collect(config('products'));

        // عرض جميع المنتجات عند البداية
        $this->products = collect($this->allProducts)->flatMap(function ($brand) {
            return $brand['products'];
        })->toArray();
    }

    public function filterByBrand($brandKey)
    {
        $this->selectedBrand = $brandKey;
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
        $this->selectedBrand = null;
        $this->selectedSizes = [];
        $this->mount();
    }

    private function applyFilters()
    {
        $products = $this->allProducts;

        if ($this->selectedBrand) {
            $products = collect([$this->selectedBrand => $products[$this->selectedBrand]]);
        }

        // Flatten the products to get a collection of all products
        $filtered = collect($products)->flatMap(function ($brand) {
            return $brand['products'];
        });

        if ($this->selectedSizes) {
            $filtered = $filtered->filter(function ($product) {
                return isset($product['size']) && in_array($product['size'], $this->selectedSizes);
            });
        }

        $this->products = $filtered->toArray();
    }

    public function render()
    {
        return view('livewire.products', [
            'brands' => $this->brands,
            'sizes' => collect($this->allProducts)->flatMap(function ($brand) {
                return $brand['sizes'];
            })->unique()->values()->toArray(),
            'products' => $this->products,
        ]);
    }
}