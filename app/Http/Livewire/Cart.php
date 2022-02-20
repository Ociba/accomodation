<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cart as Carts;
use App\Models\SuperMarket;

class Cart extends Component
{
    protected $listeners = ['cartUpdated' => '$refresh'];
      public $cartItems = [];

    public $item,$photo,$price,$quantity;
   
    public function render()
    {
        $this->cartItems = \Cart::getContent()->toArray();
        
        return view('livewire.cart',[
        'cart_details' =>Carts::join('super_markets','super_markets.id','carts.item_id')
        ->join('users','users.id','carts.user_id')
        ->where('carts.user_id',auth()->user()->id)
        ->select('super_markets.*','users.name','carts.created_at','carts.id','carts.quantity')
        ->get()  
           
        ]);
    }
    public function mount(){
        $this->id = request()->route()->item_id;
    }
}
