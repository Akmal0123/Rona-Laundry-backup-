<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/test', function () {
    return Inertia::render('test');
})->name('test');

Route::get('/landing', function () {
    return Inertia::render('LandingPage');
});

Route::get('/reservasi', function () {
    return Inertia::render('Reservasi');
});

Route::get('/test1', function () {
    return Inertia::render('test1');
});

Route::get('/masuk', function () {
    return Inertia::render('Register');
});

Route::get('/loh', function () {
    return Inertia::render('Login');
});

Route::get('/order', function () {
    return Inertia::render('Order');
});

Route::get('/admin-dashboard', function () {
    return Inertia::render('AdminDashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';