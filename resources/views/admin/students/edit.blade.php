@extends('layout')
@section('content')
    <h1>Edit Student</h1>
    <form action="/admin/students/{{ $student->id }}" method="post">
        @csrf
        @method('PATCH')
        <div>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" value="{{ $student->first_name }}" required>
            @error('first_name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="middle_name">Middle Name</label>
            <input type="text" name="middle_name" id="middle_name" value="{{ $student->middle_name }}" required>
            @error('middle_name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="{{ $student->last_name }}" required>
            @error('last_name')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="birthdate">Birthdate</label>
            <input type="date" name="birthdate" id="birthdate" value="{{ $student->birthdate }}" required>
            @error('birthdate')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="photo">Photo</label>
            <input type="text" name="photo" id="photo">
            @error('photo')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="section">Section</label>
            <textarea name="section" id="section">{{ $student->section }}</textarea>
            @error('section')
                {{ $message }}
            @enderror
        </div>
        <div>
            <label for="address">Address</label>
            <textarea name="address" id="address" required>{{ $student->address }}</textarea>
            @error('address')
                {{ $message }}
            @enderror
        </div>
        <button type="submit">Save Changes</button>
    </form>
@endsection