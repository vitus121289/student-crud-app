<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        return view('admin.students.index', [
            'students' => Student::all()
        ]);
    }

    public function create() {
        return view('admin.students.create');
    }

    public function store() {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'birthdate' => ['required', 'date'],
            'photo' => ['image', 'nullable'],
            'section' => 'nullable',
            'address' => 'required'
        ]);

        Student::create($attributes);

        return redirect('admin/students');
    }

    public function edit(Student $student) {
        return view('admin.students.edit', [
            'student' => $student
        ]);
    }

    public function update(Student $student) {
        $attributes = request()->validate([
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'birthdate' => ['required', 'date'],
            'photo' => ['image', 'nullable'],
            'section' => 'nullable',
            'address' => 'required'
        ]);

        $student->update($attributes);

        return back();
    }

    public function destroy(Student $student) {
        $student->delete();

        return redirect('/admin/students');
    }
}
