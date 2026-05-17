<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;

class BookingController extends Controller
{
   public function index()
    {
        $enrollments = Enrollment::all();
        return view('enrollment.index', compact('enrollments'));
    }

    public function create()
    {
        $courses = Course::all();
        return view('enrollment.create',compact('courses'));
    }
    public function store(Request $request)
    {
        $enrollment = new Enrollment();
        $enrollment->name = $request->name;
        $enrollment->email = $request->email;
        $enrollment->course_id = $request->course_id;
        $enrollment->save();
        toast('enrollment Created Succesfully', 'success');
        return redirect()->route('booking.create');
    }
    public function edit($id)
    {
        $courses = Course::all();

        $enrollment = Enrollment::find($id);
        return view('enrollment.edit', compact('enrollment','courses'));
    }
    public function update(Request $request, $id)
    {
        $enrollment = new Enrollment();
        $enrollment->name = $request->name;
        $enrollment->email = $request->email;
        $enrollment->course_id = $request->course_id;
        $enrollment->save();
        toast('enrollment Updated Succesfully', 'success');
        return redirect()->route('booking.index');
    }
    public function delete($id)
    {
        $enrollment = Enrollment::find($id);
        $enrollment->delete();
        toast('enrollment Deleted Succesfully', 'success');
        return redirect('/enrollment/index');
    }
}
