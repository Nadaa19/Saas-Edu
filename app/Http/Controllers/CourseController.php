<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('dashboard.pages.courses.index', compact('courses', 'teachers', 'subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('dashboard.pages.courses.add', compact('teachers', 'subjects'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'img' => 'required',
            'teacher_id' => 'required',
            'subject_id' => 'required',

        ]);
        $new_img = $request->file('img')->store('courses', 'public');

        Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $new_img,
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,

        ]);

        return to_route('course.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {

        $course = Course::find($course->id);
        $teachers = Teacher::with('subject')->get();
        $subjects = Subject::all();

        return view('dashboard.pages.courses.edit', compact('course', 'teachers', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {

        if ($request->hasFile('img')) {
            Storage::disk('public')->delete($course->img);
            $new_img = $request->file('img')->store('courses', 'public');

        } else {
            $new_img = $course->img;
        }

        $course->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $new_img,
            'teacher_id' => $request->teacher_id,
            'subject_id' => $request->subject_id,
        ]);

        return to_route('course.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();

        return to_route('course.index');

    }
}
