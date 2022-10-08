<?php

use App\Http\Controllers\ProductsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
Route::controller(ProductsController::class)->group(function() {
    Route::get('products/categories', 'allCategory');
    Route::get('products', 'allProducts');
    Route::get('products/{product_id}', 'singleProduct');
    Route::get('products/search/{title}', 'searchProduct');
    Route::get('products/category/{category_name}', 'categoryProduct');
    Route::post('products/add', 'addProducts');
    Route::put('products/{product_id}', 'updateProducts');
    Route::delete('products/{id}', 'deleteProduct');
});
