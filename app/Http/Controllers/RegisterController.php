<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function view(){
        return view('index');
    }

    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required|min:3|max:10',
            'umur' => 'required|numeric',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:10',
        ]);

        User::create($validasi);
        return redirect('/login');
    }
}
