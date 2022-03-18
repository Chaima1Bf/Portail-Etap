<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Auth\ForgotPassword;
use App\Http\Livewire\Auth\ResetPassword;
use App\Http\Livewire\Auth\SignUp;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Billing;
use App\Http\Livewire\Profile;
use App\Http\Livewire\Tables;
use App\Http\Livewire\StaticSignIn;
use App\Http\Livewire\StaticSignUp;
use App\Http\Livewire\LaravelExamples\Leaves;

use App\Http\Livewire\LaravelExamples\UserProfile;
use App\Http\Livewire\LaravelExamples\UserManagement;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PersonnelController;

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', Login::class)->name('login');

Route::get('/sign-up', SignUp::class)->name('sign-up');
Route::get('/login', Login::class)->name('login');

Route::get('/login/forgot-password', ForgotPassword::class)->name('forgot-password');

Route::get('/reset-password/{id}',ResetPassword::class)->name('reset-password')->middleware('signed');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
    Route::get('/leaves', leaves::class)->name('leaves');
    Route::get('/billing', Billing::class)->name('billing');
    Route::get('/billing', [App\Http\Controllers\ContactController::class, 'allcontacts'])->name('billing');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/tables', Tables::class)->name('tables');
    Route::get('/static-sign-in', StaticSignIn::class)->name('sign-in');
    Route::get('/static-sign-up', StaticSignUp::class)->name('static-sign-up');
    Route::get('/laravel-user-profile', UserProfile::class)->name('user-profile');
    Route::get('/laravel-user-management', UserManagement::class)->name('user-management');
});

Route::resource('/personnels','PersonnelController');
Route::get('/',function(){
    return view ('layouts.laravel-user-management');
});
// ----------------------------- contacts -----------------------------

//Route::get('allcontacts/page', [App\Http\Controllers\ContactController::class, 'allcontacts'])->middleware('auth')->name('allcontacts/page');
//Route::get('addcontact/page', [App\Http\Controllers\ContactController::class, 'addContact'])->middleware('auth')->name('addcontact/page');
//Route::get('contact/edit/{PERS_MAT_95}', [App\Http\Controllers\ContactController::class, 'editContact']);
//Route::post('contact/save', [App\Http\Controllers\ContactController::class, 'saveRecordContact'])->middleware('auth')->name('contact/save');
//Route::post('contact/delete', [App\Http\Controllers\ContactController::class, 'deleteRecord'])->middleware('auth')->name('contact/delete');
//Route::post('contact/update', [App\Http\Controllers\ContactController::class, 'updateRecord'])->middleware('auth')->name('contact/update');