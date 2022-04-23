<?php

use App\Http\Controllers\ProductController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// get all products
Route::get('products',[ProductController::class,'getProducts']);

// get product by   Id
Route::get('product/{id}',[ProductController::class,'getProductById']);

// add Product
Route::post('addProduct',[ProductController::class,'addProduct']);

// update product
Route::put('updateProduct/{id}',[ProductController::class,'updateProduct']);

// delete product
Route::delete('deleteProduct/{id}',[ProductController::class,'deleteProduct']);
