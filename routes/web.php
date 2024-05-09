<?php

use App\Http\Controllers\PortalController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth:student')->get('/student/dashboard', [PortalController::class, 'index']);

Route::get('/sign-up', [RegistrationController::class, 'showRegsitrationForm'])->name('sign-up');
Route::post('/sign-up', [RegistrationController::class, 'register']);

Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login']);

Route::middleware('auth:admin')->get('/admin/dashboard', [AdminController::class, 'index']);

// require __DIR__.'/auth.php';
