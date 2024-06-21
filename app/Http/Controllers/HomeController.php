<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {

        if (Auth()->check()) {

            /*
            $jobListing = JobListing::where('listedby', Auth::id())->get();
            */
            $jobListing = JobListing::where('listedby', Auth::id())->get();
            return view('manageListings', ['jobListing' => $jobListing]);
        } else {

            $listing = JobListing::latest()->filter(request(['tag', 'search']))->get();

            return view('Home', [
                'listing' => $listing
            ]);
        }
    }


    public function show($list)
    {
        $joblisting = JobListing::findOrFail($list);
        return view(
            'individual',
            [
                'jobListing' => $joblisting
            ]
        );
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => 'required',
            'location' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);



        
        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        

        $formFields['listedby'] = auth()->id();

        JobListing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully');
    }
}
