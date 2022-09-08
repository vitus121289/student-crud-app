<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;

Route::get('admin/students', [AdminStudentController::class, 'index']);
Route::get('admin/students/create', [AdminStudentController::class, 'create']);
Route::get('admin/students/{student}/edit', [AdminStudentController::class, 'edit']);
Route::post('admin/students/store',[AdminStudentController::class, 'store']);
Route::patch('admin/students/{student}', [AdminStudentController::class, 'update']);
Route::delete('admin/students/{student}', [AdminStudentController::class, 'destroy']);