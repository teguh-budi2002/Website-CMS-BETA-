<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CategoryResource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.category.category',[
			'categories' => Category::get(),
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.category.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
			'name' => 'required',
			'slug' => 'required',
			'imageCategory' => 'image|file|max:6000'
		]);

		if($request->file('imageCategory')){
            $validated['imageCategory'] = $request->file('imageCategory')->store('/public/category-images');
        }

		Category::create($validated);
		return redirect('/gae-kategori/kategori')->with('sukses', 'Kategori sukses di upload bro!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $kategori)
    {
        return view('dashboard.category.category-edit', [
            'categories' => $kategori,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $kategori)
    {
        $rules = ([
            'name' => 'required',
            'slug' => 'required',
            'imageCategory' => 'image|file|max:6000'
        ]);
        $validated = $request->validate($rules);
            if($request->imageCategory){

                if($request->oldimage){
                    Storage::delete($request->oldimage);
                }

                $validated['imageCategory'] = $request->file('imageCategory')->store('/public/category-images');
            }
        $update = Category::where('id', $kategori->id)->update($validated);
        return redirect('/gae-kategori/kategori')->with('sukses', 'Kategori sukses di update bro!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $kategori)
    {
        if($kategori->imageCategory){
            Storage::delete($kategori->imageCategory);
        }
        Category::destroy($kategori->id);
        return redirect('/gae-kategori/kategori')->with('sukses', 'Postingan sukses di hapus bro!');
    }
}
