<?php

use App\Http\Controllers\EducationController;
use App\Http\Controllers\PaypalController;
use Illuminate\Support\Facades\Route;

Route::controller(EducationController::class)->group(function () {
    Route::get('/', 'indexHome');
    Route::get('courses', 'allCourses');
    Route::get('course/details/{id}', 'courseDetails')->name('course.details');
    Route::get('/instractors', 'allInstractors')->name('all.instractors');
    // Route::get('payment/{id}' , 'payment')->name('payment')->middleware(['auth','verified']);
    Route::delete('delete/account', 'deleteAccount')->name('delete.account');
    Route::get('my/courses/{id}', 'myCourses')->name('my.courses');
    Route::get('my/lessons/{id}', 'myLessons')->name('my.lessons');
    Route::get('lesson/detaials/{id}', 'lessonDetails')->name('lesson.details');

});
Route::get('profile', function () {
    return view('website.pages.profile');
})->name('profile.info');

Route::get('/security', function () {
    return view('website.pages.security');
})->middleware('auth')->name('security');

Route::controller(PaypalController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('payment/{course_id}', 'checkout')->name('checkout');
    Route::get('create/order/{id}', 'createOrder')->name('create.order');
    Route::get('order/success', 'success')->name('order.success');
    Route::get('order/cancel', 'cancel')->name('order.cancel');

});
