<?php

use App\Models\Course;
use Illuminate\Http\Request;
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
Route::get('/course/index', function () {
    $courses = Course::all();
    return view('course.index',compact('courses'));
});
Route::get('/course/create', function () {
    return view('course.create');
});
Route::post('/course/store', function (Request $request) {
    $course = new Course;
    $course->name = $request->full_name;
    $course->price = $request->price;
    $course->remarks = $request->remarks;
    $course->save();
    toast('Course Created Succesfully', 'success');
    return redirect('/course/create');
});
//model ra migration
