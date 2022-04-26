<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\DashboardController;


/**
 * Set homepage to '/home' or '/'
 **/
Route::middleware(['auth'])->group(function () {
    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('admin');
    Route::resource('leaves', App\Http\Controllers\LeaveController::class);
    Route::redirect('/', route('leaves.index'));

    Route::get('/dash', [App\Http\Controllers\DashboardController::class, 'index']);


    Route::get('absence', [AbsenceController::class, 'show']);
});





Auth::routes(['register' => false]);
