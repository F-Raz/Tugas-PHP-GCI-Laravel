<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function processRegistration(Request $request)
    {
        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        return view('welcome', [
            'first' => $firstName,
            'last' => $lastName,
        ]);
    }
}
