<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index');
    }

    //API
    public function AllCategory()
    {
        $categories = Category::all();
        $categoryDetailsArray = [];

        foreach ($categories as $category) {
            $subcategory = Subcategory::where('category_id', $category['id'])->get();

            $item = [
                'id' => $category['id'],
                'name' => $category['name'],
                'slug' => $category['slug'],
                'icon' => Storage::url($category['icon']),
                'banner' => Storage::url($category['banner']),
                'image' => Storage::url($category['image']),
                'subcategory' => $subcategory
            ];

            array_push($categoryDetailsArray, $item);
        }
        return $categoryDetailsArray;
    }

    // Category $category, 
    public function getByCategory(Request $request)
    {
        $categoriesArray = [];

        $categories = Category::where('slug', $request->category)->get();
        if (sizeof($categories) != 0) {
            foreach ($categories as $category) {
                $item = [
                    "id" => $category->id,
                    "name" => $category->name,
                    "slug" => $category->slug,
                    "icon" => $category->icon,
                    "banner" => $category->banner,
                    "image" => $category->image,
                ];

                array_push($categoriesArray, $item);
            }

            return $categoriesArray;
        } else {
            return 'error 204';
        }
    }

    // Category $category, Subcategory $subcategory
    public function getBySubCategory(Request $request)
    {
        $subcategoryDetailsArray = [];

        // $subcategories = Subcategory::where('id', $subcategory->id)->where('category_id', $category->id)->first();

        $category = $request->category;
        $subcategories = Subcategory::where('slug', $request->subcategory)
            ->whereHas('category', function (Builder $query) use ($category) {
                $query->where('slug', $category);
            })->get();

        if (sizeof($subcategories) != 0) {
            foreach ($subcategories as $subcategory) {
                $item = [
                    'id' => $subcategory->id,
                    'category_name' =>  $subcategory->category->name,
                    'category_slug' =>  $subcategory->category->slug,
                    'name' =>  $subcategory->name,
                    'slug' =>  $subcategory->slug,
                    'color' =>  $subcategory->color,
                    'size' =>  $subcategory->size,
                ];
                array_push($subcategoryDetailsArray, $item);
            }
            return $subcategoryDetailsArray;
        } else {
            return 'error 204';
        }
    }

    public function showByCategory(Request $request)
    {
        $category = $request->category;

        $productsQuery = Product::query()->whereHas('subcategory.category', function (Builder $query) use ($category) {
            $query->where('slug', $category);
        });

        $products = $productsQuery->get();
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

    public function showBySubCategory(Request $request)
    {
        $category = $request->category;
        $subcategory = $request->subcategory;

        $productsQuery = Product::query()->whereHas('subcategory.category', function (Builder $query) use ($category) {
            // $query->where('id', $category->id);
            $query->where('slug', $category);
        });

        if ($subcategory) {
            $productsQuery = $productsQuery->whereHas('subcategory', function (Builder $query) use ($subcategory) {
                // $query->where('slug', $subcategory->slug);
                $query->where('slug', $subcategory);
            });
        }

        $products = $productsQuery->get();

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
