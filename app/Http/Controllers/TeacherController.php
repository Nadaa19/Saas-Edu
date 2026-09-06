<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::with('subject')->get();

        return view('dashboard.pages.teacher-index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();

        return view('dashboard.pages.teacher-add', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TeacherRequest $request)
    {
        // insert

        $img = $request->file('img')->store('teachers', 'public');
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'subject_id' => $request->subject,
            'bio' => $request->bio,
            'img' => $img,

        ]);

        $teachers = Teacher::with('subject')->get();

        return view('dashboard.pages.teacher-index', compact('teachers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Teacher $teacher)
    {
        return view('dashboard.pages.teacher-update');

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {
        // update

        return view('dashboard.pages.teacher-index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Teacher $teacher)
    {
        // delete
        Teacher::where('id', $teacher->id)->delete();
        Storage::disk('public')->delete($teacher->img);
        $teachers = Teacher::with('subject')->get();

        return view('dashboard.pages.teacher-index', compact('teachers'));
    }
}
