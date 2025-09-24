<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\DietController;

// ---------------------
// Public / Welcome Page
// ---------------------
Route::get('/', function () {
    return view('welcome');
});

// ---------------------
// Doctor Authentication
// ---------------------
// Doctor Login page
Route::get('/Doctor/login', function () {
    return view('Doctor.auth.login');
})->name('Doctor.login');


Route::post('/Doctor/login/save', [Authcontroller::class, 'DocLogin'])
    ->name('Doctor.login.save');

Route::get('/dashboard', function () {
    return view('Doctor.dashboard');
})->name('dashboard');
// Doctor Registration Page
Route::get('/Doctor/registration', function () {
    return view('Doctor.Auth.signin');
})->name('Doctor.registration');

// Doctor Registration Save
Route::post('/Doctor/registration/save', [App\Http\Controllers\Authcontroller::class, 'savedoc'])
    ->name('Doctor.registration.save');

// ---------------------
// Doctor Dashboard
// ---------------------
Route::get('/dashboard', function () {
    return view('Doctor.dashboard');
})->name('dashboard');

// ---------------------
// Appointments
// ---------------------
Route::get('/appointments', [AppointmentController::class, 'index'])
    ->name('appointments.index');

Route::post('/appointments/save', [AppointmentController::class, 'save'])
    ->name('appointments.save');

// ---------------------
// Food Management
// ---------------------
Route::get('/food/add', function () {
    return view('diet.add_food');
})->name('food.add');

Route::post('/food/store', [DietController::class, 'addFood'])
    ->name('food.store');

// ---------------------
// Diet Plans
// ---------------------
Route::get('/diet/create', [DietController::class, 'showCreatePlan'])
    ->name('diet.create');

Route::post('/diet/store', [DietController::class, 'storeDietPlan'])
    ->name('diet.store');

Route::get('/diet/view/{patient_id}', [DietController::class, 'viewDietPlan'])
    ->name('diet.view');

Route::get('/chatbot', function () {
    return view('chatbot');
})->name('chatbot');

// Chatbot route for Doctors
Route::get('/doctor/chatbot', function () {
    return view('chatbot');
})->name('doctor.chatbot');

// Chatbot route for Patients
Route::get('/patient/chatbot', function () {
    return view('chatbot');
})->name('patient.chatbot');


use App\Http\Controllers\ChatbotController;






Route::get('/chatbot', function () {
    return view('chatbot');   
})->name('chatbot');

Route::post('/chatbot/message', [ChatbotController::class, 'message'])
    ->name('chatbot.message');




Route::get('/chatbot', [ChatbotController::class, 'index'])->name('chatbot');
Route::post('/chatbot/message', [ChatbotController::class, 'message'])->name('chatbot.message');


