<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
use App\Models\PostCategory;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Post $post)
    {
        return view('dashboard.posts.index', [
            'posts' => $post->with('categories')->paginate(50)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::get(),
            'posts' => Post::get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|max:255',
            'excerpt' => 'required|max:255',
            'slug' => 'required|unique:post',
            'author' => 'required',
            'body' => 'required',
            'image' => 'image|file|max:5048',
        ]);

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $validate['image'] = $request->file('image')->move(public_path('storage/public/post-images'), $filename);
            $validate['image'] = $filename;
        }

        $post = Post::create($validate);

        $category_id = $request->category_id;
        $post->categories()->attach($category_id);
        return redirect('/gae-post/buat/postingan')->with('sukses', 'Post Successfully Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $postingan)
    {
        return view('dashboard.posts.show', [
            'post' => $postingan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $postingan)
    {

        return view('dashboard.posts.edit', [
            'post' => $postingan,
            'categories' => Category::get(),
            'oldcat' => PostCategory::where('post_id', $postingan->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $postingan)
    {
        $rules = [
            'judul' => 'required|max:255',
            'image' => 'image|file|max:6048',
            'excerpt' => 'required',
            'body' => 'required'
        ];
        if ($request->slug != $postingan->slug) {
            $rules['slug'] = 'required|unique:post';
        }
        $validasi = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->file('image')) {
                $simpan = Storage::disk('public')->delete('public/post-images/' . $postingan->image);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $validasi['image'] = $request->file('image')->move(public_path('storage/public/post-images'), $filename);
            $validasi['image'] = $filename;
        }

        $post = Post::whereId($postingan->id)->first();
        $post->update($validasi);
        $post->categories()->sync($request->category_id);
        return redirect('/gae-post/buat/postingan')->with('sukses', 'Post Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $postingan)
    {
        Storage::disk('public')->delete('public/post-images/' . $postingan->image);
        $postingan->categories()->detach();
        $isDeleted = Post::destroy($postingan->id);

        return redirect('/gae-post/buat/postingan')->with('sukses', 'Post Successfully Deleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
