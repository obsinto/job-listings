<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\RegisteredUserController;
use App\Jobs\TranslateJob;
use Illuminate\Support\Facades\Route;
use Modules\Job\Models\Job;


Route::view('/', 'home');
Route::get('test', function () {
    $job = Job::first();
    TranslateJob::dispatch($job);
    return 'Done!';
});


//Route::resource('jobs', JobController::class)->middleware('auth');

Route::view('/contact', 'contact');

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy']);




