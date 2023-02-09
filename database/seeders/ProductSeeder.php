<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(20)->create()->each(function(Product $product){
            
            Review::factory(7)->create([
                'product_id' => $product->id
            ]);
            
            Image::factory(3)->create([
                'imageable_id' => $product->id,
                'imageable_type' => Product::class
            ]);
            
        });
    }
}
