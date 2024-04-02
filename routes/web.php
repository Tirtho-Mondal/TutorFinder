<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/account/register',[AccountController::class,'registration'])->name('account.registration');
Route::post('/account/process-register', [AccountController::class, 'processRegistration'])->name('account.processregistration');
Route::get('/account/login', [AccountController::class, 'login'])->name('account.login');
Route::post('/account/authenticate',[AccountController::class,'authenticate'])->name('account.authenticate');
Route::get('/account/profile', [AccountController::class, 'profile'])->name('account.profile');
// Route::put('/account/update-profile', [AccountController::class, 'updateProfile'])->name('account.updateProfile');
Route::post('/account/logout', [AccountController::class,'logout'])->name('account.logout');

Route::post('account/updateProfile',[AccountController::class, 'updateProfile'])->name('account.updateProfile');


Route::post('account/update-profile-pic',[AccountController::class, 'updateProfilePic'])->name('account.updateProfilePic');
