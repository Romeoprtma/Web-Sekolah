<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Display the login form
    public function index() {
        return view('login.index'); // Pastikan Anda memiliki file view 'login.blade.php' di dalam folder resources/views
    }

    // Handle the login request
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if(Auth::user()->role == 'siswa'){
                return redirect()->intended('/profilSiswa'); 
            }
            else if(Auth::user()->role == 'guru'){
                return redirect()->intended('/profilGuru'); 
            }
            else if(Auth::user()->role == 'admin'){
                return redirect()->intended('/mainAdmin'); 
            }

            
        }
        
        return back()->with('loginError', 'Login Gagal');
    }
}
