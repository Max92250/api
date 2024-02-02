<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'product_id' => 'required|exists:products,id',
            'user_name' => 'required',
            'comment' => 'required',
        ]);
        

        Review::create($data);

        return redirect()->back()->with('success', 'Review added successfully');
    }
}
