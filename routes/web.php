<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProcessController;

Route::get('/', HomeController::class)->name('home');

Route::get('/services', App\Http\Controllers\ServicesController::class)->name('services');

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');

Route::get('/process', [ProcessController::class, 'index'])->name('process');

Route::get('/about', AboutController::class)->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/contact', [ContactController::class, 'create'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');