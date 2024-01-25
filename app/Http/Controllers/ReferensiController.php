<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReferensiController extends Controller
{
    public function periode()
    {
        return view('menu.periode');
    }
    public function agama()
    {
        return view('menu.agama');
    }
    public function unit()
    {
        return view('menu.unit');
    }
    public function sistem()
    {
        return view('menu.sistem');
    }
    public function status()
    {
        return view('menu.status');
    }

    // public function authenticate(Request $request)
    // {
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('/');
    //     }
    // }

    public function referensi(Request $request)
    {
        Auth::agama();
        Auth::periode();
        Auth::unit();
        Auth::sistem();
        Auth::status();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}


