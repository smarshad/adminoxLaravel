<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [AdminLogin::class, 'index'])->name('login');
Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('admin-forgot-password', [RegisterController::class, 'forgotPasswordForm'])->name('admin.forgot-password');
Route::get('admin/dashboard1', [AdminController::class, 'dashboard1'])->name('admin.dashboard1');
Route::get('admin/dashboard2', [AdminController::class, 'dashboard2'])->name('admin.dashboard2');

Route::prefix('pages')->group(function () {
    Route::get('/starter',[PageController::class,'starter'])->name('pages.starter');
    Route::get('/login',[PageController::class,'login'])->name('pages.login');
    Route::get('/register',[PageController::class,'register'])->name('pages.register');
    Route::get('/logout',[PageController::class,'logout'])->name('pages.logout');
    Route::get('/recoverpw',[PageController::class,'recoverpw'])->name('pages.recoverpw');
    Route::get('/lock-screen',[PageController::class,'lockScreen'])->name('pages.lockscreen');
    Route::get('/confirm-mail',[PageController::class,'confirmMail'])->name('pages.confirmmail');
    Route::get('/page-not-found',[PageController::class,'notFound'])->name('pages.notfound');
    Route::get('/page-not-found-alt',[PageController::class,'notFoundAlt'])->name('pages.notfoundalt');
    Route::get('/page-500',[PageController::class,'errorPage'])->name('pages.500');
});


Route::prefix('extra-pages')->group(function () {
    Route::get('/about',[PageController::class,'about'])->name('extra.pages.about');
    Route::get('/contact',[PageController::class,'contact'])->name('extra.pages.contact');
    
});
