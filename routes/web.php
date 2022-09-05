<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin/students', [AdminStudentController::class, 'index']);
Route::get('admin/students/create', [AdminStudentController::class, 'create']);
Route::post('admin/students/store', [AdminStudentController::class, 'store']);
Route::get('admin/students/{student}/edit', [AdminStudentController::class, 'edit']);
Route::patch('admin/students/{student}/', [AdminStudentController::class, 'update']);
Route::delete('admin/students/{student}', [AdminStudentController::class, 'destroy']);