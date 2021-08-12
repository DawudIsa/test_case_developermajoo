<?php

namespace App\Http\Controllers;

//tambah code dibawah untuk menggunakan libary auth, request, session
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function index()
    {
        return view('admin/login');
    } 

    //function login
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("admin/login")->withSuccess('Login details are not valid');
    }

    //function dashboard
    public function dashboard()
    {
        //cek apakah sudah login atau belum, jika belum redirect ke halaman login
        if(Auth::check()){
            return view('admin/dashboard');
        }
  
        return redirect("admin/login")->withSuccess('You are not allowed to access');
    }

    //function logout
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
