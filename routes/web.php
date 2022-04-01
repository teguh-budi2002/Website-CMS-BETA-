<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthController;
use DashboardPostController;


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


// Route untuk logreg!
route::get('/register/gae-post', 'AuthController@register');
route::post('/register/gae-post/process', 'AuthController@regProcess');
route::get('/login/gae-post', 'AuthController@index');
route::get('/login/gae-post/process', 'AuthController@logProcess');
route::get('/logout', 'AuthController@logout');


Route::middleware('auth')->group(function () {
    Route::get('/gae-post', function(){
        return view('dashboard.master');
    });
    Route::get('/gae-post/buat/postingan/checkSlug', 'DashboardPostController@checkSlug');
    Route::resource('/gae-post/buat/postingan', DashboardPostController::class);
});


// route untuk Postingan!
route::get('/profile', 'PostController@profile');

route::get('/', 'PostController@index')->name('home');

Route::get('/halaman-post', 'PostController@indexPost');
Route::get('/post/{post:slug}', function(Post $post) {
    return view('blog.postingan.view-post', [
        'post' => $post,
        'posts' => $post->with('category')->limit(6)->get(),
        'popular' => $post->orderBy('judul', 'asc')->limit(5)->get(),
    ]);
});

Route::get('/categories', 'CategoryController@index');
Route::get('/post/categories/{category:slug}', function(Category $category) {
    return view('blog.categories', [
        'title' => $category->name,
        'category' => $category->name,
        'author' => $category->posts,
        'posts' => Post::with('category')->paginate(8),
    ]);

});
