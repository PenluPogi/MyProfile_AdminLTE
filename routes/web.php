<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    
    //routes for students


    Route::get('students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
    Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('students/create',[App\Http\Controllers\StudentController::class,'create'])->name('student.create');

    Route::get('students/edit',[App\Http\Controllers\StudentController::class,'edit'])->name('student.edit');
});
