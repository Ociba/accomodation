<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Property;

class SearchProperty extends Component
{
    public function render()
    {
        return view('livewire.search-property',[
            'get_property_info'=>Property::join('categories','categories.id','properties.category_id')->select('id','category_name')->get(),
            'get_property_location'=>Property::select('id','location')->get(),
            
            'stake_holders' => StakeHolder::join('countries','countries.id','stake_holders.country_id')
            ->join('users','users.id','stake_holders.created_by')
            ->search($this->search)
        ]);
    }
}
