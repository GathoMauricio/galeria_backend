<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::truncate();
        Gallery::create(['name' => 'Fiesta XV años Karenina']);
        Gallery::create(['name' => 'Viaje Cancún Verano']);
        Gallery::create(['name' => 'Gaduación Ana Laura']);
    }
}
