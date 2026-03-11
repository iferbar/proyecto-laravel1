<x-layouts.layout>

    <div class="flex justify-center items-center min-h-full bg-gray-200">

        <form method="POST" action="{{ route('students.update',$student->id) }}" class="bg-white p-4 rounded-2xl">

            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input
                    id="name"
                    class="block mt-1 w-full"
                    type="text"
                    name="name"
                    value="{{$student->name}}"
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
                    value="{{$student->year}}"
                    required
                />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input
                    id="phone"
                    class="block mt-1 w-full"
                    type="text"
                    name="phone"
                    value="{{$student->phone}}"
                    required
                />
            </div>

            <!-- DNI -->
            <div class="mt-4">
                <x-input-label for="dni" :value="__('Dni')" />
                <x-text-input
                    id="dni"
                    class="block mt-1 w-full"
                    type="text"
                    name="dni"
                    maxlength="9"
                    value="{{$student->dni}}"
                    required
                />
            </div>

            <div class="flex justify-end mt-6 gap-10">
                <x-primary-button>
                    {{ __('Update Student') }}
                </x-primary-button>
                <x-boton>
                    {{ __('Cancel') }}
                </x-boton>
            </div>

        </form>

    </div>

</x-layouts.layout>
