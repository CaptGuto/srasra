<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ApplicationController extends Controller
{
    public function index($list)
    {
        $joblisting = JobListing::findOrFail($list);
        return view('components.application_form', ['job' => $joblisting]);
    }

    public function store(Request $request, $jobId)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email'],
            'cover_letter' => 'required|string',
        ]);

        $job = JobListing::findOrFail($jobId);

        Application::create([
            'name' => $request->name,
            'email' => $request->email,
            'cover_letter' => $request->cover_letter,
            'job_id' => $job->id,
        ]);

        return Redirect::route('home')->with('message', 'Application submitted successfully!');
    }

    public function showApplication($id)
    {
        $Application = Application::where('job_id', $id)->get();
        $user = User::findOrFail($id);
        $listing = JobListing::findOrFail($id);


        // dd($Application[0]->name);
        return view('components.showApplications', ['applications' => $Application, 'company' => $user, 'jobListing' => $listing]);
    }
}
