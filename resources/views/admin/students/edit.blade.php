@extends('layout')
@section('content')
    <x-forms.section heading="Edit Student Data">
        <form action="/admin/students/{{ $student->id }}" method="post">
            @csrf
            @method('PATCH')
            <x-forms.input name="first_name" value="{{ $student->first_name }}" type="text" required/>
            <x-forms.input name="middle_name" value="{{ $student->middle_name }}" type="text" required/>
            <x-forms.input name="last_name" value="{{ $student->last_name }}" type="text" required/>
            <x-forms.input name="birthdate" value="{{ $student->birthdate}}" type="date" required/>
            <x-forms.input name="photo" type="file" />
            <x-forms.textarea name="section">{{ $student->section }}</x-forms.textarea>
            <x-forms.textarea name="address" required>{{ $student->address }}</x-forms.textarea>
            <x-forms.button>Save Changes</x-forms.button>
        </form>
    </x-forms.section>
@endsection