<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('course.index', compact('courses'));
    }

    public function create()
    {
        return view('course.create');
    }
    public function store(Request $request)
    {
        $course = new Course();
        $course->name = $request->full_name;
        $course->price = $request->price;
        $course->remarks = $request->remarks;
        $course->save();
        toast('Course Created Succesfully', 'success');
        return redirect('/course/create');
    }
    public function edit($id)
    {
        $course = Course::find($id);
        return view('course.edit', compact('course'));
    }
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $course->name = $request->full_name;
        $course->price = $request->price;
        $course->remarks = $request->remarks;
        $course->save();
        toast('Course Updated Succesfully', 'success');
        return redirect('/course/index');
    }
    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        toast('Course Deleted Succesfully', 'success');
        return redirect('/course/index');
    }
}
