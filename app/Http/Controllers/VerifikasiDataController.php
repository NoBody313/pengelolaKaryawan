<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifikasiDataController extends Controller
{
    public function index() {
        return view('verifikasi-data');
    }
}
