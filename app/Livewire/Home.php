<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
{
    public $products = [];
    public $branches = [
        'yemen' => [],
        'saudi' => [],
    ];

    public function mount()
    {
        $allProducts = config('products');

        $this->products = [];

        if (is_array($allProducts)) {
            foreach ($allProducts as $type => $data) {
                if (isset($data['products']) && is_array($data['products'])) {
                    $this->products = array_merge($this->products, $data['products']);
                }
            }
        }

        shuffle($this->products);
        $this->products = array_merge($this->products, $this->products);

        $allBranches = config('branches'); 
        if (isset($allBranches['yemen'])) {
            $this->branches['yemen'] = $allBranches['yemen'];
        }
        if (isset($allBranches['saudi'])) {
            $this->branches['saudi'] = $allBranches['saudi'];
        }
    }

    public function render()
    {
        return view('livewire.home');
    }
}