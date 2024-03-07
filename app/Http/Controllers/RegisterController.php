<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class RegisterController extends Controller
{
    public function index() {
        return view('register.index');
    }

    public function store(request $request) {
       $request->validate([
        'name' => 'required|max:225',
        'password' => 'required|min:5|max:255'
       ]);


    }
}
