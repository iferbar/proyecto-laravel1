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
                    required
                />
            </div>

            <!-- Description -->
            <div class="mt-4">
                <x-input-label for="description" :value="__('Description')" />
                <textarea
                    id="description"
                    name="description"
                    class="block mt-1 w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                    rows="3"
                ></textarea>
            </div>

            <!-- Hours -->
            <div class="mt-4">
                <x-input-label for="hours" :value="__('Hours')" />
                <x-text-input
                    id="hours"
                    class="block mt-1 w-full"
                    type="number"
                    name="hours"
                    min="0"
                />
            </div>

            <!-- Start Date -->
            <div class="mt-4">
                <x-input-label for="start_date" :value="__('Start date')" />
                <x-text-input
                    id="start_date"
                    class="block mt-1 w-full"
                    type="date"
                    name="start_date"
                />
            </div>

{{--            <div class="flex justify-end mt-6 gap-10">--}}
{{--                <x-primary-button>--}}
{{--                    {{ __('Create Project') }}--}}
{{--                </x-primary-button>--}}
{{--                <x-boton>--}}
{{--                    {{ __('Cancel') }}--}}
{{--                </x-boton>--}}
{{--            </div>--}}


</x-crud.create>
