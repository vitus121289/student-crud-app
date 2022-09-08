@extends('layout')
@section('content')
    <x-forms.section heading="Add Student">
        <form action="/admin/students/store" method="post" enctype="multipart/form-data">
            @csrf
            <x-forms.input name="first_name" type="text" value="{{ old('first_name') }}" required />
            <x-forms.input name="middle_name" type="text" value="{{ old('middle_name') }}" required/>
            <x-forms.input name="last_name" type="text" value="{{ old('last_name') }}" required/>
            <x-forms.input name="birthdate" type="date" value="{{ old('birthdate') }}" required/>
            <x-forms.input name="photo" type="file"/>
            <x-forms.textarea name="section">{{ old('section') }}</x-forms.textarea>
            <x-forms.textarea name="address" required>{{ old('address') }}</x-forms.textarea>
            <x-forms.button>Add Student</x-forms.button>
        </form>
    </x-forms.section>
@endsection