<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('messages.companies') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col mb-4">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($companies as $company)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                <a href="/companies/{{ $company->id }}">
                                                                    {{ $company->name }}
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="/companies/{{ $company->id }}/edit" class="text-blue-500 hover:text-blue-600">Edit</a>
                                                    </td>

                                                    <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <form method="POST" action="/companies/{{ $company->id }}">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button class="text-xs text-gray-400">Delete</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{ $companies->links() }}

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
