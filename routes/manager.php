<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\YearController;
use App\Http\Middleware\DashboardMiddleware;
use App\Http\Middleware\LoginMaddleware;
use Illuminate\Support\Facades\Route;

Route::get('', function () {
    return view('dashboard.pages.index');
})->middleware(DashboardMiddleware::class);

Route::middleware(LoginMaddleware::class)->group(function () {
    Route::resource('years', YearController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('teachers', TeacherController::class);

    Route::resource('managers', ManagerController::class);
    Route::get('logout', [LoginController::class, 'logout'])->name('dash.logout');

});
Route::middleware(DashboardMiddleware::class)->group(function () {

    Route::resource('course', CourseController::class);
    Route::resource('course.lessons', LessonController::class);

});

Route::get('login/form', [LoginController::class, 'loginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('dash.login');
