<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductReviewController extends Controller
{
    public function getProductReviews($productId)
    {
        $product = Product::with(['reviews','images'])->find($productId);

        if (!$product) {
            return response()->json(['error' => 'Product not found'], 404);
        }

        $reviews = $product->reviews;

        return response()->json(['product' => $product]);
    }
}
