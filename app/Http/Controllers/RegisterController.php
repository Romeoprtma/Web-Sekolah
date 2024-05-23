<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{

    public function index(){
        return view('register.index', [

        ]);
    }

    public function register(Request $request)
    {
        $validateData = $request->validate([
            'username' => 'required|min:3|max:225|unique:users',
            'password' => 'required|min:5|max:225'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);     
         
        return redirect('/login')->with('success', 'Registration Successfull');
    }
  
}
