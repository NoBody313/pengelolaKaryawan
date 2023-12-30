<?php

namespace App\Http\Controllers;

use App\Models\PegawaiData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index($nik_admedika)
    {
        $data = PegawaiData::where('nik_admedika', $nik_admedika)->first();
        return view('user.dashboard-user', ['data' => $data]);
    }

    public function logout($nik_admedika)
    {
        // Construct the session key based on nik_admedika
        $sessionKey = 'pegawai_data_' . $nik_admedika;

        // Clear the user session for the specific nik_admedika
        Session::forget($sessionKey);

        // Redirect to the login form or any other page
        return redirect('/');
    }
}
