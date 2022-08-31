<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Company: ' . ucwords($company->name)) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="/companies/{{ $company->id }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <x-form.input name="name" :value="old('name', $company->name)" />
                        <x-form.input name="email" :value="old('email', $company->email)" />

                        <div class="flex mt-8">
                            <div class="flex-1">
                                <x-form.input name="logo" type="file" :value="old('logo', $company->logo)" />
                            </div>

                            <img src="{{ asset('storage/' . $company->logo) }}" alt="" class="rounded-xl ml-6" width="150" height="150">
                        </div>

                        <x-form.input name="website" :value="old('website', $company->website)" />

                        <x-button>Update</x-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
