<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name = 'https://placehold.jp/30/dd6699/ffffff/640x480.png?text='.Str::slug($this->faker->sentence(),'-');
        return [
            'url' => 'products/' . $this->faker->image('public/storage/products', 500, 500, null, false)
            // 'url' => $name
        ];
    }
}
