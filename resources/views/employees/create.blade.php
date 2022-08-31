<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="/employees">
                        @csrf

                        <x-form.input name="firstName" required />
                        <x-form.input name="lastName" required />


                        <x-form.field>
                            <x-form.label name="company" />

                            <select name="company_id" id="company_id">
                                @foreach (\App\Models\Company::all() as $company)
                                    <option value="{{ $company->id }}" {{ old('company_id') == $company->id ? 'selected' : '' }}>
                                        {{ ucwords($company->name) }}
                                    </option>
                                @endforeach
                            </select>

                            <x-form.error name="company" />
                        </x-form.field>

                        <x-form.input name="email" type="email" />
                        <x-form.input name="phone" type="tel" />

                        <x-button>Add</x-button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
