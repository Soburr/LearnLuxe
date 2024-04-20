<?php

use App\Http\Controllers\PortalController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student-dashboard', [PortalController::class, 'index']);

Route::get('/sign-in', [RegistrationController::class, 'showRegistrationForm'])->name('sign-in');
Route::post('/sign-in', [RegistrationController::class, 'register']);

Route::get('/login', [RegistrationController::class, 'showLoginForm'])->name('login');
Route::post('/login', [RegistrationController::class, 'login']);


// require __DIR__.'/auth.php';
