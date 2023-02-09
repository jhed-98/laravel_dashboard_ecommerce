<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\VisitorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('getvisitor', [VisitorController::class, 'getVisitorDetails']);
// Contact Page Route
Route::post('postcontact', [ContactController::class, 'PostContactDetails']);
// All Category Page Route
Route::get('allcategory', [CategoryController::class, 'AllCategory']);

Route::get('getbycategory/{category}', [CategoryController::class, 'getByCategory']);
Route::get('getbysubcategory/{category}/{subcategory}', [CategoryController::class, 'getBySubCategory']);

// Most Wanted
Route::get('productListByMostWanted', [ProductController::class, 'getListByMostWanted']);
// Offers
Route::get('productListByOffers', [ProductController::class, 'getListByOffers']);
// Product List Route
Route::get('productlistbyremark/{remark}', [ProductController::class, 'getListByRemark']);
// Slider
Route::get('allslider', [SliderController::class, 'getAllSlider']);
// List Category
Route::get('category/{category}', [CategoryController::class, 'showByCategory']);
// List Subategory
Route::get('category/{category}/{subcategory}', [CategoryController::class, 'showBySubcategory']);
