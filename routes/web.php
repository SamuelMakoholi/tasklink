<?php

use App\Http\Controllers\BrowseServicesController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('FrontPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('browse-services', [BrowseServicesController::class, 'index'])->name('customer.browse-services');
Route::get('contact-us', [ContactUsController::class, 'index'])->name('customer.contact-us');
