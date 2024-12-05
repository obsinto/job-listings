<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs', 'index');
//    Route::get('/jobs/create', 'create');
//    Route::get('/jobs/{job}', 'show');
//    Route::get('/jobs/{job}/edit', 'edit');
//    Route::patch('/jobs/{job}', 'update');
//    Route::delete('/jobs/{job}', 'destroy');
//    Route::post('/jobs', 'store');
//});

Route::resource('jobs', JobController::class);

Route::view('/contact', 'contact');
Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [AuthenticatedSessionController::class, 'create']);
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
