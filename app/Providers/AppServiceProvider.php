<?php

namespace App\Providers;

use App\Models\UserAddress;
use App\Policies\UserAddressPolicy;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected $policies = [
        UserAddress::class => UserAddressPolicy::class,
    ];
}
