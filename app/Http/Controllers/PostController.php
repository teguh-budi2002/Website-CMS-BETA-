<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Post $post){

        $posts = $post->latest()->limit(8)->get();

        return view('blog.layouts.master', compact('posts'));
    }

    public function profile(){

        return view('blog.profile', [
            'title' => 'About Me!',
            'slug' => 'profile',
        ]);
    }

    public function indexPost(Post $post){

        return view('blog.postingan.post-home',
        [
            'title' => 'Post Page!',
            'posts' => Post::with('category')->latest()->filter(request(['search', 'category']))->paginate(7),
        ]);
    }
}
