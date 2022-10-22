<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\Post;
use CategoryResource;
use App\Models\Category;
use DashboardPostController;
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;


route::get('/register/gae-post/blabluebli', 'AuthController@register');
route::post('/register/gae-post/process', 'AuthController@regProcess');
// Login Route
Route::middleware('throttle:60,1')->group(function () {
    route::get('/login/gae-post', 'AuthController@index');
    route::post('/login/gae-post/process', 'AuthController@logProcess');
    route::post('/logout', 'AuthController@logout');
});


Route::middleware('auth')->group(function () {
    Route::get('/gae-post', function () {
        return view('dashboard.master');
    });

    // Postingan
    Route::get('/gae-post/buat/postingan/checkSlug', 'DashboardPostController@checkSlug');
    Route::resource('/gae-post/buat/postingan', DashboardPostController::class);

    // Kategori
    Route::resource('/gae-kategori/kategori', CategoryResource::class);
    Route::put('/gae-kategori/kategori/', 'CategoryResource@update')->name('category.edit');
});


// route untuk Postingan!
route::get('/profile', 'PostController@profile');

route::get('/', 'PostController@index')->name('home');

Route::get('/halaman-post', 'PostController@indexPost');
Route::get('/post/{post:slug}', 'PostController@post');
//Search Post
Route::get('/search', 'PostController@searchPost');


Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('blog.categories', [
        'title' => $category->name,
        'category' => $category->name,
        'postCategories' => $category->posts()->paginate(9),
    ]);
});
