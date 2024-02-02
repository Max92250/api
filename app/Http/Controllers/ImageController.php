<?php
// In app/Http/Controllers/ImageController.php
namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request)
    {
       $data =  $request->validate([
            'product_id' => 'required|exists:products,id',
            'url1' => 'required|url',
            'url2' => 'required|url',
            'url3' => 'required|url',

        ]);

     
        Image::create($data);

        return redirect()->back()->with('success', 'Review added successfully');
    }

   
}
