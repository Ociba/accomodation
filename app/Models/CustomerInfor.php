<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInfor extends Model
{
    use HasFactory;
    protected $fillable =['first_name','last_name','email','phone_number','address','division','street','plot_number'];
}
