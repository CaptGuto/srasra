<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Pest\Arch\Support\UserDefinedFunctions;

Route::get('/', [HomeController::class, 'index']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'createUser'])->middleware('guest')->name('register');

//To create a user
Route::post('/user', [UserController::class, 'store'])->name('user');

//Logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');

//To show "post listing/job" page
Route::get('/createListing', [UserController::class, 'createListing']);

//To store a listing in database
Route::post('/', [HomeController::class, 'store']);





//To show single listing...keep at the bottom
Route::get('/job_listing/{id}', [HomeController::class, 'show'])->name('see_job_description');
