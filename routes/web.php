<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/media', [MediaController::class, 'index'])->name('media.index');
Route::get('/admin/media', [MediaController::class, 'manage'])->name('media.admin');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
