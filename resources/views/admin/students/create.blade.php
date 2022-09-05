@extends('layout')
@section('content')
    <h1>Add a student</h1>
    <form action="/admin/students/store" method="post">
        @csrf
        <div class="mt-2 flex">
            <label for="first_name">First Name</label>
            <input class="border border-gray-200 m-2" type="text" name="first_name" id="first_name" required>
            @error('first_name')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2 flex">
            <label for="middle_name">Middle Name</label>
            <input class="border border-gray-200 m-2" type="text" name="middle_name" id="middle_names" required>
            @error('middle_name')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2 flex">
            <label for="last_name">Last Name</label>
            <input class="border border-gray-200 m-2" type="text" name="last_name" id="last_name" required>
            @error('last_name')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2 flex">
            <label for="birthdate">Birthdate</label>
            <input class="border border-gray-200 m-2" type="date" name="birthdate" id="birthdate" required>
            @error('birthdate')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2 flex">
            <label for="photo">Photo</label>
            <input class="border border-gray-200 m-2" type="file" name="photo" id="photo">
            @error('photo')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2 flex">
            <label for="section">Section</label>
            <textarea class="border border-gray-200 m-2" name="section" id="section"></textarea>
            @error('section')
                {{ $message }}
            @enderror
        </div>
        <div class="mt-2 flex">
            <label for="address">Address</label>
            <textarea class="border border-gray-200 m-2" name="address" id="address" required></textarea>
            @error('address')
                {{ $message }}
            @enderror
        </div>
        <button type="submit">Add Student</button>
    </form>
@endsection