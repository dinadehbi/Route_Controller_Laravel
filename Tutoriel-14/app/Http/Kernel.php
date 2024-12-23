<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\RoleMiddleware;  // Zid had l'import

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Global middleware li katmchi m3a kullchi
    ];

    /**
     * The middleware groups for the application.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Middleware li katsift f web routes
        ],

        'api' => [
            // Middleware li katsift f api routes
        ],
    ];

    /**
     * The route middleware for the application.
     *
     * @var array
     */
    protected $routeMiddleware = [
        'role' => RoleMiddleware::class,  // Hna z3ma ba9i same li fi l'exemple, mais m3a importation
    ];
}
