<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Create permission
        $permission = Permission::create(['name' => 'edit articles']);

        // Create role and assign permission
        $role = Role::create(['name' => 'editor']);
        $role->givePermissionTo($permission);

        // Assign role to user (change ID as per your user)
        $user = User::find(1);  // Find user by ID
        $user->assignRole('editor');
    }
}
