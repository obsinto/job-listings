<?php

namespace Modules\Employer\Routes;

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

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
