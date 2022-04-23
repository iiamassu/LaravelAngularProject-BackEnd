<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //getProducts
    public function getProducts() {
        return response()->json(Product::all(),200);
    }
    
    //getProductById
    public function getProductById($id) {
        $product = Product::find($id);
        
        if(is_null($product)){
            return response()->json(['message' => 'Produit introvable'],404);
        }

        return response()->json(Product::find($id),200);
    }

    //addProduct
    public function addProduct(Request $request) {
        $product = Product::create($request->all());
        return response($product,201);
    }

    //updateProduct
    public function updateProduct(Request $request, $id) {
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produit introvable'],404);
        }
        $product->update($request->all());
        return response($product,200);
    }

    //deleteProduct
    public function deleteProduct(Request $request, $id) {
        $product = Product::find($id);
        if(is_null($product)){
            return response()->json(['message' => 'Produit introvable'],404);
        }
        $product->delete();
        return response(null,204);
    }
    




}
