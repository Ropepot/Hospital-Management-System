<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;

use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [Homecontroller::class, 'redirect'])->middleware('auth', 'verified');

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

Route::get('/myappointment', [HomeController::class,'myappointment']); 

Route::get('/cancel_appoint/{id}', [HomeController::class,'cancel_appoint']); 

Route::get('/showappointment', [AdminController::class,'showappointment']); 

Route::get('/approved/{id}', [AdminController::class,'approved']); 

Route::get('/cancelled/{id}', [AdminController::class,'cancelled']); 

Route::get('/showdoctor', [AdminController::class,'showdoctor']); 

Route::get('/deletedoctor/{id}', [AdminController::class,'deletedoctor']); 

Route::get('/updatedoctor/{id}', [AdminController::class,'updatedoctor']); 

Route::post('/editdoctor/{id}', [AdminController::class,'editdoctor']); 

// Route::get('/emailview/{id}', [AdminController::class,'emailview']); 

// Route::post('/sendemail/{id}', [AdminController::class,'sendemail']); 

Route::get('/showinvoice', [AdminController::class,'showinvoice']); 

Route::get('/report/{id}', [AdminController::class,'report']); 

Route::post('/generateReport/{id}', [AdminController::class,'generateReport']); 

Route::get('/billing/{id}', [AdminController::class,'billing']); 

Route::post('/generateBill/{id}', [AdminController::class,'generateBill']); 

Route::get('/my_invoice', [HomeController::class,'my_invoice']); 

Route::get('/all_users', [AdminController::class,'all_users']); 

Route::get('/showPatientHistory/{id}', [AdminController::class,'showPatientHistory']); 

Route::get('/deleteUser/{id}', [AdminController::class,'deleteUser']); 

Route::get('/deleteAppointment/{id}', [AdminController::class,'deleteAppointment']); 

// Route::get('/showDoctorCount', [AdminController::class,'showDoctorCount']); 
