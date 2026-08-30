<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/media', [MediaController::class, 'index'])->name('media.index');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

// Admin Authentication Routes
Route::get('/login', [AdminController::class, 'login'])->name('login');
Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Protected Admin Management Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/inquiries', [AdminController::class, 'inquiries'])->name('admin.inquiries');
    Route::get('/admin/registrations', [AdminController::class, 'registrations'])->name('admin.registrations');
    Route::get('/admin/media', [MediaController::class, 'manage'])->name('media.admin');
});
