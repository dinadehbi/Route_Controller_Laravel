<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    public function run()
    {
        // Créer un rôle "admin"
        $adminRole = Role::create(['name' => 'admin']);

        // Créer une permission "edit-posts"
        $permission = Permission::create(['name' => 'edit-posts']);

        // Assigner la permission au rôle "admin"
        $adminRole->givePermissionTo($permission);
    }
}