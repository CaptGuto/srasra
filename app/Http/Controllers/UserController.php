<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function createUser()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $userDetails = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $userDetails['password'] = bcrypt($userDetails['password']);

        $user = User::create($userDetails);

        auth()->login($user);

        return redirect('/')->with('message', 'Account created successfully');
    }

    public function destroy(JobListing $listing)
    {
        $listing->delete();

        return Redirect::route('home')->with('message', 'Listing deleted successfully');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
        // return redirect('/login');
    }

    //Go to login page
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $userDetails = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt($userDetails)) {

            $request->session()->regenerate();

            $jobListing = JobListing::where('listedby', Auth::id())->get();
            // dd($jobListing);
            return view('manageListings', ['jobListing' => $jobListing, 'userID' => Auth::id()]);
        }
    }

    //Show create listing
    public function createListing()
    {
        if (Auth::check()) {
            return view('createListing');
        } else {
            return redirect()->route('login')->with('error', 'You must be logged in to create a listing.');
        }
    }

    //Show edit listing form
    public function edit(JobListing $jobListing)
    {
        return view('edit', ['jobListing' => $jobListing]);
    }

    //Update edited listing
    public function update(Request $request, JobListing $jobListing)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        $jobListing->update($formFields);

        return Redirect::route('home')->with('message', 'Listing updated successfully');
    }
}
