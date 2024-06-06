<?php

namespace App\Http\Controllers;

use App\Models\JobListing;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('Home', [
            'listing' => JobListing::latest()->filter(request(['tag']))->get()
        ]);
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
}
