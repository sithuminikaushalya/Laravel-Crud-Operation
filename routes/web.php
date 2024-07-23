<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/StudentSavePage', function () {
    return view('Index');
});

Route::controller(StudentController::class)->group(function () {
    Route::get('/AddStudent', 'Addstudent');
    Route::post('/saveStudent', 'save')->name('student.save'); // Ensure it's a POST route
});
