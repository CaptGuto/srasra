<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/job_listing/{id}', [HomeController::class, 'seeJobSpecification'])->name('see_job_description');
