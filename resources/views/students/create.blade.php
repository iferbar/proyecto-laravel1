<x-layouts.layout>

    <div class="flex justify-center items-center min-h-full bg-gray-200">

        <form method="POST" action="{{ route('students.store') }}" class="bg-white p-4 rounded-2xl">

            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{old('name')}}"
                    required
                />
            </div>

            <!-- Email -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input
                    id="email"
                    class="block mt-1 w-full"
                    type="text"
                    name="email"
                    required
                />
            </div>

            <!-- Year -->
            <div class="mt-4">
                <x-input-label for="year" :value="__('Year')" />
                <x-text-input
                    id="year"
                    class="block mt-1 w-full"
                    type="number"
                    name="year"
                    value="{{old('year')}}"
                    required
                />
            </div>

            <!-- Department -->
            <div class="mt-4">
                <x-input-label for="dni" :value="__('Dni')" />
                <x-text-input
                    id="dni"
                    class="block mt-1 w-full"
                    type="text"
                    name="dni"
                    maxlength="9"
                    value="{{old('dni')}}"
                    required
                />
            </div>

            <div class="flex justify-end mt-6">
                <x-primary-button>
                    {{ __('Create Student') }}
                </x-primary-button>
            </div>

        </form>

    </div>

</x-layouts.layout>
