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

            <!-- Phone -->
            <div class="mt-4">
                <x-input-label for="phone" :value="__('Phone')" />
                <x-text-input
                    id="phone"
                    class="block mt-1 w-full"
                    type="text"
                    name="phone"
                    value="{{old('phone')}}"
                    required
                />
            </div>

            <!-- Department -->
            <div class="mt-4">
                <x-input-label for="department" :value="__('Department')" />
                <select name="department" >
                    @foreach(config("departments") as $departament)
                        <option value="{{$departament}}">{{$departament}}</option>
                    @endforeach
                </select>

                @error("department")
                <div class="text-xm text-red-200"> {{$message}}</div>
                @enderror
            </div>

{{--            <div class="flex justify-end mt-6 gap-10">--}}
{{--                <x-primary-button>--}}
{{--                    {{ __('Create Teacher') }}--}}
{{--                </x-primary-button>--}}
{{--                <x-boton>--}}
{{--                    {{ __('Cancel') }}--}}
{{--                </x-boton>--}}
{{--            </div>--}}


</x-crud.create>
