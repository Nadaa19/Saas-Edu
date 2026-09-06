<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(Course $course)
    {
        $lessons = $course->lessons()->latest()->get();

        return view(
            'dashboard.pages.lessons.lessons-index',
            compact('course', 'lessons')
        );
    }

    public function store(Request $request, Course $course)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'video' => 'required',
        ]);

        $videoPath = $request->file('video')->store(
            'lessons',
            'public'
        );

        $course->lessons()->create([
            'title' => $request->title,
            'video' => $videoPath,
        ]);

        return to_route(
            'course.lessons.index',
            $course->id
        )->with('success', 'Lesson uploaded successfully.');
    }

    public function create(Course $course)
    {
        return to_route(
            'course.lessons.index',
            $course->id
        );
    }

    public function show(Course $course, Lesson $lesson)
    {
        return view(
            'dashboard.pages.lessons.lesson-show',
            compact('course', 'lesson')
        );
    }

    public function edit(Course $course, Lesson $lesson)
    {
        //
    }

    public function update(
        Request $request,
        Course $course,
        Lesson $lesson
    ) {
        //
    }

    public function destroy(
        Course $course,
        Lesson $lesson
    ) {
        $lesson->delete();

        return to_route(
            'course.lessons.index',
            $course->id
        )->with('success', 'Lesson deleted successfully.');
    }
}
