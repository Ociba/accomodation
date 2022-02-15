<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

         /* define a admin user type */
         Gate::define('isAdmin', function($user) {
            return $user->type == 'admin';
         });
        
         /* define a manager user type */
         Gate::define('isPropertyOwner', function($user) {
             return $user->type == 'property_owner';
         });
       
         /* define a user type */
         Gate::define('isBroker', function($user) {
             return $user->type == 'broker';
         });
    }
}
