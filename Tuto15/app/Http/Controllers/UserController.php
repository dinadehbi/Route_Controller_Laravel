<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class UserController extends Controller
{
    public function assignRoleToUser($userId)
    {
        // Récupérer l'utilisateur par ID
        $user = User::find($userId);

        // Créer ou récupérer le rôle "editor"
        $role = Role::firstOrCreate(['name' => 'editor']);
        
        // Créer ou récupérer la permission "edit articles"
        $permission = Permission::firstOrCreate(['name' => 'edit articles']);
        
        // Assigner la permission au rôle
        $role->givePermissionTo($permission);
        
        // Assigner le rôle à l'utilisateur
        $user->assignRole('editor');
        
        // Vérifier si l'utilisateur a la permission via son rôle
        if ($user->can('edit articles')) {
            return response()->json(['message' => 'L\'utilisateur a la permission de modifier des articles.']);
        } else {
            return response()->json(['message' => 'L\'utilisateur n\'a pas la permission de modifier des articles.']);
        }
    }
}
