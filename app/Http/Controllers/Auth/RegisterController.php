<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // Validation
        // You don't need an if statement because it will throw an exception so nothing else will run
        $this->validate($request, [
            'name' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',
        ]);

        dd('store');
        // store user
        // sign the user in
        // redirect
    }
}

// dd (diedump?) will kill the page and replace it with whatever you pass
// dd('abc');