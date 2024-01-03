<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfSessionActive
{
    public function handle($request, Closure $next)
    {
        // Jika sesi sudah aktif, arahkan ke halaman lain
        if (Session::has('user_id')) {
            return redirect('/home'); // Ganti '/home' dengan URL halaman beranda Anda
        }

        return $next($request);
    }
}
