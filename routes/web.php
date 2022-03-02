<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// route::get('/admin', [AuthController::class, 'admin'])->middleware('auth');
// Auth::routes(['verify' => true]);

// Route untuk logreg!
route::get('/register', 'AuthController@register');
route::post('/register/process', 'AuthController@regProcess');
route::get('/login/process', 'AuthController@logProcess');
route::get('/login', 'AuthController@login');
route::get('/logout', 'AuthController@logout');

// route untuk CRUD!
// Route::get('/category','CategoryController@cat');
// Route::get('category/create', 'CategoryController@create');
// Route::post('category/store/','CategoryController@store');
// Route::get('category/delete/{id}','CategoryController@delete');
// Route::get('/edit/{id}','CategoryController@edit'); //route untuk ke halaman edit data
// Route::post('/edit/update/{id}','CategoryController@update'); //route untuk mengupdate data ke database

// route untuk Postingan!
route::get('/profile', 'AuthController@profile');

route::get('/', 'AuthController@index')->name('home');

Route::get('/halaman-post', 'PostController@indexPost');
Route::get('halaman-post/post/view/{post:slug}', function(Post $post) {
    return view('postingan.view-post', [
        'title' => $post->judul,
        'author' => $post->author,
        'body' => $post->body,
        'posts' => $post->with('category')->limit(6)->get(),
        'popular' => $post->orderBy('judul', 'asc')->limit(6)->get(),
    ]);
});

Route::get('post/categories', 'CategoryController@index');
Route::get('/post/categories/{category:slug}', function(Category $category) {
    return view('blog.categories', [
        'title' => $category->name,
        'category' => $category->name,
        'author' => $category->posts,
        'posts' => $category->posts,
    ]);

});
