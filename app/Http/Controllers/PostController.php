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
            'title' => 'Author',
            'slug' => 'profile',
        ]);
    }

    public function indexPost(Post $post){

        return view('blog.postingan.post-home',
        [
            'title' => 'Halaman Postingan!',
            'posts' => Post::with('category')->latest()->filter(request(['search', 'category']))->paginate(7),
        ]);
    }

    public function post(Post $post){
        return view('blog.postingan.view-post', [
            'title' => $post->judul,
            'post' => $post,
            'posts' => $post->with('category')->latest()->limit(6)->get(),
            // 'popular' => $post->with('category')->orderBy('judul', 'asc')->limit(5)->get(),
        ]);
    }
}
