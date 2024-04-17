<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{

    
   public function store(Request $request)
   {

        'book_image' => 'file|image',
      // $path = $request->file('image')->store('images');

       // Assuming you have an authenticated user
       //$user = auth()->user();
    //$user->images()->create(['file_path' => $path]);
    // 
    //return redirect()->back()->with('success', 'Image uploaded successfully.');
   }
}
