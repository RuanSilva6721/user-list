@extends('layouts.base')

@section('content')
<section class="antialiased bg-gray-100 text-gray-600 min-h-screen px-4">
    <div class="flex flex-col justify-center h-full">
        <!-- Table -->
        <div class="w-full max-w-screen-sm mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
            <header class="px-4 py-3 border-b border-gray-100">
                <h2 class="font-semibold text-gray-800 text-lg">Users List</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2">
                                    <div class="font-semibold text-left">ID</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-left">Name</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-left">E-mail</div>
                                </th>
                                <th class="p-2">
                                    <div class="font-semibold text-center">Age</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-sm divide-y divide-gray-100">
                            @foreach ($users as $user)
                            <tr>
                                <td class="p-2">
                                    <div class="font-medium text-gray-800">{{ $user['id'] }}</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left">{{ $user['name'] }}</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-left font-medium text-green-500">{{ $user['email'] }}</div>
                                </td>
                                <td class="p-2">
                                    <div class="text-lg text-center">{{ $user['age'] }}</div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="mt-4">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
