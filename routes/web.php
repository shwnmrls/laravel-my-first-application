<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => \App\Models\Job::with(['employer', 'tags'])->paginate(3)
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create', [
        'employers' => Employer::all(),
    ]);
})->name('jobs.create');

Route::post('/jobs', function () {
    request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
    ]);
    \App\Models\Job::create([
    'title' => request('title'),
    'salary' => request('salary'),
    'employer_id' => 1
    ]);
return redirect('/jobs');
});

Route::get('/jobs/{job}/edit', function (\App\Models\Job $job) {
    $employers = Employer::all();
    return view('jobs.edit', compact('job', 'employers'));
});

Route::patch('/jobs/{job}', function (\App\Models\Job $job) {

    request()->validate([
    'title' => ['required', 'min:3'],
    'salary' => ['required']
]);

$job->update([
    'title' => request('title'),
    'salary' => request('salary'),
]);

return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{job}', function (\App\Models\Job $job) {
    $job->delete();
    return redirect('/jobs');
});

Route::get('/jobs/{job}', function (\App\Models\Job $job) {
    return view('jobs.show', ['job' => $job]); 
});

