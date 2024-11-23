@extends('admin.partials.layout')

@section('content')
<div class="h-24 bg-white"></div>
<div class="container w-3/4 ml-96 items-center">
    <h1 class="text-3xl font-bold mb-4">All Documents</h1>
    <table class="w-4/5 bg-white shadow-md rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-gray-200 text-left text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6">No</th>
                <th class="py-3 px-6">Username</th>
                <th class="py-3 px-6">NPM</th>
                <th class="py-3 px-6">Jurusan</th>
                <th class="py-3 px-6">Calon Divisi</th>
                <th class="py-3 px-6 text-center">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 text-sm font-light">
            @foreach ($pendaftaran as $index => $data)
                <tr>
                    <td class="py-3 px-6 text-center">{{ $index + 1 }}</td>
                    <td class="py-3 px-6">{{ $data->user->email }}</td>
                    <td class="py-3 px-6">{{ $data->user->npm }}</td>
                    <td class="py-3 px-6">{{ $data->jurusan }}</td>
                    <td class="py-3 px-6">{{ $data->divisi }}</td>
                    <td class="py-3 px-6 text-center">
                        <a href="{{ route('admin.listShow', $data->id) }}"
                           class="bg-yellow-500 text-white px-6 py-2 rounded-lg text-sm font-medium inline-block w-32 text-center">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
