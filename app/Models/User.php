<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use DB;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'type',
        'password',
        'amount',
        'payment_date',
        'contact',
        'address',
        'division',
        'street',
        'plot_number',
        'town',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    /** 
     * This function gets all property types available
    */
    public function allProperties(){
        $get_all_the_property =DB::table('properties')->where('status','pending')->orderBy('created_at',"Desc")->get();
        return $get_all_the_property;
    }
    /**
     * This function counts clients requests
     * its should be less than 3 hours from the time it was sent
     */
    public function countAllPropertyClientsRequests(){
        return DB::table('clients')->whereDate('created_at','>', now()->subDay())->count();
    }
     /**
     * This function counts supermarket clients requests
     * its should be less than 3 hours from the time it was sent
     */
    public function countAllOrders(){
        return DB::table('orders')->whereDate('created_at','>', now()->subDay())->count();
    }
}
