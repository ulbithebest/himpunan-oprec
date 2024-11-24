@extends('admin.partials.layout')

@section('content')
<div class=" h-24 bg-white"></div>
<div class="container w-full md:w-5/6 mx-auto pl-0 md:pl-60 items-center">
    <h1 class="text-3xl font-bold mb-4">All Users</h1>
    <table class="w-4/5 bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6">Username</th>
                <th class="py-3 px-6">NPM</th>
                <th class="py-3 px-6">Roles</th>
                <th class="py-3 px-6 text-center">Actions</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            <td class="py-3 px-6">odeandialamsyah@gmail.com</td>
            <td class="py-3 px-6">714230032</td>
            <td class="py-3 px-6">admin</td>
            <td class="py-3 px-6 flex gap-1 text-center">
                <a href="#" class="bg-yellow-500 text-white px-4 py-2 rounded">edit</a>
                <a href="#" class="bg-red-500 text-white px-4 py-2 rounded">delete</a>
            </td>
        </tbody>
    </table>
</div>
@endsection
