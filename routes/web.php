<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LesionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.detail');
Route::get('/lesion/{id}', [LesionController::class, 'show'])->name('lesion.detail');

