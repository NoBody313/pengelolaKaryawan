<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckUserSession
{
    public function handle(Request $request, Closure $next)
    {
        if (Session::has('pegawai_data_' . $request->route('nik_admedika'))) {
            return $next($request);
        }

        return redirect('/')->with('message', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
