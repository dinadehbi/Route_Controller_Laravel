<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RoleService;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Utiliser la classe comme singleton
        $this->app->singleton(RoleService::class, function ($app) {
            return new RoleService();
        });
    }

    public function boot()
    {
        //
    }
}
