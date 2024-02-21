<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::name('web.')->group(function () {
    Route::get('/', function () {
        return Inertia::render('Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    })->name('home');
    Route::get('/rethnesh', function () {
        return Inertia::render('Rethnesh', [
            'canLogin' => Route::has('login'),
        ]);
    })->name('rethnesh');
    Route::get('/produkti1', function () {
        return Inertia::render('Produkti1', [
            'canLogin' => Route::has('login'),
        ]);
    })->name('produkti1');
    Route::get('/sherbimi1', function () {
        return Inertia::render('Sherbimi1', [
            'canLogin' => Route::has('login'),
        ]);
    })->name('sherbimi1');
    Route::get('/kontakt', function () {
        return Inertia::render('Kontakt', [
            'canLogin' => Route::has('login'),
        ]);
    })->name('kontakt');
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
