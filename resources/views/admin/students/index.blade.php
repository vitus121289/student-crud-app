<!-- This example requires Tailwind CSS v2.0+ -->
@extends('layout')
@section('content')
    <h1>This is the index page.</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th colspan="2">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>
                        {{ $student->first_name . ' ' . $student->middle_name . ' ' . $student->last_name }}
                    </td>
                    <td>
                        {{ $student->address }}
                    </td>
                    <td>
                        <a href="/admin/students/{{ $student->id }}/edit">Edit</a>
                    </td>
                    <td>
                        <a href="#">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection