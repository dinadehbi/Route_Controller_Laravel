<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    /**
     * Les middlewares globaux de l'application.
     *
     * @var array
     */
    protected $middleware = [
        // Les middlewares globaux
    ];

    /**
     * Les groupes de middleware pour l'application.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Middlewares pour web
        ],

        'api' => [
            // Middlewares pour API
        ],
    ];

    /**
     * Les middlewares de route de l'application.
     *
     * @var array
     */
    protected $routeMiddleware = [
        // autres middlewares
        'role' => \App\Http\Middleware\RoleMiddleware::class,
    ];
    
}
