<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use Alert;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{

	public function index(){

		return view('blog.category-posts', [
			'title' => 'Kategori',
			'categories' => Category::get(),
		]);

	}
}


