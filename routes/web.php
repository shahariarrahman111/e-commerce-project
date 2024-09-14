<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home',[TeacherController::class, 'viewTeacher'])->name('home');
Route::post('/store_teacher', [TeacherController::class, 'storeTeacher'])->name('store_teacher');
Route::get('/edit_teacher', [TeacherController::class, 'editTeacher'])->name('edit.teacher');
Route::get('/update_teacher/{id}',[TeacherController::class, 'updateTeacher'])->name('update_teacher');
Route::put('/submit_teacher/{id}', [TeacherController::class, 'submitTeacher'])->name('submit_teacher');
Route::get('/delete_teacher/{id}', [TeacherController::class, 'deleteTeacher'])->name('delete_teacher');


// Student  All Route
// Starts to here....


Route::get('/student_home',[StudentController::class, 'viewStudent'])->name('student_home');
Route::post('/store_student', [StudentController::class, 'storeStudent'])->name('store_student');
Route::get('/edit_student', [StudentController::class, 'editStudent'])->name('edit.student');
Route::get('/update_student/{id}',[StudentController::class, 'updateStudent'])->name('update_student');
Route::put('/submit_student/{id}', [StudentController::class, 'submitStudent'])->name('submit_student');
Route::get('/delete_student/{id}', [StudentController::class, 'deleteStudent'])->name('delete_student');


// Class test ecmmerce project

Route::get('/admin', function() {
    return view('admin.header');
});


Route::get('/admin_dashboard', function() {
    return view('admin.home.home');
});