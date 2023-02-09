<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $categories = [
        //     [
        //         'line_id' => 1,
        //         'name' => 'Refrigeradoras',
        //         'slug' => Str::slug('Refrigeradoras'),
        //         // 'icon' => '<i class="fas fa-mobile-alt"></i>
        //         'icon' => 'icons/ictecnologia.svg'
        //     ],
        //     [
        //         'line_id' => 1,
        //         'name' => 'Lavado y planchado',
        //         'slug' => Str::slug('Lavado y planchado'),
        //         // 'icon' => '<i class="fas fa-mobile-alt"></i>
        //         'icon' => 'icons/ictecnologia.svg'
        //     ],
        //     [
        //         'line_id' => 1,
        //         'name' => 'Electrodomésticos Cocina',
        //         'slug' => Str::slug('Electrodomésticos Cocina'),
        //         // 'icon' => '<i class="fas fa-tv"></i>
        //         'icon' => 'icons/add-circle.svg'
        //     ],

        //     [
        //         'name' => 'Consola y videojuegos',
        //         'slug' => Str::slug('Consola y videojuegos'),
        //         // 'icon' => '<i class="fas fa-gamepad"></i>
        //         'icon' => 'icons/add-circle.svg'
        //     ],

        //     [
        //         'name' => 'Computación',
        //         'slug' => Str::slug('Computación'),
        //         // 'icon' => '<i class="fas fa-laptop"></i>
        //         'icon' => 'icons/add-circle.svg'
        //     ],

        //     [
        //         'name' => 'Moda',
        //         'slug' => Str::slug('Moda'),
        //         // 'icon' => '<i class="fas fa-tshirt"></i>
        //         'icon' => 'icons/add-circle.svg'
        //     ],
        // ];

        $categories = [
            [
                'name' => 'Celulares y tablets',
                'slug' => Str::slug('Celulares y tablets'),
                // 'icon' => '<i class="fas fa-mobile-alt"></i>
                'icon' => 'categories/icons/icmobile.svg',
                'banner' => 'categories/banners/TELEFONÍA-207x211.png'
            ], 

            [
                'name' => 'Consola y videojuegos',
                'slug' => Str::slug('Consola y videojuegos'),
                // 'icon' => '<i class="fas fa-gamepad"></i>
                'icon' => 'categories/icons/icgame.svg',
                'banner' => 'categories/banners/CÓMPUTO-207x211.png'
            ],

            [
                'name' => 'Deportes y aire libre',
                'slug' => Str::slug('Deportes y aire libre'),
                // 'icon' => '<i class="fas fa-tshirt"></i>
                'icon' => 'categories/icons/icdeportes.svg',
                'banner' => 'categories/banners/Deporte-207x211.png'
            ],

            [
                'name' => 'Dormitorio',
                'slug' => Str::slug('Dormitorio'),
                // 'icon' => '<i class="fas fa-tshirt"></i>
                'icon' => 'categories/icons/icdormitorio.svg',
                'banner' => 'categories/banners/DORMITORIO-207x211.png'
            ],

            [
                'name' => 'Belleza y salud',
                'slug' => Str::slug('Belleza y salud'),
                // 'icon' => '<i class="fas fa-tshirt"></i>
                'icon' => 'categories/icons/icbelleza.svg',
                'banner' => 'categories/banners/belleza-207x211.png'
            ], 
            [
                'name' => 'Hombre',
                'slug' => Str::slug('Hombre'),
                // 'icon' => '<i class="fas fa-tv"></i>
                'icon' => 'categories/icons/ichombre.svg',
                'banner' => 'categories/banners/hombre-207x211.png'
            ],
            [
                'name' => 'Mujer',
                'slug' => Str::slug('Mujer'),
                // 'icon' => '<i class="fas fa-tv"></i>
                'icon' => 'categories/icons/icmujer.svg',
                'banner' => 'categories/banners/mujer-207x211.png'
            ],
            [
                'name' => 'Mascotas',
                'slug' => Str::slug('Mascotas'),
                // 'icon' => '<i class="fas fa-tv"></i>
                'icon' => 'categories/icons/icmascotas.svg',
                'banner' => 'categories/banners/CÓMPUTO-207x211.png'
            ],

            // [
            //     'name' => 'Hombre',
            //     'slug' => Str::slug('Hombre'),
            //     // 'icon' => '<i class="fas fa-laptop"></i>
            //     'icon' => 'icons/ichombre.svg'
            // ],

            // [
            //     'name' => 'Infantil',
            //     'slug' => Str::slug('Infantil'),
            //     // 'icon' => '<i class="fas fa-laptop"></i>
            //     'icon' => 'icons/icninos.svg'
            // ], 

            // [
            //     'name' => 'Muebles y organización',
            //     'slug' => Str::slug('Muebles y organización'),
            //     // 'icon' => '<i class="fas fa-tshirt"></i>
            //     'icon' => 'icons/icmuebles.svg'
            // ],

        ];

        foreach ($categories as $category) {
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(8)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
