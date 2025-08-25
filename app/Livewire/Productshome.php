<?php

namespace App\Livewire;

use Livewire\Component;

class Productshome extends Component
{
    public $title = "منتجاتنا";
    public $sizes = [];
    public $products = [];
    public $allProducts = [];
    public $brands = [];
    public $selectedBrand = null;
    public $selectedSizes = [];
    public $selectedType = null;
    public $selectedSize = null;
    public function mount($types = [])
    {
        $this->allProducts = [];
        $this->brands = [];
        $this->sizes = [];

        foreach ($types as $type) {
            $data = config('products.' . $type);

            if (!$data) continue;

            // دمج المنتجات
            $this->allProducts = array_merge($this->allProducts, $data['products'] ?? []);

            // دمج الماركات
            if (isset($data['brands'])) {
                $this->brands = array_merge($this->brands, $data['brands']);
            }

            // دمج المقاسات
            $this->sizes = array_unique(array_merge($this->sizes, $data['sizes'] ?? []));
        }

        $this->products = $this->allProducts;
    }


    public function filterByType($type)
    {
        $this->selectedType = $type;

        $this->products = array_filter($this->allProducts, function ($p) use ($type) {
            return isset($p['type']) && $p['type'] === $type;
        });
    }
    public function filterBySize($size)
    {
        $this->selectedSize = $size;

        $this->products = array_filter($this->allProducts, function ($product) use ($size) {
            return isset($product['size']) && $product['size'] === $size;
        });
    }

    public function filterByBrand($brand)
    {
        $this->selectedBrand = $brand;
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
        $this->selectedType = null;
        $this->products = $this->allProducts;
    }

    private function applyFilters()
    {
        $this->products = array_filter($this->allProducts, function ($p) {
            $matchBrand = !$this->selectedBrand || ($p['brand'] ?? null) === $this->selectedBrand;
            $matchSize = empty($this->selectedSizes) || in_array($p['size'] ?? null, $this->selectedSizes);
            return $matchBrand && $matchSize;
        });
    }

    public function render()
    {
        return view('livewire.productshome');
    }
}
