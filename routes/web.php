<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\AdminController;

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


Route::get('/add_doctor_view', [AdminController::class,'addview']);   

Route::post('/upload_doctor', [AdminController::class,'upload']); 

Route::post('/appointment', [HomeController::class,'appointment']); 




