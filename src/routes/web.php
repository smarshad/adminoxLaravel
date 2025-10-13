<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [AdminLogin::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('admin-forgot-password', [RegisterController::class, 'forgotPasswordForm'])->name('admin.forgot-password');
Route::get('admin/dashboard1', [AdminController::class, 'dashboard1'])->name('admin.dashboard1');
Route::get('admin/dashboard2', [AdminController::class, 'dashboard2'])->name('admin.dashboard2');
