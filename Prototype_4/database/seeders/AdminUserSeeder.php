<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create an admin user
        User::create([
            'name' => 'Dina Dehbi',
            'email' => 'dehbidina@gmail.com',
            'password' => bcrypt('dinadehbi'), // Encrypt the password
            'role' => 'admin',  // Assign 'admin' role
        ]);
    }
}
