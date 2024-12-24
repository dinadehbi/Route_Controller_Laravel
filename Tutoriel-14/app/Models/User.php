<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    
    protected $fillable = [
        'name', 
        'email', 
        'password',
        'role', // Ajouté ici
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }

    // Ajout pour hashage mot de passe si nécessaire
    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            if ($user->password) {
                $user->password = bcrypt($user->password);
            }
        });
    }
}
