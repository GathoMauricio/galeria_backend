<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
        Category::create(['name' => 'Fiestas']);
        Category::create(['name' => 'Viajes']);
        Category::create(['name' => 'Celebraciones']);
    }
}
