<?php
// app/Http/Controllers/ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['reviews', 'images'])->get();


        $modifiedProducts = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'reviews' => $product->reviews->map(function ($review) {
                    return [
                        'user_name' => $review->user_name,
                        'comment' => $review->comment,
                    ];
                }),
                'images' => $product->images->map(function ($image) {
                    return [
                         $image->url1,
                         $image->url2,
                         $image->url3,
                     
                    ];
                }),
            ];
        });

        return $modifiedProducts;
    }
}
