<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Photo;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Photo::truncate();
        Photo::create(
            [
                'gallery_id' => 1,
                'category_id' => 1,
                'name' => 'Bailando con el padrino',
                'description' => 'Foto tomada durante el vals tradicional.',
                'route' => 'xv_1.jpg'
            ]
        );
        Photo::create(
            [
                'gallery_id' => 2,
                'category_id' => 2,
                'name' => 'Mar y Arena',
                'description' => 'Una mirada a la playa con el cielo de fondo.',
                'route' => 'cancun_1.jpg'
            ]
        );
        Photo::create(
            [
                'gallery_id' => 3,
                'category_id' => 3,
                'name' => 'Ana posando',
                'description' => 'Recibiendo reconocimiento con fondo difuminado.',
                'route' => 'graduacion_1.jpg'
            ]
        );
    }
}
