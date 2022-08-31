<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form method="POST" action="/companies" enctype="multipart/form-data">
                        @csrf

                        <x-form.input name="name" required />
                        <x-form.input name="email" type="email" />

                        <x-form.input name="logo" type="file" />

                        <x-form.input name="website" />

                        <x-button>Add</x-button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
