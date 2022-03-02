<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use Alert;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index(){

	return view('blog.index');
	}

    public function login(){
        return view('blog.login', [
            'title' => 'Login',
            'slug' => 'login'
        ]);
    }

// LOGIN CONTROLLER
    public function logProcess(Request $request){
        $valid = $request->validate([
            'email' => 'required|min:5|email:dns',
            'password'=> 'required'
        ]);

        $ingat = $request->remember ? true : false;
        if (Auth::attempt($valid, $ingat)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
        alert::warning('Akun tidak ditemukan!');

        return redirect()->back();
    }

    public function register(){
        return view('blog.register', [
            'title' => 'Register',
            'slug' => 'register',
        ]);
    }

// REGITSER CONTROLLER
    public function regProcess(Request $request){

        $validasi = $request->validate([
            'username' => 'required|min:5|max:155|unique:user',
            'email' => 'required|email:dns|unique:user',
            'password' => 'required|min:5',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $data = $request->all();
        $check = $this->create($data);

        if ($check) {
            alert::success('Selamat Akun Anda Berhasil Dibuat!');
        }
        return redirect('/');
    }

    public function create(array $data)
    {
       return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
      ]);

      }

// LOGOUT CONTROLLER
      public function logout(Request $request)
    {
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
    }

    public function profile(){

        return view('blog.profile', [
            'title' => 'About Me!',
            'slug' => 'profile',
        ]);
    }

}
