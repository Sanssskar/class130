<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blogs', function () {
    return view('blogs');
});
Route::get('/courses', function () {
    return view('course.index');
});
