<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function createUser() {
        return view('register');
    }

    public function store($request) {
        $userDetails = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create($userDetails);

        auth()->login($user);

        return redirect('/')->with('message', 'User created and logged in');
    }

    //Show create listing
    public function createListing() {
        return view('createListing');
    }
}
