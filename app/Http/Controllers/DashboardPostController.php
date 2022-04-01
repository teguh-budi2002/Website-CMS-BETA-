<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Category;
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
            'posts' => $post->with(['category'])->get()
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
            'category_id' => 'required',
            'body' => 'required'
        ]);

       Post::create($validate, [
           'judul' => $request->judul,
           'slug' => $request->slug,
           'author' => $request->author,
           'body' => $request->body,
           'excerpt' => $request->excerpt,
       ])->save();
       return redirect('/gae-post/buat/postingan')->with('sukses', 'Postingan sukses di upload bro!');
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
        return view('dashboard.posts.edit',[
            'post' => $postingan,
            'categories' => Category::all()
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

            'category_id' => 'required',
            'body' => 'required'
        ];
        if($request->slug != $postingan->slug){
            $rules['slug'] = 'required|unique:post';
        }
        $validasi = $request->validate($rules);

        Post::where('id', $postingan->id)
              ->update($validasi);
        return redirect('/gae-post/buat/postingan')->with('sukses', 'Postingan sukses di update bro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $postingan)
    {
        Post::destroy($postingan->id);
        return redirect('/gae-post/buat/postingan')->with('sukses', 'Postingan sukses di hapus bro!');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
