<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class,'showHome'])->name('home');
Route::get('/about',[SiteController::class,'showAbout'])->name('about');
Route::get('/service',[SiteController::class,'showService'])->name('service');
Route::get('/portfolio',[SiteController::class,'showPortfolio'])->name('portfolio');
