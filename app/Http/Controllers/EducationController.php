<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\Plan;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    public function indexHome()
    {
        $courses = Course::take(3)->with('subject', 'lessons')->get();

        return view('website.home', compact('courses'));

    }

    public function allCourses()
    {
        $allCourses = Course::with('subject', 'teacher')->paginate(10);
        $subjects = $allCourses
            ->pluck('subject')
            ->unique('id')
            ->values();

        return view('website.courses', compact('allCourses', 'subjects'));

    }

    public function courseDetails($id)
    {
        $course = Course::where('id', $id)->with('lessons', 'teacher', 'subject')->get();

        return view('website.pages.course-details', compact('course'));

    }

    public function allInstractors()
    {
        $instractors = Teacher::with('subject')->paginate(10);

        return view('website.pages.instractors', compact('instractors'));
    }

    public function deleteAccount()
    {
        $user = Auth::user();
        Auth::logout();
        User::where('id', $user->id)->delete();

        return view('website.pages.register');
    }

    public function myCourses()
    {
        $user_id = Auth::user()->id;
        $orders = Order::where('user_id', $user_id)->where('status', 'completed')->get();

        return view('website.pages.my-courses', compact('orders'));
    }

    public function myLessons($id)
    {

        $lessons = Course::with('lessons')->findOrFail($id);

        // return $lessons->lessons;
        return view('website.pages.my-lessons', compact('lessons'));
    }

    public function lessonDetails($id)
    {
        $lesson = Lesson::find($id);

        return view('website.pages.lesson-details', compact('lesson'));

    }

    public function plans(){
        $plans = Plan::all();
        return view('website.pages.plans',compact('plan'));
    }
}
