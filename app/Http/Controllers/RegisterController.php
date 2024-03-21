<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|max:255',  // Corrected max length
            'password' => 'required|min:5|max:255',
            'password2' => 'required|min:5|max:255|same:password'
        ]);

        User::create($validatedData);

        // Redirect to a success page or send a success notification
        return redirect('/login')->with('success', 'Registrasi berhasil!');
    }
}
