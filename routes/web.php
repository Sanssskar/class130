<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PageController;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Pages
Route::get('/',[PageController::class ,'index'] );
Route::get('/about',[PageController::class,'about'] );
Route::get('/service',[PageController::class,'service']);
Route::get('/contact', [PageController::class,'contact']);
Route::get('/blogs', [PageController::class,'blogs']);

//Course
Route::get('/course/index',[CourseController::class,'index']);
Route::get('/course/create',[CourseController::class,'create']);
Route::post('/course/store',[CourseController::class,'store']);
Route::get('/course/edit/{id}',[CourseController::class,'edit']);
Route::patch('/course/update/{id}',[CourseController::class,'update']);
Route::delete('/course/delete/{id}',[CourseController::class,'delete']);


Route::get('/booking/index',[BookingController::class,'index'])->name('booking.index');
Route::get('/booking/create',[BookingController::class,'create'])->name('booking.create');
Route::post('/booking/store',[BookingController::class,'store'])->name('booking.store');
Route::get('/booking/edit/{id}',[BookingController::class,'edit'])->name('booking.edit');
Route::patch('/booking/update/{id}',[BookingController::class,'update'])->name('booking.update');
Route::delete('/booking/delete/{id}',[BookingController::class,'delete'])->name('booking.delete');
