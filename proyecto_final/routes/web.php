<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/', [CategoryController::class, 'principal']);
Route::get('/home', [CategoryController::class, 'index'])->name('home');


Route::get('/cars/{id}', [CarController::class, 'show']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/users', UserController::class);
    Route::resource('/cars', CarController::class);
});
