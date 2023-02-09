<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function getAllSlider()
    {
        $sliders = Slider::where('status', 2)->get();
        $sliderArray = [];

        foreach ($sliders as $slider) {
            // $subcategory = Subcategory::where('category_id', $category['id'])->get();

            $item = [
                'id' => $slider->id,
                'heading' => $slider->heading,
                'image_web' => Storage::url($slider->image_web),
                'image_app' => Storage::url($slider->image_app),
            ];

            array_push($sliderArray, $item);
        }
        return $sliderArray;
    }
}
