<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Employee: ' . ucwords($employee->firstName) . ' ' . ucwords($employee->lastName)) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="/employees/{{ $employee->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <x-form.input name="firstName" :value="old('firstName', $employee->firstName)" />
                        <x-form.input name="lastName" :value="old('lastName', $employee->lastName)" />

                        <x-form.field>
                            <x-form.label name="employee" />

                            <select name="company_id" id="company_id">
                                @foreach (\App\Models\Company::all() as $company)
                                    <option value="{{ $company->id }}" {{ old('company_id', $company->company_id) == $company->id ? 'selected' : '' }}>
                                        {{ ucwords($company->name) }}
                                    </option>
                                @endforeach
                            </select>

                            <x-form.error name="employee" />
                        </x-form.field>

                        <x-form.input name="email" :value="old('email', $employee->email)" />
                        <x-form.input name="phone" :value="old('phone', $employee->phone)" />

                        <x-button>Update</x-button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
