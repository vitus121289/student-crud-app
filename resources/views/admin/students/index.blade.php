@extends('layout')
@section('content')
    <!-- component -->
    <section class="antialiased bg-gray-100 text-gray-600 h-screen px-4">
        <div class="flex flex-col justify-center pt-10">
            <!-- Table -->
            <div class="w-full max-w-4xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                <header class="px-5 py-4 border-b border-gray-100">
                    <h2 class="font-semibold text-gray-800">Students</h2>
                </header>
                <div class="p-3">
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full">
                            <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left pl-4">Name</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Birthdate</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Section</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-center">Address</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap" colspan="2">
                                        <div class="font-semibold text-center">Actions</div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src="{{ asset('storage/' . $student->photo) }}" width="40" height="40" alt="Alex Shatov"></div>
                                                <div class="font-medium text-gray-800">{{ $student->first_name . ' ' . $student->middle_name . ' ' . $student->last_name }}</div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{ $student->birthdate }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{ $student->section }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center">{{ $student->address }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center text-blue-500 hover:text-blue-600">
                                                <a href="/admin/students/{{ $student->id }}/edit">Edit</a>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-center text-red-500 hover:text-red-600">
                                                <a href="#" x-data={} @click.prevent="document.querySelector('#delete-form-{{ $student->id }}').submit()">Delete</a>
                                                <form action="/admin/students/{{ $student->id }}" method="post" id="delete-form-{{ $student->id }}">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="flex space-x-4">
                            <a
                                href="/admin/students/create"
                                class="hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium mx-auto"
                            >
                                Add Student
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection