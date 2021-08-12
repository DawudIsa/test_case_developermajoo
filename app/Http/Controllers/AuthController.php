<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//gunakan library untuk menghandle Authentication
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
// use Validator;
// //gunakan library hash untuk menenkripsi password
// use Hash;
// use Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin/login');
    }

    //proses login
    public function proses_login(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
        //echo '<pre>'; print_r($_POST); 
        $credentials = $request->only('email', 'password');
        //echo  print_r($credentials);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            //echo $user->level; exit();
            if ($user->level == 'admin') {
                return redirect()->intended('admin/product');
            }
            
            return redirect('/');
        }
        //echo Auth::attempt($credentials); exit();
        // return redirect('admin/login')->withSuccess('Oppes! Silahkan Cek Inputanmu');
        return view('admin/login',['notif' => "Login gagal! Silahkan ulangi kembali"]);
    }
    //proses logout
    public function logout(Request $request) {
        $request->session()->flush();
        Auth::logout();
        return Redirect('admin/login');
    }
    // //cek apakah user sudah login atau belum, Jika sudah maka arahkan ke halaman admin area
    // public function showFormLogin()
    // {
    //     if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
    //         //Login Success
    //         return redirect()->route('admin/product');
    //     }
    //     return view('admin/login');
    // }

    // public function login(Request $request)
    // {
    //     $rules = [
    //         'email'                 => 'required|email',
    //         'password'              => 'required|string'
    //     ];
  
    //     $messages = [
    //         'email.required'        => 'Email wajib diisi',
    //         'email.email'           => 'Email tidak valid',
    //         'password.required'     => 'Password wajib diisi',
    //         'password.string'       => 'Password harus berupa string'
    //     ];
  
    //     $validator = Validator::make($request->all(), $rules, $messages);
  
    //     if($validator->fails()){
    //         return redirect()->back()->withErrors($validator)->withInput($request->all);
    //     }
  
    //     $data = [
    //         'email'     => $request->input('email'),
    //         'password'  => $request->input('password'),
    //     ];
  
    //     Auth::attempt($data);
  
    //     if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
    //         //Login Success
    //         return redirect()->route('home');
  
    //     } else { // false
  
    //         //Login Fail
    //         Session::flash('error', 'Email atau password salah');
    //         return redirect()->route('login');
    //     }
  
    // }

    // public function logout()
    // {
    //     Auth::logout(); // menghapus session yang aktif
    //     return redirect()->route('login');
    // }

}
