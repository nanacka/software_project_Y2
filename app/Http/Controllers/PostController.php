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
        $posts = Post::paginate(10);
        return view('user.index')->with('posts', $posts);
    }

    public function show(string $id)
    {

        $post = Post::findOrFail($id);

        

        return view('user.show', [
            'post' => $post
        ]);
        
    }

    public function showByUser(string $userId)
    {

        $posts = Post::where('user_id', $userId)->paginate(10);
        
        return view('user.account')->with('posts', $posts);
        
    }

}