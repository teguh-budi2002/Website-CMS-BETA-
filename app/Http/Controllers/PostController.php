<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function indexPost(){

        return view('postingan.post-home',
        [
            'title' => 'Post Page!',
            'posts' => Post::with('category')->latest()->filter(request(['search', 'category']))->paginate(7),
        ]);
    }
}
