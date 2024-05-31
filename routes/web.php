<?php

use App\Http\Controllers\PortalController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sign-up', [RegistrationController::class, 'showRegsitrationForm'])->name('sign-up');
Route::post('/sign-up', [RegistrationController::class, 'register']);

Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login']);



Route::get('/admin/register', [AdminController::class, 'showRegsitrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register']);

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);


    Route::get('/student/dashboard', [PortalController::class, 'index']);



    Route::get('/admin/dashboard', [AdminController::class, 'index']);

// require __DIR__.'/auth.php';
