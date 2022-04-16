<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('admin.tables.create') }}" class="px-4 py-2 bg-indigo-50 hover:bg-indigo-200 rounded-lg">
                    New Table
                </a>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Capacity
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Location
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($tables as $table)
                            <tr>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                    {{ $table->name }}
                                </th>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-400 whitespace-nowrap">
                                    {{ $table->capacity }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-400 whitespace-nowrap">
                                    {{ $table->status->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-900 dark:text-gray-400 whitespace-nowrap">
                                    {{ $table->location->name }}
                                </td>
                                <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('admin.tables.edit', $table->id) }}" class="px-4 py-2 bg-green-100 hover:bg-green-200 rounded-lg">
                                            Edit
                                        </a>
                                        <form class="px-4 py-2 bg-red-50 hover:bg-red-200 rounded-lg"
                                              method="POST"
                                              action="{{ route('admin.tables.destroy', $table->id) }}"
                                              onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-admin-layout>
