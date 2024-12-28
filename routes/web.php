<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::get('test', function () {
    Mail::to('deyvidsant@hotmail.com')->send(new JobPosted());
    return 'Done!';
});
Route::controller(JobController::class)->group(function () {
    Route::get('/jobs', 'index');
    Route::get('/jobs/create', 'create')->middleware('auth:web');
    Route::get('/jobs/{job}', 'show');

    Route::get('/jobs/{job}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'job');

    Route::patch('/jobs/{job}', 'update')
        ->middleware('auth')
        ->can('update', 'job');

    Route::delete('/jobs/{job}', 'destroy')->can('delete', 'job');
    Route::post('/jobs', 'store');
});

//Route::resource('jobs', JobController::class)->middleware('auth');

Route::view('/contact', 'contact');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);




