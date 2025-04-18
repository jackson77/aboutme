<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

// Main routes
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');
Route::get('/services', [PortfolioController::class, 'services'])->name('services');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// Contact form submission route
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

