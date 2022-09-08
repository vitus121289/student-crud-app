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
        $attributes = $this->validateStudent();

        $attributes['photo'] = request()->file('photo')->store('student_id');

        Student::create($attributes);

        return redirect('admin/students');
    }

    public function edit(Student $student) {
        return view('admin.students.edit', [
            'student' => $student
        ]);
    }

    public function update(Student $student) {
        $attributes = $this->validateStudent($student);

        if (isset($attributes['photo'])) {
            $attributes['photo'] = request()->file('photo')->store('student_id');
        }

        $student->update($attributes);

        return back();
    }

    public function destroy(Student $student) {
        $student->delete();

        return redirect('/admin/students');
    }

    private function validateStudent(?Student $student = null) {
        return request()->validate([
            'first_name' => ['required', 'max:255'],
            'middle_name' => ['required', 'max:255'],
            'last_name' => ['required', 'max:255'],
            'birthdate' => ['required', 'date'],
            'photo' => is_null($student) ? ['required', 'image'] : 'image',
            'section' => 'nullable',
            'address' => 'required'
        ]);
    }
}
