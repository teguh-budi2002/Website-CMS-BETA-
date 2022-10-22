<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Post $post)
    {

        $posts = $post->latest()->limit(9)->get();

        return view('blog.layouts.master', compact('posts'));
    }

    public function profile()
    {

        return view('blog.profile', [
            'title' => 'Author',
            'slug' => 'profile',
        ]);
    }

    public function indexPost(Post $post)
    {

        return view(
            'blog.postingan.post-home',
            [
                'title' => 'Halaman Postingan!',
                'posts' => Post::with('categories')->latest()->filter(request(['search', 'categories']))->paginate(6),
            ]
        );
    }

    public function post(Post $post)
    {
        return view('blog.postingan.view-post', [
            'title' => $post->judul,
            'post' => $post->with('categories')->first(),
            'randoms' => $post->inRandomOrder()->limit(8)->get(),
        ]);
    }

    public function searchPost()
    {
        $searching = Post::with('categories')->filter(request(['search', 'categories']))->get();

        return view('blog.search.showSearchPost', ['posts' => $searching, 'searching' => request('search')]);
    }
}
