<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenceController;
use App\Http\Controllers\DashboardController;


/**
 * Set homepage to '/home' or '/'
 **/
Route::middleware(['auth'])->group(function () {
    Route::resource('users', App\Http\Controllers\UserController::class)->middleware('admin');
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('dash');
    Route::resource('leaves', App\Http\Controllers\LeaveController::class);
    Route::get('absence', [AbsenceController::class, 'show'])->name('absence');
    Route::get('absence_search', [AbsenceController::class, 'search'])->name('absence.search');
    Route::view('/event', 'layouts.calendar')->name('event');
    Route::view('/pointage', 'layouts.pointage')->name('pointage');
    
});





Auth::routes(['register' => false]);
