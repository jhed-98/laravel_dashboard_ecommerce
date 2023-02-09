<?php

namespace Database\Factories;

use App\Models\Slider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Slider>
 */
class SliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image_web' => 'sliders/webs/' . $this->faker->image('public/storage/sliders/webs', 3200, 960, null, false), //imagen1.jpg
            'image_app' => 'sliders/mobiles/' . $this->faker->image('public/storage/sliders/mobiles', 960, 960, null, false), //imagen1.jpg
            'heading' => $this->faker->sentence(3),
            'status' => $this->faker->randomElement([Slider::BORRADOR, Slider::PUBLICADO]),
        ];
    }
}
