<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         
        Storage::deleteDirectory('categories');
        Storage::deleteDirectory('categories/icons');
        Storage::deleteDirectory('categories/banners'); 
        Storage::deleteDirectory('subcategories');
        Storage::deleteDirectory('products');
        Storage::deleteDirectory('sliders/mobiles');
        Storage::deleteDirectory('sliders/webs');
 
        Storage::makeDirectory('categories');
        Storage::makeDirectory('categories/icons');
        Storage::makeDirectory('categories/banners'); 
        Storage::makeDirectory('subcategories');
        Storage::makeDirectory('products');
        Storage::makeDirectory('sliders/mobiles');
        Storage::makeDirectory('sliders/webs');

        $this->call(UserSeeder::class);
        $this->call(SliderSeeder::class);
        // $this->call(LineSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        
        $this->call(ProductSeeder::class);

        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);

        $this->call(SizeSeeder::class);

        $this->call(ColorSizeSeeder::class);
        
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('123456789'),
        // ]);
    }
}
