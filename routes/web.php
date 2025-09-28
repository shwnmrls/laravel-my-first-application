<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::resource('jobs', JobController::class);

