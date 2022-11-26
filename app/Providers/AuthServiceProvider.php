<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
   
    protected $policies = [
         'App\Models\Post' => 'App\Policies\PostPolicy',
    ];

   
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
