<?php

namespace App\Services;

class RoleService
{
    protected $roles;

    public function __construct()
    {
        // Liste des rôles (peut être récupérée d'une base de données si nécessaire)
        $this->roles = [
            'admin',
            'editor',
            'viewer',
        ];
    }

    public function hasRole($role, $user)
    {
        // Vérifie si l'utilisateur a le rôle demandé
        return in_array($role, $this->roles) && $user->role === $role;
    }
}
