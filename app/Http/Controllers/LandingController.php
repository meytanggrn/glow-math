<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Mengirim data user jika login, atau null jika guest
        $user = auth()->user(); // Mendapatkan user yang sedang login, atau null jika guest
        return view('landing', compact('user'));
    }
}
