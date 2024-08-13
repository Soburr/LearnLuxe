<?php

use App\Http\Controllers\BiodataController;
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

Route::middleware(['auth:student'])->group(function() {
    Route::get('/student/dashboard', [PortalController::class, 'index']);
    Route::get('/student/dashboard/bio-data', [BiodataController::class, 'show']);
    Route::get('/student/dashboard/bio-data/view-profile/{id}', [BiodataController::class, 'viewProfile'])->name('view-profile');
    Route::get('/student/dashboard/bio-data/update-profile/{id}', [BiodataController::class, 'showUpdate'])->name('update-profile');
    Route::put('student/dashboard/bio-data/update-profile/{id}', [BiodataController::class, 'update'])->name('updateUserData');
});


Route::get('/logout', [PortalController::class, 'logout']);


Route::get('/admin/register', [AdminController::class, 'showRegsitrationForm'])->name('admin.register');
Route::post('/admin/register', [AdminController::class, 'register']);

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);


Route::get('/admin/dashboard', [AdminController::class, 'index']);

// require __DIR__.'/auth.php';
