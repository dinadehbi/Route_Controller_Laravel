<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateRolesAndPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Create permission
        $permission = Permission::create(['name' => 'edit articles']);

        // Create role and assign permission
        $role = Role::create(['name' => 'editor']);
        $role->givePermissionTo($permission);

        // Assign role to user
        $user = \App\Models\User::find(1);  // Find user by ID
        $user->assignRole('editor');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Optionally, remove the role and permission in case of rollback
        $role = Role::findByName('editor');
        $permission = Permission::findByName('edit articles');
        
        $role->revokePermissionTo($permission);
        $role->delete();
        $permission->delete();

        $user = \App\Models\User::find(1);
        $user->removeRole('editor');
    }
}
