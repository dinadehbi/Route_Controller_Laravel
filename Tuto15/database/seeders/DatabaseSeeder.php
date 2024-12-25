<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\RoleAndPermissionSeeder;


class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Exécuter le seeder de rôles et permissions
        $this->call(RoleAndPermissionSeeder::class);
    }
}

