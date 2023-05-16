<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class BlogPostsController extends Controller
{
    //
     public function index()
     {
        $posts=Post::all();
        return view('blogposts.index',[
            'posts'=>$posts,
        ]);
     }
     public function show($slug)
     {
        $posts=Post::all();
        $post=Post::findOrFail($slug);
        return view('blogposts.show',[
            'post'=>$post,
            'posts'=>$posts,
        ]);
     }

}
