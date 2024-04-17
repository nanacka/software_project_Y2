<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Post;
//use App\Models\Tag;
//use App\Models\Comment;

use Auth;


class PostController extends Controller
{

    public function index()
    {
        //$posts = Post::paginate(10);
        $posts = Post::all();

        return view('user.index')->with('posts', $posts);
    }

    public function show(string $id)
    {

        $post = Post::findOrFail($id);

        

        return view('user.show', [
            'post' => $post
        ]);
        
    }

    public function showByUser(string $id)
    {

        $posts = Post::where('user_id', $id)->paginate(10);
        
        return view('user.account')->with(['userId' => $id,'posts'=> $posts]);
        
    }

    public function store(Request $request)
    {

        $book_image = $request->file('book_image');
        $extension = $book_image->getClientOriginalExtension();
        $filename = date('Y-m-d-His') . '_' . $request->title . '.' . $extension;

        $book_image->storeAs('public/images', $filename); // store the image
        //// Validate the incoming request
        //$request->validate([
        //    'title' => 'required|string',
        //    'description' => 'required|string',
        //    // Add validation rules for image fields if needed
        //]);
//
        //// Create a new post record in the database
        //$post = new Post();
        //$post->title = $request->title;
        //$post->description = $request->description;
        //$post->save();

        // Store the image if it exists in the request
        //if ($request->hasFile('image')) {
        //    $path = $request->file('image')->store('images');
        //    $image = new Image();
        //    $image->path = $path;
        //    $image->mime_type = $request->file('image')->getMimeType();
        //    $image->post_id = $post->id; // Assuming there's a foreign key relation to associate the image with the post
        //    $image->save();
        //}

        // Return a response indicating success
        //return response()->json(['message' => 'Post (and image) stored successfully'], 201);
    }
}
