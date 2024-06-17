<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'createUser'])->middleware('guest');

//To create a user
Route::post('/users/{id}/add', [UserController::class, 'store']);

//To show "post listing/job" page
Route::get('/createListing', [UserController::class, 'createListing']);

//To store a listing in database
Route::post('/', [HomeController::class, 'store']);



//To show single listing...keep at the bottom
Route::get('/job_listing/{id}', [HomeController::class, 'show'])->name('see_job_description');