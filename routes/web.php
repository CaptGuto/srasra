<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/job_listing/{id}', [HomeController::class, 'show'])->name('see_job_description');

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//To create a user
Route::post('/users/{id}/add', [UserController::class, 'store']);