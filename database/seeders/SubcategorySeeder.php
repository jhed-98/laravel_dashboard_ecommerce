<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [
            /* Celulares y tablets */
            [
                'category_id' => 1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Accesorios para celulares',
                'slug' => Str::slug('Accesorios para celulares'),
            ],

            [
                'category_id' => 1,
                'name' => 'Smartwatches',
                'slug' => Str::slug('Smartwatches'),
            ],

            /* Consola y videojuegos */
            [
                'category_id' => 2,
                'name' => 'Xbox',
                'slug' => Str::slug('xbos'),
            ],

            [
                'category_id' => 2,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],

            [
                'category_id' => 2,
                'name' => 'Videojuegos para PC',
                'slug' => Str::slug('Videojuegos para PC'),
            ],

            [
                'category_id' => 2,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],

            /* Deportes y aire libre */

            [
                'category_id' => 3,
                'name' => 'Fitness',
                'slug' => Str::slug('Fitness'),
            ],

            [
                'category_id' => 3,
                'name' => 'Camping y tiempo libre',
                'slug' => Str::slug('Camping y tiempo libre'),
            ],

            [
                'category_id' => 3,
                'name' => 'Accesorios deportivos',
                'slug' => Str::slug('Accesorios deportivos'),
            ],

            /* Dormitorio */

            [
                'category_id' => 4,
                'name' => 'Ropa de cama',
                'slug' => Str::slug('Ropa de cama'),
            ],

            [
                'category_id' => 4,
                'name' => 'Colchones',
                'slug' => Str::slug('Colchones'),
            ],

            [
                'category_id' => 4,
                'name' => 'Muebles de dormitorio',
                'slug' => Str::slug('Muebles de dormitorio'),
            ],

            /* Belleza y salud */

            [
                'category_id' => 5,
                'name' => 'Cuidado de la piel',
                'slug' => Str::slug('Cuidado de la piel'),
            ],

            [
                'category_id' => 5,
                'name' => 'Salud y bienestar',
                'slug' => Str::slug('Salud y bienestar'),
            ],

            [
                'category_id' => 5,
                'name' => 'Maquillaje',
                'slug' => Str::slug('Maquillaje'),
            ],

            [
                'category_id' => 5,
                'name' => 'Manos y pies',
                'slug' => Str::slug('Manos y pies'),
            ],
            /* Hombre */

            [
                'category_id' => 6,
                'name' => 'Polos',
                'slug' => Str::slug('Polos'),
            ],

            [
                'category_id' => 6,
                'name' => 'Camisas',
                'slug' => Str::slug('Camisas'),
            ],

            [
                'category_id' => 6,
                'name' => 'Ropa de baño Hombre',
                'slug' => Str::slug('Ropa de baño Hombre'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'Relojes Hombre',
                'slug' => Str::slug('Relojes Hombre'),
                'size' => true
            ],

            /* Mujer */

            [
                'category_id' => 7,
                'name' => 'Polos y Blusas',
                'slug' => Str::slug('Polos y Blusas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Jeans',
                'slug' => Str::slug('Jeans'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Ropa interior y pijamas',
                'slug' => Str::slug('Ropa interior y pijamas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Ropa de baño Mujer',
                'slug' => Str::slug('Ropa de baño Mujer'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Relojes Mujer',
                'slug' => Str::slug('Relojes Mujer'),
                'size' => true
            ],

            /* Mascotas */

            [
                'category_id' => 8,
                'name' => 'Alimentos para mascotas',
                'slug' => Str::slug('Alimentos para mascotas'),
            ],

            [
                'category_id' => 8,
                'name' => 'Cuidado e Higiene para mascotas',
                'slug' => Str::slug('Cuidado e Higiene para mascotas'),
            ],

            [
                'category_id' => 8,
                'name' => 'Accesorios',
                'slug' => Str::slug('Accesorios'),
            ],


            /* TV, audio y video */

            // [
            //     'category_id' => 2,
            //     'name' => 'TV y audio',
            //     'slug' => Str::slug('TV y audio'),
            // ],
            // [
            //     'category_id' => 2,
            //     'name' => 'Audios',
            //     'slug' => Str::slug('Audios'),
            // ],

            // [
            //     'category_id' => 2,
            //     'name' => 'Audio para autos',
            //     'slug' => Str::slug('Audio para autos'),
            // ],


            /* Computación */

            // [
            //     'category_id' => 4,
            //     'name' => 'Portátiles',
            //     'slug' => Str::slug('Portátiles'),
            // ],

            // [
            //     'category_id' => 4,
            //     'name' => 'PC escritorio',
            //     'slug' => Str::slug('PC escritorio'),
            // ],

            // [
            //     'category_id' => 4,
            //     'name' => 'Almacenamiento',
            //     'slug' => Str::slug('Almacenamiento'),
            // ],

            // [
            //     'category_id' => 4,
            //     'name' => 'Accesorios computadoras',
            //     'slug' => Str::slug('Accesorios computadoras'),
            // ],

            /* Moda */
            // [
            //     'category_id' => 5,
            //     'name' => 'Mujeres',
            //     'slug' => Str::slug('Mujeres'),
            //     'color' => true,
            //     'size' => true
            // ],

            // [
            //     'category_id' => 5,
            //     'name' => 'Hombres',
            //     'slug' => Str::slug('Hombres'),
            //     'color' => true,
            //     'size' => true
            // ],

            // [
            //     'category_id' => 5,
            //     'name' => 'Lentes',
            //     'slug' => Str::slug('Lentes'),
            // ],

            // [
            //     'category_id' => 5,
            //     'name' => 'Relojes',
            //     'slug' => Str::slug('Relojes'),
            // ],
        ];

        foreach ($subcategories as $subcategory) {

            Subcategory::create($subcategory);
        }
    }
}
