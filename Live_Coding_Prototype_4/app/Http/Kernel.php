<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\RedirectIfAuthenticated;


class Kernel extends HttpKernel
{
    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to individual routes.
     *
     * @var array
     */
    // protected $routeMiddleware = [
    //     // Autres middlewares existants
    //     'role' => \App\Http\Middleware\CheckUserRole::class,
    // ];
    
}
