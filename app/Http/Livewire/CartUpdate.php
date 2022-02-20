<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as Carts;

class CartUpdate extends Component
{
    public $cartItems = [];
    public $quantity = 1;

    public function mount($item)
    {
        $this->cartItems = $item;

        $this->quantity = $item['quantity'];
    }

    public function updateCart()
    {
        \Carts::update($this->cartItems['id'], [
            'quantity' => [
                'relative' => false,
                'value' => $this->quantity
            ],
            'price' => [
                'relative' => false,
                'value' => $this->price
            ]
        ]);

        $this->emit('cartUpdated');
    }
    public function render()
    {
        return view('livewire.cart-update');
    }
}
