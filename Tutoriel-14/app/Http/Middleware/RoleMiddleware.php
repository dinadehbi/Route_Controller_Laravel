<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, $role)
    {
        // Vérifie si l'utilisateur est authentifié et a le rôle
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // Redirige si l'utilisateur n'a pas le rôle
        return redirect('/'); // ou afficher une erreur
    }
}
