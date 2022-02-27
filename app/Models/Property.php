<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded =[];

    public function scopeSearch($query, $val){
        return $query
        ->where('stake_holder_id','like','%'.$val.'%')
        ->Orwhere('stake_holder','like','%'.$val.'%')
        ->Orwhere('agency','like','%'.$val.'%')
        ->Orwhere('location','like','%'.$val.'%')
        ->Orwhere('name','like','%'.$val.'%');
    }
}
