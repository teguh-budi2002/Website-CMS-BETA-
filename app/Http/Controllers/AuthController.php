<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index(){
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

            return redirect()->intended('/gae-post');
        }

        return redirect()->back();
    }

    // LOGOUT CONTROLLER
          public function logout(Request $request)
        {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
        }


// REGITSER CONTROLLER
    public function register(){
            return view('blog.register', [
                'title' => 'Register',
                'slug' => 'register',
            ]);
        }
    public function regProcess(Request $request){

        $validasi = $request->validate([
            'username' => 'required|min:5|max:155|unique:user',
            'email' => 'required|email:dns|unique:user',
            'password' => 'required|min:5',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        if ($check) {
            // alert::success('Selamat Akun Anda Berhasil Dibuat!');
        }
        return redirect('/login/gae-post');
    }

    public function create(array $data)
    {
       return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
      ]);

      }

    }
