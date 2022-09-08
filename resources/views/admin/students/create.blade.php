@extends('layout')
@section('content')
    <x-forms.section heading="Add Student">
        <form action="/admin/students/store" method="post" enctype="multipart/form-data">
            @csrf
            <x-forms.input name="first_name" type="text" required/>
            <x-forms.input name="middle_name" type="text" required/>
            <x-forms.input name="last_name" type="text" required/>
            <x-forms.input name="birthdate" type="date" required/>
            <x-forms.input name="photo" type="file"/>
            <x-forms.textarea name="section"></x-forms.textarea>
            <x-forms.textarea name="address" required></x-forms.textarea>
            <x-forms.button>Add Student</x-forms.button>
        </form>
    </x-forms.section>
@endsection