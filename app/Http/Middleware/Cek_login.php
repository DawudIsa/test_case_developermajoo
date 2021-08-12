<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // panggil Facades Auth
//ketika sudah membuat middleware, setelah itu jangan lupa untuk meregristrasikan ke kernel.php
// Agar middleware kamu bisa terbaca oleh sistem.
// Buka di folder app/Http/Kernel.php 
//Dibuat oleh Dawud 10 Agustus 2021 14:00 WIB

class Cek_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);
        if (!Auth::check()) {
            return redirect('admin/login');
        }
        $user = Auth::user();
        // echo $user; exit();
        if($user->level == "admin")
            return $next($request);


        return redirect('admin/login')->with('error',"kamu gak punya akses");
    }
}
