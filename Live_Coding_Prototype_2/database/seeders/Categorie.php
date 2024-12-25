<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class Categorie extends Seeder
{
    
    public function run(): void
    {
        Category::factory()->count(10)->create();
    }
}
