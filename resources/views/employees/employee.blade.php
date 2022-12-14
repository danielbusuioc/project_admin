<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee: ' . ucwords($employee->firstName) . ' ' . ucwords($employee->lastName)) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    ID
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900">
                                                                {{ $employee->id }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    COMPANY ID
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900">
                                                                {{ $employee->company_id }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    FIRST NAME
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900">
                                                                {{ $employee->firstName }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    LAST NAME
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900">
                                                                {{ $employee->lastName }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    EMAIL
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900">
                                                                {{ $employee->email }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    PHONE
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                    <div class="flex items-center">
                                                        <div class="text-sm font-medium text-gray-900">
                                                                {{ $employee->phone }}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
