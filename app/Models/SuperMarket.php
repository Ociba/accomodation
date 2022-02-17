<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuperMarket extends Model
{
    use HasFactory;
    protected $fillable=['item_group_id','contact','location','description','price','photo','discount','created_by'];
}
