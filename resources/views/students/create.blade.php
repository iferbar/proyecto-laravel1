@props([
    'resource'=>'',
    'table'=>''
])
<x-crud.create :resource="$resource" :table="$table">
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

            <!-- DNI -->
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

{{--            <div class="flex justify-end mt-6 gap-10">--}}
{{--                <x-primary-button>--}}
{{--                    {{ __('Create Student') }}--}}
{{--                </x-primary-button>--}}
{{--                <x-boton>--}}
{{--                    {{ __('Cancel') }}--}}
{{--                </x-boton>--}}
{{--            </div>--}}

    </x-crud.create>



