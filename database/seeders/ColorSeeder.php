<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = [
            [
                'name' => 'Blanco',
                'codigo' => '#ffffff',
            ],
            [
                'name' => 'Azul',
                'codigo' => '#0008ff',
            ],
            [
                'name' => 'Rojo',
                'codigo' => '#ff0000',
            ],
            [
                'name' => 'Negro',
                'codigo' => '#000000',
            ],
        ];

        foreach ($colors as $color) {
            Color::create($color);
        }
    }
}
