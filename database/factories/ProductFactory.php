<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = $this->faker->sentence(6);

        $subcategory = Subcategory::all()->random();
        $category = $subcategory->category;

        $brand = $category->brands->random();

        if ($subcategory->color) {
            $quantity = null;
        } else {
            $quantity = 15;
        }

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'product_code' => $this->faker->numberBetween($min = 1000, $max = 9999), // 8567
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 99.99]), 
            'subcategory_id' => $subcategory->id,
            'brand_id' => $brand->id,
            'quantity' => $quantity,
            'status' => $this->faker->randomElement([Product::BORRADOR, Product::PUBLICADO]),
        ];
    }
}
