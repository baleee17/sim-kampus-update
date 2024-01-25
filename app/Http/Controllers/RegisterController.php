<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index () {
        return view('register.index',[
            'title'=>'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'alamat' => 'required|max:255',
            'phone' => 'required|min:8|max:12|regex:/^([0-9\s\-\+\(\)]*)$/|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // session()->flash('success', 'registrasi berhasil! tolong login');

        return redirect('/login')->with('success', 'registration success! please login');
    }
}
