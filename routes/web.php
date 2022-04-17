<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AuthController;
use DashboardPostController;
use CategoryResource;


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

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('blog.categories', [
        'title' => $category->name,
        'category' => $category->name,
        'categories' => $category->posts()->paginate(9),
    ]);

});
