<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Homecontroller::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
