<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController as AdminLogin;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\EmailController;
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
    Route::get('/companies',[PageController::class,'companies'])->name('extra.pages.companies');
    Route::get('/members',[PageController::class,'members'])->name('extra.pages.members');
    Route::get('/members2',[PageController::class,'members2'])->name('extra.pages.members2');
    Route::get('/timeline',[PageController::class,'timeline'])->name('extra.pages.timeline');
    Route::get('/invoice',[PageController::class,'invoice'])->name('extra.pages.invoice');
    Route::get('/maintenance',[PageController::class,'maintenance'])->name('extra.pages.maintenance');
    Route::get('/comingsoon',[PageController::class,'comingsoon'])->name('extra.pages.comingsoon');
    Route::get('/faq',[PageController::class,'faq'])->name('extra.pages.faq');
    Route::get('/pricing',[PageController::class,'pricing'])->name('extra.pages.pricing');
    Route::get('/profile',[PageController::class,'profile'])->name('extra.pages.profile');
    Route::get('/email-template',[PageController::class,'emailTemplate'])->name('extra.pages.email-template');
    Route::get('/search-result',[PageController::class,'searchResult'])->name('extra.pages.search-result');
    Route::get('/sitemap',[PageController::class,'sitemap'])->name('extra.pages.sitemap');
});

Route::prefix('email')->group(function () {
    Route::get('/inbox',[EmailController::class,'inbox'])->name('email.inbox');
    Route::get('/compose',[EmailController::class,'compose'])->name('email.compose');
    Route::get('/read',[EmailController::class,'read'])->name('email.read');
});

Route::get('/calendar',[PageController::class,'calendar'])->name('calendar');
Route::get('/todo',[PageController::class,'todo'])->name('todo');
Route::get('/tickets',[PageController::class,'tickets'])->name('tickets');
Route::get('/task-board',[PageController::class,'taskboard'])->name('taskboard');