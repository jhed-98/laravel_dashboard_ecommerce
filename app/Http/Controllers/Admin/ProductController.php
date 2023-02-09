<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    //API
    public function getListByMostWanted()
    {
        // $products = Product::where('status', 2)->inRandomOrder()->take(4)->get();
        $products = Product::where('status', 2)->latest('created_at')->take(4)->get();

        $productsArray = [];

        foreach ($products as $product) {
            $imagesArray = [];
            $images = Image::where('imageable_id', $product['id'])->get();
            foreach ($images as $image) {
                $item = [
                    'id' => $image['id'],
                    'url' => Storage::url($image['url']),
                    'imageable_id' => $image['imageable_id'],
                ];
                array_push($imagesArray, $item);
            }

            $item = [
                'id' => $product['id'],
                'name' => $product['name'],
                'slug' => $product['slug'],
                'product_code' => $product['product_code'],
                'description' => $product['description'],
                'price' => $product['price'],
                'special_price' => $product['special_price'],
                'subcategory_id' => $product->subcategory->id,
                // 'category_id' => $product->subcategory->category->id,
                'category_name' => $product->subcategory->category->name,
                'category_slug' => $product->subcategory->category->slug,
                'brand_id' => $product->brand->id,
                'brand_name' => $product->brand->name,
                'quantity' => $product['quantity'],
                'reviews_count' => $product->reviews_count,
                'rating' => $product->rating,
                'images' => $imagesArray,
            ];

            array_push($productsArray, $item);
        }

        return $productsArray;
    }

    public function getListByOffers()
    {
        // $products = Product::where('status', 2)->inRandomOrder()->take(4)->get();
        $products = Product::where('status', 2)->latest('created_at')->take(10)->get();

        $productsArray = [];

        foreach ($products as $product) {
            $imagesArray = [];
            $images = Image::where('imageable_id', $product['id'])->get();
            foreach ($images as $image) {
                $item = [
                    'id' => $image['id'],
                    'url' => Storage::url($image['url']),
                    'imageable_id' => $image['imageable_id'],
                ];
                array_push($imagesArray, $item);
            }

            $item = [
                'id' => $product['id'],
                'name' => $product['name'],
                'slug' => $product['slug'],
                'product_code' => $product['product_code'],
                'description' => $product['description'],
                'price' => $product['price'],
                'special_price' => $product['special_price'],
                'subcategory_id' => $product->subcategory->id,
                // 'category_id' => $product->subcategory->category->id,
                'category_name' => $product->subcategory->category->name,
                'category_slug' => $product->subcategory->category->slug,
                'brand_id' => $product->brand->id,
                'brand_name' => $product->brand->name,
                'quantity' => $product['quantity'],
                'reviews_count' => $product->reviews_count,
                'rating' => $product->rating,
                'images' => $imagesArray,
            ];

            array_push($productsArray, $item);
        }

        return $productsArray;
    }

    public function getListByRemark(Request $request)
    { 
        $remark = $request->remark;
        
        $products = Product::where('status', 2)->where('remark', $remark)->limit(4)->get();
        $productsArray = [];

        foreach ($products as $product) {
            $imagesArray = [];
            $images = Image::where('imageable_id', $product['id'])->get();
            foreach ($images as $image) {
                $item = [
                    'id' => $image['id'],
                    'url' => Storage::url($image['url']),
                    'imageable_id' => $image['imageable_id'],
                ];
                array_push($imagesArray, $item);
            }

            $item = [
                'id' => $product['id'],
                'name' => $product['name'],
                'slug' => $product['slug'],
                'product_code' => $product['product_code'],
                'description' => $product['description'],
                'price' => $product['price'],
                'special_price' => $product['special_price'],
                'subcategory_id' => $product->subcategory->id,
                // 'category_id' => $product->subcategory->category->id,
                'category_name' => $product->subcategory->category->name,
                'category_slug' => $product->subcategory->category->slug,
                'brand_id' => $product->brand->id,
                'brand_name' => $product->brand->name,
                'quantity' => $product['quantity'],
                'reviews_count' => $product->reviews_count,
                'rating' => $product->rating,
                'images' => $imagesArray,
            ];

            array_push($productsArray, $item);
        }

        return $productsArray;

    }
}
